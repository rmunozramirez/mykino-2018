@extends('dashboard.index')
@section ('title', "| Create $page_name")
@section('content')
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row wrapper border-bottom white-bg">
		<div class="inside">
            <h2>Add a Category
            <span class="small pull-right">
            	<i class="fa fa-chevron-left"></i> <a href="{{route('categories.index')}}">Back to Categories</a>
            </span></h2>
        	<hr>
			<div id="contenido">
			    @if(count($errors) > 0)
			        <ul class="list-group">    
			            @foreach($errors->all() as $error)
			                <li class="list-group-item text-danger">{{$error}}</li>
			            @endforeach
			        </ul>
			    @endif
				<div class="row">
   					<div class="col-md-3">
			            <div class="pt-4"> 
			                {!!Form::label('image', 'Upload a Featured Image') !!}
			                {!!Form::file('image') !!}
			            </div>  
		            </div>  

   					<div class="col-md-9">  						
			            {!!Form::open(array('route' => 'categories.store', 'files' => true)) !!}   

			            <div class="pt-4">        
			                {!!Form::label('category', 'Add a Category name', array('class' => 'form-spacing-top'))!!}
			                {!!Form::text('category', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255'))!!}
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
        </div>
    </div>
</div>

@endsection
