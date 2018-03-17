@extends('layouts.app')

@section('content')

<div class="card">
    <div class="card-header">           
      <div class="row">  
        <div class="col-md-10">  
           <h2><img height="50" src="{{$category->image ? URL::to('/images/' . $category->image->image) : URL::to('/images/category.png') }}" alt="{{$category->category}}" > 
           Category: {{$category->category}}</h2>
        </div>  
        <div class="col-md-2"> 
            <a type="button" class="btn btn-sm btn-outline-secondary" href="{{route('categories.edit', $category->slug)}}">Edit</a>
            <a type="button" class="btn btn-sm btn-outline-danger" href="{{route('categories.delete', $category->slug)}}">Delete</a>
        </div>
      </div>  


    </div> 
    <div class="card-body">        
 <div>{{$category->films_count}} films</div>
            @if($category->films_count)
            <table class="table">
               <thead>
                  <tr>
                      <th>Film</th>
                      <th>Image</th>
                      <th>Language</a></th>
                      <th>FSK</a></th>
                      <th>Year</a></th>
                  </tr>
               </thead>
               <tbody>
                  @foreach($films as $film)
                  <tr>
                     <td><a href="{{route('films.show', $film->slug)}}">{{$film->name}}</a></td>
                     <td>
<img height="80" src="{{URL::to('/images/' . $film->image->image ) }}" alt="{{$film->name}}" >

                     </td>
                     <td><a href="{{route('language.show', $film->language->slug)}}">
<img height="80" src="{{URL::to('/images/' . $film->language->image ) }}" alt="{{$film->name}}" ></a></td>
                     <td>
                      <a href="{{route('fsk.show', $film->fsk->slug)}}">
<img height="80" src="{{$film->fsk->image ? URL::to('/images/' . $film->fsk->image) : URL::to('/images/language.png')}}" alt="{{$film->name}}" ></a>
                     </td>
                     <td>{{$film->year}}</td>
                  </tr>
                  @endforeach 
         
               </tbody>
            </table>
          @else
             <h2>No Films in Category: {{$category->category}}</h2>
            <a href="{{route('categories.index')}}">Back</a>
          @endif

    </div>
</div>



@endsection
