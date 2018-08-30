

@extends('layouts.app')
@section ('title',  "| $page_name")

@section('content')
@include('partials._out_nav')
<div class="container py-5">
   <div class="card">
      <div id="contenido">
         <!-- Tab panels -->
         <div class="card-header py-3">
        <h2>{{count($all_)}}  @if(count($all_) > 1) Age classifications @else Age classification @endif</h2>
         </div>
         <div class="card-body">
             <div class="row">
               <div class="col-md-12">
                  <div class="ibox-content">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover dataTables-example" >
                          <thead>
                              <tr>
                                <th>Age classification <i class="fa fa-sort"></i></th>
                                <th>Number of films <i class="fa fa-sort"></i></th>
                              </tr>
                          </thead>
                          <tbody>
                              @foreach ($all_ as $fsk)
                              <tr>
                                <td>
                                @if( $fsk->image )
                                    <img class="film-thumbnail" height="50" src="{{$fsk->image ? URL::to('/images/' . $fsk->image) : URL::to('/images/language.png')}}" alt="{{$fsk->fsk}}" >
                                  @else
                                    <i class="fas fa-tag fa-2x"></i> @endif
                                    <a href="{{route('kino.age', $fsk->slug)}}">{{$fsk->name}}</a>
                                </td>
                                <td>{{ $fsk->films_count}}</td>
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

