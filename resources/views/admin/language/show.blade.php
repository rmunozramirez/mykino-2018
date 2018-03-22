@extends('layouts.app') @section('content')

<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-md-9">
                <h2><img height="50" src="{{URL::to('/images/' . $language->image)}}" alt="{{$language->language}}" > 
                    {{$language->films_count}} @if(($language->films_count) > 1) films @else film @endif in {{$language->language}} 
                </h2>
            </div>
            <div class="col-md-3">
                <a type="button" class="btn btn-outline-success page-btns mt-2 mb-2" href="{{route('language.index')}}">Back to languages</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        @if($language->films_count)
        <table class="table">
            <thead>
                <tr>
                    <th>Film</th>
                    <th>Category</a></th>
                    <th>Fsk</th>
                    <th>Year</a>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($films as $film)
                <tr>
                    <td>
                        <img  class="film-thumbnail" height="80" src="{{URL::to('/images/' . $film->image->image ) }}" alt="{{$film->name}}">
                        <a href="{{route('films.show', $film->slug)}}">{{$film->name}}</a></td>
                    <td><a href="{{route('categories.show', $film->category->slug)}}">{{$film->category->category}}</a></td>
                    <td>
                        <a href="{{route('fsk.show', $film->fsk->slug)}}"><img height="50" src="{{$film->fsk->image ? URL::to('/images/' . $film->fsk->image) : URL::to('/images/language.png')}}" alt="{{$film->name}}" ></a></td>


                    </td>
                    <td><a href="{{route('films.year', date('Y', strtotime($film->year)))}}">{{date('Y', strtotime($film->year))}}</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @else
        <h2>No Films {{$language->language}}</h2> 
        <a href="{{route('language.index')}}">Back</a>
        @endif
    </div>
</div>

@endsection