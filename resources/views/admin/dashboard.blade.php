

@extends('layouts.app') @section('content')

 
<section id="content" class="dashboard">

   <div class="card">
      <div class="card-header">
         <div class="col-md-12">
            <div class="page-logo show">
               <h2><i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard </h2>
            </div>
         </div>
      </div>
      <div class="card-body">
         <div class="inside py-3">
            <div class="flex-center">
               <ul class="nav nav-tabs row" id="myTab" role="tablist">
                  <li class="nav-item col-lg-2 col-md-6">
                     <a class="nav-link active text-center" href="#films" data-toggle="tab">
                        <div class="card bg-light">
                           <div class="card-header">
                              <div class="row">
                                 <div class="col-md-12 text-center py-1">
                                    <i class="fa fa-film fa-2x"></i>
                                 </div>
                                 <div class="col-md-12 text-center py-1">
                                    <h5>
                                       {{count($total_films)}}  <br /> @if(count($total_films) > 1) Films @else Film @endif
                                    </h5>
                                 </div>
                              </div>
                           </div>
                           <div class="card-footer">
                              <span class="pull-left">Details</span>
                              <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                              <div class="clearfix"></div>
                           </div>
                        </div>
                     </a>
                  </li>
                  <li class="nav-item col-lg-2 col-md-6">
                     <a class="nav-link text-center" href="#actors" data-toggle="tab">
                        <div class="card bg-light">
                           <div class="card-header">
                              <div class="row">
                                 <div class="col-md-12 text-center py-1">
                                    @if(count($total_actors) > 1)
                                    <i class="fa fa-users fa-2x"></i> @else
                                    <i class="fa fa-user fa-2x"></i> @endif
                                 </div>
                                 <div class="col-md-12 text-center py-1">
                                    <h5>
                                       {{count($total_actors)}}  <br /> @if(count($actors) > 1) Actors @else Actor @endif
                                    </h5>
                                 </div>
                              </div>
                           </div>
                           <div class="card-footer">
                              <span class="pull-left">Details</span>
                              <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                           <div class="clearfix"></div>
                        </div>
                        </div>
                     </a>
                  </li>
                  <li class="nav-item col-lg-2 col-md-6">
                     <a class="nav-link text-center" href="#categories" data-toggle="tab">
                        <div class="card bg-light">
                           <div class="card-header">
                              <div class="row">
                                 <div class="col-md-12 text-center py-1">
                                    @if(count($categories) > 1)
                                    <i class="fa fa-tags fa-2x"></i> @else
                                    <i class="fa fa-tag fa-3x"></i> @endif
                                 </div>
                                 <div class="col-md-12 text-center py-1">
                                    <h5>
                                       {{count($total_categories)}}  <br /> @if(count($categories) > 1) Categories @else Category @endif
                                    </h5>
                                 </div>
                              </div>
                           </div>
                           <div class="card-footer">                          
                              <span class="pull-left">Details</span>
                              <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                              <div class="clearfix"></div>
                           </div>
                        </div>
                     </a>
                  </li>
                  <li class="nav-item col-lg-2 col-md-6">
                     <a class="nav-link text-center" href="#languages" data-toggle="tab">
                        <div class="card bg-light">
                           <div class="card-header">
                              <div class="row">
                                 <div class="col-md-12 text-center py-1">
                                    <i class="fa fa-language fa-2x"></i>
                                 </div>
                                 <div class="col-md-12 text-center py-1">
                                    <h5>
                                       {{count($languages)}} <br /> @if(count($languages) > 1) Languages @else Language @endif
                                    </h5>
                                 </div>
                              </div>
                           </div>
                           <div class="card-footer">              
                              <span class="pull-left">Details</span>
                              <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                              <div class="clearfix"></div>
                           </div>
                        </div>
                     </a>
                  </li>
                  <li class="nav-item col-lg-2 col-md-6">
                     <a class="nav-link text-center" href="#age" data-toggle="tab">
                        <div class="card bg-light">
                           <div class="card-header">
                              <div class="row">
                                 <div class="col-md-12 text-center py-1">
                                    <i class="fa fa-eye-slash fa-2x"></i>
                                 </div>
                                 <div class="col-md-12 text-center py-1">
                                    <h5>5 Age <br />groups
                                    </h5>
                                 </div>
                              </div>
                           </div>
                           <div class="card-footer">              
                              <span class="pull-left">Details</span>
                              <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                              <div class="clearfix"></div>
                           </div>
                        </div>
                     </a>
                  </li>
                  <li class="nav-item col-lg-2 col-md-6">
                     <a class="nav-link text-center" href="#stadistics" data-toggle="tab">
                        <div class="card bg-light">
                           <div class="card-header">
                              <div class="row">
                                 <div class="col-md-12 text-center py-1">
                                    <i class="fa fa-sort-numeric-asc fa-2x" aria-hidden="true"></i>
                                 </div>
                                 <div class="col-md-12 text-center py-1">
                                    <h5>Some <br /> Stadistics
                                    </h5>
                                 </div>
                              </div>
                           </div>
                           <div class="card-footer">              
                              <span class="pull-left">Details</span>
                              <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                              <div class="clearfix"></div>
                           </div>
                        </div>
                     </a>
                  </li>
               </ul>
            </div>
         </div>
            <hr />
            <div class="tab-content">
               <div role="tabpanel" class="tab-pane fade show active" id="films">
                  @include('admin.films.partials._table_index')
               </div>
               <div role="tabpanel" class="tab-pane fade " id="actors">
                  @include('admin.actors.partials._table_index')
               </div>
               <div role="tabpanel" class="tab-pane fade" id="categories">
                  @include('admin.categories.partials._table_index')
               </div>
               <div role="tabpanel" class="tab-pane fade" id="languages">
                  @include('admin.language.partials._table_index')
               </div>
               <div role="tabpanel" class="tab-pane fade" id="age">
                  @include('admin.fsk.partials._table_index')
               </div>
               <div role="tabpanel" class="tab-pane fade" id="stadistics">
                  @include('admin.partials._statistics')
               </div>
            </div>
            <!-- hr /> @include('admin.partials._fsks')
               <hr />  -->
      </div>
   </div>
</section>

@endsection

