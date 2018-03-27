
@extends('layouts.app')

@section('title', " | $actor->name ")

@section('content')
<div class="card">
    <div class="card-header">           
      <div class="row">  
        <div class="col-md-10">  
            <h2 class="card-title">
               @if($actor->genre == 'masculine') 
                <i class="fa fa-male"></i> 
              @else <i class="fa fa-female"></i>  @endif 
               {{ $actor->name }}</h2>
        </div>  
        <div class="col-md-2  page-btns"> 
            <a type="button" class="btn btn-outline-secondary page-btns" href="{{route('actors.edit', $actor->slug)}}">Edit</a>
            <a type="button" class="btn film-thumbnail btn-outline-danger page-btns" href="{{route('actors.delete', $actor->slug)}}">Delete</a>
        </div>  
      </div>  
    </div>  

   <div class="card-body">
    <div class="inside pt-3">
      <div class="row pt-3">
        <div class="col-md-3">
            <img class="big-img" src="{{URL::to('/images/' . $actor->image->image ) }}" alt="{{$actor->name}}" >
        </div>
        <div class="col-md-9">
            <h4>{!! $actor->name!!}'s films:</h4>
            <hr />
          @if($actor->films)
            <table class="table table-striped table-hover">
             <thead>
                <tr>
                    <th>Film</th>
                    <th>Category</th>
                    <th>Language</a></th>
                    <th>FSK</a></th>
                    <th>Year</a></th>
                    <th>Trailer</a></th>
                </tr>
             </thead>
             <tbody>
                @foreach($actor->films as $film)
                <tr>
                   <td>
                   <img class="film-thumbnail" height="50" src="{{URL::to('/images/' . $film->image->image ) }}" alt="{{$film->name}}" ><a href="{{route('films.show', $film->slug)}}">{{$film->name}}</a>
                 </td>
                   <td><a href="{{route('categories.show', $film->category->slug)}}">{{$film->category->category}}</a></td>
                   <td><a href="{{route('language.show', $film->language->slug)}}"><img height="50" src="{{$film->language->image ? URL::to('/images/' . $film->language->image) : URL::to('/images/language.png')}}" alt="{{$film->name}}" ></a></td>
                   <td><a href="{{route('fsk.show', $film->fsk->slug)}}"><img height="50" src="{{$film->fsk->image ? URL::to('/images/' . $film->fsk->image) : URL::to('/images/language.png')}}" alt="{{$film->name}}" ></a></td>
                   <td>{{$film->year}}</td>
                   <td><a href="{{ $film->trailer }}"><img class="play" height="50" src="{{URL::to('/images/play.png')}}" alt="{{$film->name}}"></a></td>
                </tr>
                @endforeach 
       
             </tbody>
            </table>
          @else
           <h2>No Films</h2>
          @endif
        </div>
      </div>
      </div>
   </div>
</div>
@endsection

