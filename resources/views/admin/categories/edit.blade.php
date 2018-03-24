@extends('layouts.app')



@section('content')

    @if(count($errors) > 0)

        <ul class="list-group">
            
            @foreach($errors->all() as $error)

                <li class="list-group-item text-danger">{{$error}}</li>

            @endforeach

        </ul>

    @endif

<div class="card">
    <div class="card-header">           
      <div class="row">  
        <div class="col-md-10 page-logo">  
          <h2><img height="30" src="{{URL::to('/images/Category.png') }}" alt="{{$category->category}}">Edit {{$category->category}}</h2>
        </div>  
        <div class="col-md-2 "> 
          <a class="btn btn-outline-success page-btns" href="{{route('categories.index')}}"> Categories</a>
        </div>  
      </div>  
    </div> 
    <div class="card-body">        
    <div class="show"> 
        {!! Form::model($category, ['method'=>'PATCH', 'action'=> ['CategoriesController@update', $category->slug ],'files'=>true]) !!}

        <div class="pt-4">        
            {!!Form::label('category', 'Category name', array('class' => 'form-spacing-top'))!!}
            {!!Form::text('category', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255'))!!}
        </div>

        <div class="pt-4"> 
            <div class="row"> 
                <div class="col-md-6"> 
                    <img height="180" src="{{$category->image ? URL::to('/images/' . $category->image->image) : URL::to('/images/category.png') }}" alt="{{$category->category}}">
                </div>  
                <div class="col-md-6"> 
                    {!!Form::label('image', 'Upload a Featured Image') !!}
                    {!!Form::file('image') !!}
                </div>  
            </div>  
        </div>  

        <div class="pt-4">       
            {!!Form::label('description', 'Category description:', array('class' => 'form-spacing-top'))!!}
            {!!Form::textarea('description', null, array('id' => 'summernote','class' => 'form-control', 'rows' => 9))!!}                       
        </div>

        <div class="pt-4">    
            {!!Form::submit('Add the New Category', array('class' => 'btn btn-success btn-block')) !!}
            {!!Form::close() !!}       
        </div>
        
    </div>
    </div>
</div>



@endsection

@section('scripts')
<script>
      $('#summernote').summernote({
        placeholder: 'Hello bootstrap 4',
        tabsize: 2,
        height: 100
      });
    </script>
@endsection