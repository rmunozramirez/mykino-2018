
@extends('layouts.app')
@section ('title',  "| $page_name")

@section('content')
@include('partials._out_nav')

<div class="container py-5">
   <div class="card">
      <div id="contenido">
         <!-- Tab panels -->
         <div class="card-header py-3">
            <h2><img height="50" src="{{$element->image ? URL::to('/images/' . $element->image) : URL::to('/images/language.png')}}" alt="{{$element->name}}" title="{{$element->language}}"> {!! $element->name !!} language - 
              {{ $element->films_count }}  @if($element->films_count > 1) films @else film @endif
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
                      @if($element->films_count)
                        <table class="table table-striped table-bordered table-hover dataTables-example" >
                          <thead>
                              <tr>
                                  <th>Film <i class="fa fa-sort"></i></th>
                                  <th>Category <i class="fa fa-sort"></i></th>
                                  <th>Fsk <i class="fa fa-sort"></i></th>
                                  <th>Year <i class="fa fa-sort"></i></th>
                              </tr>
                          </thead>
                          <tbody>
                              @foreach($element->films as $film)
                              <tr>
                                  <td>
                                      <img  class="film-thumbnail" height="80" src="{{URL::to('/images/' . $film->image->slug ) }}" alt="{{$film->name}}">
                                      <a href="{{route('kino.show', $film->slug)}}">{{$film->name}}</a>
                                  </td>
                                  <td><a href="{{route('kino.category', $film->category->slug)}}">{{$film->category->name}}</a></td>
                                  <td>
                                      <a href="{{route('kino.age', $film->fsk->slug)}}"><img height="50" src="{{$film->fsk->image ? URL::to('/images/' . $film->fsk->image) : URL::to('/images/language.png')}}" alt="{{$film->name}}" ></a></td>
                                  <td><a href="{{route('kino.year', date('Y', strtotime($film->year)))}}">{{date('Y', strtotime($film->year))}}</a></td>
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
   </div>
</div>
@endsection

