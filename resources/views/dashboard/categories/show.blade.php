@extends('dashboard.index')
@section ('title', "| $element->name")
@section('content')

<!-- Profile panel  -->
<div class="wrapper wrapper-content animated fadeInUp">		
    <div class="row wrapper border-bottom white-bg">
		<div class="inside">
            <h2>Category: <img height="50" src="{{$element->image ? URL::to('/images/' . $element->image) : URL::to('/images/language.png')}}" alt="{{$element->name}}" title="{{$element->name}}">  {!! $element->name !!}
	            <span class="small pull-right">
	            	<i class="fa fa-chevron-left"></i> <a class="small-link" href="{{route('categories.index')}}"> Back to Categories</a>
	            	<i class="fa fa-pencil"></i><a type="button" href="{{route('categories.edit', $element->slug)}}"> Edit</a>
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
                                  <th>Film</th>
                                  <th>Fsk</th>
                                  <th>Language</th> 
                                  <th>Year</th>
                                  <th>Trailer</th>
                                  <th>Created at</th>
                              </tr>
                           </thead>
                  <tbody>
                  @foreach ($element->films as $element)
                      <tr>
                         <td>
                            <img class="film-thumbnail" height="80" src="{{URL::to('/images/' . $element->image->slug ) }}" alt="{{$element->name}}" ><a href="{{route('films.show', $element->slug)}}">{{$element->name}}</a>
                       </td>
                         <td><a href="{{route('fsk.show', $element->fsk->slug)}}">
                                <img class="film-thumbnail" height="80" src="{{$element->fsk->image ? URL::to('/images/' . $element->fsk->image) : URL::to('/images/language.png')}}" alt="{{$element->fsk}}" >
                            </a></td>
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


