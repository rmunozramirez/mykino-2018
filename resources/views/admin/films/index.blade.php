@extends('layouts.app')



@section('content')



<div class="card">
    <div class="card-body">        
        <h2>Films</h2>

            @if($films)
            <table class="table">
               <thead>
                  <tr>
                      <th>Film</th>
                      <th>Image</th>
                      <th>Category</th>
                      <th>Language</a></th>
                      <th>FSK</a></th>
                      <th>Year</a></th>
                  </tr>
               </thead>
               <tbody>
                  @foreach($films as $film)
{{$film}}
                  <tr>
                     <td><a href="{{route('films.show', $film->slug)}}">{{$film->name}}</a></td>
                     <td>{{$film->image }}</td>
                     <td>{{$film->category->category}}</td>
                     <td>{{$film->language->language}}</td>
                     <td>{{$film->fsk_id}}</td>
                     <td>{{$film->year}}</td>
                  </tr>
                  @endforeach 
            @endif
               </tbody>
            </table>
       

    </div>
</div>



@endsection
