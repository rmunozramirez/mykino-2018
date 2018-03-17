@extends('layouts.app') @section('content')

<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-md-9">
                <h2><img height="50" src="{{URL::to('/images/' . $fsk->image)}}" alt="{{$fsk->fsk}}" > 
           {{$fsk->fsk}}</h2>
            </div>
            <div class="col-md-3">
                <div>{{$fsk->films_count}} films</div>
            </div>
        </div>
    </div>
    <div class="card-body">
        @if($fsk->films_count)
        <table class="table">
            <thead>
                <tr>
                    <th>Film</th>
                    <th>Image</th>
                    <th>Language</a>
                    </th>
                    <th>Year</a>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($films as $film)
                <tr>
                    <td><a href="{{route('films.show', $film->slug)}}">{{$film->name}}</a></td>
                    <td>
                        <img height="80" src="{{URL::to('/images/' . $film->image->image ) }}" alt="{{$film->name}}">

                    </td>
                    <td><a href="{{route('language.show', $film->language->slug)}}">
                        <img height="80" src="{{URL::to('/images/' . $film->language->image ) }}" alt="{{$film->name}}"></a>
                    </td>
                    <td>{{$film->year}}</td>
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