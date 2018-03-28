@extends('home')

@include('partials._out_nav')

@section('content')

  <section id="content" class="films-footer"> 


    <div class="flex-center">

      <!-- Three columns of text below the carousel -->
      @foreach ($films as $film)
      <div class="the_thumbnail">
           <img class="image" src="{{URL::to('/images/' . $film->image->image ) }}" alt="{{$film->name}}" >
            <div class="overlay">
              <a href="{{route('kino.show', $film->slug)}}">
                  <div class="text small">{{$film->name}}</div>
              </a>
            </div>
        </div>
       
      @endforeach     
    </div><!-- /.row --> 

    <div class="flex-center ">
      <div class="row">
        {{ $films->links() }}
      </div>
    </div>
          
  </section>



@endsection

