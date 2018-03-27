<div class="card">

    <div class="card-header">           
      <div class="row">  
        <div class="col-md-10">  
          <h2><i class="fas fa-tags"></i>
           {{count($total_categories)}}  @if(count($categories) > 1) categories @else category @endif
         </h2>
        </div>  
        <div class="col-md-2"> 
          <a class="btn btn-outline-success page-btns" href="{{route('categories.create')}}">Add a Category</a>
        </div>  
      </div>  
    </div>  
    <div class="card-body">        
   
        @if($categories)
        <table class="table table-striped table-hover">
           <thead>
              <tr>
                 <th>Category</th>
                 <th>Description</th>
                 <th>Films</th>
              </tr>
           </thead>
           <tbody>
              @foreach($categories as $category)
              <tr>
                 <td>
                  @if( $category->image )
                    <img class="film-thumbnail" src="URL::to('/images/' . {{ $category->image->image }} )" alt="{{$category->category}}" />
                    @else
                    <i class="fas fa-tag fa-2x"></i> @endif
                  <a href="{{route('categories.show', $category->slug)}}">{{$category->category}}</a>
                </td>
                 <td>{{str_limit($category->description, 100, '...')}}</td>
                 <td><a href="{{route('categories.show', $category->slug)}}">{{$category->films_count}}</a></td>
              </tr>
              @endforeach 
        @endif
           </tbody>
        </table>
       
    </div>

    <div class="card-footer">
      <div class="text-center">
          {{ $categories->links() }}
      </div>
    </div>
</div>
