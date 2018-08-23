<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ActorsRequest;
use App\Actor;
use App\Image;
use App\Category;
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
        $actors = Actor::orderBy('name', 'asc')->withCount('films')->with('image')->get();
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
        $all_ = Actor::all();
        $films  = Film::pluck('name', 'id')->all(); 
        $page_name =  'actors';
        $index = 'create';

        return view('dashboard.actors.create', compact('all_', 'films', 'page_name', 'index'));

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
            'gender_id' =>  $request->gender_id,
            'slug'      =>  str_slug($request->name, '-'),
            'image_id'  =>  $img_id,
        ]);        

        $image = Image::create([
            'image_name'  =>  $request->name,
            'slug'  =>  $name,
            'alt'   =>  $request->name,
            'about' =>  $request->name,
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

        $element = Actor::with('films')->where('slug', $slug)->first();
        $page_name = 'actors';
        $all_ = Actor::all();
        $index = 'show';

        $prev = $element->id - 1;
        $actor_prev = Actor::find($prev);

        $next = $element->id + 1;  
        $actor_next = Actor::find($next);

        return view('dashboard.actors.show', compact('element', 'page_name', 'all_', 'index', 'actor_prev', 'actor_next'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $element = Actor::where('slug', $slug)->first();
        $all_ = Actor::all();
        $page_name = 'actors';
        $index = 'edit';

        $films = Film::all();
            $films2 = array();
            foreach ($films as $film) {
                $films2[$film->id] = $film->name;
        } 

        $films = Film::orderBy('name', 'asc')->pluck('name', 'id')->all();

          return view('dashboard.actors.edit', compact('element', 'films', 'films2', 'all_', 'page_name', 'index'));
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

        $actor = Actor::where('slug', $slug)->first();
        $actor->films()->detach();
        $actor->delete();

        Session::flash('success', 'Actor was deleted successfully');
        return redirect()->route('actors.index');
    }

    public function trashed()
    {
        $all_tr = Actor::onlyTrashed()->get();
        $all_ = Actor::all();
        $page_name = 'actors';
        $index = 'trash';

        return view('dashboard.actors.trashed', compact('all_tr', 'page_name', 'all_', 'index'));
    }

    public function restore($slug)
    {
        $actor = Actor::withTrashed()->where('slug', $slug)->first();
        $actor->restore();

        Session::flash('success', 'Actor successfully restored!');
        return redirect()->route('actors.index');
    }

    public function kill($slug)
    {
        $actor = Actor::withTrashed()->where('slug', $slug)->first();
        $actor->forceDelete();

        Session::flash('success', 'Actor pemanently deleted!');
        return redirect()->route('actors.index');
    }

}
