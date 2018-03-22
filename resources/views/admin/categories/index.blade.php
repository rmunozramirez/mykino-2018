@extends('layouts.app')

@section('content')

<div class="card">

    <div class="card-header">           
      <div class="row">  
        <div class="col-md-10">  
          <h2><img class="film-thumbnail" height="30" src="{{URL::to('/images/category.svg') }}" alt="{{count($categories)}} Categories">{{count($categories)}}  Categories</h2>
        </div>  
        <div class="col-md-2"> 
          <a class="btn btn-outline-success page-btns" href="{{route('categories.create')}}">Add a Category</a>
        </div>  
      </div>  
    </div>  
    <div class="card-body">        
         
            @if($categories)
            <table class="table table-striped table-hover">
               <thead>
                  <tr>
                     <th>Category</th>
                     <th>Description</th>
                     <th>Films</th>
                  </tr>
               </thead>
               <tbody>
                  @foreach($categories as $category)
                  <tr>
                     <td>
                      <img class="film-thumbnail" height="50" src="{{$category->image ? URL::to('/images/' . $category->image->image) : URL::to('/images/category.svg') }}" alt="{{$category->category}}" >
                      <a href="{{route('categories.show', $category->slug)}}">{{$category->category}}</a></td>
                     <td>{{str_limit($category->description, 100, '...')}}</td>
                     <td><a href="{{route('categories.show', $category->slug)}}">{{$category->films_count}}</a></td>
                  </tr>
                  @endforeach 
            @endif
               </tbody>
            </table>
       

    </div>

    <div class="card-footer">
      <div class="text-center">
          {{ $categories->links() }}
      </div>
    </div>
</div>



@endsection
