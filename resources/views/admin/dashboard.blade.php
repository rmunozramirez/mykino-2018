

@extends('layouts.app') @section('content')

<div class="row">
   
</div>   
<section id="content" class="dashboard">

   <div class="card">
      <div class="card-header">
         <div class="col-md-12">
            <div class="page-logo show">
               <h2><i class="fa fa-tachometer-alt"></i> Dashboard </h2>
            </div>
         </div>
      </div>
      <div class="card-body">
         <div class="inside py-3">
            <div class="flex-center">
               <ul class="nav nav-tabs row" id="myTab" role="tablist">
                  <li class="nav-item col-lg-3 col-md-6">
                     <a class="nav-link active text-center" href="#films" data-toggle="tab">
                        <div class="card bg-light">
                           <div class="card-header">
                              <div class="row">
                                 <div class="col-md-12 text-center py-1">
                                    <i class="fa fa-film fa-3x"></i>
                                 </div>
                                 <div class="col-md-12 text-center py-1">
                                    <h3>
                                       {{count($total_films)}}  <br /> @if(count($total_films) > 1) films @else film @endif
                                    </h3>
                                 </div>
                              </div>
                           </div>
                           <div class="card-footer">
                              <span class="pull-left">View Details</span>
                              <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                              <div class="clearfix"></div>
                           </div>
                        </div>
                     </a>
                  </li>
                  <li class="nav-item col-lg-3 col-md-6">
                     <a class="nav-link text-center" href="#actors" data-toggle="tab">
                        <div class="card bg-light">
                           <div class="card-header">
                              <div class="row">
                                 <div class="col-md-12 text-center py-1">
                                    @if(count($total_actors) > 1)
                                    <i class="fa fa-users fa-3x"></i> @else
                                    <i class="fa fa-user fa-3x"></i> @endif
                                 </div>
                                 <div class="col-md-12 text-center py-1">
                                    <h3>
                                       {{count($total_actors)}}  <br /> @if(count($actors) > 1) actors @else actor @endif
                                    </h3>
                                 </div>
                              </div>
                           </div>
                           <div class="card-footer">
                              <span class="pull-left">View Details</span>
                              <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                           <div class="clearfix"></div>
                        </div>
                        </div>
                     </a>
                  </li>
                  <li class="nav-item col-lg-3 col-md-6">
                     <a class="nav-link text-center" href="#categories" data-toggle="tab">
                        <div class="card bg-light">
                           <div class="card-header">
                              <div class="row">
                                 <div class="col-md-12 text-center py-1">
                                    @if(count($categories) > 1)
                                    <i class="fa fa-tags fa-3x"></i> @else
                                    <i class="fa fa-tag fa-3x"></i> @endif
                                 </div>
                                 <div class="col-md-12 text-center py-1">
                                    <h3>
                                       {{count($total_categories)}}  <br /> @if(count($categories) > 1) categories @else category @endif
                                    </h3>
                                 </div>
                              </div>
                           </div>
                           <div class="card-footer">                          
                              <span class="pull-left">View Details</span>
                              <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                              <div class="clearfix"></div>
                           </div>
                        </div>
                     </a>
                  </li>
                  <li class="nav-item col-lg-3 col-md-6">
                     <a class="nav-link text-center" href="#languages" data-toggle="tab">
                        <div class="card bg-light">
                           <div class="card-header">
                              <div class="row">
                                 <div class="col-md-12 text-center py-1">
                                    <i class="fa fa-language fa-3x"></i>
                                 </div>
                                 <div class="col-md-12 text-center py-1">
                                    <h3>
                                       {{count($languages)}} <br /> @if(count($languages) > 1) languages @else language @endif
                                    </h3>
                                 </div>
                              </div>
                           </div>
                           <div class="card-footer">              
                              <span class="pull-left">View Details</span>
                              <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                              <div class="clearfix"></div>
                           </div>
                        </div>
                     </a>
                  </li>
               </ul>
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
            </div>
            <!-- hr /> @include('admin.partials._fsks')
               <hr /> @include('admin.partials._statistics') -->
         </div>
      </div>
   </div>
</section>

@endsection

