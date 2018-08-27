@extends('dashboard.index')
@section ('title', "| Create Actor")
@section('content')
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row wrapper border-bottom white-bg">
		<div class="inside">
            <h2>Add a new Actor
            <span class="small pull-right">
            	<i class="fa fa-chevron-left"></i> <a href="{{route('actors.index')}}">Back to actors</a>
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
   					<div class="card-body">
				        <div class="inside">        
				            {!!Form::open(array('route' => 'actors.store', 'files' => true)) !!}   

				            <div class="row">
				                <div class="col-md-6">        
			                        {!!Form::label('name', 'Add an Actor', array('class' => 'form-spacing-top'))!!}
			                        {!!Form::text('name', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255'))!!}
				                </div>

				                <div class="col-md-6">
		                            {!! Form::label('gender_id', 'Gender:') !!}
		                            {!! Form::select('gender_id', ['' => 'Choose a gender', '2' => 'Man', '1' => 'Woman'] , null, array('class' => 'form-control'))!!}
				                </div>  
				            </div>  

				            <div class="row mt-5">
				                <div class="col-md-4">
				                	{!!Form::label('image_name', 'Upload Image')!!}
				                    <div id="FileUpload">
									    <input type="file" name="image_name" size="24" id="BrowserHidden" onchange="getElementById('FileField').value = getElementById('BrowserHidden').value;" />
									    <div id="BrowserVisible"><input type="text" id="FileField" /></div>
									</div> 
				                </div>

				                <div class="col-md-4">
			                        {!!Form::label('alt', 'Edit alternative Text', array('class' => 'form-spacing-top'))!!}
		                            {!!Form::text('alt', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '55'))!!}
		                        </div>
				                <div class="col-md-4">              
			                        {!!Form::label('about', 'Edit image description', array('class' => 'form-spacing-top'))!!}
		                            {!!Form::text('about', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '55'))!!}
				                </div>  
				            </div>
				            
				            <div class="pt-4">    
				                {!!Form::submit('Add New Actor', array('class' => 'btn btn-success btn-block')) !!}
				                {!!Form::close() !!}       
				            </div>
				            
				        </div>
	            </div>
            </div> 
        </div>
    </div>
</div>

@endsection
