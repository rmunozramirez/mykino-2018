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
				<div class="row">
					<div class="inside">
						<div class="col-md-3">        
			                {!!Form::open(array('route' => 'language.store', 'files' => true)) !!}   
			                <div class="pt-4"> 
			                    {!!Form::label('image', 'Upload a Featured Image') !!}
			                    {!!Form::file('image') !!}
			                </div>
		                </div>
						<div class="col-md-8 col-md-offset-1">
			                <div class="pt-4">        
			                    {!!Form::label('language', 'Add a Language name', array())!!}
			                    {!!Form::text('language', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255'))!!}
			                </div>
				        </div>
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
