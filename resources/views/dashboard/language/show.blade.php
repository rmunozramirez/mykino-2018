@extends('dashboard.index')
@section ('title', "| $element->name")
@section('content')

<!-- Profile panel  -->
<div class="wrapper wrapper-content animated fadeInUp">		
    <div class="row wrapper border-bottom white-bg">
		<div class="inside">
            <h2><img height="50" src="{{$element->image ? URL::to('/images/' . $element->image) : URL::to('/images/language.png')}}" alt="{{$element->name}}" title="{{$element->language}}"> {!! $element->name !!} language- 
              {{ $element->films_count }}  @if($element->films_count > 1) films @else film @endif
	            <span class="small pull-right">
	            	<i class="fa fa-chevron-left"></i> <a class="small-link" href="{{route('language.index')}}"> Back to Language</a>
	        </h2>
      <div id="contenido"  class="card">
        <div class="row">
          <div class="ibox-content">
                    <div class="table-responsive">
                      @if($element->films_count)
                        <table class="table table-striped table-bordered table-hover dataTables-example" >
                          <thead>
                              <tr>
                                  <th>Film</th>
                                  <th>Category</th>
                                  <th>Fsk</th>
                                  <th>Year</th>
                                  <th>Created at</th>
                              </tr>
                          </thead>
                          <tbody>
                              @foreach($element->films as $film)
                              <tr>
                                  <td>
                                      <img  class="film-thumbnail" height="80" src="{{URL::to('/images/' . $film->image->slug ) }}" alt="{{$film->name}}">
                                      <a href="{{route('films.show', $film->slug)}}">{{$film->name}}</a>
                                  </td>
                                  <td><a href="{{route('categories.show', $film->category->slug)}}">{{$film->category->name}}</a></td>
                                  <td>
                                      <a href="{{route('fsk.show', $film->fsk->slug)}}"><img height="50" src="{{$film->fsk->image ? URL::to('/images/' . $film->fsk->image) : URL::to('/images/language.png')}}" alt="{{$film->name}}" ></a></td>
                                  <td><a href="{{route('films.year', date('Y', strtotime($film->year)))}}">{{date('Y', strtotime($film->year))}}</a></td>
                                  <td>{{ $film->created_at->format('D j M Y')}}</td>
                              </tr>
                              @endforeach
                          </tbody>
                      </table>
                      @else
                      <h2>No Films in {!! strtolower($element->name) !!} language </h2> 
                      <a href="{{route('language.index')}}">Back</a>

                  </table>
                @endif                  
            </div>
          </div>
        </div>
      </div>

		</div>
	</div>
</div>
<!-- End Profile panel  -->

@endsection


