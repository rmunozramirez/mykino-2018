@extends('layouts.app')

@section('content')

<div class="card">
    <div class="card-header">           
      <div class="row">  
        <div class="col-md-10 page-logo">  
          <h2><img height="30" src="{{URL::to('/images/age.png') }}" alt="Categories" > Films per Age</h2>
        </div>  
        <div class="col-md-2 "> 
          <a class="btn btn-outline-success page-btns" href="{{route('films.index')}}"> Films</a>
        </div>  
      </div>  
    </div> 

    <div class="card-body">        
            @if($fsks)
            <table class="table table-striped table-hover">
               <thead>
                  <tr>
                     <th>Age</th>
                     <th>Films</th>
                  </tr>
               </thead>
               <tbody>
                  @foreach($fsks as $fsk)
                  <tr>
                     <td>
                        <a href="{{route('fsk.show', $fsk->slug)}}"><img class="film-thumbnail" height="50" src="{{$fsk->image ? URL::to('/images/' . $fsk->image) : URL::to('/images/language.png')}}" alt="{{$fsk->fsk}}" ></a> 
                      <a href="{{route('fsk.show', $fsk->slug)}}">{{$fsk->fsk}}</a></td>
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
