
<div class="card">
    <div class="card-body">        
        <h2>Categories</h2>

            @if($films)
                <div class="col-lg-12">
                    <!-- Three columns of text below the carousel -->
                    @foreach ($films as $film)
                    <a class="image-box" href="{{ 'films/'.$film->slug }}">
                        <img src="{{ $film->image }}" alt="{{ $film->name }}" class="image img-responsive">
                    </a>
                    @endforeach     

                </div><!-- /.row -->   
                <div class="text-center">
                    {{ $films->links() }}
                </div>
            @endif
    </div>
</div>
