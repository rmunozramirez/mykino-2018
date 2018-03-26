<div class="card">
    <div class="card-header">           
      <div class="row">  
        <div class="col-md-10 page-logo">  
          <h2><img height="30" src="{{URL::to('/images/user.png') }}">
            {{count($total_actors)}} @if(count($total_actors) > 1) actors @else actor @endif 
          </h2>
        </div>  
        <div class="col-md-2"> 
          <a class="btn btn-outline-success page-btns" href="{{route('actors.create')}}">Create new Actor</a>
        </div>  
      </div>  
    </div> 
    <div class="card-body">        
    <div class="inside py-3">        
      @if($actors)

        <div class="row ">

        @foreach ($actors as $actor)
         <div class="the_film flex-center">
            <img class="actor-image" src="{{URL::to('/images/' . $actor->image->image ) }}" alt="{{$actor->name}}" >
            <div class="overlay">
              <a href="{{route('actors.show', $actor->slug)}}">      
                    <div class="text small">{{$actor->name}} <br /> {{$actor->films_count}} films</div>
              </a>
            </div>
        </div>
        @endforeach  

      </div>

      @endif

    </div>
    </div>
    <div class="card-footer">
      <div class="text-center">
          {{ $actors->links() }}
      </div>
    </div>
</div>
