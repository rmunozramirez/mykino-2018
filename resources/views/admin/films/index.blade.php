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
                  <tr>
                     <td>{{$film->name}}</td>
                     <td>{{$film->image_id}}</td>
                     <td>{{$film->category}}</td>
                     <td>{{$film->language_id}}</td>
                     <td>{{$film->age_id}}</td>
                     <td>{{$film->year}}</td>

                  </tr>
                  @endforeach 
            @endif
               </tbody>
            </table>
       

    </div>
</div>



@endsection
