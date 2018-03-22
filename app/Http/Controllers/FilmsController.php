<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FilmsRequest;
use Illuminate\Support\Facades\DB;
use App\Film;
use App\Image;
use App\Category;
use App\Language;
use App\Fsk;
use Session;


class FilmsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $films = Film::paginate(10);
        $total_films = Film::all();

        return view('admin.films.index', compact('films', 'total_films'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $categories = Category::pluck('category', 'id')->all();
        $languages = Language::pluck('language', 'id')->all(); 
        $fsks  = Fsk::pluck('fsk', 'id')->all(); 
        $films  = Film::all(); 
                      
        $categoriescount = Category::all();
        $languagescount = Language::all();

        if($categoriescount->count() == 0 || $languagescount->count() == 0 )
        {
            Session::flash('info', 'You must have at least a categoy and a language before attempting to create a post.');

            return redirect()->back();
        }

        $last_img = Image::orderBy('id', 'desc')->first();

        return view('admin.films.create', compact('films', 'categories', 'languages', 'fsks'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FilmsRequest $request)
    {
    
        $file = $request->file('image');
        $name = time() . '-' . $file->getClientOriginalName();
        $file->move('images', $name);

        $last_img = Image::orderBy('id', 'desc')->first(); 
               
        is_null($last_img) ? $img_id = 1 : $img_id =  $last_img->id + 1;

        $film = Film::create([
    
            'name'          => $request->name,
            'fsk_id'        => $request->fsk_id,  
            'trailer'       => $request->trailer,
            'year'          => $request->year,
            'duration'      => $request->duration,
            'category_id'   => $request->category_id,
            'language_id'   => $request->language_id,
            'description'   => $request->description,
            'slug'          => str_slug($request->name, '-'),
            'image_id'      => $img_id

       ]);   

        $image = Image::create([
            'image'         =>  $name,
            'film_id'       => $film->id,
            'actor_id'       => 0,
            'category_id'   => 0,

        ]);


        $film->save();

        Session::flash('success', 'Film successfully created!');
     
        return redirect()->route('films.show', $film->slug);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $film = Film::with('category')->where('slug', $slug)->first();

        return view('admin.films.show', compact('film'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {

        //find the film in the database
        $film = Film::where('slug', $slug)->first(); 
        $films = Film::all();
          return view('admin.films.edit', compact('film', 'films'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FilmsRequest $request, $slug)
    {

        $input = $request->all();
        $input['slug'] = str_slug($request->category, '-');

        if ( $file = $request->file('image')) {
            $name = time() . '-' . $file->getClientOriginalName();
            $file->move('images', $name);
            $image = Image::create(['image' =>  $name]);
            $input['image_id'] = $image->id;
        }

        Film::find($slug)->update($input);

        Session::flash('success', 'Film successfully updated!');
     
        return redirect()->route('categories.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $film = Film::find($slug);

       $film->delete();

       Session::flash('deleted_post', 'The post has been deleted');

        return redirect()->route('films.index');
    } 


    public function year($year)
    {

        $films = Film::where(strtok('year', '-'), $year)->get();
        foreach ($films as $value) {
            echo $value
        };
        die();
        return view('admin.films.year', compact('films'));
    }

    public function results($year)
    {
        
        $films = Film::with('categories', 'fsks', 'languages')->where('title', 'like', '%'. request('query') . '%')->get();

        return redirect()->route('films.results', compact('films'));
    }
}
