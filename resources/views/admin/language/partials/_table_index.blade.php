<div class="card">
    <div class="card-header">           
    <div class="row">  
      <div class="col-md-10 page-logo">  
        <h2> <i class="fas fa-language"></i>  {{count($total_films)}} films in {{count($languages)}} Languages</h2>
      </div>  
      <div class="col-md-2"> 
        <a class="btn btn-outline-success page-btns"  href="{{route('language.create')}}">Add language</a>
      </div>  
    </div>  
  </div>   
    <div class="card-body">        
    @if($languages)
      <div class="inside">  
                <div class="row mt-5">  
          @foreach($languages as $language) 
            <div class="col-md-2 text-center">
                <a class="film-thumbnail" href="{{route('language.show', $language->slug)}}">
                  <img height="80" src="{{$language->image ? URL::to('/images/' . $language->image) : URL::to('/images/language.png')}}" alt="{{$language->category}}" title="{{$language->language}}">
                  <h5>{{$language->language}}</h5>
                </a>
                <h2>{{$language->films_count}}</h2>
            </div>
          @endforeach 
                </div>
      </div>
    @endif
    </div>
</div>