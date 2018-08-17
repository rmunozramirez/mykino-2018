@extends('dashboard.index')
@section ('title', "| Alle Partner Büros")
@section('content')
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row wrapper border-bottom white-bg">
    	<div class="inside">
    		<h2>All {!! $page_name !!}</h2><hr />
			<div id="contenido"  class="card">
				<div class="row">
				         	@foreach ($all_ as $element)
					           <div class="col-md-2 actor-list">
				                <div class="card">
				                  <a href="{{route('actors.show', $element->slug)}}">
				                  <img class="img-responsive" src="{{URL::to('/images/' . $element->image->image ) }}" alt="{{$element->name}}" >
				                  <div class="card-body text-center">
				                    <h4 class="card-title">{{$element->name}}</h4>
				                    <p class="card-text">Films: {{ count($element->films) }}</p>
				                  </div>
				                </a>
				                </div>
				              </div>
				            @endforeach
				</div>
			</div>
		</div>
	</div>
</div>

@endsection


