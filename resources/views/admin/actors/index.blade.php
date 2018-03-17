@extends('layouts.app')

@section('content')

<div class="card">
    <div class="card-header">           
      <div class="row">  
        <div class="col-md-9">  
          <h2>Actors</h2>
        </div>  
        <div class="col-md-3"> 
          <a class="btn btn-success pull-right" href="{{route('actors.create')}}">Create new Actor</a>
        </div>  
      </div>  
    </div> 
    <div class="card-body">        
            @if($actors)
            <table class="table">
               <thead>
                  <tr>
                     <th>Actor</th>
                     <th>Image</th>
                     <th>Films</th>
                  </tr>
               </thead>
               <tbody>
                  @foreach($actors as $actor)
                  <tr>
                     <td><a href="{{route('actors.show', $actor->id)}}">{{$actor->name}}</a></td>
                     <td>{{$actor->image_id}}</td>
                     <td><a href="">{{$actor->films_count}}</a></td>

                  </tr>
                  @endforeach 
            @endif
               </tbody>
            </table>
       

    </div>
</div>



@endsection
