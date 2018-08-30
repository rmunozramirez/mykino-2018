@extends('layouts.app')
@section ('title',  "| $page_name")
@section('content')

<section id="content"> 
  <div id="last-film">
  
    @include('partials._out_nav')

    <iframe width="560" height="315" src="{{ $element->trailer }}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
    </div>

    <div class="films-footer">
      <div class="container pt-3">
          <div class="text-white text-center">
            <h2>My Kino</h2>
            <h3> <i class="fas fa-chevron-down"></i> Recent included films <i class="fas fa-chevron-down"></i></h3>
          </div>

        <div class="row">

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
          
        </div>
        
        <div class="container pb-5 pt-3">
          <div class="text-center">
            {{ $films->links() }}
          </div>
        </div>

      </div><!-- /.container -->
      <div class="text-white best-films ">
        <div class="container py-5">

          <div class="row pt-2">
            <div class="col-md-6">
              <div class="ages text-center">
                <h4 class="">Age classification</h4>
                <div class="category">
                @foreach ($total_ages as $fsk)
                   <a href="{{route('kino.age', $fsk->slug)}}">
                    <img class="film-thumbnail" height="50" src="{{$fsk->image ? URL::to('/images/' . $fsk->image) : URL::to('/images/language.png')}}" alt="{{$fsk->name}}" >
                    </a>
                @endforeach  
                  </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="ages text-center">
                <h4 class="">Languages</h4>
                <div class="category">
                @foreach ($total_languages as $language)
                   <a href="{{route('kino.language', $language->slug)}}">
                    <img height="50" src="{{$language->image ? URL::to('/images/' . $language->image->slug) : URL::to('/images/language.png')}}" alt="{{$language->category}}" title="{{$language->name}}">
                    </a>
                @endforeach  
                  </div>
              </div>
            </div>
          </div>

          <div class="categories text-center">
            <h4 class="pt-5">Categories</h4>
            <div class="category">
            @foreach ($total_categories as $category)
              <a href="{{route('kino.category', $category->slug)}}">{!! $category->name !!}</a>
            @endforeach  
              </div>
          </div>

        </div>
      </div>


      <div class="footer">
        <div class="col-md-12">
          <div class="pull-right">
              My Kino - My {{count($all_)}} films
          </div>
          <div>
              <strong>Copyright</strong> My Kino &copy; 2008-<?php echo date("Y"); ?>
          </div>
        </div>
      </div>
    </div>     
</section>

@endsection
