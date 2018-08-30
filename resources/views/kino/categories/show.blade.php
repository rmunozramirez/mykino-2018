

@extends('layouts.app')
@section ('title',  "| $page_name")

@section('content')
@include('partials._out_nav')
<div class="container py-5">
   <div class="card">
      <div id="contenido">
         <!-- Tab panels -->
         <div class="card-header py-3">
            <h2><img height="50" src="{{$element->image ? URL::to('/images/' . $element->image) : URL::to('/images/language.png')}}" alt="{{$element->name}}" title="{{$element->language}}"> {!! $element->name !!} category - 
              {{ $element->films_count }}  @if($element->films_count > 1) films @else film @endif
              <span class="very-small pull-right">
                <i class="fa fa-chevron-left"></i> <a href="{{route('kino.categories')}}"> Back to Categories</a>
              </span>
            </h2>
         </div>
         <div class="card-body">
               <div class="row">
                 <div class="col-md-12">
                    <div class="ibox-content">
                      <div class="table-responsive">
                          <table class="table table-striped table-bordered table-hover dataTables-example" >
                            <thead>
                                <tr>
                                    <th>Film <i class="fa fa-sort"></i></th>
                                    <th>Age <i class="fa fa-sort"></i></th>
                                    <th>Language <i class="fa fa-sort"></i></th> 
                                    <th>Year <i class="fa fa-sort"></i></th>
                                    <th>Trailer <i class="fa fa-sort"></i></th>
                                </tr>
                             </thead>
                            <tbody>
                            @foreach ($element->films as $element)
                                <tr>
                                   <td>
                                      <img class="film-thumbnail" height="80" src="{{URL::to('/images/' . $element->image->slug ) }}" alt="{{$element->name}}" ><a href="{{route('kino.show', $element->slug)}}">{{$element->name}}</a>
                                    </td>
                                   <td><a href="{{route('kino.age', $element->fsk->slug)}}">
                                          <img class="film-thumbnail" height="50" src="{{$element->fsk->image ? URL::to('/images/' . $element->fsk->image) : URL::to('/images/language.png')}}" alt="{{$element->fsk}}" >
                                      </a></td>
                                   <td><a href="{{route('kino.language', $element->language->slug)}}"><img height="50" src="{{$element->language->image ? URL::to('/images/' . $element->language->image->slug) : URL::to('/images/language.png')}}" alt="{{$element->name}}"  title="{{$element->language->language}}"></a></td>
                                   
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
@endsection

