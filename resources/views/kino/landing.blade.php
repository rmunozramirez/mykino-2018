@extends('layouts.app')
@section ('title',  "| $page_name")

@section('content')
   
    <section id="landing-page">

        @include('partials._out_nav')
    
        <div class="content titulo flex-center">
            <div class="title m-b-md">
                <h1>My Kino</h1>
                <p>A collection of {{count($films)}} films</p>
            </div>
        </div>          


        <div class="container">
            <div class="row">
                <!-- Three columns of text below the carousel -->
                @foreach ($films as $film)
                <div class="the_thumbnail">
                     <img class="image" src="{{URL::to('/images/' . $film->image->slug ) }}" alt="{{$film->name}}" >
                      <div class="middle">
                        <a href="{{route('films.show', $film->slug)}}">
                            <div class="text">{{$film->name}}</div>
                        </a>
                      </div>
                  </div>
                @endforeach     

            </div><!-- /.row -->   
        </div><!-- /.row -->   
    </section>

<!-- Featured home section -->
    <section id="featured"> 

       

    </section>

@endsection






