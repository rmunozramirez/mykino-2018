<div class="navbar">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/kino') }}">Kino</a>
                <a href="{{route('dashboard') }}">Dashboard</a>
            @else
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('register') }}">Register</a>
            @endauth
        </div>
    @endif

</div>