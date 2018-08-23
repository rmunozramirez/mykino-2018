@extends('dashboard.index')
@section ('title', "| Trashed $page_name")
@section('content')

<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row wrapper border-bottom white-bg">
		<div class="inside">
            <h2>All trashed {!! $page_name !!}
            <span class="small pull-right">
            	<i class="fa fa-chevron-left"></i> <a href="{{route('films.index')}}">Back to Films</a>
            </span></h2>
        	<hr>
			<div id="contenido"  class="card">
				<div class="row">
					<div class="ibox-content">
		                <div class="table-responsive">
		                    <table class="table table-striped table-bordered table-hover dataTables-example" >
					           <thead>
					              <tr>
					                 <th>Category</th>
					                 <th>Description</th>
					                 <th>Films</th>
					              </tr>
					           </thead>
					           <tbody>
					              @foreach ($all_tr as $category)
					              <tr>
					                 <td>
					                  @if( $category->image )
					                    <img class="film-thumbnail" src="URL::to('/images/' . {{ $category->image->image }} )" alt="{{$category->category}}" />
					                    @else
					                    <i class="fas fa-tag fa-2x"></i> @endif
					                  <a href="{{route('categories.show', $category->slug)}}">{{$category->category}}</a>
					                </td>
					                 <td>{{str_limit($category->description, 100, '...')}}</td>
					                 <td><a href="{{route('categories.show', $category->slug)}}">{{$category->films_count}}</a></td>
					              </tr>
					              @endforeach 
					           </tbody>
					        </table>     
				    	</div>
				    </div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection


