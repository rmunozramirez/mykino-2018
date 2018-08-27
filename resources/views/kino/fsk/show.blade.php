

@extends('layouts.app')
@section ('title',  "| $page_name")

@section('content')
@include('partials._out_nav')

<div class="container py-5">
   <div class="card">
      <div id="contenido">
         <!-- Tab panels -->
         <div class="card-header py-3">
            <h2><img height="50" src="{{$fsk->image ? URL::to('/images/' . $fsk->image) : URL::to('/images/fsk.png')}}" alt="{{$fsk->name}}" title="{{$fsk->name}}"> {!! $fsk->name !!} Age classification - 
            {{ $fsk->films_count }}  @if($fsk->films_count > 1) films @else film @endif
              <span class="very-small pull-right">
                <i class="fa fa-chevron-left"></i> <a href="{{route('kino.ages')}}"> Back to Age classifications</a>
              </span>
            </h2>
         </div>
         <div class="card-body py-3">
            <div class="inside">
               <div class="row">
                 <div class="col-md-12">
                    <div class="ibox-content">
                      <div class="table-responsive">
                     <table class="table table-striped table-bordered table-hover dataTables-example" >
                        <thead>
                           <tr>
                              <th>Film <i class="fa fa-sort"></i></th>
                              <th>Category <i class="fa fa-sort"></i></th>
                              <th>Language <i class="fa fa-sort"></i></th>
                              <th>Year <i class="fa fa-sort"></i></th>
                              <th>Trailer <i class="fa fa-sort"></i></th>
                           </tr>
                        </thead>
                        <tbody>
                           @foreach ($fsk->films as $element)
                           <tr>
                              <td>
                                 <img class="film-thumbnail" height="80" src="{{URL::to('/images/' . $element->image->slug ) }}" alt="{{$element->name}}" ><a href="{{route('kino.show', $element->slug)}}">{{$element->name}}</a>
                              </td>
                              <td><a href="{{route('kino.category', $element->category->slug)}}">{{$element->category->name}}</a></td>
                              <td><a href="{{route('kino.language', $element->language->slug)}}"><img height="74" src="{{$element->language->image ? URL::to('/images/' . $element->language->image) : URL::to('/images/language.png')}}" alt="{{$element->name}}"  title="{{$element->language->language}}"></a></td>
                              <td><a href="{{route('kino.year', date('Y', strtotime($element->year)))}}">{{date('Y', strtotime($element->year))}}</a></td>
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
      </div>
   </div>
</div>
@endsection

