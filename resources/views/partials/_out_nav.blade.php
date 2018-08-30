<nav class="navbar navbar-expand-md navbar-dark" id="mainNav">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fa fa-bars"></i>
        </button>
  <div class="collapse navbar-collapse" id="navbarResponsive">

      <ul class="sky-mega-menu sky-mega-menu-top sky-mega-menu-response-to-icons">
          <div class="pull-right">
            <li class="nav-item active"><a class="nav-link js-scroll-trigger" href="{{ url('/') }}"><img height="30" src="{{URL::to('/images/mykino.png' ) }}" alt="My Kino"> My kino</a></li>


            <li class="nav-item active"><a class="nav-link js-scroll-trigger" href="{{route('kino.index')}}"> Filme</a></li>

            <li class="nav-item active"><a class="nav-link js-scroll-trigger" href="{{route('kino.actors')}}"> Actors</a></li>

            <li aria-haspopup="true">
                <a href="{{route('kino.stats')}}">Statistics</a>
                <div class="grid-container3">
                    <ul>
                        <li><a href="{{route('kino.categories')}}">Categories</a></li>
                        <li><a href="{{route('kino.ages')}}">Age Classifications</a></li>
                        <li><a href="{{route('kino.languages')}}">Languages</a></li>
                    </ul>
                </div>
            </li>

          <!--/ about -->

              @guest
                  <li><a class="nav-link js-scroll-trigger nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
              @else
                  <!-- about -->
                  <li aria-haspopup="true">
                      <a href="#"><i class="fa fa-arrow-down"></i> {{ Auth::user()->name }}</a>
                      <div class="grid-container2">
                          <ul>
                              @if( Auth::user()->role_id > 3)
                              <li><a href="{{ route('dashboard') }}">Admin</a></li>                        
                              @endif

                              <li><a href="{{ url('/logout') }}"><i class="fa fa-sign-out-alt"></i>Logout</a></li>
                          </ul>
                      </div>
                  </li>
                  <!--/ about -->
              @endguest
          </div>
      </ul>
  </div>
</nav>