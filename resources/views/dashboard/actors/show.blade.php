@extends('dashboard.index')
@section ('title', "| Actor: $element->name")
@section('content')

<!-- Profile panel  -->
<div class="wrapper wrapper-content animated fadeInUp">		
  <div class="row wrapper border-bottom white-bg">
		<div class="inside">
      <h2>{!! $element->name !!}
        <span class="small pull-right">
          <i class="fa fa-chevron-left"></i> <a class="small-link" href="{{route('actors.index')}}"> Back to Actors</a>
          <i class="fa fa-pencil"></i><a type="button" href="{{route('actors.edit', $element->slug)}}"> Edit</a>
        </span>
      </h2>
			<div id="contenido"  class="card">
          <div class="row py-3">
             <div class="col-md-4">
                <img class="img-responsive" src="{{URL::to('/images/' . $element->image->slug  ) }}" alt="{{$element->name}}" >
             </div>

                <div class="col-md-8">
                    <div class="post-title">
                        <h3>{{ count($element->films)}} films from {{$element->name}}</h3>
                    </div>
          <div class="ibox-content">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover dataTables-example" >
                        <thead>
                          <th>Film <i class="fa fa-sort"></th>
                          <th>Category <i class="fa fa-sort"></th>
                          <th>Trailer <i class="fa fa-sort"></th>
                        </thead>
                        <tbody>  
                            @foreach ($element->films as $film)
                            <tr>
                                <td><a href="{{ route('films.show', $film->slug) }}">
                                  <img height="80" src="{{URL::to('/images/' . $film->image->slug ) }}" alt="{{$film->name}}" >
                                  {{ $film->name }}</a>
                                </td>
                                <td><a href="{{ route('categories.show', $film->category->slug) }}">{{ $film->category->name }}</a></td>
                                <td><a href="{{ $film->trailer }}"><i class="fa fa-play-circle fa-3x"></i></a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                </div>
                </div>
            </div>

            <div  class="row pt-5">
              <div  class="col-md-6">
                <a type="button" class="col-md-6 btn btn-default btn-block" href="{{route('actors.edit', $element->slug)}}">Edit</a>
              </div>
              <div  class="col-md-6">
                {!! Form::open(['route' => ['actors.destroy', $element->slug], 'method' => 'DELETE']) !!}
                {!! Form::submit('Delete', ['class' => 'btn btn-block btn-danger']) !!}
                {!! Form::close() !!}
              </div>
            </div>
          </div>
		</div>
	 </div>
</div>
<!-- End Profile panel  -->

@endsection

