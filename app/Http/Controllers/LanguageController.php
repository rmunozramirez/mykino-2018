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
        
        $languages = Language::all();
        $total_films = Film::all();

        return view('admin.language.index', compact('languages', 'total_films'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $language = Language::all();
        return view('admin.language.create', compact('language'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LanguageRequest $request)
    {
        $file = $request->file('image');
        $name = time() . '-' . $file->getClientOriginalName();
        $file->move('images', $name);

        $last_img = Image::orderBy('id', 'desc')->first(); 
               
        is_null($last_img) ? $img_id = 1 : $img_id =  $last_img->id + 1;
        
        $language = Language::create([
            'language'      =>  $request->language,
            'slug'          =>  str_slug($request->language, '-'),
            'image'         =>  $name,
            'image_id'      =>  $last_img->id + 1,
        ]);        

        $image = Image::create([
            'image'             =>  $name,
            'imageable_type'    => 'Language',
            'imageable_id'      =>  $language->id
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
      $language = Language::withCount('films')->where('slug', $slug)->first();

        $films = Film::where('language_id', $language->id)->get();
       
        return view('admin.language.show', compact('language', 'films'));
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
    public function update(Request $request, $id)
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
