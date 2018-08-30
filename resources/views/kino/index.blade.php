
@extends('layouts.app')
@section ('title',  "| $page_name")
@section('content')
<div id="film-section">
   @include('partials._out_nav')
   <div class="container">
    <div class="row flex-center">
      <div class="col-md-12 page-header text-center my-3">
          <h1>My Kino</h1>
          <h3>A collection of {{count($all_)}} films</h3>
      </div>          
    </div>
  </div><!-- /.row -->   
    <div class="row flex-center ">

        @foreach ($films as $film)
        <div class="the_thumbnail">
             <img class="image" src="{{URL::to('/images/' . $film->image->slug ) }}" alt="{{$film->name}}" >
              <div class="overlay">
                <a href="{{route('kino.show', $film->slug)}}">
                    <div class="text small">{{$film->name}}</div>
                </a>
              </div>
          </div>

        @endforeach
        <div class="row flex-center row-1 my-3">
          {{ $films->links() }}
        </div>   
  
    </div><!-- /.row -->   


@endsection

