@extends('layouts.app')

@section('content')

<div class="card">
    <div class="card-body">        
        <h2>{{ $film->name }}</h2>

                <div  class="row">

                    <div class="col-md-12">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active tab-responsive">
                                <a href="#descripcion" aria-controls="descripcion" role="tab" data-toggle="tab">
                                    <span class="glyphicon glyphicon-film" aria-hidden="true"></span>Resume
                                </a>
                            </li>
                            <li role="presentation" class="tab-responsive">
                                <a href="#technical" aria-controls="technical" role="tab" data-toggle="tab">
                                    <span class="glyphicon glyphicon-book" aria-hidden="true"></span>Sinopsis
                                </a>
                            </li>
                            <li role="presentation" class="tab-responsive">
                                <a href="#actors" aria-controls="technical" role="tab" data-toggle="tab">
                                    <span class="glyphicon glyphicon-book" aria-hidden="true"></span>Actors
                                </a>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="descripcion">
                                <div class="content">
                                   <div class="col-md-12"> <div class="row">
	                                    
		                                    <div class="col-md-3">
				                                <img src="{{asset( $film->image) }}" class="actor-img"/>
				                            </div>
		                                    <div class="col-md-9">
		                                        <table class="table">
		                                        	<tbody>            
			                                        	<tr>            
				                                            <dd>Title:{!! $film->name !!}</dd>
				                                            <dd>Genre: <a href="">{!! $film->category->category !!}</a></dd>
				                                            <dd>Date: {!! $film->year !!}</dd>
				                                            <dd>Duration: {!! $film->duration !!}</dd>
				                                            <dd>Language: {!! $film->language->language !!}</dd>
				                                            <dd>Trailer: <a href="{!! $film->trailer !!}">{!! $film->name !!}</a></dd>
				                                            <dd>Age: <a href=""><img height="50" src=""></a></dd>
			                                        	</tr>
		                                        	</tbody>
		                                        </table>
		                                    </div>
	                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="technical">
                                <div class="content">
                                    <div class="content bottom-50 contenido">{!! $film->description !!}</div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="actors">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h3>Actors playing in "<?php echo ($film->name); ?>"</h3>
                                            </div>
                                            <div class="panel-body">
                                                <table class="table table-striped table-responsive table-hover">
                                                    <tbody>
                                                    <tbody>  


                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>


    </div>
</div>



@endsection
