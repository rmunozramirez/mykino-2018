@extends('layouts.app')


@section('content')

    <section id="content" class=""> 
      <div class="card">
          <div class="card-header">           
            <div class="row">  
              <div class="12 page-logo show">  
                  <h2><i class="fa fa-tachometer-alt"></i> Dashboard </h2>
              </div>  
            </div>
          </div> 
          <div class="card-body">    
            <div class="show py-3">

                <div class="row">
                  <div class="col-lg-3 col-md-6">
                      <div class="card bg-light">
                          <div class="card-header">
                              <div class="row">
                                  <div class="col-md-12 text-center py-1">
                                      <i class="fa fa-film fa-3x"></i>
                                  </div>
                                  <div class="col-md-12 text-center py-1">
                                      <h2>
                                        {{count($films)}} @if(count($films) > 1) films @else film @endif
                                      </h2>
                                  </div>
                                </div>
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
                  <div class="col-lg-3 col-md-6">
                      <div class="card bg-light">
                          <div class="card-header">
                              <div class="row">
                                  <div class="col-md-12 text-center py-1">
                                    @if(count($actors) > 1)
                                      <i class="fa fa-users fa-3x"></i>
                                    @else
                                      <i class="fa fa-user fa-3x"></i>
                                    @endif
                                  </div>
                                  <div class="col-md-12 text-center py-1">
                                      <h2>
                                        {{count($actors)}} @if(count($actors) > 1) actors @else actor @endif
                                      </h2>
                                  </div>
                                </div>
                          </div>
                          <a class="text-center" href="{{route('actors.index')}}">
                              <div class="card-footer">
                                  <span class="pull-left">View Details</span>
                                  <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                  <div class="clearfix"></div>
                              </div>
                          </a>
                      </div>
                  </div>
                  <div class="col-lg-3 col-md-6">
                      <div class="card bg-light">
                          <div class="card-header">
                              <div class="row">
                                  <div class="col-md-12 text-center py-1">
                                    @if(count($categories) > 1)
                                      <i class="fa fa-tags fa-3x"></i>
                                    @else
                                      <i class="fa fa-tag fa-3x"></i>
                                    @endif
                                  </div>
                                  <div class="col-md-12 text-center py-1">
                                      <h2>
                                        {{count($categories)}} @if(count($categories) > 1) categories @else category @endif
                                      </h2>
                                  </div>
                                </div>
                          </div>
                          <a class="text-center" href="{{route('categories.index')}}">
                              <div class="card-footer">
                                  <span class="pull-left">View Details</span>
                                  <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                  <div class="clearfix"></div>
                              </div>
                          </a>
                      </div>
                  </div>
                  <div class="col-lg-3 col-md-6">
                      <div class="card bg-light">
                          <div class="card-header">
                              <div class="row">
                                  <div class="col-md-12 text-center py-1">
                                      <i class="fa fa-language fa-3x"></i>
                                  </div>
                                  <div class="col-md-12 text-center py-1">
                                      <h2>
                                        {{count($languages)}} @if(count($languages) > 1) languages @else language @endif
                                      </h2>
                                  </div>
                                </div>
                          </div>
                          <a class="text-center" href="{{route('language.index')}}">
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

          <div class="card-footer">    
            <div class="show py-3">

            </div>
          </div>    
    </section>

@endsection

