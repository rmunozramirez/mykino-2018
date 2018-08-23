<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Category;
use App\Film;
use App\Image;

class KinoController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $films = Film::orderBy('name', 'asc')->paginate(30);
        $all_ = Film::all();
        $page_name = 'films';
        $index = 'front';

        $element = Film::where('name', 'My Name Is Khan')->first();

        return view('kino.index', compact('films', 'all_', 'page_name', 'index', 'element'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $element = Film::with('category')->withCount('actors')->where('slug', $slug)->first();
        $prev = $element->id - 1;
        $film_prev = DB::table('films')
                    ->select('films.*')
                    ->where('films.id', '=', $prev)->first();  

        $next = $element->id + 1;  
        $film_next = DB::table('films')
                    ->select('films.*')
                    ->where('films.id', '=', $next)->first();   

        $page_name = 'films';
        $all_ = Film::all();
        $index = 'show';

        return view('kino.show', compact('element', 'film_prev', 'film_next', 'page_name', 'all_', 'index'));
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
