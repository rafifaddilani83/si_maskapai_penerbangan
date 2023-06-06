@extends('template')
@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
        <!-- top tiles -->
        <div class="col-12">
            <div class="row" style="display: inline-block;">
                <div class="tile_count">
                    <div class="col-md-3 col-sm-4  tile_stats_count">
                        <span class="count_top"><i class="fa fa-eraser"></i> Total Maskapai</span>
                        <div class="count blue">3</div>
                    </div>
                    <div class="col-md-3 col-sm-4  tile_stats_count">
                        <span class="count_top"><i class="fa fa-plane"></i> Total Pesawat</span>
                        <div class="count red">3</div>
                    </div>
                    <div class="col-md-3 col-sm-4  tile_stats_count">
                        <span class="count_top"><i class="fa fa-ticket"></i> Total Tiket Aktif</span>
                        <div class="count">0</div>
                    </div>
                    <div class="col-md-3 col-sm-4  tile_stats_count">
                        <span class="count_top"><i class="fa fa-user"></i> Total Admin</span>
                        <div class="count green">2</div>
                    </div>
                    <div class="col-md-3 col-sm-4  tile_stats_count">
                        <span class="count_top"><i class="fa fa-group"></i> Total User</span>
                        <div class="count yellow">2</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- start of weather widget -->
        <div class="col-md-6 col-sm-6 ">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Daily active users <small>Sessions</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                aria-expanded="false"><i class="fa fa-wrench"></i></a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Settings 1</a>
                                <a class="dropdown-item" href="#">Settings 2</a>
                            </div>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="temperature"><b>Monday</b>, 07:30 AM
                                <span>F</span>
                                <span><b>C</b></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="weather-icon">
                                <canvas height="84" width="84" id="partly-cloudy-day"></canvas>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="weather-text">
                                <h2>Malang <br><i>Partly Cloudy Day</i></h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="weather-text pull-right">
                            <h3 class="degrees">23</h3>
                        </div>
                    </div>

                    <div class="clearfix"></div>

                    <div class="row weather-days">
                        <div class="col-sm-2">
                            <div class="daily-weather">
                                <h2 class="day">Mon</h2>
                                <h3 class="degrees">25</h3>
                                <canvas id="clear-day" width="32" height="32"></canvas>
                                <h5>15 <i>km/h</i></h5>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="daily-weather">
                                <h2 class="day">Tue</h2>
                                <h3 class="degrees">25</h3>
                                <canvas height="32" width="32" id="rain"></canvas>
                                <h5>12 <i>km/h</i></h5>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="daily-weather">
                                <h2 class="day">Wed</h2>
                                <h3 class="degrees">27</h3>
                                <canvas height="32" width="32" id="snow"></canvas>
                                <h5>14 <i>km/h</i></h5>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="daily-weather">
                                <h2 class="day">Thu</h2>
                                <h3 class="degrees">28</h3>
                                <canvas height="32" width="32" id="sleet"></canvas>
                                <h5>15 <i>km/h</i></h5>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="daily-weather">
                                <h2 class="day">Fri</h2>
                                <h3 class="degrees">28</h3>
                                <canvas height="32" width="32" id="wind"></canvas>
                                <h5>11 <i>km/h</i></h5>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="daily-weather">
                                <h2 class="day">Sat</h2>
                                <h3 class="degrees">26</h3>
                                <canvas height="32" width="32" id="cloudy"></canvas>
                                <h5>10 <i>km/h</i></h5>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>

        </div>
        <!-- end of weather widget -->
    </div>
    </div>
    </div>
    </div>
    <!-- /page content -->
@endsection
