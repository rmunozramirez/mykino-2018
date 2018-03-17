@extends('layouts.app')

@section('content')

<div class="card">
    <div class="card-header">           
      <div class="row">  
        <div class="col-md-9">  
          <h2><img height="30" src="{{URL::to('/images/age.png') }}" alt="Categories" > Films per Age</h2>
        </div>   
      </div>  
    </div>   
    <div class="card-body">        
            @if($fsks)
            <table class="table">
               <thead>
                  <tr>
                     <th>Age</th>
                     <th>Image</th>
                     <th>Films</th>
                  </tr>
               </thead>
               <tbody>
                  @foreach($fsks as $fsk)
                  <tr>
                     <td><a href="{{route('fsk.show', $fsk->slug)}}">{{$fsk->fsk}}</a></td>
                     <td><a href="{{route('fsk.show', $fsk->slug)}}">

                        <img height="50" src="{{$fsk->image ? URL::to('/images/' . $fsk->image) : URL::to('/images/language.png')}}" alt="{{$fsk->fsk}}" ></a> 

                     </td>
                     <td>{{$fsk->films_count}}</td>
                  </tr>
                  @endforeach 
               </tbody>
            </table>
            @else
            
            <h1>There is not films</h1>      
            @endif

    </div>
</div>



@endsection
