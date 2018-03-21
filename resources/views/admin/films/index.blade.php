@extends('layouts.app')



@section('content')

<div class="card">
    <div class="card-header">           
      <div class="row">  
        <div class="col-md-10 page-logo">  
          <h2><img height="30" src="{{URL::to('/images/film.png') }}" alt="{{count($total_films)}} Films" >{{count($total_films)}} Films </h2>
        </div>  
        <div class="col-md-2"> 

          <a class="btn btn-outline-success page-btns" href="{{route('films.create')}}">Add film</a>
        </div>
        <div class="col-md-6 offset-md-4 text-center"> 
            <form class="form-inline">
              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>          
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
                <th>Year</a></th>
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
               <td><a href="{{route('language.show', $film->language->slug)}}"><img height="50" src="{{$film->language->image ? URL::to('/images/' . $film->language->image) : URL::to('/images/language.png')}}" alt="{{$film->name}}"  title="{{$film->language->language}}"></a></td>
               <td>
                    <a href="{{route('fsk.show', $film->fsk->slug)}} is {{$film->fsk->fsk}}">
                      <img height="50" src="{{$film->fsk->image ? URL::to('/images/' . $film->fsk->image) : URL::to('/images/language.png')}}" alt="{{$film->name}}" title="{{$film->fsk->fsk}}"></a></td>
               <td><a href="{{route('films.year', $film->year)}}">{{date('Y', strtotime($film->year))}}</a></td>
               <td><a href="{{ $film->trailer }}"><img class="play" height="50" src="{{URL::to('/images/play.png')}}" alt="{{$film->name}}" title="{{$film->name}}"></a></td>
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
          {{ $films->links() }}
      </div>
    </div>
</div>



@endsection
