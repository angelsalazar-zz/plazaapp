@extends('app')

@section('content')
    <!-- service-type-grid -->
    <div class="service-type-grid">
        <div class="container">
            <section class="slider">
                <div class="flexslider">
                    <ul class="slides">
                        @foreach($currentAds as $ad)
                            <li>
                                <div class="service-type-grd-info">
                                    <div class="service-type-grd">
                                        <div class="service-type-grd-left">
                                            <img src="images/{{$ad->img_url}}" alt=" " class="img-responsive" />
                                        </div>
                                        <div class="service-type-grd-right">
                                            <h3></h3>
                                            <h4></h4>
                                            <p></p>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>

                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </section>
            <!--FlexSlider-->
            <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
            <script defer src="js/jquery.flexslider.js"></script>
            <script type="text/javascript">
                $(window).load(function(){
                    $('.flexslider').flexslider({
                        animation: "slide",
                        start: function(slider){
                            $('body').removeClass('loading');
                        }
                    });
                });
            </script>
            <!--End-slider-script-->
        </div>
    </div>
    <!-- //service-type-grid -->
    <!-- services -->
    <div class="service">
        <div class="container">
            <div class="grid_3 grid_5">
                <h3 >Categorias</h3>
                <ol class="breadcrumb">
                    <li>{!! link_to('home','Todos',null) !!}</li>
                    <li>{!! link_to_route('categories_path', 'Artificiales', [ 'category' => 'Artificiales'], null) !!}</li>
                    <li>{!! link_to_route('categories_path', 'Espectaculares', [ 'category' => 'Espectaculares'], null) !!}</li>
                    <li>{!! link_to_route('categories_path', 'Fruteros', [ 'category' => 'Fruteros'], null) !!}</li>
                </ol>
            </div>
            <h3>Productos disponibles</h3>
            @foreach($availableProducts->chunk(3) as $arrayOfThree)
                <div class="service-grids">
                    @foreach($arrayOfThree as $product)
                        <div class="col-md-4 service-grid">
                            <img src="images/{{ $product->img_url }}" style="width: auto;height: 300px;" alt=" " class="img-responsive" />
                            <h4> {!! $product->product_name !!}</h4>
                            <br/>
                            {!! link_to('show/'.$product->id,'Ver producto',null) !!}
                        </div>
                    @endforeach
                </div>
                <div class="clearfix"></div>
            @endforeach
        </div>
    </div>
    <div class="center-block">
        {!! $availableProducts->render() !!}
    </div>

    <!-- //services -->

@endsection