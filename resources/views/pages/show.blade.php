@extends('app')

@section('content')
    <div class="blog">
        <div class="container">
            <div class="col-md-7 blog-left">
                <div class="blog-left-grid">
                    <h4>{!! $product->product_name  !!}</h4>
                    <br/>
                    <div><img src="{{ asset('/images/'.$product->img_url) }}" alt=" " class="img-responsive" /></div>
                    <p class="dolore">{!! $product->description !!}</p>
                    <ul>
                        <li><a href="#"><i class="glyphicon glyphicon-list-alt" aria-hidden="true"></i>Categoria: {!! $product->category !!}</a></li>
                    </ul>
                    <div class="more m1">
                        @if(Session::has('flash_message'))
                            <div class="alert alert-success">
                                {!! Session::get('flash_message') !!}
                            </div>
                        @endif

                        @include('partials.errors')
                        <h4>Pide informes sobre este producto</h4>
                        <br/>
                        {!! Form::open(array('url' => 'requestinfo')) !!}
                        <div class="form-group">
                            {!! Form::input('text','name',null,['placeholder' => 'Nombre','class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::input('email','email',null,['placeholder' => 'Email','class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::input('text','phone',null,['placeholder' => 'Teléfono','class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::textarea('message',null,['placeholder' => 'Mensaje','class' => 'form-control']) !!}
                            {!! Form::input('hidden','seen','false',null) !!}
                        </div>
                        {!! Form::submit('Enviar',['class' => 'btn btn-success']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
            <div class="col-md-5 blog-right">
                <div class="recent-posts">
                    <h4>Productos similares</h4>
                    @foreach($relatedProducts as $pro)
                    <div class="recent-posts-info">
                        <div class="posts-left sngl-img">
                            <a href="#"> <img src="{{ asset('/images/'.$pro->img_url)  }}" style="height: 100px; width: auto;" alt="" class="img-responsive" /> </a>
                        </div>
                        <div class="posts-right">
                            <lable>{!! $pro->created_at->format('d/m/Y') !!}</lable>
                            <h5><a href="#">{!! $pro->product_name !!}</a></h5>
                            <div>
                                {!! link_to('show/'.$pro->id,'Ver producto',['class' => 'btn btn-primary']) !!}
                            </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    @endforeach

                    <div class="clearfix"> </div>
                </div>
            </div>

        </div>
    </div>

@endsection