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
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
        /* Define the global font for the page */
        body {
            font-family: 'Nunito', sans-serif;
        }
        /* Define a flex container for the main structure */
        #wrapper {
            display: flex;
            width: 100%;
            align-items: stretch;
        }
        /* Define the sidebar container */
        #sidebar-wrapper {
            min-height: 100vh; /* Minimum height of 100% of the viewport */
            width: 250px; /* Fixed width of 250px */
            background-color: #3a3232; /* Background color */
            color: white; /* Text color */
        }
        /* Define the sidebar header style */
        .sidebar-heading {
            padding: 0.875rem 1.25rem; /* Inner spacing */
            font-size: 1.2rem; /* Font size */
        }
        /* Define the sidebar item style */
        .list-group-item {
            background-color: #f07848; /* Background color */
            color: white; /* Text color */
            border: none; /* No borders */
        }
        /* Change the background color on hover */
        .list-group-item:hover {
            background-color: #d83018;
        }
        /* Define the sidebar link style */
        .nav-item a {
            color: white;
        }
        /* Change the text color on hover */
        .nav-item a:hover {
            color: #fdfcce;
        }
        /* Adjust the bottom margin of the navigation bar */
        .navbar {
            margin-bottom: 0;
        }
        .bg-dark {
            background-color: #3a3232 !important; /* Change this */
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
                   <br>
                   <br><br>
                   <br>
                   <div style="width: 300px; height: 100px;">
                    <div>
                        <img src="{{ asset('admin_assets/img/logouni.png') }}" alt="" style="width: 250px; height: 120px;">
                    </div>
                   </div>
                   
                   <br>
                   <br>
                   <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/home">
                       <div class="sidebar-brand-icon">
                           <i class='fas fa-user-shield'></i>
                       </div>
                       <div class="sidebar-brand-text mx-3">Participante</div>
                   </a>
                   <!-- Divider -->
                   <div class="sidebar-heading" align="center">Menu de Informacion</div>
                   <hr class="sidebar-divider my-0">

                   <div class="list-group list-group-flush">
                       <a href="{{ route('eventosparti.index') }}" class="list-group-item list-group-item-action">
                           <i class="fas fa-home"></i> INICIO
                       </a>
                       <a href="{{ route('mis.inscripciones') }}" class="list-group-item list-group-item-action">
                           <i class="fas fa-users"></i> MIS TALLERES
                       </a>
                       <a href="{{ route('asistenciapart.index') }}" class="list-group-item list-group-item-action">
                           <i class="fas fa-comments"></i> MI ASISTENCIA
                       </a>
                       <a href="{{ route('login2') }}" class="list-group-item list-group-item-action">
                        <i class="fas fa-comments"></i> CERRAR SESION
                    </a>
                   </div>
               </ul>
           </div>
           <!-- /#sidebar-wrapper -->

           <!-- Page Content -->
           <div id="page-content-wrapper" class="container-fluid">
               

               <div class="container-fluid">
                   <main class="py-4">
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
