@extends('dashboard.index')
@section ('title', "| All years")
@section('content')
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row wrapper border-bottom white-bg">
      <div class="inside">
        <h2><i class="fas fa-calendar-alt"></i>Years </h2><hr /> 
        <div id="contenido"  class="card">
          <div class="row">
            <div class="ibox-content">
                <div class="table-responsive">
                    @if($years)
                    <table class="table table-striped table-bordered table-hover dataTables-example" >
                       <thead>
                          <tr>
                              <th>Year</th>
                              <th>Number of Films</th>
                          </tr>
                       </thead>
                       <tbody>
                          @foreach($years as $year)
                          <tr>

                             <td><a href="{{route('films.year', date('Y', strtotime($year->year)))}}">Year {{date('Y', strtotime($year->year))}}</a></td>

                          </tr>
                          @endforeach 
                 
                       </tbody>
                      </table>
                      @else
                         <h2>No Films</h2>
                      @endif
                </div>
            </div>
          </div>
        </div>
      </div>
  </div>
</div>



@endsection
