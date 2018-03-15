<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CategoriesRequest;
use App\Category;
use App\Image;
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
        
        $categories = Category::withCount('films')->get();
        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.categories.create');
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
       
        $category = Category::create([
            'category'      =>  $request->category,
            'description'   =>  $request->description,
            'slug'          =>  str_slug($request->category, '-'),
            'image_id'      =>  $last_img->id + 1,
        ]);        

        $image = Image::create([
            'image'             =>  $name,
            'imageable_type'    => 'Category',
            'imageable_id'      =>  $category->id
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
    public function show($id)
    {
 
        $category = Category::findOrFail($id)->withCount('films')->with('films');

        return view('admin.categories.show', compact('category', 'films'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $category = Category::findOrFail($id)->withCount('film')->with('films');

        return view('admin.categories.show', compact('category'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoriesRequest $request, $id)
    {

        $file = $request->file('image');
        $name = time() . '-' . $file->getClientOriginalName();
        $file->move('images', $name);

        $last_img = Image::orderBy('id', 'desc')->first();
       
        $category = Category::create([
            'category'      =>  $request->category,
            'description'   =>  $request->description,
            'slug'          =>  str_slug($request->category, '-'),
            'image_id'      =>  $last_img->id + 1,
        ]);        

        $image = Image::create([
            'image'             =>  $name,
            'imageable_type'    => 'Category',
            'imageable_id'      =>  $category->id
        ]);

        $category->save();

        Session::flash('success', 'Category successfully created!');
     
        return redirect()->route('categories.index');
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
