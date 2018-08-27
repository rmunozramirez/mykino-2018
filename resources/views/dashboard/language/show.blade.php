@extends('dashboard.index')
@section ('title', "| $element->name")
@section('content')

<!-- Profile panel  -->
<div class="wrapper wrapper-content animated fadeInUp">		
    <div class="row wrapper border-bottom white-bg">
		<div class="inside">
            <h2>
          @if( $element->image )
              <img height="50" src="{{$element->image ? URL::to('/images/' . $element->image->slug) : URL::to('/images/language.png')}}" alt="{{$element->name}}" title="{{$element->language}}">
            @else
              <i class="fa fa-language fa-2x"></i> @endif

               {!! $element->name !!} language - 
              {{ $element->films_count }}  @if($element->films_count > 1) films @else film @endif
	            <span class="small pull-right">
	            	<i class="fa fa-chevron-left"></i> <a class="small-link" href="{{route('language.index')}}"> Back to Language</a>
                <i class="fa fa-pencil"></i><a type="button" href="{{route('language.edit', $element->slug)}}"> Edit</a>
	        </h2>
      <div id="contenido"  class="card">
        <div class="row">
          <div class="ibox-content">
                    <div class="table-responsive">
                      @if($element->films_count)
                        <table class="table table-striped table-bordered table-hover dataTables-example" >
                          <thead>
                              <tr>
                                  <th>Film <i class="fa fa-sort"></i></th>
                                  <th>Actors <i class="fa fa-sort"></i></th>
                                  <th>Category <i class="fa fa-sort"></i></th>
                                  <th>Fsk <i class="fa fa-sort"></i></th>
                                  <th>Year <i class="fa fa-sort"></i></th>
                                  <th>Created at <i class="fa fa-sort"></i></th>
                              </tr>
                          </thead>
                          <tbody>
                              @foreach($element->films as $film)
                              <tr>
                                  <td>
                                      <img  class="film-thumbnail" height="80" src="{{URL::to('/images/' . $film->image->slug ) }}" alt="{{$film->name}}">
                                      <a href="{{route('films.show', $film->slug)}}">{{$film->name}}</a>
                                  </td>
                                  <td> {{ count($film->actors) }}</td>
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


