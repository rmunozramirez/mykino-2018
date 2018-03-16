@extends('layouts.app')



@section('content')



<div class="card">
    <div class="card-body">        
        <h2>Languages</h2>

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
                        <img height="50" src="{{$language->image ? URL::to('/images/' . $language->image) : URL::to('/images/language.png')}}" alt="{{$language->category}}" >
                     </td>
                     <td><a href="">{{$language}}</a></td>

                  </tr>
                  @endforeach 
            @endif
               </tbody>
            </table>
       

    </div>
</div>



@endsection
