<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ActorsRequest;
use App\Actor;
use App\Image;
use App\Film;
use Session;

class ActorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $actors = Actor::orderBy('name', 'asc')->withCount('films')->paginate(10);
        $all_ = Actor::all();
        $page_name = 'actors';
        $index = 'yes';
        return view ('dashboard.actors.index', compact('actors', 'all_', 'page_name', 'index'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $actors = Actor::all();
        $films  = Film::pluck('name', 'id')->all(); 
        return view('dashboard.actors.create', compact('actors', 'films'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ActorsRequest $request)
    {
        $file = $request->file('image');
        $name = time() . '-' . $file->getClientOriginalName();
        $file->move('images', $name);
        
        $last_img = Image::orderBy('id', 'desc')->first(); 
               
        is_null($last_img) ? $img_id = 1 : $img_id =  $last_img->id + 1;
       
        $actor = Actor::create([
            'name'      =>  $request->name,
            'genre'   =>  $request->genre,
            'slug'          =>  str_slug($request->name, '-'),
            'image_id'      =>  $img_id,
        ]);        

        $image = Image::create([
            'image'             =>  $name,
            'actor_id'      =>  $actor->id,
            'film_id'       => 0,
            'category_id'   => 0,
        ]);

        $actor->save();

        Session::flash('success', 'Actor successfully created!');
     
        return redirect()->route('actors.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {

        $actor = Actor::with('films')->where('slug', $slug)->first();

        return view('dashboard.actors.show', compact('actor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $actor = Actor::where('slug', $slug)->first();
        $actors = Actor::all();

        $films = Film::all();
            $films2 = array();
            foreach ($films as $film) {
                $films2[$film->id] = $film->name;
        } 

        $films = Film::orderBy('name', 'asc')->pluck('name', 'id')->all();

          return view('dashboard.actors.edit', compact('actor', 'films', 'films2', 'actors'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ActorsRequest $request, $slug)
    {
       
        $actor_id = Actor::where('slug', $slug)->first();
        $input = $request->all();
        $input['slug'] = str_slug($request->name, '-');

        if ( $file = $request->file('image')) {
            $name = time() . '-' . $file->getClientOriginalName();
            $file->move('images', $name);

            $image = Image::where('actor_id', $actor_id->id)->first();
            $image['image'] =  $name;
            Image::where('actor_id', $actor_id->id)->first()->fill($image)->save();

            $input['image_id'] = $image->id;

        }


        $actor = Actor::where('slug', $slug)->first();
        $actor->fill($input)->save();

        Session::flash('success', 'Actor successfully updated!');

        return redirect()->route('actors.show', $actor->slug);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $actor = Actor::find($slug);
        $actor->films()->detach();
        $actor->delete();

        Session::flash('success', 'Actor was deleted successfully');
        return redirect()->route('actors.index');
    }
}
