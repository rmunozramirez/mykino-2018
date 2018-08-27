@extends('dashboard.index')
@section ('title', "| All languages")
@section('content')
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row wrapper border-bottom white-bg">
    	<div class="inside">
    		<h2>{{count($all_)}}  @if(count($all_) > 1) Languages @else Language @endif</h2><hr />
			<div id="contenido"  class="card">
				<div class="row">
					<div class="ibox-content">
		                <div class="table-responsive">
		                    <table class="table table-striped table-bordered table-hover dataTables-example" >
					          	<thead>
					              	<tr>
					                 	<th>Language <i class="fa fa-sort"></i></th>
					                 	<th>Number of films <i class="fa fa-sort"></i></th>
					                 	<th>Created at <i class="fa fa-sort"></i></th>
					              	</tr>
					           	</thead>
					           	<tbody>
					              	@foreach ($languages as $language)
					              	<tr>
					                 	<td>
					                  	@if( $language->image )
					                    	<img height="50" src="{{$language->image ? URL::to('/images/' . $language->image->slug) : URL::to('/images/language.png')}}" alt="{{$language->name}}" title="{{$language->language}}">
					                    @else
					                    	<i class="fa fa-language fa-3x"></i> @endif
					                  		<a href="{{route('language.show', $language->slug)}}"> {{$language->name}}</a>
					                	</td>
					                 	<td>{{ $language->films_count}}</td>
				               			<td>{{ $language->created_at->format('D j M Y') }}</td>					                 
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


