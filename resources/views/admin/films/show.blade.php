

@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-header">           
      <div class="row">  
        <div class="col-md-10">  
            <h2 class="card-title">{{ $film->name }}</h2>
        </div>  
        <div class="col-md-2  page-btns"> 
            <a type="button" class="btn btn-sm btn-outline-secondary page-btns" href="{{route('films.edit', $film->slug)}}">Edit</a>
            <a type="button" class="btn btn-sm btn-outline-danger page-btns" href="{{route('films.delete', $film->slug)}}">Delete</a>
        </div>  
      </div>  
    </div>  

   <div class="card-body">

      <!-- Tab panels -->

            <div class="row py-3">
               <div class="col-md-5">
                  <img  src="{{URL::to('/images/' . $film->image->image ) }}" alt="{{$film->name}}" >
               </div>
               <div class="col-md-7">
                  <dl>
                     <dd>Title:{!! $film->name !!}</dd>
                     <dd>Genre: <a href="{{route('categories.show', $film->category->slug)}}">{!! $film->category->category !!}</a></dd>
                     <dd>Date: {!! $film->year !!}</dd>
                     <dd>Duration: {!! $film->duration !!}</dd>
                     <dd>Language: {!! $film->language->language !!}</dd>
                     <dd>Trailer: <a href="{!! $film->trailer !!}">{!! $film->name !!}</a>
                     <dd>Age: <a href="{{route('fsk.show', $film->fsk->slug)}}"><img height="50" src="{{URL::to('/images/' . $film->fsk->image ) }}" alt="{{$film->name}}" ></a> </dd>
                  </dl>
               </div>

            </div>
            <hr>
            <div class="row">
               <!--/.Panel 1-->
               <!--Panel 2-->
               <div class="col-md-12" id="sinopsis" role="tabpanel">
                  <div class="content bottom-50 contenido">{!! $film->description !!}</div>
               </div>
               <!--/.Panel 2-->
            <hr>   
               <!--Panel 3-->
               <div class="col-md-12" id="actors" role="tabpanel">
                  <h3>Actors playing in "<?php echo ($film->name); ?>"</h3>
               </div>
               <!--/.Panel 3-->
            </div>
      </div>
   </div>
</div>
@endsection

