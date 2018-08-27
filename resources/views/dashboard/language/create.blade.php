@extends('dashboard.index')
@section ('title', "| Create $page_name")
@section('content')
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row wrapper border-bottom white-bg">
		<div class="inside">
            <h2>Add a Language
            <span class="small pull-right">
            	<i class="fa fa-chevron-left"></i> <a href="{{route('language.index')}}">Back to Languages</a>
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
			    {!!Form::open(array('route' => 'languages.store', 'files' => true)) !!}  
				<div class="row">
		            <div class="col-md-4"> 
		            	{!!Form::label('image_name', 'Upload Image')!!}
	                    <div id="FileUpload">
						    <input type="file" name="image_name" size="24" id="BrowserHidden" onchange="getElementById('FileField').value = getElementById('BrowserHidden').value;" />
						    <div id="BrowserVisible"><input type="text" id="FileField" /></div>
						</div>
					</div>

					<div class="col-md-8">       
	                    {!!Form::label('language', 'Add a Language name', array())!!}
	                    {!!Form::text('language', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255'))!!}
	                </div>
                </div>
	        
	            <div class="row"> 
		            <div class="col-md-4"> 

                        {!!Form::label('alt', 'Edit alternative Text', array('class' => 'form-spacing-top'))!!}
                        {!!Form::text('alt', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '55'))!!}

                        {!!Form::label('about', 'Edit image description', array('class' => 'form-spacing-top'))!!}
                        {!!Form::text('about', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '55'))!!}
                    </div>
		        </div>
				<div class="row">
					<div class="col-md-8 col-md-offset-4 pt-4">
				        <div class="card-footer">
			                {!!Form::submit('Add the New Language', array('class' => 'btn btn-success btn-block')) !!}
			                {!!Form::close() !!}       
				        </div>
				    </div>
	            </div>
            </div> 
        </div>
    </div>
</div>

@endsection
