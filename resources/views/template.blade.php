<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>SI WP Maskapai</title>

    <!-- Bootstrap -->
    <link href="{{ url('vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ url('vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ url('vendors/nprogress/nprogress.css') }}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{ url('vendors/iCheck/skins/flat/green.css') }}" rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link href="{{ url('vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{ url('vendors/jqvmap/dist/jqvmap.min.css') }}" rel="stylesheet" />
    <!-- bootstrap-daterangepicker -->
    <link href="{{ url('vendors/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{ url('build/css/custom.min.css') }}" rel="stylesheet">
</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                        <a href="{{ url('dashboard') }}" class="site_title"><i class="fa fa-plane"></i> <span>SI
                                WP Maskapai</span></a>
                    </div>

                    <div class="clearfix"></div>

                    <!-- menu profile quick info -->
                    <div class="profile clearfix">
                        <div class="profile_pic">
                            <img src="{{ url('images/foto alma.jpg') }}" alt="..." class="img-circle profile_img">
                        </div>
                        <div class="profile_info">
                            <span>Welcome,</span>
                            <h2>Admin Rafi</h2>
                        </div>
                    </div>
                    <!-- /menu profile quick info -->

                    <br />

                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        <div class="menu_section">
                            <h3>General</h3>
                            <ul class="nav side-menu">
                                <li><a href="{{ route('maskapai.index') }}"><i class="fa fa-paper-plane"></i> Data Maskapai</a>
                                </li>
                                <li><a href="{{ route('pesawat.index') }}"><i class="fa fa-plane"></i> Data Pesawat</a></li>
                                <li><a href="{{ route('tiket.index') }}"><i class="fa fa-ticket"></i> Data Tiket</a></li>
                                <li><a href="{{ route('admin.index') }}"><i class="fa fa-user"></i> Admin</a></li>
                                <li><a href="{{ route('user1.index') }}"><i class="fa fa-group"></i> User</a></li>
                            </ul>
                        </div>
                        <div class="menu_section">
                            <h3>Penilaian</h3>
                            <ul class="nav side-menu">
                                <li><a href="{{ route('bobotnilai.index') }}"><i class="fa fa-pie-chart"></i> Data Bobot Nilai</a>
                                </li>
                                <li><a><i class="fa fa-bar-chart-o"></i> Kriteria Penilaian <span
                                            class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="{{ route('nilaikualitas.index') }}">Nilai Kualitas</a></li>
                                        <li><a href="{{ route('nilaiharga.index') }}">Nilai Harga</a></li>
                                        <li><a href="{{ route('nilaipelayanan.index') }}">Nilai Pelayanan</a></li>
                                        <li><a href="{{ route('nilaifasilitas.index') }}">Nilai Fasilitas</a></li>
                                    </ul>
                                </li>
                                {{-- <li><a href="{{ route('penilaian.index') }}"><i class="fa fa-pie-chart"></i> Data Penilaian</a>
                                </li> --}}
                                <li><a href="{{ url('metode') }}"><i class="fa fa-trophy"></i> Metode</a></li>
                                </li>
                                <li><a href="javascript:void(0)"><i class="fa fa-laptop"></i> Landing Page <span
                                            class="label label-success pull-right">Coming Soon</span></a></li>
                            </ul>
                        </div>

                    </div>
                    <!-- /sidebar menu -->

                    <!-- /menu footer buttons -->
                    <div class="sidebar-footer hidden-small">
                        <a data-toggle="tooltip" data-placement="top" title="Settings">
                            <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                            <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Lock">
                            <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                            <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                        </a>
                    </div>
                    <!-- /menu footer buttons -->
                </div>
            </div>

            <!-- top navigation -->
            <div class="top_nav">
                <div class="nav_menu">
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>
                    <nav class="nav navbar-nav">
                        <ul class=" navbar-right">
                            <li class="nav-item dropdown open" style="padding-left: 15px;">
                                <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true"
                                    id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                                    <img src="{{ url('images/foto alma.jpg') }}" alt="">Rafi
                                </a>
                                <div class="dropdown-menu dropdown-usermenu pull-right"
                                    aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="javascript:;"> Profile</a>
                                    <a class="dropdown-item" href="javascript:;">
                                        <span>Settings</span>
                                    </a>
                                    <a class="dropdown-item" href="javascript:;">Help</a>
                                    <a class="dropdown-item" href="login.html"><i
                                            class="fa fa-sign-out pull-right"></i> Log Out</a>
                                </div>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- /top navigation -->

            @yield('content')

            <!-- footer content -->
            <footer>
                <div class="pull-right">
                    Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
                </div>
                <div class="clearfix"></div>
            </footer>
            <!-- /footer content -->
        </div>
    </div>

    <!-- jQuery -->
    <script src="{{ url('vendors/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ url('vendors/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <!-- FastClick -->
    <script src="{{ url('vendors/fastclick/lib/fastclick.js') }}"></script>
    <!-- NProgress -->
    <script src="{{ url('vendors/nprogress/nprogress.js') }}"></script>
    <!-- Chart.js -->
    <script src="{{ url('vendors/Chart.js/dist/Chart.min.js') }}"></script>
    <!-- gauge.js -->
    <script src="{{ url('vendors/gauge.js/dist/gauge.min.js') }}"></script>
    <!-- bootstrap-progressbar -->
    <script src="{{ url('vendors/bootstrap-progressbar/bootstrap-progressbar.min.js') }}"></script>
    <!-- iCheck -->
    <script src="{{ url('vendors/iCheck/icheck.min.js') }}"></script>
    <!-- Skycons -->
    <script src="{{ url('vendors/skycons/skycons.js') }}"></script>
    <!-- Flot -->
    <script src="{{ url('vendors/Flot/jquery.flot.js') }}"></script>
    <script src="{{ url('vendors/Flot/jquery.flot.pie.js') }}"></script>
    <script src="{{ url('vendors/Flot/jquery.flot.time.js') }}"></script>
    <script src="{{ url('vendors/Flot/jquery.flot.stack.js') }}"></script>
    <script src="{{ url('vendors/Flot/jquery.flot.resize.js') }}"></script>
    <!-- Flot plugins -->
    <script src="{{ url('vendors/flot.orderbars/js/jquery.flot.orderBars.js') }}"></script>
    <script src="{{ url('vendors/flot-spline/js/jquery.flot.spline.min.js') }}"></script>
    <script src="{{ url('vendors/flot.curvedlines/curvedLines.js') }}"></script>
    <!-- DateJS -->
    <script src="{{ url('vendors/DateJS/build/date.js') }}"></script>
    <!-- JQVMap -->
    <script src="{{ url('vendors/jqvmap/dist/jquery.vmap.js') }}"></script>
    <script src="{{ url('vendors/jqvmap/dist/maps/jquery.vmap.world.js') }}"></script>
    <script src="{{ url('vendors/jqvmap/examples/js/jquery.vmap.sampledata.js') }}"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="{{ url('vendors/moment/min/moment.min.js') }}"></script>
    <script src="{{ url('vendors/bootstrap-daterangepicker/daterangepicker.js') }}"></script>

    <!-- Custom Theme Scripts -->
    <script src="{{ url('build/js/custom.min.js') }}"></script>

</body>

</html>
