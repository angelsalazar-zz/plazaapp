@extends('app')

@section('content')
    <!-- banner-bottom(publicación del mes) -->
    <div class="banner-bottom">
        <div class="container">
            <div class="col-md-5 banner-bottom-left">
                <img src="{{ asset('/img/logo.png') }}" alt=" " class="img-responsive" />
            </div>
            <div class="col-md-7 banner-bottom-right">
                <h3>Entregando Emociones Desde Hace 50 años</h3>
                <hr/>
                <p>Todos nuestros arreglos son de Alto Diseño, modernos, con flores y follajes de la mejor calidad de exportación. Navegando en las categorías de nuestra pagina web puedes encontrar muchas alternativas para toda ocasión.

                    Nos adaptamos a tu presupuesto, con la confianza de que lo que estás pagando es lo que vamos a enviar.
                    <br/>
                    También contamos con arreglos de dulces, peluches, globos, y mucho más. Pide informes!
                </p>
                {!! link_to('contact','Aquí',['class' => 'btn btn-default btn-primary btn-lg']) !!}

            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <!-- //banner-bottom -->
@endsection