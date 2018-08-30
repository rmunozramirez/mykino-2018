
@extends('layouts.app')
@section ('title',  "| $page_name")
@section('content')
@include('partials._out_nav')
<div class="container py-5">
   <div class="card">
      <div id="contenido">
         <!-- Tab panels -->
         <div class="card-header py-3">
            <h2>{{count($all_)}}  @if(count($all_) > 1) categories @else category @endif</h2>
         </div>
         <div class="card-body">
            <div class="row">
               <div class="col-md-12">
                  <div class="ibox-content">
                     <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover dataTables-example" >
                           <thead>
                              <tr>
                                 <th>Category  <i class="fa fa-sort"></i></th>
                                 <th>Description  <i class="fa fa-sort"></i></th>
                                 <th>Films  <i class="fa fa-sort"></i></th>
                              </tr>
                           </thead>
                           <tbody>
                              @foreach ($categories as $category)
                              <tr>
                                 <td>
                                    <a href="{{route('kino.category', $category->slug)}}">
                                    {{$category->name}}</a>
                                 </td>
                                 <td>{!! str_limit($category->description, 100, '...') !!}</td>
                                 <td>{{$category->films_count}}</td>
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