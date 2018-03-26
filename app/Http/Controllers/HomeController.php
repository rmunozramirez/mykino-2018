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
        $films = Film::all();
        $carousel = Film::orderBy('created_at', 'desc')->take(18)->get();

        return view('kino.landing', compact('films', 'carousel'));
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        $films = Film::all();
        $categories = Category::all();
        $languages = Language::all(); 
        $fsks  = Fsk::all(); 
        $actors  = Actor::all(); 

        return view('admin.dashboard', compact('films', 'categories', 'languages', 'actors'));
    }
}
