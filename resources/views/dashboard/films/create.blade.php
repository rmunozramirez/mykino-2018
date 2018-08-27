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
  					<div class="inside">       
  						
				        {!!Form::open(array('route' => 'films.store', 'files' => true)) !!}   

				        <div class="pt-4">        
				            {!!Form::label('name', 'Add a film name', array('class' => 'form-spacing-top'))!!}
				            {!!Form::text('name', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255'))!!}
				        </div>
    
				        <div class="pt-3 row">       
				            <div class="col-md-6"> 
				                <div class="pt-3"> 
			                        {!! Form::label('category_id', 'Category:') !!}
			                        {!! Form::select('category_id', ['' => 'Choose a Category'] + $categories, null, array('class' => 'form-control'))!!}
				                </div>
				            </div>

				            <div class="col-md-6">   
				                <div class="pt-3"> 
				                    {!!Form::label('trailer', 'Trailer link:', array('class' => 'form-spacing-top'))!!}
				                    {!!Form::text('trailer', null, array('class' => 'form-control')) !!}
				                </div>
				            </div>
				        </div>

				        <div class="pt-3 row">       
				            <div class="col-md-6">       
				                {!!Form::label('year', 'Year:', array('class' => 'form-spacing-top'))!!} 
				                {!!Form::date('year', '', array('class' => 'form-control')) !!} 
				            </div>
				       
				            <div class="col-md-6"> 
				                {!!Form::label('duration', 'Duration:', array('class' => 'form-spacing-top'))!!}
				                {!!Form::time('duration', null, array('class' => 'form-control', 'step' => 1)) !!}                
				            </div>
				        </div>

				        <div class="pt-3 row">       
				            <div class="col-md-6"> 
				                {!!Form::label('language_id', 'Language:', array('class' => 'form-spacing-top')) !!}
				                {!! Form::select('language_id', ['' => 'Choose a Language'] + $languages, null, array('class' => 'form-control'))!!}
				            </div>

				            <div class="col-md-6"> 
				                {!!Form::label('fsk_id', 'Age:') !!}
				                {!!Form::select('fsk_id', array('' => 'Choose Age', '1' => 'Approved for 0', '2' => 'Approved for 6', '3' => 'Approved for 12', '4' => 'Approved for 16', '5' => 'Approved for 18'), null, array('class' => 'form-control'))!!}
				            </div>    
				        </div>

				        <div class="pt-5 row">       
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

						<div class="row">
					        <div class="col-md-12 pt-4">       
					            {!!Form::label('description', 'Film description:', array('class' => 'form-spacing-top'))!!}
					            {!!Form::textarea('description', null, array('id' => 'summernote', 'class' => 'form-control', 'rows' => 6))!!}                       
					        </div>
				        </div>
						<div class="row">
					        <div class="col-md-12 pt-4"> 
			            {!!Form::submit('Add New Film', array('class' => 'btn btn-success btn-block')) !!}
			            {!!Form::close() !!} 
    						</div>
    					</div>
    				</div>
	            </div>
            </div> 
        </div>
    </div>
</div>

@endsection
