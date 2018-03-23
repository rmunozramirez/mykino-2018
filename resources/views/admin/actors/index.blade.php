@extends('layouts.app')

@section('content')

<div class="card">
    <div class="card-header">           
      <div class="row">  
        <div class="col-md-10 page-logo">  
          <h2><img height="30" src="{{URL::to('/images/user.png') }}">
            {{count($total_actors)}} @if(count($total_actors) > 1) actors @else actor @endif 
          </h2>
        </div>  
        <div class="col-md-2"> 
          <a class="btn btn-outline-success page-btns" href="{{route('actors.create')}}">Create new Actor</a>
        </div>  
      </div>  
    </div> 
    <div class="card-body">        
      @if($actors)


        @foreach ($actors as $actor)
        <a class="image-box" href="{{route('actors.show', $actor->slug)}}">
             <img class="film-thumbnail" src="{{URL::to('/images/' . $actor->image->image ) }}" alt="{{$actor->name}}" >
             {{$actor->name}}{{$actor->films_count}} films
        </a>
        
        @endforeach  

      @endif

    </div>
    <div class="card-footer">
      <div class="text-center">
          {{ $actors->links() }}
      </div>
    </div>
</div>



@endsection
