@extends('layouts.app')



@section('content')



<div class="card">
    <div class="card-body">        
        <h2>languages</h2>

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
                     <td>{{$language->language}}</td>
                     <td>
                        <img height="50" src="{{$language->image ? URL::to($language->image->image) : URL::to('/images/placeholder.jpg')}}" alt="{{$language->category}}" >
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
