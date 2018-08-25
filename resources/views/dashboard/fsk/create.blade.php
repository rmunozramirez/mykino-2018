@extends('dashboard.index')
@section ('title', "| Create $page_name")
@section('content')
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row wrapper border-bottom white-bg">
		<div class="inside">
            <h2>Add a new age clasification
            <span class="small pull-right">
            	<i class="fa fa-chevron-left"></i> <a href="{{route('fsk.index')}}">Back to Age clasifications</a>
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
			                {!!Form::label('image_name', 'Upload a Featured Image') !!}
			                {!!Form::file('image_name') !!}
			            </div>  
		            </div>  

   					<div class="col-md-9">  						
			            {!!Form::open(array('route' => 'fsk.store', 'files' => true)) !!}   

			            <div class="pt-4">        
			                {!!Form::label('name', 'Add a age clasification', array('class' => 'form-spacing-top'))!!}
			                {!!Form::text('name', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255'))!!}
			            </div>

			            <div class="pt-4">    
			                {!!Form::submit('Add New Cage clasification', array('class' => 'btn btn-success btn-block')) !!}
			                {!!Form::close() !!}       
			            </div>
	    			</div>
	            </div>
            </div> 
        </div>
    </div>
</div>

@endsection
