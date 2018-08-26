@extends('layouts.app')
@section ('title',  "| $page_name")

@section('content')

  <section id="content"> 

    <div id="last-film">

      @include('partials._out_nav')
      
      <div id="marca" class="text-white my-4 ml-4 text-center">
          <h2 class="">My Kino</h2>
          <h3>My collection of {{count($all_)}} films</h3>
      </div>
      <iframe width="560" height="315" src="{{ $element->trailer }}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
    </div>

    <div class="films-footer">
      <div class="row flex-center row-1 film-footer">
        <h2 class="text-center text-white">Recent included films</h2>
      </div>
      <div class="row flex-center row-1 film-footer">
        
        <!-- Three columns of text below the carousel -->
        @foreach ($films as $film)

        <div class="the_thumbnail">
             <img class="image" src="{{URL::to('/images/' . $film->image->slug ) }}" alt="{{$film->name}}" >
              <div class="overlay">
                <a href="{{route('kino.show', $film->slug)}}">
                    <div class="text small">{{$film->name}}</div>
                </a>
              </div>
          </div>
         
        @endforeach     
      </div><!-- /.row -->

      <div class="row flex-center row-1 my-3">

          {{ $films->links() }}

      </div>

    </div><!-- /.row --> 


          
  </section>



@endsection






