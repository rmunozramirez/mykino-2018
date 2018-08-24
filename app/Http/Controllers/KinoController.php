<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Category;
use App\Film;
use App\Actor;
use App\Image;
use App\Language;
use App\Fsk;

class KinoController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $films = Film::orderBy('name', 'asc')->paginate(22);
        $all_ = Film::all();
        $page_name = 'films';
        $index = 'front';

        $element = Film::where('name', 'My Name Is Khan')->first();

        return view('kino.index', compact('films', 'all_', 'page_name', 'index', 'element'));
    }

    public function stats()
    {
       
        $films = Film::orderBy('name', 'asc')->paginate(22);
        $categories = Category::orderBy('name', 'asc')->withCount('films')->get();
        $languages = Language::orderBy('name', 'asc')->withCount('films')->get();
        $actors = Actor::orderBy('name', 'asc')->withCount('films')->with('image')->get();
        $ages = Fsk::withCount('films')->get();
        $all_ = Film::all();
        $page_name = 'films';
        $index = 'front';

         return view('kino.stats', compact('films', 'categories', 'languages', 'actors', 'ages', 'all_', 'page_name', 'index'));    
            
    }


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

    public function categories()
    {
        $categories = Category::orderBy('name', 'asc')->withCount('films')->get();
        $all_ = Category::all();
        $page_name = 'categories';
        $index = 'yes';

        return view('kino.categories.index', compact('index', 'all_', 'page_name', 'categories'));
    }

    public function category($slug)
    {
 
        $element = Category::withCount('films')->where('slug', $slug)->first();
        $page_name = 'categories';
        $all_ = Category::all();
        $index = 'show';

        return view('kino.categories.show', compact('element', 'page_name', 'all_', 'index'));
    }


    public function ages()
    {
        $all_ = Fsk::withCount('films')->get();
        $page_name = 'fsk';
        $index = 'yes';

        return view('kino.fsk.index', compact('all_', 'page_name', 'index'));   
    }

    public function age($slug)
    {

        $fsk = Fsk::withCount('films')->where('slug', $slug)->first();
        $page_name = 'fsk';
        $all_ = Fsk::all();
        $index = 'show';

        return view('kino.fsk.show', compact('fsk', 'all_', 'page_name', 'index'));   
    }

    public function languages()
    {

        $languages = Language::orderBy('name', 'asc')->withCount('films')->get();
        $all_ = Language::all();
        $page_name = 'language';
        $index = 'yes';

        return view('kino.languages.index', compact('languages', 'all_', 'page_name', 'index'));

    }

    public function language($slug)
    {

        $element = Language::withCount('films')->where('slug', $slug)->first();
        $page_name = 'language';
        $all_ = Language::all();
        $index = 'show';

        return view('kino.languages.show', compact('element', 'page_name', 'all_', 'index'));

    }

    public function year($slug)
    {
        $films = Film::where('year', 'like', $slug . '%')->get();
        $all_ = Film::all();
        $page_name = 'year';
        $index = 'year';

        return view('kino.year', compact('films', 'all_', 'page_name', 'index'));

    }

}
