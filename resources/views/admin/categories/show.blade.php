@extends('layouts.app')

@section('content')

<div class="card">
    <div class="card-body">        
        <h2>Category: {{$category->category}}: <?php echo count($total); ?> films</h2>

    </div>
</div>



@endsection
