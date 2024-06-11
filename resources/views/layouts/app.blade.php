<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="{{ asset('admin_assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" >
    <link href="{{ asset('admin_assets/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin_assets/css/sidebar.css') }}" rel="stylesheet">
    <link href="https://fontawesome.com/$docs('/desktop/add-icons/duotone-desktop')" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

    <style>
        body {
            background: #f6b149;
        }
        /* Añade padding a la barra lateral y centrado del contenido */
        .sidebar {
            padding-top: 3rem; /* Ejemplo de padding ajustable */
            text-align: center;
        }

        /* Ajusta el tamaño de los iconos y el texto */
        .sidebar-brand-icon i {
            font-size: 2rem; /* Tamaño ajustable */
        }

        .sidebar-brand-text {
            font-size: 1.2rem; /* Tamaño ajustable */
        }

        /* Elimina el espacio entre los elementos de la lista */
        .nav-item {
            margin-bottom: 0.5rem; /* Espaciado ajustable */
        }

        /* Añade padding al contenido principal */
        #page-content-wrapper {
            padding: 2rem; /* Ejemplo de padding ajustable */
        }

        /* Centra el nombre del usuario en el navbar */
        #navbarSupportedContent {
            justify-content: center;
        }
    </style>
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <div class="d-flex" id="wrapper">
            <!-- Sidebar -->
            <div class="sidebar" id="sidebar-wrapper">
                <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar">
                    <!-- Sidebar - Brand -->
                    <div>
                        <img src="{{ asset('admin_assets/img/logouni.png') }}" alt="" style="width: 160px; height: 60px;">
                    </div>
                    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/home">
                        <div class="sidebar-brand-icon">
                            <i class='fas fa-user-shield'></i>
                        </div>
                        <div class="sidebar-brand-text mx-3">Admin</div>
                    </a>
                    <!-- Divider -->
                    <div class="sidebar-heading" align="center">Menu de Información</div>
                    <hr class="sidebar-divider my-0">

                    <div>
                        <li class="nav_item">
                            <a class="nav-link" href="{{ route('role.index') }}">ROLES</a>
                        </li>
                        <li class="nav_item">
                            <a class="nav-link" href="{{ route('participante.index') }}">PARTICIPANTES</a>
                        </li>
                        <li class="nav_item">
                            <a class="nav-link" href="{{ route('recomendacione.index') }}">RECOMENDACIONES</a>
                        </li>
                        <li class="nav_item">
                            <a class="nav-link" href="{{ route('evento.index') }}">EVENTOS</a>
                        </li>
                        <li class="nav_item">
                            <a class="nav-link" href="{{ route('inscripcione.index') }}">INSCRIPCIONES</a>
                        </li>
                        <li class="nav_item">
                            <a class="nav-link" href="{{ route('asistencia.index') }}">ASISTENCIAS</a>
                        </li>
                        <li class="nav_item">
                            <a class="nav-link" href="{{ route('sesione.index') }}">SESIONES</a>
                        </li>
                        <li class="nav_item">
                            <a class="nav-link" href="{{ route('lugare.index') }}">LUGARES</a>
                        </li>
                        <li class="nav_item">
                            <a class="nav-link" href="{{ route('horario.index') }}">HORARIOS</a>
                        </li>
                        

                        <!-- Nuevo botón para el reporte de participantes -->
                        

                        <li class="nav_item">
                            <a class="nav-link" href="{{ route('login2') }}">CERRAR SESION</a>
                        </li>
                    </div>
                    <div>

                    </div>
                </ul>
            </div>
            <!-- /#sidebar-wrapper -->

            <!-- Page Contentsssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss nav -->
            <div id="page-content-wrapper" class="container-fluid">
                <!-- Page Contentsssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss nav -->
                <div class="container-fluid">
                    <main class="py-4 row justify-content-center">
                        @yield('content')
                    </main>
                </div>
            </div>
            <!-- /#page-content-wrapper -->
        </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>
