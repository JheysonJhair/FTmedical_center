<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <title>Dashboard | Usuarios </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">


    <link rel="stylesheet" href="../vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="../vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="../vendors/selectFX/css/cs-skin-elastic.css">

    <link rel="stylesheet" href="../assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>


    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="../vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../vendors/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">

</head>

<body>
    <!-- PANEL IZQUIERDO -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu"
                    aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./"><img src="../images/logotipo.png" alt="Logo"></a>
                <a class="navbar-brand hidden" href="./"><img src="../images/logo2.png" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="index.html"> <i class="menu-icon fa fa-dashboard"></i>Panel principal</a>
                    </li>

                    <!-- /.ADMINISTRADOR -->
                    <h3 class="menu-title">ADMINISTRADOR</h3>
                    <li>
                        <a href="{{ url('dashboard/user') }}" >
                            <i class="menu-icon fas fa-user"></i> Usuarios
                        </a>
                    </li>
                    <li>
                        <a href="widgets.html" >
                            <i class="menu-icon fas fa-cog"></i> Configuración
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </aside><!-- /#PANEL IZQUIERDO -->


    <!-- Right Panel -->

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
                                <span class="photo media-left"><img alt="avatar" src="../images/avatar/1.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Jonathan Smith</span>
                                    <span class="time float-right">Just now</span>
                                        <p>Hello, this is an example msg</p>
                                </span>
                            </a>
                                <a class="dropdown-item media bg-flat-color-4" href="#">
                                <span class="photo media-left"><img alt="avatar" src="../images/avatar/2.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Jack Sanders</span>
                                    <span class="time float-right">5 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                </span>
                            </a>
                                <a class="dropdown-item media bg-flat-color-5" href="#">
                                <span class="photo media-left"><img alt="avatar" src="../images/avatar/3.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Cheryl Wheeler</span>
                                    <span class="time float-right">10 minutes ago</span>
                                        <p>Hello, this is an example msg</p>
                                </span>
                            </a>
                                <a class="dropdown-item media bg-flat-color-3" href="#">
                                <span class="photo media-left"><img alt="avatar" src="../images/avatar/4.jpg"></span>
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
                            <img class="user-avatar rounded-circle" src="../images/admin.png" alt="User Avatar">
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
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                            <li class="active">Medicina General</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="content mt-3">

            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-title">
                                <h5 class="text-center mt-3" id="titulo">Lista de Usuarios</h5>
                            </div>
                            <hr>
                            <div id="formularioPaciente" style="display: none;" class="card-body">
                            <form action="{{ route('storeUsuario') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                <div class="col-6">
                                    <label for="usuario" class="control-label mb-1">Usuario</label>
                                    <div class="input-group">
                                        <input id="usuario" name="usuario" type="text" class="form-control" required>
                                        <div class="input-group-addon">
                                            <span class="fa fa-user fa-lg"></span>
                                        </div>
                                    </div>
                                </div>
                                    <div class="col-6">
                                        <label for="area" class="control-label mb-1">Área</label>
                                        <select name="area" id="area" class="form-control">
                                            <option value="0">ADMINISTRADOR</option>
                                            <option value="1">MEDICINA GENERAL</option>
                                            <option value="2">DENTAL</option>
                                            <option value="3">TOPICO</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <label for="contraseña" class="control-label mb-1">Contraseña</label>
                                        <div class="input-group">
                                            <input id="contraseña" name="contraseña" type="password" class="form-control" required>
                                            <div class="input-group-addon">
                                                <span class="fa fa-lock fa-lg"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <label for="confirmarContraseña" class="control-label mb-1">Confirmar Contraseña</label>
                                        <div class="input-group">
                                            <input id="confirmarContraseña" name="confirmarContraseña" type="password" class="form-control" required>
                                            <div class="input-group-addon">
                                                <span class="fa fa-lock fa-lg"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--<div class="form-group">
                                    <label for="foto">Foto:</label>
                                    <input type="file" name="foto" id="foto" class="form-control-file" accept="image/*" required>
                                </div>-->
                                <div class="form-group">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Registrar Usuario</button>
                                    <button type="button" id="regresarTabla" class="btn btn-secondary"><i class="fa fa-arrow-left"></i> Regresar</button>
                                </div>
                            </form>

                            </div>
                            <div id="tabla" class="card-body">
                                <button style="margin-bottom:10px; border-radius: 5px" id="agregarPaciente" class="btn btn-primary">Agregar Usuario</button>


                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Area</th>
                                            <th>Usuario</th>
                                            <th>Contraseña</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($usuarios as $usuario)
                                        <tr>
                                            <td>{{ $usuario->idUsuario }}</td>
                                            <td>{{ $usuario->usuario }}</td>
                                            <td>{{ $usuario->contraseña }}</td>
                                            <td>
                                                <a href="{{ route('editUsuario', ['id' => $usuario->idUsuario]) }}" class="btn btn-primary">Editar</a>
                                                <form action="{{ route('destroyUsuario', ['id' => $usuario->idUsuario]) }}" method="POST" style="display: inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Eliminar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div><!-- .animated -->
        </div><!-- .content -->
        </div>
    </div>

    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
    $(document).ready(function() {
        $("#agregarPaciente").click(function() {
            $("#titulo").text("Registrar Usuario");
            $("#tabla").hide();
            $("#formularioPaciente").show();
        });

        $("#regresarTabla").click(function() {
            $("#titulo").text("Lista de Usuarios");
            $("#formularioPaciente").hide();
            $("#tabla").show();
        });
    });
</script>


    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <script src="../vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../assets/js/main.js"></script>



    <script src="../vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script src="../vendors/jszip/dist/jszip.min.js"></script>
    <script src="../vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="../vendors/pdfmake/build/vfs_fonts.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.colVis.min.js"></script>
    <script src="../assets/js/init-scripts/data-table/datatables-init.js"></script>

</body>

</html>
