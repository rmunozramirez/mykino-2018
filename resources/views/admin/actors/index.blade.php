@extends('layouts.app')

@section('content')



<div class="card">
    <div class="card-body">        
        <h2>Actors</h2>

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
                     <td>
                        <img height="50" src="{{URL::to('/images/' . $actor->image)}}" alt="{{$actor->name}}" >
                     </td>
                     <td><a href="">{{$actor->films_count}}</a></td>

                  </tr>
                  @endforeach 
            @endif
               </tbody>
            </table>
       

    </div>
</div>



@endsection
