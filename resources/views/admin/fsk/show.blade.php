@extends('layouts.app') @section('content')

<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-md-9">
                <h2><img height="50" src="{{URL::to('/images/' . $fsk->image)}}" alt="{{$fsk->fsk}}" >
                {{$fsk->films_count}} @if(($fsk->films_count) > 1) films @else film @endif {{$fsk->fsk}} years 
            </h2>
            </div>
            <div class="col-md-3">
                <a type="button" class="btn btn-outline-success page-btns mt-2 mb-2" href="{{route('fsk.index')}}">Back</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        @if($fsk->films_count)
            <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>Film</th>
                    <th>Category</th>                   
                    <th>Language</th>
                    <th>Year</a></th>
                </tr>
            </thead>
            <tbody>
                @foreach($films as $film)
                <tr>
                    <td>
                        <img  class="film-thumbnail" height="80" src="{{URL::to('/images/' . $film->image->image ) }}" alt="{{$film->name}}">
                        <a href="{{route('films.show', $film->slug)}}">{{$film->name}}</a></td>
                    <td><a href="{{route('categories.show', $film->category->slug)}}">{{$film->category->category}}</a></td>                        
                    <td><a href="{{route('language.show', $film->language->slug)}}">
                        <img height="80" src="{{URL::to('/images/' . $film->language->image ) }}" alt="{{$film->name}}"></a>
                    </td>
                    <td><a href="{{route('films.year', date('Y', strtotime($film->year)))}}">{{date('Y', strtotime($film->year))}}</a></td>

                </tr>
                @endforeach
            </tbody>
        </table>
        @else
        <h2>No Films {{$fsk->fsk}}</h2> 
        <a href="{{route('fsk.index')}}">Back</a>
        @endif
    </div>
</div>

@endsection