@extends('dashboard.index')
@section ('title', "| All Films")
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
					                <th>Film</th>
					                <th>Category</th>
					                <th>Language</th> 
					                <th>FSK</th>
					                <th>Year</th>
					                <th>Created at</th>
					                <th>Trailer</th>
					            </tr>
					         </thead>
				         	<tbody>
				         	@foreach ($all_ as $element)
					            <tr>
					               <td>
					                  <img class="film-thumbnail" height="80" src="{{URL::to('/images/' . $element->image->slug ) }}" alt="{{$element->name}}" ><a href="{{route('films.show', $element->slug)}}">{{$element->name}}</a>
					             </td>
					               <td><a href="{{route('categories.show', $element->category->slug)}}">{{$element->category->name}}</a></td>
					               <td><a href="{{route('language.show', $element->language->slug)}}"><img height="74" src="{{$element->language->image ? URL::to('/images/' . $element->language->image) : URL::to('/images/language.png')}}" alt="{{$element->name}}"  title="{{$element->language->language}}"></a></td>
					               <td>
					                    <a href="{{route('fsk.show', $element->fsk->slug)}}">
					                      <img height="50" src="{{$element->fsk->image ? URL::to('/images/' . $element->fsk->image) : URL::to('/images/language.png')}}" alt="{{$element->name}}" title="{{$element->fsk->fsk}}"></a></td>
					               <td><a href="{{route('films.year', date('Y', strtotime($element->year)))}}">{{date('Y', strtotime($element->year))}}</a></td>
					               <td>{{$element->created_at->format('D j M Y')}}</td>
					               <td><a href="{{ $element->trailer }}"><img class="play" height="50" src="{{URL::to('/images/play.png')}}" alt="{{$element->name}}" title="{{$element->name}}"></a></td>
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


