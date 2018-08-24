@extends('dashboard.index')
@section ('title', "| Alle $page_name")
@section('content')
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row wrapper border-bottom white-bg">
    	<div class="inside">
    		<h2>All {!! $page_name !!}</h2><hr />
			<div id="contenido"  class="card">
				<div class="row">
					<div class="ibox-content">
		                <div class="table-responsive">
		                    <table class="table table-striped table-bordered table-hover dataTables-example" >
					           <thead>
					              <tr>
					                 <th>Actor <i class="fa fa-sort"></th>
					                 <th>Films <i class="fa fa-sort"></th>
					                 <th>Created at <i class="fa fa-sort"></th>
					              </tr>
					           </thead>
					           <tbody>
				         			@foreach ($actors as $element)
					              	<tr>
					                 	<td>
					                  	@if( $element->image )
					                    	<img height="50" width="40" class="" src="{{URL::to('/images/' . $element->image->slug ) }}" alt="{{$element->name}}" >
					                    @else
					                    	<i class="fas fa-tag fa-2x"></i> @endif
					                  		<a href="{{route('actors.show', $element->slug)}}">{{$element->name}}</a>
					                	</td>
					                 	<td>{{ count($element->films) }}</td>
					              		<td>{{ $element->created_at->format('D j M Y')}}</td>
					              	</tr>
					              	@endforeach 
					           </tbody>
					        </table>     
				    	</div>
				    </div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection


