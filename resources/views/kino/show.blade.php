
@extends('layouts.app')
@section ('title',  "| $page_name")

@section('content')

  <div id="last-film">
   @include('partials._out_nav')
    <iframe width="560" height="315" src="{{ $element->trailer }}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
    </div>
      <div class="film-footer">
         <div class="container py-5">
            <div class="card">
               <div id="contenido">
                  <!-- Tab panels -->
                  <div class="card-header py-3">
                     <h2>{{ $element->name }}
                        <span class="very-small pull-right">
                        <a class="separator" href="{{route('kino.age', $element->fsk->slug)}}">{{$element->fsk->name}}</a>
                        <a class="separator" href="{{route('kino.language', $element->language->slug)}}">{{$element->language->name}} </a>
                        <a class="separator" href="{{route('kino.category', $element->category->slug)}}">{!! $element->category->name !!} </a>
                        <a class="separator" href="{{route('kino.year', date('Y', strtotime($element->year)))}}">{{date('Y', strtotime($element->year))}}</a>
                        {!! $element->duration !!} 
                        </span>
                     </h2>
                  </div>
                  <div class="card-body py-3">
                     <div class="inside">
                        <div class="row">
                           <div class="col-md-3">
                              <img class="img-responsive" src="{{URL::to('/images/' . $element->image->slug ) }}" alt="{{$element->name}}" >
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
                                                      <th>Actor</th>
                                                      <th>Films</th>
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
                                                         <a href="{{route('kino.actor', $actor->slug)}}">{{$actor->name}}</a>
                                                      </td>
                                                      <td>{{ count($actor->films) }}</td>
                                                   </tr>
                                                   @endforeach 
                                                </tbody>
                                             </table>
                                          </div>
                                       </div>
                                    </li>
                                    <li id="trailer" class="sky-tab-content-3">
                                       <iframe class="mt-3" width="560" height="315" src="{{ $element->trailer }}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                        <div class="row mt-3">
                           <div class="col-md-9 offset-md-3">
                              {!! Form::open(['route' => ['films.destroy', $element->slug], 'method' => 'DELETE']) !!}
                              {!! Form::submit('Delete', ['class' => 'btn btn-block btn-danger btn-sm']) !!}
                              {!! Form::close() !!}
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="card-footer ">
                  <div  class="row">
                     <div  class="col-md-6">
                        @if(! is_null($film_prev)) 
                        <a class="pull-left" href="{{ route('kino.show', $film_prev->slug) }}">
                           <h5 class="very-small"><i class="fas fa-angle-left"></i> {{ $film_prev->name }}</h5>
                        </a>
                        @endif
                     </div>
                     <div  class="col-md-6 text-right">
                        @if(! is_null($film_next)) 
                        <a href="{{ route('kino.show', $film_next->slug) }}">
                           <h5 class="very-small">{{ $film_next->name }}
                              <i class="fas fa-angle-right"></i>
                           </h5>
                        </a>
                        @endif
                     </div>
                  </div>
               </div>
            </div>
         </div>
   </div>
@endsection

