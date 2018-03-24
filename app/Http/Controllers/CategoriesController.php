<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CategoriesRequest;
use App\Category;
use App\Image;
use App\Film;
use Session;


class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $categories = Category::orderBy('category', 'asc')->withCount('films')->paginate(12);

        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.categories.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoriesRequest $request)
    {

        $file = $request->file('image');
        $name = time() . '-' . $file->getClientOriginalName();
        $file->move('images', $name);
        
        $last_img = Image::orderBy('id', 'desc')->first(); 
               
        is_null($last_img) ? $img_id = 1 : $img_id =  $last_img->id + 1;
       
        $category = Category::create([
            'category'      =>  $request->category,
            'description'   =>  $request->description,
            'slug'          =>  str_slug($request->category, '-'),
            'image_id'      =>  $img_id,
        ]);        

        $image = Image::create([
            'image'         =>  $name,
            'film_id'       => 0,
            'actor_id'      => 0,
            'category_id'   => $film->id,
        ]);

        $category->save();

        Session::flash('success', 'Category successfully created!');
     
        return redirect()->route('categories.index');

    }

    /**   
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
 
        $category = Category::withCount('films')->where('slug', $slug)->first();

        $films = Film::where('category_id', $category->id)->get();

        return view('admin.categories.show', compact('category', 'films'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {

        $category = Category::where('slug', $slug)->first();

        return view('admin.categories.edit', compact('category'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoriesRequest $request, $slug)
    {

        $input = $request->all();
        $input['slug'] = str_slug($request->category, '-');

        if ( $file = $request->file('image')) {
            $name = time() . '-' . $file->getClientOriginalName();
            $file->move('images', $name);
            $image = Image::create(['image' =>  $name]);
            $input['image_id'] = $image->id;
        }

        Category::find($slug)->update($input);

        Session::flash('success', 'Category successfully updated!');
     
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

       $category = Category::find($slug);

       $category->delete();

       Session::flash('deleted_user', 'The users has been deleted');

        returnview('admin.categories.index');

    }
}
