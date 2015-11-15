<nav class="navbar navbar-default">
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
                @if (!Auth::guest())
                <li>{!! link_to('posts' , 'Mis publicaciones',null) !!}</li>
                @endif
                <li>{!! link_to('arrangements' , 'Arreglos florares',null) !!}</li>
                <li>{!! link_to('posts/create' , 'Blog',null) !!}</li>
                <li>{!! link_to('about','Acerca de',null) !!}</li>
                <li>{!! link_to('contact' , 'Contacto',null) !!}</li>
                @if( !Auth::guest() && Auth::user()->email == 'admin@plazaapp.com')
                        <li>{!! link_to('dashboard' , 'Ir dashbaord',null) !!}</li>
                    @endif

            </ul>

            <ul class="nav navbar-nav navbar-right">
                @if (Auth::guest())
                    <li><a href="{{ url('/auth/login') }}">Login</a></li>
                    <li><a href="{{ url('/auth/register') }}">Register</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            <img class="avatar-user" src="{{Auth::user()->avatar}}" alt=""/>
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