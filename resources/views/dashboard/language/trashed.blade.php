@extends('dashboard.index')
@section ('title', "| Trashed $page_name")
@section('content')

<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row wrapper border-bottom white-bg">
		<div class="inside">
            <h2>All trashed {!! $page_name !!}
            <span class="small pull-right">
            	<i class="fa fa-chevron-left"></i> <a href="{{route('language.index')}}">Back to Languages</a>
            </span></h2>
        	<hr>
			<div id="contenido"  class="card">
				<div class="row">
					<div class="ibox-content">
		                <div class="table-responsive">
		                    <table class="table table-striped table-bordered table-hover dataTables-example" >
					           <thead>
					              <tr>
					                 <th>Language</th>
					                 <th>Deleted at</th>
					                 <th>Number of films</th>
					              </tr>
					           </thead>
					           <tbody>
					              @foreach ($all_tr as $language)
					              <tr>
					                 <td>
					                  @if( $language->image )
					                    <img height="80" src="{{$language->image ? URL::to('/images/' . $language->image) : URL::to('/images/language.png')}}" alt="{{$language->category}}" title="{{$language->language}}">
					                    @else
					                    <i class="fas fa-tag fa-2x"></i> @endif
					                  <a href="{{route('language.show', $language->slug)}}">{{$language->language}}</a>
					                </td>
					               	<td>{{$language->deleted_at->format('D j M Y')}}</td>>
					                 <td>{{ $language->films_count}}</a></td>
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


