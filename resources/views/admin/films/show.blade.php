

@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-header">           
      <div class="row">  
        <div class="col-md-9">  
            <h2 class="card-title">
               <i class="fas fa-film"></i> 
              <span class="mt-2"> {{ $film->name }}</span>
            </h2>
        </div>  
        <div class="col-md-3  page-btns"> 
            <a type="button" class="btn btn-outline-secondary page-btns" href="{{route('films.edit', $film->slug)}}">Edit</a>
            <a type="button" class="btn film-thumbnail btn-outline-danger page-btns" href="{{route('films.delete', $film->slug)}}">Delete</a>
        </div>  
      </div>  
    </div>  

   <div class="card-body">
      <div class="inside">
        <!-- Tab panels -->
        <div class="row py-3"> 
          <div class="col-md-12">

            <a class="separator" href="{{route('fsk.show', $film->fsk->slug)}}">{{$film->fsk->fsk}}</a>
            <a class="separator" href="{{route('language.show', $film->language->slug)}}">{{$film->language->language}} </a>
            <a class="separator" href="{{route('categories.show', $film->category->slug)}}">{!! $film->category->category !!} </a>
            <a class="separator" href="{{route('films.year', date('Y', strtotime($film->year)))}}">{{date('Y', strtotime($film->year))}}</a>
            {!! $film->duration !!} 
          </div> 
      </div>
      <div class="row py-3">
         <div class="col-md-4">
            <img  src="{{URL::to('/images/' . $film->image->image ) }}" alt="{{$film->name}}" >
            
         </div>
        <div class="col-md-8">
          <video id="player-obj" controls="" src="{!! $film->trailer !!}" frameborder="0" allowfullscreen></video>
        </div>
      </div>
              
      <hr />

      <div class="row">
         <!--/.Panel 1-->
         <!--Panel 2-->
         <div class="col-md-12" id="sinopsis" role="tabpanel">
            <div class="contenido">{!! $film->description !!}</div>
         </div>
      </div>
               <!--/.Panel 2-->

      <hr />

      <div class="row">
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

