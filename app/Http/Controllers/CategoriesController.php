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

    public function index()
    {
        $categories = Category::orderBy('name', 'asc')->withCount('films')->get();
        $all_ = Category::all();
        $page_name = 'categories';
        $index = 'yes';

        return view('dashboard.categories.index', compact('index', 'all_', 'page_name', 'categories'));
    }

    public function create()
    {
        $all_ = Category::all();
        $page_name =  'categories';
        $index = 'create';

        return view('dashboard.categories.create', compact('all_', 'page_name', 'index'));
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
            'name'      =>  $request->category,
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
 
        $element = Category::withCount('films')->where('slug', $slug)->first();
        $page_name = 'categories';
        $all_ = Category::all();
        $index = 'show';

        return view('dashboard.categories.show', compact('element', 'page_name', 'all_', 'index'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {

        $element = Category::where('slug', $slug)->first();
        $all_ = Category::all();
        $page_name = 'categories';
        $index = 'edit';

        return view('dashboard.categories.edit', compact('element', 'all_', 'page_name', 'index'));

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
        $input['slug'] = str_slug($request->name, '-');

        if ( $file = $request->file('image')) {
            $name = time() . '-' . $file->getClientOriginalName();
            $file->move('images', $name);
            $image = Image::create(['image' =>  $name]);
            $input['image_id'] = $image->id;
        }

        $category = Category::where('slug', $slug)->first();
        $category->fill($input)->save();

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

        Session::flash('success', 'Category was deleted successfully');
        return redirect()->route('categories.index');
    }

    public function trashed()
    {
        $all_tr = Category::onlyTrashed()->get();
        $all_ = Category::all();
        $page_name = 'categories';
        $index = 'trash';

        return view('dashboard.categories.trashed', compact('all_tr', 'page_name', 'all_', 'index'));
    }

    public function restore($slug)
    {
        $category = Category::withTrashed()->where('slug', $slug)->first();
        $category->restore();

        Session::flash('success', 'Category successfully restored!');
        return redirect()->route('categories.index');
    }

    public function kill($slug)
    {
        $category = Category::withTrashed()->where('slug', $slug)->first();
        $category->forceDelete();

        Session::flash('success', 'Category pemanently deleted!');
        return redirect()->route('categories.index');
    }


}
