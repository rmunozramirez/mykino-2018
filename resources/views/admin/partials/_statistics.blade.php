
<div class="card">
   <div class="card-header">
      <div class="row">
         <div class="col-md-10 page-logo">
            <h2><i class="fas fa-chart-line"></i> Statistics</h2>
         </div>
      </div>
   </div>
   <div class="card-body">
      <div class="inside py-4">
         <div class="row">
            <div id="accordion" class="col-md-6">
               <div class="card">
                  <div class="card-header" id="headingOne">
                     <h5 class="mb-0">
                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                           Newest films in collection
                        </button>
                     </h5>
                  </div>
                  <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                     <div class="card-body">
                        <ul class="list-group list-group-flush">
                           @foreach($newest_films as $film)
                              <li class="list-group-item">{{$film->name}}</li>
                           @endforeach
                        </ul>
                        <a class="text-center" href="{{route('films.index')}}">
                           <div class="card-footer">
                              <span class="pull-left">View Details</span>
                              <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                              <div class="clearfix"></div>
                           </div>
                        </a>
                     </div>
                  </div>
               </div>
               <div class="card">
                  <div class="card-header" id="headingTwo">
                     <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                           Oldest films in collection
                        </button>
                     </h5>
                  </div>
                  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                     <div class="card-body">
                        <ul class="list-group list-group-flush">
                           @foreach($oldest_films as $film)
                              <li class="list-group-item">{{$film->name}}</li>
                           @endforeach
                        </ul>
                     </div>
                     <a class="text-center" href="{{route('films.index')}}">
                        <div class="card-footer">
                           <span class="pull-left">View Details</span>
                           <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                           <div class="clearfix"></div>
                        </div>
                     </a>
                 </div>
               </div>
            </div>

            <div id="accordion1" class="col-md-6">
               <div class="card">
                  <div class="card-header" id="headingThree">
                     <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                           Longest films in collection
                        </button>
                     </h5>
                  </div>
                  <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                     <div class="card-body">
                        <ul class="list-group list-group-flush">
                           @foreach($longest_films as $film)
                              <li class="list-group-item">{{$film->name}}</li>
                           @endforeach
                        </ul>
                     </div>
                     <a class="text-center" href="{{route('films.index')}}">
                        <div class="card-footer">
                           <span class="pull-left">View Details</span>
                           <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                           <div class="clearfix"></div>
                        </div>
                     </a>
                  </div>
               </div>
               <div class="card">
                  <div class="card-header" id="headingFour">
                     <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                           Shortest films in collection
                        </button>
                     </h5>
                  </div>
                  <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                     <div class="card-body">
                        <ul class="list-group list-group-flush">
                           @foreach($shortest_films as $film)
                              <li class="list-group-item">{{$film->name}}</li>
                           @endforeach
                        </ul>
                     </div>
                     <a class="text-center" href="{{route('films.index')}}">
                        <div class="card-footer">
                           <span class="pull-left">View Details</span>
                           <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                           <div class="clearfix"></div>
                        </div>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

<hr />