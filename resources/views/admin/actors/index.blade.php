@extends('layouts.app')

@section('content')

<div class="card">
    <div class="card-header">           
      <div class="row">  
        <div class="col-md-10 page-logo">  
          <h2><img height="30" src="{{URL::to('/images/user.png') }}">{{count($total_actors)}} Actors</h2>
        </div>  
        <div class="col-md-2"> 
          <a class="btn btn-outline-success page-btns" href="{{route('actors.create')}}">Create new Actor</a>
        </div>  
      </div>  
    </div> 
    <div class="card-body">        
      @if($actors)
      <table class="table table-striped table-hover">
         <thead>
            <tr>
               <th>Actor</th>
               <th>Films</th>
            </tr>
         </thead>
         <tbody>
            @foreach($actors as $actor)
            <tr>
               <td>
                <img class="film-thumbnail" height="50" src="{{URL::to('/images/' . $actor->image->image ) }}" alt="{{$actor->name}}" >
                <a href="{{route('actors.show', $actor->slug)}}">{{$actor->name}}</a></td>

               <td><a href="">{{$actor->films_count}}</a></td>

            </tr>
            @endforeach 
      @endif
         </tbody>
      </table>
    </div>
    <div class="card-footer">
      <div class="text-center">
          {{ $actors->links() }}
      </div>
    </div>
</div>



@endsection
