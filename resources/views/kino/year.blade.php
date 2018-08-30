

@extends('layouts.app')
@section ('title',  "| $page_name")
@section('content')
@include('partials._out_nav')

<div class="container py-5">
   <div class="card">
      <div id="contenido">
         <!-- Tab panels -->
         <div class="card-header py-3">
             <h2>Year {{date('Y', strtotime($films[0]->year))}}: {{count($films)}} Films</h2>
            </h2>
         </div>
         <div class="card-body">
               <div class="row">
                 <div class="col-md-12">
                    <div class="ibox-content">
                <div class="table-responsive">
                    @if($films)
                    <table class="table table-striped table-bordered table-hover dataTables-example" >
                       <thead>
                          <tr>
                              <th>Film  <i class="fa fa-sort"></th>
                              <th>Category <i class="fa fa-sort"></th>
                              <th>Language <i class="fa fa-sort"></th>
                              <th>FSK <i class="fa fa-sort"></th>
                              <th>Trailer <i class="fa fa-sort"></th>
                          </tr>
                       </thead>
                       <tbody>
                          @foreach($films as $film)
                          <tr>
                             <td>
                             <img class="film-thumbnail" height="80" src="{{URL::to('/images/' . $film->image->slug ) }}" alt="{{$film->name}}" ><a href="{{route('kino.show', $film->slug)}}">{{$film->name}}</a>
                           </td>
                             <td><a href="{{route('kino.category', $film->category->slug)}}">{{$film->category->name}}</a></td>
                             <td><a href="{{route('kino.language', $film->language->slug)}}"><img height="50" src="{{$film->language->image ? URL::to('/images/' . $film->language->image->slug) : URL::to('/images/language.png')}}" alt="{{$film->name}}" ></a></td>
                             <td><a href="{{route('kino.age', $film->fsk->slug)}}"><img height="50" src="{{$film->fsk->image ? URL::to('/images/' . $film->fsk->image) : URL::to('/images/language.png')}}" alt="{{$film->name}}" ></a></td>
                             <td><a href="{{ $film->trailer }}"><img class="play" height="74" src="{{URL::to('/images/play.png')}}" alt="{{$film->name}}"></a></td>
                          </tr>
                          @endforeach 
                 
                       </tbody>
                      </table>
                      @else
                         <h2>No Films</h2>
                      @endif
                </div>
                  </div>
                </div>
               </div>
         </div>
      </div>
   </div>
</div>
@endsection

