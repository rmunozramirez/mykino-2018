@extends('layouts.app')



@section('content')

<div class="card">
    <div class="card-header">           
      <div class="row">  
        <div class="col-md-10 page-logo">  
          <h2><img height="30" src="{{URL::to('/images/film.png') }}" alt="{{count($films)}} Films" >{{count($films)}} Films from {{date('Y', strtotime($films[0]->year))}}</h2>
        </div>  
        <div class="col-md-2 "> 
          <a class="btn btn-outline-success page-btns" href="{{route('films.create')}}">Add film</a>
        </div>  
      </div>  
    </div> 
    <div class="card-body">        
      @if($films)
      <table class="table table-striped table-hover">
         <thead>
            <tr>
                <th>Film</th>
                <th>Category</th>
                <th>Language</a></th>
                <th>FSK</a></th>
                <th>Trailer</a></th>
            </tr>
         </thead>
         <tbody>
            @foreach($films as $film)
            <tr>
               <td>
               <img class="film-thumbnail" height="50" src="{{URL::to('/images/' . $film->image->image ) }}" alt="{{$film->name}}" ><a href="{{route('films.show', $film->slug)}}">{{$film->name}}</a>
             </td>
               <td><a href="{{route('categories.show', $film->category->slug)}}">{{$film->category->category}}</a></td>
               <td><a href="{{route('language.show', $film->language->slug)}}"><img height="50" src="{{$film->language->image ? URL::to('/images/' . $film->language->image) : URL::to('/images/language.png')}}" alt="{{$film->name}}" ></a></td>
               <td><a href="{{route('fsk.show', $film->fsk->slug)}}"><img height="50" src="{{$film->fsk->image ? URL::to('/images/' . $film->fsk->image) : URL::to('/images/language.png')}}" alt="{{$film->name}}" ></a></td>
               <td><a href="{{ $film->trailer }}"><img class="play" height="50" src="{{URL::to('/images/play.png')}}" alt="{{$film->name}}"></a></td>
            </tr>
            @endforeach 
   
         </tbody>
      </table>
      @else
         <h2>No Films</h2>
      @endif
  </div>

    <div class="card-footer">
      <div class="text-center">

      </div>
    </div>
</div>



@endsection
