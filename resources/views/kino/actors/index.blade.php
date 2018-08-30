@extends('layouts.app')
@section ('title',  "| $page_name")

@section('content')

  @include('partials._out_nav')

  <div class="container">
    <div class="row flex-center">
      <div class="col-md-12 page-header text-center my-3">
          <h1>{{count($all_)}} actors</h1>
      </div>          
    </div>
  </div><!-- /.row -->   
    <div class="row flex-center ">

        @foreach ($actors as $actor)
        <div class="the_thumbnail">
             <img class="image" src="{{URL::to('/images/' . $actor->image->slug ) }}" alt="{{$actor->name}}" >
              <div class="overlay">
                <a href="{{route('kino.actor', $actor->slug)}}">
                    <div class="text small">{{$actor->name}}</div>
                </a>
              </div>
          </div>

        @endforeach
        <div class="row flex-center row-1 my-3">
          {{ $actors->links() }}
        </div>   
  
    </div><!-- /.row -->   


@endsection
