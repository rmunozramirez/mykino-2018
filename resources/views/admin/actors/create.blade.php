@extends('layouts.app')



@section('content')

    @if(count($errors) > 0)
 
        <ul class="list-group">        
            @foreach($errors->all() as $error)

                <li class="list-group-item text-danger">{{$error}}</li>

            @endforeach
        </ul>

    @endif

<div class="card">
        <div class="card-header">           
      <div class="row">  
        <div class="col-md-10 page-logo">  
          <h2><img height="30" src="{{URL::to('/images/user.png') }}"> Add Actor</h2>
        </div>  
        <div class="col-md-2"> 
          <a class="btn btn-outline-success page-btns" href="{{route('actors.index')}}">{{count($actors)}} Actors</a>
        </div>  
      </div>  
    </div> 
    <div class="card-body">        

        {!!Form::open(array('route' => 'actors.store', 'files' => true)) !!}   

        <div class="pt-4">        
            {!!Form::label('name', 'Add an Actor', array('class' => 'form-spacing-top'))!!}
            {!!Form::text('name', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255'))!!}
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="pt-3"> 
                        {!! Form::label('genre', 'Gender:') !!}
                        {!! Form::select('genre', ['' => 'Choose a genre', 'masculine' => 'Man', 'femenine' => 'Woman'] , null, array('class' => 'form-control'))!!}
                </div>
            </div>

            <div class="col-md-6">
                <div class="pt-4"> 
                    {!!Form::label('image', 'Upload a Featured Image') !!}
                    {!!Form::file('image') !!}
                </div>  
            </div>  
        </div>
               

        <div class="pt-4">    
            {!!Form::submit('Add New Actor', array('class' => 'btn btn-success btn-block')) !!}
            {!!Form::close() !!}       
        </div>
        
    </div>
</div>



@endsection
