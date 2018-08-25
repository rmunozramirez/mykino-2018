@extends('dashboard.index')
@section ('title', "| Trashed $page_name")
@section('content')

<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row wrapper border-bottom white-bg">
		<div class="inside">
            <h2>All trashed {!! $page_name !!}
            	<span class="small pull-right">
            		<i class="fa fa-chevron-left"></i> <a href="{{route('actors.index')}}">Back to Actors</a>
            	</span>
            </h2>
        	<hr>
			<div id="contenido"  class="card">
				<div class="row">
					<div class="ibox-content">
		                <div class="table-responsive">
		                    <table class="table table-striped table-bordered table-hover dataTables-example" >
					           <thead>
					              <tr>
					                 <th>Actor</th>
					                 <th>Films</th>
					                 <th>Deleted at</th>
					              </tr>
					           </thead>
					           <tbody>
				         			@foreach ($all_tr as $element)
					              	<tr>
					                 	<td>
					                  	@if( $element->image )
					                    	<img height="50" class="" src="{{URL::to('/images/' . $element->image->slug ) }}" alt="{{$element->name}}" >
					                    @else
					                    	<i class="fas fa-tag fa-2x"></i> @endif
					                  		<a href="{{route('actors.show', $element->slug)}}">{{$element->name}}</a>
					                	</td>
					                 	<td>{{ count($element->films) }}</td>
					              		<td>{{ $element->deleted_at->format('D j M Y')}}</td>
					              		<td><a href="{{route('actors.restore', $element->slug)}}">Restore</a></td>
					               		<td>
						            		{!! Form::open(['route' => ['actors.kill', $element->slug], 'method' => 'DELETE']) !!}
											{!! Form::submit('Permanent Delete', ['class' => 'btn btn-block btn-danger']) !!}
											{!! Form::close() !!}		
					               		</td>
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


		         	