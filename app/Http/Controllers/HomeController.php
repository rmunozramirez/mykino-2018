<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Film;
use App\Image;
use App\Category;
use App\Language;
use App\Fsk;
use App\Actor;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $page_name = 'Home page'; 
        $films = Film::orderBy('created_at', 'desc')->paginate(10);
        $all_ = Film::all();
        $index = 'front';

        $element = Film::get()->last();


        return view('kino.landing', compact('page_name', 'films', 'all_', 'index', 'element'));
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        $films = Film::orderBy('name', 'asc')->paginate(10);
        $total_films = Film::all();
        $categories = Category::paginate(10);
        $total_categories = Category::all();
        $actors  = Actor::paginate(10); 
        $total_actors  = Actor::all(); 
        $languages = Language::withCount('films')->get(); 
        $fsks  = Fsk::withCount('films')->get();
        $page_name = 'dashboard';

        //Statistics
        $newest_films = Film::orderBy('year', 'desc')->take(5)->get();
        $oldest_films = Film::orderBy('year', 'asc')->take(5)->get();
        $longest_films = Film::orderBy('duration', 'asc')->take(5)->get();
        $shortest_films = Film::orderBy('duration', 'desc')->take(5)->get();

        //total

        return view('dashboard.index', compact('films', 'categories', 'languages', 'actors', 'newest_films', 'oldest_films', 'longest_films', 'shortest_films', 'total_categories', 'total_actors', 'total_films', 'fsks', 'page_name'));
    }
}
