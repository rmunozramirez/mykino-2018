

@extends('layouts.app')
@section ('title',  "| $page_name")
@include('partials._out_nav')
@section('content')
<div class="container py-5">
   <div class="card">
      <div id="contenido">
         <!-- Tab panels -->
         <div class="card-header py-3">
        <h2>{{count($all_)}}  @if(count($all_) > 1) Languages @else Language @endif</h2>
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
                                <th>Language <i class="fa fa-sort"></i></th>
                                <th>Number of films <i class="fa fa-sort"></i></th>
                              </tr>
                          </thead>
                          <tbody>
                              @foreach ($languages as $language)
                              <tr>
                                <td>
                                  @if( $language->image )
                                    <img height="50" src="{{$language->image ? URL::to('/images/' . $language->image) : URL::to('/images/language.png')}}" alt="{{$language->category}}" title="{{$language->name}}">
                                  @else
                                    <i class="fas fa-tag fa-2x"></i> @endif
                                    <a href="{{route('kino.language', $language->slug)}}">{{$language->name}}</a>
                                </td>
                                <td>{{ $language->films_count}}</td>                       
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

