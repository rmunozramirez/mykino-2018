@extends('layouts.app')

@section('content')

<div class="card">
    <div class="card-header">           
      <div class="row">  
        <div class="col-md-9">  
          <h2>Languages</h2>
        </div>  
        <div class="col-md-3"> 
          <a class="btn btn-success pull-right" href="{{route('language.create')}}">Create new language</a>
        </div>  
      </div>  
    </div>   
    <div class="card-body">        
            @if($languages)
            <table class="table">
               <thead>
                  <tr>
                     <th>Language</th>
                     <th>Image</th>
                     <th>Films</th>
                  </tr>
               </thead>
               <tbody>
                  @foreach($languages as $language)
                  <tr>
                     <td><a href="{{route('language.show', $language->slug)}}">{{$language->language}}</a></td>
                     <td><a href="{{route('language.show', $language->slug)}}">
                        <img height="50" src="{{$language->image ? URL::to('/images/' . $language->image) : URL::to('/images/language.png')}}" alt="{{$language->category}}" ></a>
                     </td>
                     <td><a href="">{{$language->films_count}}</a></td>
                  </tr>
                  @endforeach 
            @endif
               </tbody>
            </table>
    </div>
</div>



@endsection
