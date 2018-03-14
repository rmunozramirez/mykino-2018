@extends('layouts.app')



@section('content')

    @if(count($errors) > 0)

        <ul class="list-group">
            
            @foreach($errors->all() as $error)

                <li class="list-group-item text-danger">{{$error}}</li>

            @endforeach

        </ul>

    @endif

<div class="card ">
    <div class="card-body">        
        <h2>Create a new Film</h2>

        {!!Form::open(array('route' => 'films.store', 'files' => true)) !!}   

        <div class="pt-4">        
            {!!Form::label('name', 'Add a film name', array('class' => 'form-spacing-top'))!!}
            {!!Form::text('name', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255'))!!}
        </div>

        <div class="pt-3"> 
            {!!Form::label('category_id', 'Category:', array('class' => 'form-spacing-top')) !!}
            <select class="form-control" name="category_id">


            </select>
        </div>


        <div class="pt-3"> 
            {!!Form::label('trailer', 'Trailer link:', array('class' => 'form-spacing-top'))!!}
            {!!Form::text('trailer', null, array('class' => 'form-control')) !!}
        </div>

        <div class="pt-3 row">       
            <div class="col-md-6">       
                {!!Form::label('year', 'Year:', array('class' => 'form-spacing-top'))!!}
                {!!Form::text('year', null, array('class' => 'form-control date')) !!}    
            </div>

            <div class="col-md-6"> 
                {!!Form::label('duration', 'Duration:', array('class' => 'form-spacing-top'))!!}
                {!!Form::text('duration', null, array('class' => 'form-control')) !!}                
            </div>
        </div>

        <div class="pt-3 row">       
            <div class="col-md-6"> 
                {!!Form::label('language_id', 'Language:', array('class' => 'form-spacing-top')) !!}
                <select class="form-control" name="language_id">

                </select>
            </div>

            <div class="col-md-6"> 
                {!!Form::label('fsk_id', 'Age:', array('class' => 'form-spacing-top')) !!}
                <select class="form-control" name="fsk_id">

                </select>
            </div>    
        </div>

        <div class="pt-4"> 
            {!!Form::label('image', 'Upload a Featured Image') !!}
            {!!Form::file('image') !!}
        </div>  

        <div class="pt-4">       
            {!!Form::label('description', 'Film description:', array('class' => 'form-spacing-top'))!!}
            {!!Form::textarea('description', null, array('id' => 'summernote', 'class' => 'form-control', 'rows' => 6))!!}                       
        </div>

        <div class="pt-4">    
            {!!Form::submit('Add the New Film', array('class' => 'btn btn-success btn-block')) !!}
            {!!Form::close() !!}       
        </div>

    </div>
</div>



@endsection
