
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
      <div class="inside">  

              <div class="row offset-1 mt-5"> 
            @foreach($fsks as $fsk)
              <div class="col-md-2 text-center">
                  <a href="{{route('fsk.show', $fsk->slug)}}">
                      <img class="film-thumbnail" height="80" src="{{$fsk->image ? URL::to('/images/' . $fsk->image) : URL::to('/images/language.png')}}" alt="{{$fsk->fsk}}" >
                      <h5 class="mt-3">{{$fsk->fsk}}</h5>
                  </a>
                  <h2>{{$fsk->films_count}}</h2>
              </div>
            @endforeach 
          </div>

      </div>
    @else
            <h1>There is not films</h1>      
        @endif
    </div>
</div>





