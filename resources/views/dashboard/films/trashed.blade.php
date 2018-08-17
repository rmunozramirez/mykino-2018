@extends('dashboard.index')
@section ('title', "| Trashed $page_name")
@section('content')

<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row wrapper border-bottom white-bg">
		<div class="inside">
            <h2>All {!! $page_name !!}
            <span class="small pull-right">
            	<i class="fa fa-chevron-left"></i> <a href="{{route('films.index')}}">Back to Films</a>
            </span></h2>
        	<hr>
			<div id="contenido"  class="card">
			    <div class="row">
			    	<div class="col-md-12 pt-4">
						@if(count($all_tr) > 0)
							<table class="table table-striped table-hover">
					         	<thead>
						            <tr>
						                <th>Büro</th>
						                <th>Owner</th>
						                <th>Category</th>
						                <th>Since</th>
						            </tr>
						         </thead>
					         <tbody>
					         	@foreach ($all_tr as $element)
					            <tr>
			                		<td>
										<a href="{{route('bueros.show', $element->slug)}}">
							               	<figure>
							               		@foreach($element->imageables as $image)
							               		@if($image->imageable_type === 'bueros' && $image->imageable_id === $element->id)
								            	<img class="mr-4 img-circle" height="50" width="50"  src="{{URL::to('/images/' . $image->slug)}}" alt="{{ $element->name }}" name="{{ $element->name }}" />
								            	@endif
								            	@endforeach
								            	<span class="pl-5"> {{$element->title}}</span>
								            </figure>
			                			</a>
			                		</td>					                		
			                		<td>
					               		<a href="{{route('profiles.show', $element->profile->slug)}}">
					               			{{$element->profile->title}}
					               		</a>
			                		</td>
			                		<td><a href="{{route('categories.show', $element->category->slug)}}">
			                			{{$element->category->title}}</a>
			                		</td>
					              	<td>{{$element->created_at->format('D j M Y')}}</td>
					               <td><a href="{{route('bueros.restore', $element->slug)}}">Restore</a></td>
					               <td>
						            	{!! Form::open(['route' => ['bueros.kill', $element->slug], 'method' => 'DELETE']) !!}
										{!! Form::submit('Permanent Delete', ['class' => 'btn btn-block btn-danger']) !!}
										{!! Form::close() !!}		
					               </td>
					            </tr>
					            @endforeach
					         </tbody>
					      	</table>
					      	<div class="text-center">
						   
						    </div>
						@else
							<h3>No trashed Films!</h3>
						@endif
					</div>	
				</div>
			</div>
		</div>
	</div>
</div>
@endsection


