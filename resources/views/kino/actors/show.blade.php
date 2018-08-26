

@extends('layouts.app')
@section ('title',  "| $page_name")
@include('partials._out_nav')
@section('content')
<div class="container py-5">
<div class="card">
   <div id="contenido">
      <!-- Tab panels -->
      <div class="card-header py-3">
         <h3><img height="50" src="{{$element->image ? URL::to('/images/' . $element->image) : URL::to('/images/language.png')}}" alt="{{$element->name}}" title="{{$element->language}}"> {!! $element->name !!} category - 
            {{ $element->films_count }}  @if($element->films_count > 1) films @else film @endif
            <span class="very-small pull-right">
            <i class="fa fa-chevron-left"></i> <a href="{{route('kino.actors')}}"> Back to actors</a>
            </span>
         </h3>
      </div>
      <div class="card-body py-3">
         <div class="inside">

            <div class="row py-3">
               <div class="col-md-4">
                  <img class="img-responsive" src="{{URL::to('/images/' . $element->image->slug  ) }}" alt="{{$element->name}}" >
               </div>
               <div class="col-md-8">
                  <div class="post-title">
                     <h3>{{ count($element->films)}} films from {{$element->name}}</h3>
                  </div>
                  <div class="ibox-content">
                     <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover dataTables-example" >
                           <thead>
                              <th>Film <i class="fa fa-sort"></th>
                              <th>Category <i class="fa fa-sort"></th>
                              <th>Trailer <i class="fa fa-sort"></th>
                           </thead>
                           <tbody>
                              @foreach ($element->films as $film)
                              <tr>
                                 <td><a href="{{ route('kino.show', $film->slug) }}">
                                    <img height="80" src="{{URL::to('/images/' . $film->image->slug ) }}" alt="{{$film->name}}" >
                                    {{ $film->name }}</a>
                                 </td>
                                 <td><a href="{{ route('kino.category', $film->category->slug) }}">{{ $film->category->name }}</a></td>
                                 <td><a href="{{ $film->trailer }}"><i class="fa fa-play-circle fa-3x"></i></a></td>
                              </tr>
                              @endforeach
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
               </div
            </div>
         </div>
      </div>
   </div>
      <div class="card-footer ">
            <div  class="row">
               <div  class="col-md-6">
                  @if($actor_prev)
                  <h5 class="very-small"><a type="button" href="{{ route('kino.actor', $actor_prev->slug) }}"><i class="fas fa-angle-left"></i> {{ $actor_prev->name }}</a></h4>
                  @endif
               </div>
               <div  class="col-md-6">
                  @if($actor_next)
                  <h5 class="very-small"><a class="pull-right" href="{{ route('kino.actor', $actor_next->slug) }}"> {{ $actor_next->name }} <i class="fas fa-angle-right"></i></a></h5>
                  @endif
               </div>
            </div>
      </div>
</div>
@endsection

