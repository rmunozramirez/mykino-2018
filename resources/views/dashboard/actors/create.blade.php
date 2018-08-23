@extends('dashboard.index')
@section ('title', "| Create $page_name")
@section('content')
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row wrapper border-bottom white-bg">
		<div class="inside">
            <h2>Add a Film
            <span class="small pull-right">
            	<i class="fa fa-chevron-left"></i> <a href="{{route('films.index')}}">Back to Films</a>
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
				                    <div class="pt-4">        
				                        {!!Form::label('name', 'Add an Actor', array('class' => 'form-spacing-top'))!!}
				                        {!!Form::text('name', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255'))!!}
				                    </div>
				                </div>

				                <div class="col-md-6 pt-4">
				                    <div class="pt-4"> 
				                        {!!Form::label('image', 'Upload a Featured Image') !!}
				                        {!!Form::file('image') !!}
				                    </div>  
				                </div>  
				            </div>  

				            <div class="row">
				                <div class="col-md-6">
				                    <div class="pt-3"> 
			                            {!! Form::label('gender_id', 'Gender:') !!}
			                            {!! Form::select('gender_id', ['' => 'Choose a gender', '2' => 'Man', '1' => 'Woman'] , null, array('class' => 'form-control'))!!}
				                    </div>
				                </div>

				                <div class="col-md-6"> 
				                    <div class="pt-4"> 
				                        {!! Form::label('film', 'Select the Films in which the actor played:') !!}
				                        {!! Form::select('film_id', $films, null, array('multiple' => 'multiple', 'class' => 'form-control select2-multi'))!!}
				                    </div>  
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
