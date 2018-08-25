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
use App\Actor;
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
        $films = Film::orderBy('name', 'asc')->paginate(10);
        $all_ = Film::all();
        $page_name = 'films';
        $index = 'yes';

        return view('dashboard.films.index', compact('films', 'page_name', 'all_', 'index'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $categories = Category::pluck('name', 'id')->all();
        $languages = Language::pluck('name', 'id')->all(); 
        $fsks  = Fsk::pluck('name', 'id')->all(); 
        $actors  = Actor::pluck('name', 'id')->all();
        $all_ = Film::all();
        $page_name =  'films';
        $index = 'create';
        $categoriescount = Category::all();
        $languagescount = Language::all();

        if($categoriescount->count() == 0 || $languagescount->count() == 0 )
        {
            Session::flash('info', 'You must have at least a categoy and a language before attempting to create a film.');

            return redirect()->back();
        }

        $last_img = Image::orderBy('id', 'desc')->first();

        return view('dashboard.films.create', compact('all_', 'categories', 'languages', 'fsks', 'actors', 'index', 'page_name'));
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
            'image_name'  =>  $request->name,
            'slug'  =>  $name,
            'alt'   =>  $request->name,
            'about' =>  $request->name,
        ]);

        $film->actors()->sync($request->actors, false);
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
        $element = Film::with('category')->with('image')->withCount('actors')->where('slug', $slug)->first();
        $page_name = 'films';
        $all_ = Film::all();
        $index = 'show';

        return view('dashboard.films.show', compact('element', 'page_name', 'all_', 'index'));
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
        $element = Film::where('slug', $slug)->first(); 
        $films = Film::all();
        $categories = Category::orderBy('name', 'asc')->pluck('name', 'id')->all();
        $languages = Language::orderBy('name', 'asc')->pluck('name', 'id')->all(); 
        $fsks  = Fsk::pluck('name', 'id')->all();  
        $page_name = 'films';
        $index = 'edit';
        $all_ = Film::all();
        $actors = Actor::all();
            $actors2 = array();
            foreach ($actors as $actor) {
                $actors2[$actor->id] = $actor->name;
        }   

        $actors = Actor::orderBy('name', 'asc')->pluck('name', 'id')->all();

          return view('dashboard.films.edit', compact('element', 'films', 'actors', 'categories', 'fsk', 'languages', 'actors', 'page_name', 'index', 'all_'));

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
        $input['slug'] = str_slug($request->name, '-');   
        $film = Film::where('slug', $slug)->first();      


        if ( $file = $request->file('image_name')) {

            $name = time() . '-' . $file->getClientOriginalName();
            $image = Image::find($film->image->id);

            if ($image) {
                $image->forceDelete();
            }

            $file->move('images', $name);
            $image = Image::create([
                'id'            =>  $image->id,
                'image_name'    =>  $image->image_name,
                'slug'          =>  $image->slug,
                'alt'           =>  $image->image_name,
                'about'         =>  $image->image_name,
            ]);            
        }

        $image = Image::find($film->image->id);
        $film->image_id = $image->id;
        $film->save();        

        Session::flash('success', 'Film successfully updated!');
     
        return redirect()->route('films.show', $film->slug);

    }

    public function destroy($slug)
    {
        $film = Film::where('slug', $slug)->first();

        $film->actors()->detach();
        $film->delete();

       Session::flash('deleted_film', 'The film has been deleted');

        return redirect()->route('films.index');
    }

    public function trashed()
    {
        $all_tr = Film::onlyTrashed()->get();
        $all_ = Film::all();
        $page_name = 'films';
        $index = 'trash';

        return view('dashboard.films.trashed', compact('all_tr', 'page_name', 'all_', 'index'));
    }

    public function restore($slug)
    {
        $film = Film::withTrashed()->where('slug', $slug)->first();
        $film->restore();

        Session::flash('success', 'Film successfully restored!');
        return redirect()->route('films.index');
    }

    public function kill($slug)
    {
        $film = Film::withTrashed()->where('slug', $slug)->first();
        $film->forceDelete();

        Session::flash('success', 'Film pemanently deleted!');
        return redirect()->route('films.index');
    }

    
    public function years()
    {

        $years = Film::groupBy('year')
                    ->selectRaw('count(*) as total, year')
                    ->get();
        $all_ = Film::all();
        $page_name = 'years';
        $index = 'years';

        return view('dashboard.films.years', compact('years', 'page_name', 'all_', 'index'));   
    }

    public function year($year)
    {
        
        $films = Film::where('year', 'like', $year . '%')->get();
        $all_ = Film::all();
        $page_name = 'year';
        $index = 'year';

        return view('dashboard.films.year', compact('films', 'all_', 'page_name', 'index'));
    }

    public function results($year)
    {
        
        $films = Film::with('categories', 'fsks', 'languages')->where('title', 'like', '%'. request('query') . '%')->get();

        return redirect()->route('films.results', compact('films'));
    }
}
