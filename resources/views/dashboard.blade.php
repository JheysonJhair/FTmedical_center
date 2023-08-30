<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Panel de control</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="vendors/jqvmap/dist/jqvmap.min.css">


    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">

</head>

<body>

    <!-- PANEL IZQUIERDO -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./"><img src="images/logotipo.png" alt="Logo"></a>
                <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="index.html"> <i class="menu-icon fa fa-dashboard"></i>Panel principal</a>
                    </li>
                    <p>Nombre: {{ $atributo[0]->nombreDato }}</p>
                    <p>Especialidad: {{ $atributo[0]->especialidad }}</p>
                    <!-- /.ADMINISTRADOR -->
                    <h3 class="menu-title">ADMINISTRADOR</h3>
                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fas fa-user"></i>Usuarios</a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="menu-icon fas fa-heartbeat"></i><a href="font-fontawesome.html">Medicina General</a></li>
                                <li><i class="menu-icon fas fa-tooth"></i><a href="font-fontawesome.html">Dental</a></li>
                                <li><i class="menu-icon fas fa-hospital"></i><a href="font-fontawesome.html">Topico</a></li>
                                <li><i class="menu-icon fas fa-pills"></i><a href="font-fontawesome.html">Farmacia</a></li>

                            </ul>
                        </li>
                        <li>
                            <a href="widgets.html"> <i class="menu-icon fas fa-cog"></i> Configuración</a>
                        </li>
                    <!-- /.MEDICINA GENERAL -->
                    <h3 class="menu-title">Medicina General</h3>
                        <li>
                            <a href="widgets.html"> <i class="menu-icon fas fa-user"></i> Pacientes</a>
                        </li>
                        <li>
                            <a href="widgets.html"> <i class="menu-icon fas fa-folder"></i> Expedientes</a>
                        </li>
                        <li>
                            <a href="widgets.html"> <i class="menu-icon fas fa-chart-bar"></i> Estadísticas</a>
                        </li>
                        <li>
                            <a href="widgets.html"> <i class="menu-icon fas fa-calendar-alt"></i> Citas</a>
                        </li>
                        <li>
                            <a href="widgets.html"> <i class="menu-icon fas fa-clock"></i> En espera</a>
                        </li>
                    <!-- /.FARMACIA -->
                    <h3 class="menu-title">Farmacia</h3>
                        <li>
                            <a href="widgets.html"> <i class="menu-icon fas fa-pills"></i> Medicamentos</a>
                        </li>
                        <li>
                            <a href="widgets.html"> <i class="menu-icon fas fa-prescription-bottle-alt"></i> Recetas Médicas</a>
                        </li>
                        <li>
                            <a href="widgets.html"> <i class="menu-icon fas fa-history"></i> Historial</a>
                        </li>

                    <!-- /.DENTAL -->
                    <h3 class="menu-title">Dental</h3>
                        <li>
                            <a href="widgets.html"> <i class="menu-icon fas fa-user"></i> Pacientes</a>
                        </li>
                        <li>
                            <a href="widgets.html"> <i class="menu-icon fas fa-tooth"></i> Historial dental</a>
                        </li>
                        <li>
                            <a href="widgets.html"> <i class="menu-icon fas fa-calendar-alt"></i> Citas</a>
                        </li>

                    <!-- /.TOPICO -->
                    <h3 class="menu-title">Topico</h3>
                        <li>
                            <a href="widgets.html"> <i class="menu-icon fas fa-user"></i> Pacientes</a>
                        </li>
                        <li>
                            <a href="widgets.html"> <i class="menu-icon fas fa-calendar-alt"></i> Citas</a>
                        </li>
                        <li>
                            <a href="widgets.html"> <i class="menu-icon fas fa-notes-medical"></i> Historial Médico</a>
                        </li>
                </ul>
            </div>
        </nav>
    </aside><!-- /#PANEL IZQUIERDO -->

    <!-- PANEL DERECHO -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>

                        <div class="dropdown for-notification">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-bell"></i>
                                <span class="count bg-danger">3</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="notification">
                                <p class="red">Tienes 3 notificaciones</p>
                                <a class="dropdown-item media bg-flat-color-1" href="#">
                                <i class="fa fa-check"></i>
                                <p>Server #1 overloaded.</p>
                            </a>
                                <a class="dropdown-item media bg-flat-color-4" href="#">
                                <i class="fa fa-info"></i>
                                <p>Server #2 overloaded.</p>
                            </a>
                                <a class="dropdown-item media bg-flat-color-5" href="#">
                                <i class="fa fa-warning"></i>
                                <p>Server #3 overloaded.</p>
                            </a>
                            </div>
                        </div>

                        <div class="dropdown for-message">
                            <button class="btn btn-secondary dropdown-toggle" type="button"
                                id="message"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="ti-email"></i>
                                <span class="count bg-primary">4</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="message">
                                <p class="red">Tienes 3 mensajes</p>
                                <a class="dropdown-item media bg-flat-color-1" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/1.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Jonathan Smith</span>
                                    <span class="time float-right">Just now</span>
                                        <p>Hello, this is an example msg</p>
                                </span>
                            </a>
                                <a class="dropdown-item media bg-flat-color-4" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/2.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Jack Sanders</span>
                                    <span class="time float-right">5 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                </span>
                            </a>
                                <a class="dropdown-item media bg-flat-color-5" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/3.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Cheryl Wheeler</span>
                                    <span class="time float-right">10 minutes ago</span>
                                        <p>Hello, this is an example msg</p>
                                </span>
                            </a>
                                <a class="dropdown-item media bg-flat-color-3" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/4.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Rachel Santos</span>
                                    <span class="time float-right">15 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                </span>
                            </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="images/admin.png" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="#"><i class="fa fa-user"></i> Mi perfil</a>

                            <a class="nav-link" href="#"><i class="fa fa-user"></i> Notificaciones <span class="count">2</span></a>

                            <a class="nav-link" href="#"><i class="fa fa-cog"></i> Configuracion</a>

                            <a class="nav-link" href="#"><i class="fa fa-power-off"></i> Salir</a>
                        </div>
                    </div>
                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Panel principal</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Panel Principal</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">

            <div class="col-sm-12">
                <div class="alert  alert-success alert-dismissible fade show" role="alert">
                    <span class="badge badge-pill badge-success">Satisfactorio</span> Bienvenido, hasta hoy estas son las ultimas noticias!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
            <!-- Usuarios -->
            <div class="col-sm-12 mb-4">
                <div class="card-group">
                    <div class="card col-md-6 no-padding ">
                        <div class="card-body">
                            <div class="h1 text-muted text-right mb-4">
                                <i class="fa fa-users"></i>
                            </div>

                            <div class="h4 mb-0">
                                <span class="count">87500</span>
                            </div>

                            <small class="text-muted text-uppercase font-weight-bold">Visitors</small>
                            <div class="progress progress-xs mt-3 mb-0 bg-flat-color-1" style="width: 40%; height: 5px;"></div>
                        </div>
                    </div>
                    <div class="card col-md-6 no-padding ">
                        <div class="card-body">
                            <div class="h1 text-muted text-right mb-4">
                                <i class="fa fa-user-plus"></i>
                            </div>
                            <div class="h4 mb-0">
                                <span class="count">385</span>
                            </div>
                            <small class="text-muted text-uppercase font-weight-bold">New Clients</small>
                            <div class="progress progress-xs mt-3 mb-0 bg-flat-color-2" style="width: 40%; height: 5px;"></div>
                        </div>
                    </div>
                    <div class="card col-md-6 no-padding ">
                        <div class="card-body">
                            <div class="h1 text-muted text-right mb-4">
                                <i class="fa fa-cart-plus"></i>
                            </div>
                            <div class="h4 mb-0">
                                <span class="count">1238</span>
                            </div>
                            <small class="text-muted text-uppercase font-weight-bold">Products sold</small>
                            <div class="progress progress-xs mt-3 mb-0 bg-flat-color-3" style="width: 40%; height: 5px;"></div>
                        </div>
                    </div>
                    <div class="card col-md-6 no-padding ">
                        <div class="card-body">
                            <div class="h1 text-muted text-right mb-4">
                                <i class="fa fa-pie-chart"></i>
                            </div>
                            <div class="h4 mb-0">
                                <span class="count">28</span>%
                            </div>
                            <small class="text-muted text-uppercase font-weight-bold">Returning Visitors</small>
                            <div class="progress progress-xs mt-3 mb-0 bg-flat-color-4" style="width: 40%; height: 5px;"></div>
                        </div>
                    </div>
                    <div class="card col-md-6 no-padding ">
                        <div class="card-body">
                            <div class="h1 text-muted text-right mb-4">
                                <i class="fa fa-clock-o"></i>
                            </div>
                            <div class="h4 mb-0">5:34:11</div>
                            <small class="text-muted text-uppercase font-weight-bold">Avg. Time</small>
                            <div class="progress progress-xs mt-3 mb-0 bg-flat-color-5" style="width: 40%; height: 5px;"></div>
                        </div>
                    </div>
                    <div class="card col-md-6 no-padding ">
                        <div class="card-body">
                            <div class="h1 text-muted text-right mb-4">
                                <i class="fa fa-comments-o"></i>
                            </div>
                            <div class="h4 mb-0">
                                <span class="count">972</span>
                            </div>
                            <small class="text-muted text-uppercase font-weight-bold">COMMENTS</small>
                            <div class="progress progress-xs mt-3 mb-0 bg-flat-color-1" style="width: 40%; height: 5px;"></div>
                        </div>
                    </div>
                </div>
            </div><!-- #Usuarios-->
            <div class="content mt-3">
                <div class="animated fadeIn">
                    <div class="row">

                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mb-3">Yearly Sales </h4>
                                    <canvas id="sales-chart"></canvas>
                                </div>
                            </div>
                        </div><!-- /# column -->

                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mb-3">Bar chart </h4>
                                    <canvas id="barChart"></canvas>
                                </div>
                            </div>
                        </div><!-- /# column -->
                    </div>

                </div><!-- .animated -->
            </div><!-- .content -->
            <!-- Usuarios-->

        </div> <!-- .CONTENIDO -->
    </div><!-- /#Panel DERECHO  -->

    <!-- Panel DERECHO -->

    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="vendors/chart.js/dist/Chart.bundle.min.js"></script>
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/widgets.js"></script>
    <script src="vendors/jqvmap/dist/jquery.vmap.min.js"></script>
    <script src="vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <script src="vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script>
        (function($) {
            "use strict";

            jQuery('#vmap').vectorMap({
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: ['#1de9b6', '#03a9f5'],
                normalizeFunction: 'polynomial'
            });
        })(jQuery);
    </script>
    <!--  Chart js -->
    <script src="vendors/chart.js/dist/Chart.bundle.min.js"></script>
    <script src="assets/js/init-scripts/chart-js/chartjs-init.js"></script>
</body>

</html>
