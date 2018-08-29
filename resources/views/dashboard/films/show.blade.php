@extends('dashboard.index')
@section ('title', "| Film: $element->name")
@section('content')

<!-- Profile panel  -->
<div class="wrapper wrapper-content animated fadeInUp">		
    <div class="row wrapper border-bottom white-bg">
		<div class="inside">
            <h2>{!! $element->name !!}
	            <span class="small pull-right">
	            	<i class="fa fa-chevron-left"></i> <a class="small-link" href="{{route('films.index')}}"> Back to Films</a>
	            	<i class="fa fa-pencil"></i><a type="button" href="{{route('films.edit', $element->slug)}}"> Edit</a>
	            </span>
	        </h2>
        	<hr>
			<div id="contenido"  class="card">
          <!-- Tab panels -->
        <div class="row py-3"> 
          <div class="col-md-12">
            <a class="separator" href="{{route('fsk.show', $element->fsk->slug)}}">{{$element->fsk->name}}</a>
            <a class="separator" href="{{route('language.show', $element->language->slug)}}">{{$element->language->name}} </a>
            <a class="separator" href="{{route('categories.show', $element->category->slug)}}">{!! $element->category->name !!} </a>
            <a class="separator" href="{{route('films.year', date('Y', strtotime($element->year)))}}">{{date('Y', strtotime($element->year))}}</a>
            {!! $element->duration !!}
          </div> 
        </div>
        <div class="row py-5">
          <div class="col-md-3">
            <img name="{{$element->name}}" class="img-responsive" src="{{URL::to('/images/' . $element->image->slug ) }}" alt="{{$element->name}}" >
          </div>
          <div class="col-md-9">
             <div class="sky-tabs sky-tabs-amount-3 sky-tabs-pos-top-justify sky-tabs-anim-fade sky-tabs-response-to-icons" >
                <input type="radio" name="sky-tabs" checked id="sky-tab1" class="sky-tab-content-1">
                <label for="sky-tab1"><span><span><i class="fa fa-film"></i> Synopsis</span></span></label>
                
                <input type="radio" name="sky-tabs" id="sky-tab2" class="sky-tab-content-2">
                <label for="sky-tab2"><span><span><i class="fa fa-users"></i> Actors</span></span></label>

                <input type="radio" name="sky-tabs" id="sky-tab3" class="sky-tab-content-3">
                <label for="sky-tab3"><span><span><i class="fa fa-video"></i> Video</span></span></label>

                <!-- Tab panes -->
                <ul>
                   <li class="sky-tab-content-1">
                      {!! $element->description !!}
                   </li>
                   <li class="sky-tab-content-2">
                      <div class="ibox-content">
                         <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover dataTables-example" >
                               <thead>
                                  <tr>
                                     <th>Actor <i class="fa fa-sort"></th>
                                     <th>Films <i class="fa fa-sort"></th>
                                     <th>Created at <i class="fa fa-sort"></th>
                                  </tr>
                               </thead>
                               <tbody>
                                  @foreach ($element->actors as $actor)
                                  <tr>
                                     <td>
                                        @if( $actor->image )
                                        <img height="50" class="" src="{{URL::to('/images/' . $actor->image->slug ) }}" alt="{{$actor->name}}" >
                                        @else
                                        <i class="fas fa-tag fa-2x"></i> @endif
                                        <a href="{{route('actors.show', $actor->slug)}}">{{$actor->name}}</a>
                                     </td>
                                     <td>{{ count($actor->films) }}</td>
                                     <td>{{ $actor->created_at->format('D j M Y')}}</td>
                                  </tr>
                                  @endforeach 
                               </tbody>
                            </table>
                         </div>
                      </div>
                   </li>
                   <li id="video" class="sky-tab-content-3 ">
                      <div class="inside">
                      <iframe width="560" height="315" src="{{ $element->trailer }}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                    </div>
                   </li>
                </ul>
             </div>
          </div>
      </div>
			<div class="card-footer">
				<div class="inside">
					<div class="row">
						<div class="col-md-9 col-md-offset-3">
			        {!! Form::open(['route' => ['films.destroy', $element->slug], 'method' => 'DELETE']) !!}
							{!! Form::submit('Delete', ['class' => 'btn btn-block btn-danger btn-sm']) !!}
							{!! Form::close() !!}
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Profile panel  -->

@endsection


