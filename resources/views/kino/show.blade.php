@extends('layouts.app')
@section ('title',  "| $page_name")

@include('partials._out_nav')

@section('content')

<div class="container py-5">
    <div class="card">
            <div id="contenido"  class="card">
          <!-- Tab panels -->
        <div class="row py-3"> 
          <div class="col-md-12">
            <a class="separator" href="{{route('fsk.show', $element->fsk->slug)}}">{{$element->fsk->name}}</a>
            <a class="separator" href="{{route('language.show', $element->language->slug)}}">{{$element->language->name}} </a>
            <a class="separator" href="{{route('categories.show', $element->category->slug)}}">{!! $element->category->name !!} </a>
            <a class="separator" href="{{route('films.year', date('Y', strtotime($element->year)))}}">{{date('Y', strtotime($element->year))}}</a>
            {!! $element->duration !!} 
          </div> 
        </div>
        <div class="row py-3">
          <div class="col-md-4">
            <img class="img-responsive" src="{{URL::to('/images/' . $element->image->slug ) }}" alt="{{$element->name}}" >
          </div>
          <div class="col-md-8">

            <!-- Nav tabs -->
            <ul class="nav nav-tabs nav-justified" role="tablist">
                <li role="presentation" class="active tab-responsive">
                    <a href="#descripcion" aria-controls="descripcion" role="tab" data-toggle="tab">
                        <i class="fa fa-film"></i> synopsis
                    </a>
                </li>

                <li role="presentation" class="tab-responsive">
                    <a href="#actors" aria-controls="technical" role="tab" data-toggle="tab">
                        <i class="fa fa-users"></i> Actors
                    </a>
                </li>

                <li role="presentation" class="tab-responsive">
                    <a href="#video" aria-controls="technical" role="tab" data-toggle="tab">
                        <i class="fa fa-video"></i> Video
                    </a>
                </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="descripcion">
                  <div class="inside">
                    {!! $element->description !!}
                  </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="actors">
                  <div class="inside">
                    <div class="ibox-content">
                      <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover dataTables-example" >
                           <thead>
                              <tr>
                                 <th>Actor</th>
                                 <th>Films</th>
                                 <th>Created at</th>
                              </tr>
                           </thead>
                           <tbody>
                            @foreach ($element->actors as $actor)
                                <tr>
                                  <td>
                                    @if( $actor->image )
                                      <img height="50" class="" src="{{URL::to('/images/' . $actor->image->slug ) }}" alt="{{$actor->name}}" >
                                    @else
                                      <i class="fas fa-tag fa-2x"></i> @endif
                                      <a href="{{route('actors.show', $actor->slug)}}">{{$actor->name}}</a>
                                  </td>
                                  <td>{{ count($actor->films) }}</td>
                                  <td>{{ $actor->created_at->format('D j M Y')}}</td>
                                </tr>
                                @endforeach 
                           </tbody>
                        </table>     
                      </div>
                    </div>
                  </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="video">
                  <div class="inside">
                    <iframe width="560" height="315" src="{{ $element->trailer }}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                  </div>
                </div>
            </div>
          </div>
      </div>
            <div class="card-footer">
                <div class="inside">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-4">
                    {!! Form::open(['route' => ['films.destroy', $element->slug], 'method' => 'DELETE']) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-block btn-danger btn-sm']) !!}
                            {!! Form::close() !!}
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


