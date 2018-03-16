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
                     <td><a href="{{route('categories.show', $category->id)}}">{{$category->category}}</a></td>
                     <td>
                        <img height="50" src="{{$category->image_id ? URL::to($category->image) : URL::to('/images/category.png')}}" alt="{{$category->category}}" >
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
