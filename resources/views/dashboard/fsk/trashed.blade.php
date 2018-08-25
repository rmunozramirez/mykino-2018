@extends('dashboard.index')
@section ('title', "| Trashed $page_name")
@section('content')

<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row wrapper border-bottom white-bg">
		<div class="inside">
            <h2>All trashed {!! $page_name !!}
            <span class="small pull-right">
            	<i class="fa fa-chevron-left"></i> <a href="{{route('films.index')}}">Back to Films</a>
            </span></h2>
        	<hr>
			<div id="contenido"  class="card">
				<div class="row">
					<div class="inside"> 
				    	@if($all_)
							<div class="row offset-1 mt-5"> 
				            @foreach($all_tr as $fsk)
				              	<div class="col-md-2 text-center">
				                  	<a href="{{route('fsk.show', $fsk->slug)}}">
				                      	<img class="film-thumbnail" height="80" src="{{$fsk->image ? URL::to('/images/' . $fsk->image) : URL::to('/images/language.png')}}" alt="{{$fsk->fsk}}" >
				                      	<h5 class="mt-3">{{$fsk->fsk}}</h5>
				                  	</a>
				                  	<h2>{{$fsk->films_count}}</h2>
				              	</div>
				            @endforeach 
				          	</div>
				    		@else
				        <h1>There is not films</h1>      
				        @endif
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection


