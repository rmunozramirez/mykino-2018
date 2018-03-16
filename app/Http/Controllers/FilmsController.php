<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FilmsRequest;
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
        $films = Film::with('image')->get();

        return view('admin.films.index', compact('films','image'));
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
                      
        $categoriescount = Category::all();
        $languagescount = Language::all();

        if($categoriescount->count() == 0 || $languagescount->count() == 0 )
        {
            Session::flash('info', 'You must have at least a categoy and a language before attempting to create a post.');

            return redirect()->back();
        }

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
            'image_id'      => $last_img->id + 1,
        ]);        

        $image = Image::create([
            'image'             =>  $name,
            'imageable_type'    => 'Film',
            'imageable_id'      =>  $film->id
        ]);


        $film->save();

        Session::flash('success', 'Film successfully created!');
     
        return redirect()->route('films.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FilmsRequest $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
