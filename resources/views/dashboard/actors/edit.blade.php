@extends('dashboard.index')
@section ('title', "| $element->title | Edit")
@section('content')
<section id="content">
    <div class="wrapper wrapper-content animated fadeInUp">
        <div class="row wrapper border-bottom white-bg">
		<div class="inside">
            <h2>Edit: {!! $element->name !!}
            <span class="small pull-right">
            	<i class="fa fa-chevron-left"></i> <a href="{{route('actors.index')}}">Back to {!! $page_name !!}</a>
            </span></h2>
        	<hr>
			    <div id="contenido"  class="card">
				    @if(count($errors) > 0)
				        <ul class="list-group">    
				            @foreach($errors->all() as $error)
				                <li class="list-group-item text-danger">{{$error}}</li>
				            @endforeach
				        </ul>
				    @endif
						<div class="tab-pane" id="tab-profile">
							<div class="m-t-md">
							    <div class="inside">
							        {!! Form::model($element, ['method'=>'PATCH', 'action'=> ['ActorsController@update', $element->slug ],'files'=>true]) !!}
							        <div class="pt-3 row">       
							            <div class="col-md-3"> 
					                        <img class="big-img img-responsive"  src="{{URL::to('/images/' . $element->image->slug ) }}" alt="{{$element->name}}" >

						                    <div class="pt-4"> 
						                        {!!Form::label('image_name', 'Change Image') !!}
						                        {!!Form::file('image_name') !!}
						                    </div>
							            </div>

							            <div class="col-md-9"> 

					                        <div class="pt-4">        
					                            {!!Form::label('name', 'Actors new name', array('class' => 'form-spacing-top'))!!}
					                            {!!Form::text('name', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255'))!!}
					                        </div>

							                <div class="pt-3">
					                            {!!Form::label('gender_id  ', 'Actors genre', array('class' => 'form-spacing-top'))!!}
					                            {!! Form::select('gender_id', ['' => 'Choose a gender', '2' => 'Man', '1' => 'Woman'] , null, array('class' => 'form-control'))!!}
							                </div>
							            </div>
							        </div>
							        <div class="pt-3 row">
										<div class="pt-5 col-md-9 col-md-offset-3">   
							                {!!Form::submit('Edit Actor', array('class' => 'btn btn-success btn-block')) !!}
							                {!!Form::close() !!}
								        </div>
							        </div>
							    </div> 		
							</div>
				    	</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

@endsection
