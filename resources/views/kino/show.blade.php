@extends('home')

@include('partials._out_nav')

@section('content')

<div class="container py-5 glass">
    <div class="card">
        <div class="card-header">
            <div class="flex-center">
                <div class="col-md-12">
                    <div class="page-logo show">
                        <h2><i class="fa fa-film" aria-hidden="true"></i> {{ $film->name }} 
                            <span class="small pull-right">
                                <a class="separator" href="{{route('fsk.show', $film->fsk->slug)}}">{{$film->fsk->fsk}}</a>
                                <a class="separator" href="{{route('language.show', $film->language->slug)}}">{{$film->language->language}} </a>
                                <a class="separator" href="{{route('categories.show', $film->category->slug)}}">{!! $film->category->category !!} </a>
                                <a class="separator" href="{{route('films.year', date('Y', strtotime($film->year)))}}">{{date('Y', strtotime($film->year))}}</a>
                                {!! $film->duration !!} 
                            </span>
                        </h2>
                    </div>                
                </div>              
            </div>
        </div>
        <div class="card-body">
            <div  class="inside py-5 row ">
                <div class="col-md-3 col-xs-12">
                    <img height="345" class="img-responsive" src="{{URL::to('/images/' . $film->image->image ) }}" alt="{{$film->name}}" >
                </div>
                <div  class="col-md-9 col-xs-12">
                <!-- Nav tabs -->
                    <ul class="nav nav-tabs nav-justified" role="tablist ">
                        <li role="presentation" class="active nav-item">
                            <a class="nav-link active text-center" href="#descripcion" aria-controls="descripcion" role="tab" data-toggle="tab">
                                <span class="glyphicon glyphicon-film" aria-hidden="true"></span> Resume
                            </a>
                        </li>
                        <li role="presentation" class="nav-item">
                            <a class="nav-link text-center" href="#technical" aria-controls="technical" role="tab" data-toggle="tab">
                                <span class="glyphicon glyphicon-book" aria-hidden="true"></span> Sinopsis
                            </a>
                        </li>
                        <li role="presentation" class="nav-item">
                            <a class="nav-link text-center" href="#actors" aria-controls="actors" role="tab" data-toggle="tab">
                                <span class="glyphicon glyphicon-book" aria-hidden="true"></span> Actors
                            </a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">   
                        <div role="tabpanel" class="tab-pane fade show active" id="descripcion">
                            <!-- video id="player-obj" controls="" src="{!! $film->trailer !!}" frameborder="0" allowfullscreen></video --> 
                            <video class="py-4" height="320" controls>
                                <source src="{{ asset('films/xanadu.mp4') }}" type="video/mp4">
                            </video> 
                        </div>

                        <div role="tabpanel" class="tab-pane fade" id="technical">
                            <h3>Sinopsis from: "<?php echo ($film->name); ?>"</h3>
                            <hr />
                            {!! $film->description !!}
                        </div>

                        <div role="tabpanel" class="tab-pane fade" id="actors">
                            <h3>Actors playing in "<?php echo ($film->name); ?>"</h3>
                            <table class="table table-striped table-responsive table-hover">
                                <tbody>  
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <div  class="row">
                    <div  class="col-md-6">
                        @if(! is_null($film_prev)) 
                            <a class="pull-left" href="{{ route('kino.show', $film_prev->slug) }}">
                                <h3><i class="fas fa-angle-left"></i> {{ $film_prev->name }}</h3>
                            </a>                     
                        @endif
                    </div>
                    <div  class="col-md-6">
                        @if(! is_null($film_next)) 
                            <a class="pull-right" href="{{ route('kino.show', $film_next->slug) }}"><h3>{{ $film_next->name }}
                                <i class="fas fa-angle-right"></i></h3>
                            </a>
                            @endif
                    </div>

            </div>              
        </div>              
    </div>
</div>

@endsection


