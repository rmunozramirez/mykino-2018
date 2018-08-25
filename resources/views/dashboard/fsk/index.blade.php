@extends('dashboard.index')
@section ('title', "| All Age classifications")
@section('content')
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row wrapper border-bottom white-bg">
    	<div class="inside">
    		<h2>{{count($all_)}}  @if(count($all_) > 1) Age classifications @else Age classification @endif</h2><hr />
			<div id="contenido"  class="card">
				<div class="row">
					<div class="ibox-content">
		                <div class="table-responsive">
		                    <table class="table table-striped table-bordered table-hover dataTables-example" >
					           	<thead>
					              	<tr>
					                 	<th>Age classification <i class="fa fa-sort"></i></th>
					                 	<th>Number of films <i class="fa fa-sort"></i></th>
					                 	<th>Created at <i class="fa fa-sort"></i></th>
					              	</tr>
					           	</thead>
					           	<tbody>
					              	@foreach ($all_ as $fsk)
					              	<tr>
					                 	<td>
					                  @if( $fsk->image )
					                    	<img class="film-thumbnail" height="50" src="{{$fsk->image ? URL::to('/images/' . $fsk->image) : URL::to('/images/language.png')}}" alt="{{$fsk->fsk}}" >
					                    @else
					                    	<i class="fas fa-tag fa-2x"></i> @endif
					                  		<a href="{{route('fsk.show', $fsk->slug)}}">{{$fsk->name}}</a>
					                	</td>
					                	<td>{{ $fsk->films_count}}</td>
					               		<td>{{$fsk->created_at->format('D j M Y')}}</td>
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


