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
    <div class="card-body">        
        <h2>Edit Category {{$category}}</h2>

        {!! Form::model($category, ['method'=>'PATCH', 'action'=> ['CategoriesController@update', $category->slug ],'files'=>true]) !!}

        <div class="pt-4">        
            {!!Form::label('category', 'Add a Category name', array('class' => 'form-spacing-top'))!!}
            {!!Form::text('category', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255'))!!}
        </div>

        <div class="pt-4"> 
            <div class="row"> 
                <div class="col-md-6"> 
                    <img src="{{URL::to('/images/' . $category->image) }}" alt="{{$category->category}}">
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