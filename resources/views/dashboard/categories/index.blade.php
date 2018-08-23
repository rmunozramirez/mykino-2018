@extends('dashboard.index')
@section ('title', "| All Categories")
@section('content')
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row wrapper border-bottom white-bg">
    	<div class="inside">
    		<h2>{{count($all_)}}  @if(count($all_) > 1) categories @else category @endif</h2><hr />
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
					                 <th>Created at</th>
					              </tr>
					           </thead>
					           <tbody>
					              @foreach ($categories as $category)
					              <tr>
					                 <td>
					                    <a href="{{route('categories.show', $category->slug)}}"><i class="fa fa-tag fa-2x"></i>
					                  {{$category->name}}</a>
					                </td>
					                 <td>{!! str_limit($category->description, 100, '...') !!}</td>
					                 <td>{{$category->films_count}}</td>
					                 	<td>{{ $category->created_at->format('D j M Y')}}</td>
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


