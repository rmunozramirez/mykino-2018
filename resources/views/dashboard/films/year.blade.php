@extends('dashboard.index')
@section ('title', "| All Films")
@section('content')
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row wrapper border-bottom white-bg">
      <div class="inside">
        <h2><i class="fas fa-calendar-alt"></i>Year {{date('Y', strtotime($films[0]->year))}}: {{count($films)}} Films</h2><hr /> 
        <div id="contenido"  class="card">
          <div class="row">
            <div class="ibox-content">
                <div class="table-responsive">
                    @if($films)
                    <table class="table table-striped table-bordered table-hover dataTables-example" >
                       <thead>
                          <tr>
                              <th>Film  <i class="fa fa-sort"></th>
                              <th>Actors <i class="fa fa-sort"></th>
                              <th>Category <i class="fa fa-sort"></th>
                              <th>Language <i class="fa fa-sort"></th>
                              <th>FSK <i class="fa fa-sort"></th>
                              <th>Trailer <i class="fa fa-sort"></th>
                          </tr>
                       </thead>
                       <tbody>
                          @foreach($films as $film)
                          <tr>
                             <td>
                             <img class="film-thumbnail" height="80" src="{{URL::to('/images/' . $film->image->slug ) }}" alt="{{$film->name}}" ><a href="{{route('films.show', $film->slug)}}">{{$film->name}}</a>
                           </td>
                           <td> {{ count($film->actors) }}</td>
                             <td><a href="{{route('categories.show', $film->category->slug)}}">{{$film->category->name}}</a></td>
                             <td><a href="{{route('language.show', $film->language->slug)}}"><img height="74" src="{{$film->language->image ? URL::to('/images/' . $film->language->image) : URL::to('/images/language.png')}}" alt="{{$film->name}}" ></a></td>
                             <td><a href="{{route('fsk.show', $film->fsk->slug)}}"><img height="50" src="{{$film->fsk->image ? URL::to('/images/' . $film->fsk->image) : URL::to('/images/language.png')}}" alt="{{$film->name}}" ></a></td>
                             <td><a href="{{ $film->trailer }}"><img class="play" height="74" src="{{URL::to('/images/play.png')}}" alt="{{$film->name}}"></a></td>
                          </tr>
                          @endforeach 
                 
                       </tbody>
                      </table>
                      @else
                         <h2>No Films</h2>
                      @endif
                </div>
            </div>
          </div>
        </div>
      </div>
  </div>
</div>



@endsection
