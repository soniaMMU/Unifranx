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
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="{{ asset('admin_assets/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin_assets/css/sidebar.css') }}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

    <style>
        body {
            background: #f6b149;
        }
        /* Sidebar styling */
        .sidebar {
            padding-top: 3rem; /* Adjust padding as needed */
            text-align: center;
            background-color: #3a3232;
            color: white;
        }
        /* Sidebar brand icon and text */
        .sidebar-brand-icon i {
            font-size: 2rem; /* Adjust icon size */
        }
        .sidebar-brand-text {
            font-size: 1.2rem; /* Adjust text size */
        }
        /* Navigation items styling */
        .nav-item {
            margin-bottom: 0.5rem; /* Adjust spacing */
        }
        /* Sidebar links styling */
        .nav-link {
            color: white;
        }
        .nav-link:hover {
            color: #fdfcce;
        }
        /* Page content wrapper padding */
        #page-content-wrapper {
            padding: 2rem; /* Adjust padding as needed */
        }
        /* Centering navbar content */
        #navbarSupportedContent {
            justify-content: center;
        }
    </style>
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
                        <div class="sidebar-brand-text mx-3">Participante</div>
                    </a>
                    <!-- Divider -->
                    <div class="sidebar-heading" align="center">Menu de Información</div>
                    <hr class="sidebar-divider my-0">
                    <!-- Sidebar navigation items -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('eventosparti.index') }}">
                            <i class="fas fa-home"></i> INICIO
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('mis.inscripciones') }}">
                            <i class="fas fa-users"></i> MIS TALLERES
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('asistenciapart.index') }}">
                            <i class="fas fa-comments"></i> MI ASISTENCIA
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login2') }}">
                            <i class="fas fa-comments"></i> CERRAR SESION
                        </a>
                    </li>
                </ul>
            </div>
            <!-- /#sidebar-wrapper -->

            <!-- Page Content -->
            <div id="page-content-wrapper" class="container-fluid">
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
