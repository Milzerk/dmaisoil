<!doctype html>
<html lang="pt-br">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="{{ asset('dash/assets/img/favicon.ico') }}">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Light Bootstrap Dashboard by Creative Tim</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!-- Bootstrap core CSS     -->
    <link href="{{ asset('dash/css/bootstrap.min.css') }}" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="{{ asset('dash/css/animate.min.css') }}" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="{{ asset('dash/css/light-bootstrap-dashboard.css') }}" rel="stylesheet"/>

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="{{ asset('dash/css/pe-icon-7-stroke.css') }}" rel="stylesheet" />
</head>
<body>

<div class="wrapper">
    
    <div class="sidebar" data-color="purple" data-image="{{ asset('dash/assets/img/sidebar-5.jpg') }}">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="{{ route('dashboard.index') }}" class="simple-text">
                    D+ Oil Change
                </a>
            </div>

            <ul class="nav">
                <li class="active">
                    <a href="{{ route('dashboard.users') }}">
                        <i class="pe-7s-id"></i>
                        <p>Usuarios</p>
                    </a>
                </li>
                <li class="">
                    <a href="{{ route('dashboard.users') }}">
                        <i class="pe-7s-users"></i>
                        <p>Clientes</p>
                    </a>
                </li>
                <li class="">
                    <a href="{{ route('dashboard.users') }}">
                        <i class="pe-7s-mail"></i>
                        <p>E-mails</p>
                    </a>
                </li>
                <li class="">
                    <a href="{{ route('dashboard.users') }}">
                        <i class="pe-7s-diamond"></i>
                        <p>Pontos e prêmios</p>
                    </a>
                </li>

            </ul>
    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Usuarios</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-dashboard"></i>
                                <p class="hidden-lg hidden-md">Dashboard</p>
                            </a>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="{{ route('dashboard.account') }}">
                                Perfil
                             </a>
                        </li>
                        <li>
                           <a href="">
                               Sair
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>   
        
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    @yield('content')
                </div>
            </div>
        </div>

        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="#">
                                Home
                            </a>
                        </li>

                    </ul>
                </nav>
                <p class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script> <a href="http://www.creative-tim.com">Creative Tim</a>, made with love for a better web
                </p>
            </div>
        </footer>

    </div>
</div>


</body>
    <!--   Core JS Files   -->
    <script src="{{ asset('dash/scripts/jquery.3.2.1.min.js') }}"></script>

	<script src="{{ asset('dash/scripts/bootstrap.min.js') }}" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="{{ asset('dash/scripts/chartist.min.js') }}"></script>

    <!--  Notifications Plugin    -->
    <script src="{{ asset('dash/scripts/bootstrap-notify.js') }}"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
    <script src="{{ asset('dash/scripts/light-bootstrap-dashboard.js') }}"></script>
    @yield('scripts')
</html>
