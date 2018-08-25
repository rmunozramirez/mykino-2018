<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FskRequest;
use App\Fsk;
use App\Film;
use Session;

class FskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_ = Fsk::withCount('films')->get();
        $page_name = 'fsk';
        $index = 'yes';

        return view('dashboard.fsk.index', compact('all_', 'page_name', 'index'));
    }


    public function create()
    {
        $all_ = Fsk::all();
        $page_name =  'fsk';
        $index = 'create';

        return view('dashboard.fsk.create', compact('all_', 'page_name', 'index'));
    }

    public function store(FskRequest $request)
    {

        $file = $request->file('image');
        $name = time() . '-' . $file->getClientOriginalName();
        $file->move('images', $name);
        
        $last_img = Image::orderBy('id', 'desc')->first(); 
               
        is_null($last_img) ? $img_id = 1 : $img_id =  $last_img->id + 1;
       
        $fsk = Fsk::create([
            'name'      =>  $request->name,
            'slug'          =>  str_slug($request->fsk, '-'),
            'image_id'      =>  $img_id,
        ]);

        $fsk->save();

        Session::flash('success', 'Fsk successfully created!');
     
        return redirect()->route('fsk.index');
    }

    public function show($slug)
    {
        $fsk = Fsk::withCount('films')->where('slug', $slug)->first();
        $page_name = 'fsk';
        $all_ = Fsk::all();
        $index = 'show';

        return view('dashboard.fsk.show', compact('fsk', 'all_', 'page_name', 'index'));

    }

    public function edit($slug)
    {

        $fsk = Fsk::where('slug', $slug)->first();

        return view('dashboard.fsk.edit', compact('fsk'));

    }
 
    public function update(FskRequest $request, $slug)
    {

        $input = $request->all();
        $input['slug'] = str_slug($request->category, '-');

        if ( $file = $request->file('image')) {
            $name = time() . '-' . $file->getClientOriginalName();
            $file->move('images', $name);
            $image = Image::create(['image' =>  $name]);
            $input['image_id'] = $image->id;
        }

        Fsk::find($slug)->update($input);

        Session::flash('success', 'Fsk successfully updated!');

        return redirect()->route('fsk.show', $fsk->slug);
    }

    public function destroy($slug)
    {
        $fsk = Fsk::find($slug);
        $fsk->films()->detach();
        $fsk->delete();

        Session::flash('success', 'Fsk was deleted successfully');
        return redirect()->route('fsk.index');
    }

    public function trashed()
    {
        $all_tr = Fsk::onlyTrashed()->get();
        $all_ = Fsk::all();
        $page_name = 'fsk';
        $index = 'trash';

        return view('dashboard.fsk.trashed', compact('all_tr', 'page_name', 'all_', 'index'));
    }

    public function restore($slug)
    {
        $fsk = Fsk::withTrashed()->where('slug', $slug)->first();
        $fsk->restore();

        Session::flash('success', 'Fsk successfully restored!');
        return redirect()->route('fsk.index');
    }

    public function kill($slug)
    {
        $fsk = Fsk::withTrashed()->where('slug', $slug)->first();
        $fsk->forceDelete();

        Session::flash('success', 'Fsk pemanently deleted!');
        return redirect()->route('fsk.index');
    }

}
