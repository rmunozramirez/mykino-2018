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
					<div class="ibox-content">
		                <div class="table-responsive">
		                    <table class="table table-striped table-bordered table-hover dataTables-example" >
				         	<thead>
					            <tr>
					                <th>Film <i class="fa fa-sort"></th>
					                <th>Category <i class="fa fa-sort"></th>
					                <th>Language <i class="fa fa-sort"></th> 
					                <th>FSK <i class="fa fa-sort"></th>
					                <th>Year <i class="fa fa-sort"></th>
					                <th>Deleted <i class="fa fa-sort"></th>
					                <th>Trailer <i class="fa fa-sort"></th>
					            </tr>
					         </thead>
				         	<tbody>
				         	@foreach ($all_tr as $element)
					            <tr>
					               <td>
					                  <img class="film-thumbnail" height="80" src="{{URL::to('/images/' . $element->image->slug ) }}" alt="{{$element->name}}" >{{$element->name}}
					             </td>
					               <td><a href="{{route('categories.show', $element->category->slug)}}">{{$element->category->name}}</a></td>
					               <td><a href="{{route('language.show', $element->language->slug)}}"><img height="74" src="{{$element->language->image ? URL::to('/images/' . $element->language->image) : URL::to('/images/language.png')}}" alt="{{$element->name}}"  title="{{$element->language->language}}"></a></td>
					               <td>
					                    <a href="{{route('fsk.show', $element->fsk->slug)}}">
					                      <img height="50" src="{{$element->fsk->image ? URL::to('/images/' . $element->fsk->image) : URL::to('/images/language.png')}}" alt="{{$element->name}}" title="{{$element->fsk->fsk}}"></a></td>
					               <td><a href="{{route('films.year', date('Y', strtotime($element->year)))}}">{{date('Y', strtotime($element->year))}}</a></td>
					               <td>{{$element->deleted_at->format('D j M Y')}}</td>>
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


