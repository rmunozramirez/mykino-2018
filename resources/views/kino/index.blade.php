@extends('home')

@include('partials._inner_nav')

@section('content')

    <section id="content" class="flex-center"> 

        <div class="row flex-center">

            <!-- Three columns of text below the carousel -->
            @foreach ($films as $film)
            <div class="the_thumbnail">
                 <img class="image" src="{{URL::to('/images/' . $film->image->image ) }}" alt="{{$film->name}}" >
                  <div class="middle">
                    <a href="{{route('films.show', $film->slug)}}">
                        <div class="text">{{$film->name}}</div>
                    </a>
                  </div>
              </div>
             
            @endforeach     

      <div class="text-center">
              {{ $films->links() }}
          </div>
        </div><!-- /.row -->   
    </section>



@endsection

