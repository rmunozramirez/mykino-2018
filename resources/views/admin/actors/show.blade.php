
@extends('layouts.app')

@section('title', " | $actor->name ")

@section('content')
<div class="card">
    <div class="card-header">           
      <div class="row">  
        <div class="col-md-10">  
            <h2 class="card-title"><img height="30" src="{{URL::to('/images/film.png') }}" alt="{{ $actor->name }}" > {{ $actor->name }}</h2>
        </div>  
        <div class="col-md-2  page-btns"> 
            <a type="button" class="btn btn-outline-secondary page-btns" href="{{route('films.edit', $actor->slug)}}">Edit</a>
            <a type="button" class="btn film-thumbnail btn-outline-danger page-btns" href="{{route('films.delete', $actor->slug)}}">Delete</a>
        </div>  
      </div>  
    </div>  

   <div class="card-body">
   <div class="show">

      <!-- Tab panels -->

            <div class="row py-3">
               <div class="col-md-5">
                  <img  src="{{URL::to('/images/' . $actor->image->image ) }}" alt="{{$actor->name}}" >
               </div>
               <div class="col-md-7">
                  <dl>
                     <dd>Actor:{!! $actor->name !!}</dd>
                  </dl>
               </div>

            </div>
            <hr>
            <div class="">
               <!--/.Panel 1-->
               <div class="col-md-12" id="actors" role="tabpanel">
                  <h4>{!! $actor->name!!}'s films:</h4>
               </div>
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

