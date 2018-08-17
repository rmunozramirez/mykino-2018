<nav class="navbar-default navbar-static-side" role="navigation">

    <aside>
        <!-- mega menu -->
        <ul class="sky-mega-menu  sky-mega-menu-fixed sky-mega-menu-pos-left sky-mega-menu-anim-scale sky-mega-menu-response-to-switcher">
            @if(Auth::user()->profile)
            <li>  
                <a href="#" class="text-center py-5">
                    @foreach(Auth::user()->profile->imageables as $image)
                    @if($image->imageable_type === 'profiles' && $image->imageable_id === Auth::id())
                    <img height="80" class="img-circle thumbnail-admin"  src="{{URL::to('/images/' . $image->slug) }}" alt="{{Auth::user()->name}}" title="{{Auth::user()->name}}" />
                    <br />
                    @endif
                    @endforeach
                    {{Auth::user()->name}}
                </a>
                <div class="grid-container3">
                    <ul>
                        <li><a href="{{route('profiles.show', Auth::user()->profile->slug)}}">Profile</a></li>
                        <li><a href="mailbox.html">Mailbox</a></li>
                        <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                    </ul>
                </div>
            </li>
            @else
            <li>
                <i class="text-center fa fa-user-circle fa-4x"></i><br />
                <h3>Kein Profile vorhanden</h3>
            </li>
            @endif
            <!-- frontend -->
            <li>
                <a href="{{route('home')}}"><i class="fa fa-home"></i>Startseite</a>
            </li>
            <!--/ dashboard -->
              
            <!-- dashboard -->
            <li>
                <a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i>Dashboard</a>
            </li>
            <!--/ dashboard -->

            <!-- Films -->
            <li aria-haspopup="true">
                <a href="{{route('films.index')}}"><i class="fa fa-group"></i>Films</a>
                <div class="grid-container3">
                    <ul>
                        <li><a href="{{route('films.create')}}"><i class="fa fa-plus"></i>Neue hinzufügen</a></li>
                    </ul>
                </div>
            </li>
            <!--/ Films -->

            <!-- Actors -->
            <li aria-haspopup="true">
                <a href="{{route('actors.index')}}"><i class="fa fa-group"></i>Actors</a>
                <div class="grid-container3">
                    <ul>
                        <li><a href="{{route('actors.create')}}"><i class="fa fa-plus"></i>Neue hinzufügen</a></li>
                    </ul>
                </div>
            </li>
            <!--/ Actors -->

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