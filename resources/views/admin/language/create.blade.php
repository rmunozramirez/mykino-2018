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
    <div class="card-body">        
        <h2>Create a new Language</h2>

        {!!Form::open(array('route' => 'categories.store', 'files' => true)) !!}   

        <div class="pt-4">        
            {!!Form::label('category', 'Add a Language name', array())!!}
            {!!Form::text('category', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255'))!!}
        </div>

        <div class="pt-4"> 
            {!!Form::label('image', 'Upload a Featured Image') !!}
            {!!Form::file('image') !!}
        </div>  

        <div class="pt-4">    
            {!!Form::submit('Add the New Category', array('class' => 'btn btn-success btn-block')) !!}
            {!!Form::close() !!}       
        </div>

        Session::flash('message', 'Successfully created post!');
        
    </div>
</div>


@endsection

