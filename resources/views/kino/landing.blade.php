@extends('layouts.app')
@section ('title',  "| $page_name")

@section('content')
   
    <section id="content" class=" intro flex-center"> 
    
        <div class="content titulo flex-center">
            <div class="title m-b-md">
                <h1>My Kino</h1>
                <p>A collection of {{count($films)}} films</p>
            </div>
        </div>          


        <div class="row flex-center">
            <!-- Three columns of text below the carousel -->
            @foreach ($films as $film)
            <div class="the_thumbnail">
                 <img class="image" src="{{URL::to('/images/' . $film->image->image ) }}" alt="{{$film->name}}" >
                  <div class="middle">
                    <a href="{{route('films.show', $film->slug)}}">
                        <div class="text">{{$film->name}}</div>
                    </a>
                  </div>
              </div>
            @endforeach     

        </div><!-- /.row -->   
    </section>

<!-- Featured home section -->
    <section id="featured"> 

        @include('partials._featured')

    </section>

@endsection






