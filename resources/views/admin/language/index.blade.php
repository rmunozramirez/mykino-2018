@extends('layouts.app')

@section('content')

<div class="card">
    <div class="card-header">           
      <div class="row">  
        <div class="col-md-10 page-logo">  
          <h2><img height="30" src="{{URL::to('/images/language.png') }}" > {{count($languages)}} Languages</h2>
        </div>  
        <div class="col-md-2"> 
          <a class="btn btn-outline-success page-btns"  href="{{route('language.create')}}">Add language</a>
        </div>  
      </div>  
    </div>   
    <div class="card-body">        
            @if($languages)
            <table class="table table-striped table-hover">
               <thead>
                  <tr>
                     <th>Language</th>
                     <th>Films</th>
                  </tr>
               </thead>
               <tbody>
                  @foreach($languages as $language)
                  <tr>
                     <td>
                        <a class="film-thumbnail" href="{{route('language.show', $language->slug)}}">
                        <img height="80" src="{{$language->image ? URL::to('/images/' . $language->image) : URL::to('/images/language.png')}}" alt="{{$language->category}}" title="{{$language->language}}"></a>
                          <a href="{{route('language.show', $language->slug)}}">{{$language->language}}</a>
                     </td>
                     <td><a class="film-thumbnail" href="{{route('language.show', $language->slug)}}">
                      {{$language->films_count}}</a></td>
                  </tr>
                  @endforeach 
            @endif
               </tbody>
            </table>
    </div>
</div>



@endsection
