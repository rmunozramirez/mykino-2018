@extends('layouts.app')



@section('content')



<div class="card">
    <div class="card-body">        
        <h2>Categories</h2>

            @if($categories)
            <table class="table">
               <thead>
                  <tr>
                     <th>Category</th>
                     <th>Image</th>
                     <th>Description</th>
                     <th>Films</th>
                  </tr>
               </thead>
               <tbody>
                  @foreach($categories as $category)
                  <tr>
                     <td>{{$category->category}}</td>
                     <td>
                        <img height="50" src="{{$category->image ? URL::to($category->image->image) : URL::to('/images/placeholder.jpg')}}" alt="{{$category->category}}" >
                     </td>
                     <td>{{str_limit($category->description, 100, '...')}}</td>
                     <td><a href="">{{$category->films_count}}</a></td>

                  </tr>
                  @endforeach 
            @endif
               </tbody>
            </table>
       

    </div>
</div>



@endsection
