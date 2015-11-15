<!DOCTYPE html>
<html>
<head>
    <title>Floreria Plaza</title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="floreria" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- //for-mobile-apps -->
    <link href="{{ asset('/css/bootstrap.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet"  media="all" >
    <script src="{{ asset('/js/jquery-1.11.1.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('/fonts/opensans.css') }}"/>
    <link rel="stylesheet" href="{{ asset('/fonts/josefinsans.css') }}"/>
</head>

<body>
<!-- banner -->
<div class="banner">
    <div class="container">
        <!-- header -->
        <div class="header">
            <div class="header-left">
                <a href="index.html"><i class="glyphicon glyphicon-tree-deciduous" aria-hidden="true"> </i>Emociones <span>Floreria Plaza</span></a>
            </div>
            <div class="header-left1">
                <span class="menu"><img src="{{ asset('/img/menu.png') }}" alt=" "></span>
                <ul class="nav1">
                    <li class="hvr-sweep-to-bottom">
                        {!! HTML::decode(link_to('home', 'Home<i class="glyphicon glyphicon-home" aria-hidden="true"></i>', null,null )) !!}
                    </li>
                    <!-- <li class="hvr-sweep-to-bottom">
                        {!! HTML::decode(link_to('categories', '<i class="glyphicon glyphicon-home" aria-hidden="true"></i> Home', null,null )) !!}
                        <a href="services.html">Services<i class="glyphicon glyphicon-hand-right" aria-hidden="true"></i></a>
                    </li>-->
                    <li class="hvr-sweep-to-bottom">
                        {!! HTML::decode(link_to('about', 'A cerca de<i class="glyphicon glyphicon-star-empty" aria-hidden="true"></i>', null,null )) !!}
                    </li>
                    <li class="hvr-sweep-to-bottom">
                        {!! HTML::decode(link_to('blog', 'Blog<i class="glyphicon glyphicon-picture" aria-hidden="true"></i>', null,null )) !!}
                    </li>
                    <li class="hvr-sweep-to-bottom">
                        {!! HTML::decode(link_to('contact', 'Contacto<i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>', null,null )) !!}
                    </li>


                </ul>
            </div>
            <div class="header-right">
                <ul>
                    <li><a href="#" class="facebook"></a></li>
                    <li><a href="#" class="g"></a></li>
                    <li><a href="#" class="twitter"></a></li>
                </ul>
            </div>
            <div class="clearfix"> </div>
        </div>
        <!-- script for menu -->
        <script>
            $( "span.menu" ).click(function() {
                $( "ul.nav1" ).slideToggle( 300, function() {
                    // Animation complete.
                });
            });
        </script>
        <!-- //script for menu -->
        <!-- //header -->
        <!--<div class="banner-info">
            <h1>Feeling The Life In A Different Way</h1>
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                accusantium doloremque laudantium, totam rem aperiam, eaque ipsa
                quae ab illo inventore veritatis et quasi architecto beatae vitae
                dicta sunt explicabo.</p>
            <div class="more">
                <a href="single.html">Learn More</a>
            </div>
        </div>-->
    </div>
</div>
<!-- //banner -->
<div class="container">
    @yield('content')
</div>
<!--footer-->
<div class="footer">
    <div class="container">
        <div class="col-md-2  ftr_navi ftr">
            <h3>Menú de navegación</h3>
            <ul>
                <li>{!! link_to('home','Home',null) !!}</li>
                <li>{!! link_to('about','A cerca de',null) !!}</li>
                <li>{!! link_to('blog','Blog',null) !!}</li>
                <li>{!! link_to('contact','Contacto',null) !!}</li>

            </ul>
        </div>

        <div class="col-md-3 col-md-push-2 get_in_touch ftr">
            <h3>Get In Touch</h3>
            <p>Ola-ola street jump,</p>
            <p>260-14 City, Country</p>
            <p>+62 000-0000-00</p>
            <a href="mailto:mail@mlampah.com">www.example.com</a>
        </div>
        <div class="col-md-4 col-md-push-3 ftr-logo">
            <a href="index.html"><h3>Floreria<span> Plaza</span></h3></a>
            <ul>
                <li><a href="#" class="f"> </a></li>
                <li><a href="#" class="f1"> </a></li>
                <li><a href="#" class="f2"> </a></li>
            </ul>
            <p>© 2015 PlazaApp. Design </p>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
<!--footer-->
<!-- js -->
<script src="{{ asset('/js/clientside.js') }}"></script>

<!-- //js -->
</body>
</html>
