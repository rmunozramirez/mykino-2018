<div class="row">
    <div class="col-lg-3">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <span class="label label-success pull-right">Monthly</span>
                <h5>Filme</h5>
            </div>
            <div class="ibox-content">
                <h1 class="no-margins">
                    <a href="{{route('films.index')}}">{{count($total_films)}}  <br /> @if(count($total_films) > 1) Films @else Film @endif</a>
                </h1>
                <div class="stat-percent font-bold text-success">68% <i class="fa fa-bolt"></i></div>
                <small>Bearbeitet bis heute {{date('d.m.Y')}}</small>
            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <span class="label label-info pull-right">Annual</span>
                <h5>Actors</h5>
            </div>
            <div class="ibox-content">
                <h1 class="no-margins">
                    <a href="{{route('actors.index')}}">{{count($total_actors)}}  <br /> @if(count($actors) > 1) Actors @else Actor @endif</a>
                </h1>
                <div class="stat-percent font-bold text-info">20% <i class="fa fa-level-up"></i></div>
                <small>Neue diese Monat</small>
            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <span class="label label-primary pull-right">Today</span>
                <h5>Categories</h5>
            </div>
            <div class="ibox-content">
                <h1 class="no-margins">
                    <a href="{{route('categories.index')}}">{{count($total_categories)}}  <br /> @if(count($categories) > 1) Categories @else Category @endif</a>
                </h1>
                <div class="stat-percent font-bold text-navy">44% <i class="fa fa-level-up"></i></div>
                <small>Warten auf Gutachter Akzeptanz</small>
            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <span class="label label-danger pull-right">Low value</span>
                <h5>Languages</h5>
            </div>
            <div class="ibox-content">
                <h1 class="no-margins">
                    <a href="{{route('language.index')}}">{{count($languages)}} <br /> @if(count($languages) > 1) Languages @else Language @endif</a>
                </h1>
                <div class="stat-percent font-bold text-danger">38% <i class="fa fa-level-down"></i></div>
                <small>In first month</small>
            </div>
        </div>
    </div>
</div>
