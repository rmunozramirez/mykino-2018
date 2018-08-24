

@extends('layouts.app')
@section ('title',  "| $page_name")
@include('partials._out_nav')
@section('content')
<div class="container py-5">
   <div class="card">
      <div id="contenido">
         <!-- Tab panels -->
         <div class="card-header py-3">
            <h2>Statistics
            </h2>
         </div>
         <div class="card-body py-3">
            <div class="inside">
               <div class="row">
                  <div class="col-md-12">
                     <div class="sky-tabs sky-tabs-amount-5 sky-tabs-pos-top-justify sky-tabs-anim-fade sky-tabs-response-to-icons" >
                        <input type="radio" name="sky-tabs" checked id="sky-tab1" class="sky-tab-content-1">
                        <label for="sky-tab1"><span><span><i class="fa fa-film"></i> Films</span></span></label>

                        <input type="radio" name="sky-tabs" id="sky-tab2" class="sky-tab-content-2">
                        <label for="sky-tab2"><span><span><i class="fa fa-users"></i> Actors</span></span></label>

                        <input type="radio" name="sky-tabs" id="sky-tab3" class="sky-tab-content-3">
                        <label for="sky-tab3"><span><span><i class="fa fa-tags"></i> Category</span></span></label>

                        <input type="radio" name="sky-tabs" id="sky-tab4" class="sky-tab-content-4">
                        <label for="sky-tab4"><span><span><i class="fa fa-user"></i> Age Classification</span></span></label>

                        <input type="radio" name="sky-tabs" id="sky-tab5" class="sky-tab-content-5">
                        <label for="sky-tab5"><span><span><i class="fa fa-language"></i> Language</span></span></label>
                        <!-- Tab panes -->
                        <ul>
                           <li class="sky-tab-content-1">
                              <div class="row">
                                 <div class="col-md-12">
                                    <div class="ibox-content">
                                       <div class="table-responsive">
                                          <table class="table table-striped table-bordered table-hover dataTables-example" >
                                             <thead>
                                                <tr>
                                                   <th>Film <i class="fa fa-sort"></th>
                                                   <th>Category <i class="fa fa-sort"></th>
                                                   <th>Language <i class="fa fa-sort"></th>
                                                   <th>FSK <i class="fa fa-sort"></th>
                                                   <th>Year <i class="fa fa-sort"></th>
                                                   <th>Trailer <i class="fa fa-sort"></th>
                                                </tr>
                                             </thead>
                                             <tbody>
                                                @foreach ($films as $element)
                                                <tr>
                                                   <td>
                                                      <img class="film-thumbnail" height="80" src="{{URL::to('/images/' . $element->image->slug ) }}" alt="{{$element->name}}" ><a href="{{route('kino.show', $element->slug)}}">{{$element->name}}</a>
                                                   </td>
                                                   <td><a href="{{route('kino.category', $element->category->slug)}}">{{$element->category->name}}</a></td>
                                                   <td><a href="{{route('language.show', $element->language->slug)}}"><img height="74" src="{{$element->language->image ? URL::to('/images/' . $element->language->image) : URL::to('/images/language.png')}}" alt="{{$element->name}}"  title="{{$element->language->language}}"></a></td>
                                                   <td>
                                                      <a href="{{route('fsk.show', $element->fsk->slug)}}">
                                                      <img height="50" src="{{$element->fsk->image ? URL::to('/images/' . $element->fsk->image) : URL::to('/images/language.png')}}" alt="{{$element->name}}" title="{{$element->fsk->fsk}}"></a>
                                                   </td>
                                                   <td><a href="{{route('films.year', date('Y', strtotime($element->year)))}}">{{date('Y', strtotime($element->year))}}</a></td>
                                                   <td><a href="{{ $element->trailer }}"><img class="play" height="50" src="{{URL::to('/images/play.png')}}" alt="{{$element->name}}" title="{{$element->name}}"></a></td>
                                                </tr>
                                                @endforeach
                                             </tbody>
                                          </table>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="sky-tab-content-2">
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
                                                @foreach ($actors as $actor)
                                                <tr>
                                                   <td>
                                                      @if( $actor->image )
                                                      <img height="50" width="35" src="{{URL::to('/images/' . $actor->image->slug ) }}" alt="{{$actor->name}}" >
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
                           </li>
                           <li class="sky-tab-content-3">
                              <div class="ibox-content">
                                     <div class="table-responsive">
                                         <table class="table table-striped table-bordered table-hover dataTables-example" >
                                         <thead>
                                            <tr>
                                               <th>Category  <i class="fa fa-sort"></i></th>
                                               <th>Description  <i class="fa fa-sort"></i></th>
                                               <th>Films  <i class="fa fa-sort"></i></th>
                                               <th>Created at  <i class="fa fa-sort"></i></th>
                                            </tr>
                                         </thead>
                                         <tbody>
                                            @foreach ($categories as $category)
                                            <tr>
                                               <td>
                                                  <a href="{{route('kino.category', $category->slug)}}"><i class="fa fa-tag fa-2x"></i>
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
                           </li>
                           <li class="sky-tab-content-4">
                                    <div class="ibox-content">
                                       <div class="table-responsive">
                                          <table class="table table-striped table-bordered table-hover dataTables-example" >
                                             <thead>
                                                <tr>
                                                   <th>Age classification <i class="fa fa-sort"></i></th>
                                                   <th>Number of films <i class="fa fa-sort"></i></th>
                                                   <th>Created at <i class="fa fa-sort"></i></th>
                                                </tr>
                                             </thead>
                                             <tbody>
                                                @foreach ($ages as $fsk)
                                                <tr>
                                                   <td>
                                                      @if( $fsk->image )
                                                      <img class="film-thumbnail" height="50" src="{{$fsk->image ? URL::to('/images/' . $fsk->image) : URL::to('/images/language.png')}}" alt="{{$fsk->fsk}}" >
                                                      @else
                                                      <i class="fas fa-tag fa-2x"></i> @endif
                                                      <a href="{{route('fsk.show', $fsk->slug)}}">{{$fsk->name}}</a>
                                                   </td>
                                                   <td>{{ $fsk->films_count}}</td>
                                                   <td>{{$fsk->created_at->format('D j M Y')}}</td>
                                                </tr>
                                                @endforeach 
                                             </tbody>
                                          </table>
                                       </div>
                                    </div>
                           </li>
                           <li class="sky-tab-content-5">
                                    <div class="ibox-content">
                                       <div class="table-responsive">
                                          <table class="table table-striped table-bordered table-hover dataTables-example" >
                                             <thead>
                                                <tr>
                                                   <th>Language <i class="fa fa-sort"></i></th>
                                                   <th>Number of films <i class="fa fa-sort"></i></th>
                                                   <th>Created at <i class="fa fa-sort"></i></th>
                                                </tr>
                                             </thead>
                                             <tbody>
                                                @foreach ($languages as $language)
                                                <tr>
                                                   <td>
                                                      @if( $language->image )
                                                      <img height="50" src="{{$language->image ? URL::to('/images/' . $language->image) : URL::to('/images/language.png')}}" alt="{{$language->category}}" title="{{$language->name}}">
                                                      @else
                                                      <i class="fas fa-tag fa-2x"></i> @endif
                                                      <a href="{{route('language.show', $language->slug)}}">{{$language->name}}</a>
                                                   </td>
                                                   <td>{{ $language->films_count}}</td>
                                                   <td>{{ $language->created_at->format('D j M Y') }}</td>
                                                </tr>
                                                @endforeach 
                                             </tbody>
                                          </table>
                                       </div>
                                    </div>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection

