<nav class="navbar navbar-expand-md navbar-dark sticky-top" id="mainNav">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fa fa-bars"></i>
        </button>
  <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="sky-mega-menu sky-mega-menu-top sky-mega-menu-response-to-icons">

          <li class="nav-item active"><a class="nav-link js-scroll-trigger" href="{{ url('/') }}">Startseite</a></li>
          <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{route('page.show', 'ueber-uns')}}">Über uns</a></li>
          
          <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{ route('faqs.index') }}">Häufig gestellte Fragen</a></li>
          <!--/ about -->
          <div class="pull-right">
              @guest
                  <li><a class="nav-link js-scroll-trigger nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
              @else
                  <!-- about -->
                  <li aria-haspopup="true">
                      <a href="#"><i class="fa fa-arrow-down"></i> {{ Auth::user()->name }}</a>
                      <div class="grid-container2">
                          <ul>
                              @if( Auth::user()->profile->statuses[0]->status <= 2)
                              <li><a href="{{ route('dashboard') }}">Admin</a></li>                        
                              @endif
                              <li><a href="{{route('user', Auth::user()->slug )}}">User area</a></li>

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