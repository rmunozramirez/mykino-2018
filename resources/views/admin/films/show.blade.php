

@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-header">           
      <div class="row">  
        <div class="col-md-10">  
            <h2 class="card-title">
              <img height="30" src="{{URL::to('/images/film.png') }}" alt="{{ $film->name }}">
              <span class="mt-2"> {{ $film->name }}</span>
            </h2>
        </div>  
        <div class="col-md-2  page-btns"> 
            <a type="button" class="btn btn-outline-secondary page-btns" href="{{route('films.edit', $film->slug)}}">Edit</a>
            <a type="button" class="btn film-thumbnail btn-outline-danger page-btns" href="{{route('films.delete', $film->slug)}}">Delete</a>
        </div>  
      </div>  
    </div>  

   <div class="card-body">

      <!-- Tab panels -->
    <div class="col-md-12">
      <div class="row py-3">
          <a href="{{route('fsk.show', $film->fsk->slug)}}">{{$film->fsk->fsk}}</a>
          | <a href="{{route('language.show', $film->language->slug)}}">{{$film->language->language}} </a>

          | <a href="{{route('categories.show', $film->category->slug)}}">{!! $film->category->category !!} </a>
          | {{date('Y', strtotime($film->year))}} 
          | {!! $film->duration !!} 


          </div>

         
    </div>
    <div class="row py-3">
       <div class="col-md-4">
          <img  src="{{URL::to('/images/' . $film->image->image ) }}" alt="{{$film->name}}" >
          
       </div>
      <div class="col-md-8">
        <iframe width="100%" height="400px" src="{!! $film->trailer !!}" frameborder="0" allowfullscreen></iframe>
      </div>
    </div>
            

    <hr />

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

