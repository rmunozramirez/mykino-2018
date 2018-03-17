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
        $fsks = Fsk::withCount('films')->get();

        return view('admin.fsk.index', compact('fsks'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $fsk = Fsk::withCount('films')->where('slug', $slug)->first();

        $films = Film::where('fsk_id', $fsk->id)->get();
       
        return view('admin.fsk.show', compact('fsk', 'films'));
    }
 
}
