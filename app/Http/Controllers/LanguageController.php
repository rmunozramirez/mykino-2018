<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LanguageRequest;
use App\Film;
use App\Image;
use App\Category;
use App\Language;
use Session;

class LanguageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $languages = Language::orderBy('name', 'asc')->withCount('films')->get();
        $all_ = Language::all();
        $page_name = 'language';
        $index = 'yes';

        return view('dashboard.language.index', compact('languages', 'all_', 'page_name', 'index'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $all_ = Language::all();
        $page_name =  'language';
        $index = 'create';

        return view('dashboard.language.create', compact('all_', 'page_name', 'index'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LanguageRequest $request)
    {
        $file = $request->file('image_name');
        $name = time() . '-' . $file->getClientOriginalName();
        $file->move('images', $name);

        $last_img = Image::orderBy('id', 'desc')->first(); 
               
        is_null($last_img) ? $img_id = 1 : $img_id =  $last_img->id + 1;
        
        $language = Language::create([
            'name'      =>  $request->language,
            'slug'          =>  str_slug($request->language, '-'),
            'image_id'      =>  $last_img->id + 1,
        ]);        

       $image = Image::create([
            'image_name'  =>  $request->name,
            'slug'  =>  $name,
            'alt'   =>  $request->alt,
            'about' =>  $request->about,
        ]);
        $language->save();

        Session::flash('success', 'Successfully created post!');
     
        return redirect()->route('language.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        
        $element = Language::withCount('films')->where('slug', $slug)->first();
        $page_name = 'language';
        $all_ = Language::all();
        $index = 'show';

        return view('dashboard.language.show', compact('element', 'page_name', 'all_', 'index'));
    }


    public function edit($slug)
    {

        $element = Language::where('slug', $slug)->first();
        $all_ = Language::all();
        $page_name = 'language';
        $index = 'edit';

          return view('dashboard.language.edit', compact('element', 'all_', 'page_name', 'index'));

    }
 
    public function update(LanguageRequest $request, $slug)
    {

        $input = $request->all();
        $input['slug'] = str_slug($request->name, '-');        
        $language = Language::where('slug', $slug)->first();

        if ( $file = $request->file('image_name')) {
            $image = Image::find($language->image_id);
           
            if ($image) {
                $image->forceDelete();
            }

            $name = time() . '-' . $file->getClientOriginalName();
            $file->move('images', $name);

            $image = Image::create([
                'image_name'    =>  $request->name,
                'slug'          =>  $name,
                'alt'           =>  $request->alt,
                'about'         =>  $request->about,
            ]);

            $input['image_id'] = $image->id;
        }

        $language->fill($input)->save();

        Session::flash('success', 'Language successfully updated!');

        return redirect()->route('language.show', $language->slug);
    }

    public function destroy($slug)
    {
        $language = Language::find($slug);
        $language->films()->detach();
        $language->delete();

        Session::flash('success', 'Language was deleted successfully');
        return redirect()->route('language.index');
    }

    public function trashed()
    {
        $all_tr = Language::onlyTrashed()->get();
        $all_ = Language::all();
        $page_name = 'language';
        $index = 'trash';

        return view('dashboard.language.trashed', compact('all_tr', 'page_name', 'all_', 'index'));
    }

    public function restore($slug)
    {
        $language = Language::withTrashed()->where('slug', $slug)->first();
        $language->restore();

        Session::flash('success', 'Language successfully restored!');
        return redirect()->route('language.index');
    }

    public function kill($slug)
    {
        $language = Language::withTrashed()->where('slug', $slug)->first();
        $language->forceDelete();

        Session::flash('success', 'Language pemanently deleted!');
        return redirect()->route('language.index');
    }


}
