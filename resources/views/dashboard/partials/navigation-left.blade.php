<nav class="navbar-default navbar-static-side" role="navigation">

    <aside>
        <!-- mega menu -->
        <ul class="sky-mega-menu  sky-mega-menu-fixed sky-mega-menu-pos-left sky-mega-menu-anim-scale sky-mega-menu-response-to-switcher">

            @if(Auth::user())
            <li>  
                <a href="#" class="text-center py-5">

                    @if(Auth::user()->image)
                    <img height="80" class="img-circle thumbnail-admin"  src="{{URL::to('/images/' . Auth::user()->image->slug) }}" alt="{{Auth::user()->name}}" title="{{Auth::user()->name}}" />
                    <br />
                    @endif

                    {{Auth::user()->name}}
                </a>
                <div class="grid-container3">
                    <ul>
                        <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                    </ul>
                </div>
            </li>
            @else
            <li>
                <i class="text-center fa fa-user-circle fa-4x"></i><br />
                <h3>No profiles available</h3>
            </li>
            @endif
            <!-- frontend -->
            <li>
                <a href="{{route('home')}}"><i class="fa fa-home"></i>Home</a>
            </li>
            <!--/ dashboard -->
              
            <!-- dashboard -->
            <li>
                <a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i>Dashboard</a>
            </li>
            <!--/ dashboard -->

            <!-- Films -->
            <li aria-haspopup="true">
                <a href="{{route('films.index')}}"><i class="fa fa-film"></i>Films</a>
                <div class="grid-container3">
                    <ul>
                        <li><a href="{{route('films.create')}}"><i class="fa fa-plus"></i>Add new</a></li>
                    </ul>
                </div>
            </li>
            <!--/ Films -->

            <!-- Actors -->
            <li aria-haspopup="true">
                <a href="{{route('actors.index')}}"><i class="fa fa-group"></i>Actors</a>
                <div class="grid-container3">
                    <ul>
                        <li><a href="{{route('actors.create')}}"><i class="fa fa-plus"></i>Add new</a></li>
                    </ul>
                </div>
            </li>
            <!--/ Actors -->

            <!-- Categories -->
            <li aria-haspopup="true">
                <a href="{{route('categories.index')}}"><i class="fa fa-tags"></i>Categories</a>
                <div class="grid-container3">
                    <ul>
                        <li><a href="{{route('categories.create')}}"><i class="fa fa-plus"></i>Add new</a></li>
                    </ul>
                </div>
            </li>
            <!--/ Categories -->

            <!-- FSK -->
            <li aria-haspopup="true">
                <a href="{{route('fsk.index')}}"><i class="fa fa-eye"></i>Age Classification</a>
            </li>
            <!--/ FSK -->

            <!-- Languages -->
            <li aria-haspopup="true">
                <a href="{{route('language.index')}}"><i class="fa fa-language"></i>Languages</a>
                <div class="grid-container3">
                    <ul>
                        <li><a href="{{route('language.create')}}"><i class="fa fa-plus"></i>Add new</a></li>
                    </ul>
                </div>
            </li>
            <!--/ Languages -->

            <!-- settings -->
            <li aria-haspopup="true" class="bottom">
                <a href="#"><i class="fa fa-gears"></i>Settings</a>
                <div class="grid-container3">
                    <ul>
                        <li><a href="#"><i class="fa fa-book"></i>General</a></li>
                        <li><a href="#"><i class="fa fa-pencil"></i>Writing</a></li>
                        <li><a href="#"><i class="fa fa-eye"></i>Reading</a></li>
                        <li><a href="#"><i class="fa fa-comments"></i>Discussion</a></li>
                        <li><a href="#"><i class="fa fa-picture-o"></i>Media</a></li>
                        <li><a href="#"><i class="fa fa-link"></i>Permalinks</a></li>
                    </ul>
                </div>
            </li>
            <!--/ settings -->
        </ul>
        <!--/ mega menu -->
    </aside>

</nav>