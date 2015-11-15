<nav class="navbar navbar-default navbar-custom navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ url('/') }}">Apprendiendo</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <!--<li><a href="{{ url('/') }}">Home</a></li>-->
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Sugerencias <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu" >
                        <li>{!! link_to('suggestions/create' , 'Crear Sugerencia',null) !!}</li>
                        <li>{!! link_to('suggestions' , 'Mis Sugerencias',null) !!}</li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Busquedas <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu" >
                        <li>{!! link_to('search_general' , 'Búsqueda General',null) !!}</li>
                        <li>{!! link_to('search' , 'Búsqueda Avanzada',null) !!}</li>
                    </ul>
                </li>
                <li>{!! link_to('plan','Mi Plan',null) !!}</li>
                <li>{!! link_to('profile' , 'Mi perfil',null) !!}</li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                @if (Auth::guest())
                    <li><a href="{{ url('/auth/login') }}">Login</a></li>
                    <li><a href="{{ url('/auth/register') }}">Register</a></li>
                @else
                    <li class="dropdown">

                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            <img class="avatar-user" src="{{Auth::user()->avatar}}" alt=""/>
                            {{ Auth::user()->username }}
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" role="menu" >
                            <li><a href="{{ url('/auth/logout') }}">Logout</a></li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

<!-- Page Header  style="background-image: {{ asset('/img/home-bg.jpg') }}  style="background-color: rgba(0,0,255,0.3)-->
<!-- Set your background image for this header on the line below. -->
<header id="header-main" class="intro-header" >
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="site-heading">
                    <h1>Apprendiendo</h1>
                    <hr class="small">
                    <span class="subheading">Prototipo del sistema</span>
                </div>
            </div>
        </div>
    </div>
</header>