@extends('home')


@section('content')
<section id="content"> 
    
    <div class="row">
    <div class="col-md-12 col-xs-12">

   </div>
    <div class="col-lg-12">
        <!-- Three columns of text below the carousel -->
        @foreach ($films as $film)
        <a class="image-box" href="{{route('films.show', $film->slug)}}">
             <img src="{{URL::to('/images/' . $film->image->image ) }}" alt="{{$film->name}}" >
        </a>
        @endforeach     

    </div><!-- /.row -->   
    <div class="text-center">

    </div>
    </div>
    
</section>
@endsection






