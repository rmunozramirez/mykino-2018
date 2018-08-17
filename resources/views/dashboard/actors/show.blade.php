@extends('dashboard.index')
@section ('title', "| $element->name")
@section('content')

<!-- Profile panel  -->
<div class="wrapper wrapper-content animated fadeInUp">		
    <div class="row wrapper border-bottom white-bg">
		<div class="inside">
            <h2>{!! $element->name !!}
	            <span class="small pull-right">
	            	<i class="fa fa-chevron-left"></i> <a class="small-link" href="{{route('films.index')}}"> Back to Films</a>
	            	<i class="fa fa-pencil"></i><a type="button" href="{{route('films.edit', $element->slug)}}"> Edit</a>
	            </span>
	        </h2>
        	<hr>
			<div id="contenido"  class="card">
      <div class="inside">
        <!-- Tab panels -->
        <div class="row py-3"> 
          <div class="col-md-12">
            <a class="separator" href="{{route('fsk.show', $element->fsk->slug)}}">{{$element->fsk->fsk}}</a>
            <a class="separator" href="{{route('language.show', $element->language->slug)}}">{{$element->language->language}} </a>
            <a class="separator" href="{{route('categories.show', $element->category->slug)}}">{!! $element->category->category !!} </a>
            <a class="separator" href="{{route('films.year', date('Y', strtotime($element->year)))}}">{{date('Y', strtotime($element->year))}}</a>
            {!! $element->duration !!} 
          </div> 
      </div>
      <div class="row py-3">
         <div class="col-md-4">
            <img  src="{{URL::to('/images/' . $element->image->image ) }}" alt="{{$element->name}}" >
         </div>
        <div class="col-md-8">
          <!-- video id="player-obj" controls="" src="{!! $element->trailer !!}" frameborder="0" allowfullscreen></video --> 
           <video width="100%" height="360" controls>
            <source src="{{ asset('films/xanadu.mp4') }}" type="video/mp4">
          </video> 
        </div>
      </div>
              
      <hr />

      <div class="row">
         <!--/.Panel 1-->
         <!--Panel 2-->
         <div class="col-md-12" id="sinopsis" role="tabpanel">
            <div class="contenido">{!! $element->description !!}</div>
         </div>
      </div>
               <!--/.Panel 2-->

      <hr />

      <div class="row">
         <!--Panel 3-->
         <div class="col-md-12" id="actors" role="tabpanel">
            <h3>Actors playing in "<?php echo ($element->name); ?>"</h3>
         </div>
         <!--/.Panel 3-->
      </div>
    </div>
			</div>
			<div class="card-footer">
				<div class="inside">
					<div class="row">
						<div class="col-md-6">
			            	{!! Form::open(['route' => ['films.destroy', $element->slug], 'method' => 'DELETE']) !!}
							{!! Form::submit('Delete', ['class' => 'btn btn-block btn-danger btn-sm']) !!}
							{!! Form::close() !!}
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Profile panel  -->

@endsection


