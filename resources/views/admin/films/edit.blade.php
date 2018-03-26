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
    <div class="card-header">           
      <div class="row">  
        <div class="col-md-10 page-logo">  
          <h2><img height="30" src="{{URL::to('/images/film.png') }}" alt="{{$film->name}}">Edit {{$film->name}}</h2>
        </div>  
        <div class="col-md-2 "> 
          <a class="btn btn-outline-success page-btns" href="{{route('films.index')}}">{{count($films)}} Films</a>
        </div>  
      </div>  
    </div> 
    <div class="card-body">        
    <div class="inside">        

        {!! Form::model($film, ['method'=>'PATCH', 'action'=> ['FilmsController@update', $film->slug ],'files'=>true]) !!}

        <div class="pt-3 row">       
            <div class="col-md-3"> 
                <div class="row"> 
                    <div class="col-md-12 pt-3"> 
                        <img class="big-img img-responsive"  src="{{URL::to('/images/' . $film->image->image ) }}" alt="{{$film->name}}" >
                    </div>
                </div>

                <div class="col-md-12 pt-3 "> 
                    <div class="pt-4"> 
                        {!!Form::label('image', 'Change the Featured Image') !!}
                        {!!Form::file('image') !!}
                    </div>
                </div>
            </div>

            <div class="col-md-9"> 
                <div class="row"> 
                     <div class="col-md-12"> 
                        <div class="pt-4">        
                            {!!Form::label('name', 'Add a film name', array('class' => 'form-spacing-top'))!!}
                            {!!Form::text('name', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255'))!!}
                        </div>
                    </div>
                </div>
                
                <div class="row"> 
                     <div class="col-md-6"> 
                        <div class="pt-3"> 
                                {!! Form::label('category_slug', 'Category:') !!}
                                {!! Form::select('category_id', ['' => 'Choose a Category'] + $categories, null, array('class' => 'form-control'))!!}
                        </div>
                    </div>

                    <div class="col-md-6"> 
                        <div class="pt-3"> 
                            {!!Form::label('trailer', 'Trailer link:', array('class' => 'form-spacing-top'))!!}
                            {!!Form::text('trailer', null, array('class' => 'form-control')) !!}
                        </div>
                    </div>
                </div>

                <div class="pt-3 row">       
                    <div class="col-md-6">       
                        {!!Form::label('year', 'Year:', array('class' => 'form-spacing-top'))!!} 
                        {!!Form::date('year', '', array('class' => 'form-control')) !!} 
                    </div>

                    <div class="col-md-6"> 
                        {!!Form::label('duration', 'Duration:', array('class' => 'form-spacing-top'))!!}
                        {!!Form::text('duration', null, array('class' => 'form-control')) !!}                
                    </div>
                </div>

                <div class="pt-3 row">       
                    <div class="col-md-6"> 
                        {!!Form::label('language_id', 'Language:', array('class' => 'form-spacing-top')) !!}
                        {!! Form::select('language_id', ['' => 'Choose a Language'] + $languages, null, array('class' => 'form-control'))!!}
                    </div>

                    <div class="col-md-6"> 
                        {!!Form::label('fsk_id', 'Age:') !!}
                        {!!Form::select('fsk_id', array('' => 'Choose Age', '1' => 'Approved for 0', '2' => 'Approved for 6', '3' => 'Approved for 12', '4' => 'Approved for 16', '5' => 'Approved for 18'), null, array('class' => 'form-control'))!!}
                    </div>    
                </div>

                <div class="pt-3 row">       
                    <div class="col-md-12"> 
                        {!! Form::label('actor', 'Actors:') !!}
                        {!! Form::select('actor_id', $actors, null, array('multiple' => 'multiple', 'class' => 'form-control select2-multi'))!!}
                    </div>    
                </div>

                <div class="pt-3 row">       
                    <div class="col-md-12">        
                        {!!Form::label('description', 'Film description:', array('class' => 'form-spacing-top'))!!}
                        {!!Form::textarea('description', null, array('id' => 'summernote', 'class' => 'form-control', 'rows' => 6))!!}                       
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="card-footer">  
  
        <div class="pt-3 row">       
            <div class="col-md-12">    
                {!!Form::submit('Add the New Film', array('class' => 'btn btn-success btn-block')) !!}
                {!!Form::close() !!}       
            </div>

        </div>      
    </div>

</div>



@endsection

@section('scripts')
<script src="{{ asset('js/select2.min.js') }}"></script>

<script type="text/javascript">
    $('.select2-multi').select2({
            maximumSelectionLength: 8,
            placeholder: 'Choose an Actor',
            allowClear: true
        });
</script>

<script>
    $('#summernote').summernote({
        placeholder: 'And the Oscars goes to...',
        tabsize: 2,
        height: 200
    });
</script>
@endsection