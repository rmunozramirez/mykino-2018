
<div class="card">
    <div class="card-header">           
      <div class="row">  
        <div class="col-md-10 page-logo">  
          <h2><i class="fas fa-chart-line"></i> Statistics</h2>
        </div>   
      </div>  
    </div>   
    <div class="card-body">  
        <div class=" show py-4">  
            <div class="row">  

                <div class="col-lg-4">
                    <div class="card mb-3">
                        <div class="card-header">
                            Newest films in collection
                        </div>
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                @foreach($newest_films as $film)
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

                <div class="col-lg-4">
                    <div class="card mb-3">
                        <div class="card-header">
                            Oldest films in collection
                        </div>
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

                <div class="col-lg-4">
                    <div class="card mb-3">
                        <div class="card-header">
                            Longest films in collection
                        </div>
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
<hr />
                <div class="col-lg-4">
                    <div class="card mb-3">
                        <div class="card-header">
                            Shortest films in collection
                        </div>
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
