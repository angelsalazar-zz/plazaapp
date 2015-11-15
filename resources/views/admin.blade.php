<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Floreria Plaza</title>

    <!-- Bootstrap Core CSS -->
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">-->
    <!--<link href="{{ asset('/css/app.css') }}" rel="stylesheet">-->
    <!-- Bootcards CSS for desktop: -->
    <link href="{{ asset('/css/admin.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/css/bootscard.css') }}"/>

    <!-- Custom Fonts -->
    <link rel="stylesheet" href="{{ asset('/fonts/font-awesome.css') }}"/>
    <link rel="stylesheet" href="{{ asset('/fonts/lora.css') }}"/>
    <link rel="stylesheet" href="{{ asset('/fonts/opensans.css') }}"/>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<nav class="navbar navbar-default  navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ url('home') }}">Plaza</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li>{!! link_to('pts' , 'Posts',null) !!}</li>
                <li>{!! link_to('msgs' , 'Mensajes',null) !!}</li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Publicidad<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li>{!! link_to('advertisements','Mostrar ads',null) !!}</li>
                        <li>{!! link_to('advertisements/create','Crear nueva ad',null) !!}</li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Productos<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li>{!! link_to('products','Mostrar productos',null) !!}</li>
                        <li>{!! link_to('products/create','Crear nuevo producto',null) !!}</li>
                    </ul>
                </li>


            </ul>

            <ul class="nav navbar-nav navbar-right">
                @if (Auth::guest())
                    <li><a href="{{ url('/auth/login') }}">Login</a></li>
                    <li><a href="{{ url('/auth/register') }}">Register</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }}
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('/auth/logout') }}">Logout</a></li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>

<!-- Main Content -->
<div class="container">
    @yield('content')
</div>

<script src="{{ asset('/js/adminjq.js') }}"></script>
<script src="{{ asset('/js/bootstrap.js') }}"></script>
<script src="{{ asset('/js/bootscards.js') }}"></script>
<script src="{{ asset('/js/app.js') }}"></script>
<script>
    bootcards.init( {
        offCanvasBackdrop : true,
        offCanvasHideOnMainClick : true,
        enableTabletPortraitMode : true,
        disableRubberBanding : true,
        disableBreakoutSelector : 'a.no-break-out'
    });
</script>
</body>

</html>