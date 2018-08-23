@extends('dashboard.index')
@section ('title', "| $fsk->name")
@section('content')

<!-- Profile panel  -->
<div class="wrapper wrapper-content animated fadeInUp">		
    <div class="row wrapper border-bottom white-bg">
		<div class="inside">
            <h2>Age classification: <img height="50" src="{{$fsk->image ? URL::to('/images/' . $fsk->image) : URL::to('/images/language.png')}}" alt="{{$fsk->name}}" title="{{$fsk->fsk}}"> {!! $fsk->name !!}
	            <span class="small pull-right">
	            	<i class="fa fa-chevron-left"></i> <a class="small-link" href="{{route('fsk.index')}}"> Back to Age classifications</a>
	        </h2>
          <hr>
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
                              <th>Year</th>
                              <th>Trailer</th>
                              <th>Created at</th>
                          </tr>
                       </thead>
                      <tbody>
                      @foreach ($fsk->films as $element)
                          <tr>
                             <td>
                                <img class="film-thumbnail" height="80" src="{{URL::to('/images/' . $element->image->slug ) }}" alt="{{$element->name}}" ><a href="{{route('films.show', $element->slug)}}">{{$element->name}}</a>
                           </td>
                             <td><a href="{{route('categories.show', $element->category->slug)}}">{{$element->category->name}}</a></td>
                             <td><a href="{{route('language.show', $element->language->slug)}}"><img height="74" src="{{$element->language->image ? URL::to('/images/' . $element->language->image) : URL::to('/images/language.png')}}" alt="{{$element->name}}"  title="{{$element->language->language}}"></a></td>
                             
                             <td><a href="{{route('films.year', date('Y', strtotime($element->year)))}}">{{date('Y', strtotime($element->year))}}</a></td>
                             <td><a href="{{ $element->trailer }}"><img class="play" height="50" src="{{URL::to('/images/play.png')}}" alt="{{$element->name}}" title="{{$element->name}}"></a></td>
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
<!-- End Profile panel  -->

@endsection


