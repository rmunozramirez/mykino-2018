
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
             <div class="row">          
          @foreach($languages as $language)
               <div class="col-md-2 text-center"> 
                  <a class="film-thumbnail" href="{{route('language.show', $language->slug)}}">
                    <img height="80" src="{{$language->image ? URL::to('/images/' . $language->image) : URL::to('/images/language.png')}}" alt="{{$language->category}}" title="{{$language->language}}">
                  </a>
              </div> 
            @endforeach               
            </div>  
      @endif
    </div>             
</div>
