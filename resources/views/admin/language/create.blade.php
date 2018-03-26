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
              <h2><img height="30" src="{{URL::to('/images/language.png') }}" >Create a new Language</h2>
            </div>  
            <div class="col-md-2"> 
              <a class="btn btn-outline-success page-btns"  href="{{route('language.index')}}">{{count($language)}} languages</a>
            </div>  
          </div>  
        </div>   
        <div class="card-body">        
            <div class="inside">
                {!!Form::open(array('route' => 'language.store', 'files' => true)) !!}   

                <div class="pt-4">        
                    {!!Form::label('language', 'Add a Language name', array())!!}
                    {!!Form::text('language', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255'))!!}
                </div>

                <div class="pt-4"> 
                    {!!Form::label('image', 'Upload a Featured Image') !!}
                    {!!Form::file('image') !!}
                </div>  
        </div>
        <div class="card-footer">    
                {!!Form::submit('Add the New Language', array('class' => 'btn btn-success btn-block')) !!}
                {!!Form::close() !!}       

        </div>
    </div>
</div>


@endsection

