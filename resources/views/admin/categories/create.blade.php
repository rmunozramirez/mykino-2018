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
        <div class="col-md-9">  
          <h2><i class="fas fa-tag"></i> Create a new Category</h2>
        </div>  
        <div class="col-md-3"> 
          <a class="btn btn-outline-success page-btns" href="{{route('categories.index')}}">{{count($categories)}}  Categories</a>
        </div>  
      </div>  
    </div>  
    <div class="card-body">        
        <div class="inside">

            {!!Form::open(array('route' => 'categories.store', 'files' => true)) !!}   

            <div class="pt-4">        
                {!!Form::label('category', 'Add a Category name', array('class' => 'form-spacing-top'))!!}
                {!!Form::text('category', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255'))!!}
            </div>

            <div class="pt-4"> 
                {!!Form::label('image', 'Upload a Featured Image') !!}
                {!!Form::file('image') !!}
            </div>  

            <div class="pt-4">       
                {!!Form::label('description', 'Category description:', array('class' => 'form-spacing-top'))!!}
                {!!Form::textarea('description', null, array('id' => 'summernote','class' => 'form-control', 'rows' => 9))!!}                       
            </div>

            <div class="pt-4">    
                {!!Form::submit('Add New Category', array('class' => 'btn btn-success btn-block')) !!}
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