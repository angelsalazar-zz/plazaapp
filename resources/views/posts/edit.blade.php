@extends('app')

@section('content')
    <!-- blog -->
    <div class="blog">
        <div class="container">
            <div class="col-md-7 blog-left">
                <h3 class="page-header">Muestranos tus arreglos</h3>
                <br/>
                @include('partials.errors')
                {!! Form::model($post,['method' => 'PUT','files' => 'true', 'action' => ['PostController@update',$post->id]]) !!}
                <div class="form-group">
                    {!! Form::label('img_url','Ruta de la imagen:')!!}
                    {!! Form::file('img_url') !!}
                </div>
                <div class="form-group">
                    {!! Form::textarea('description',null,['class' => 'form-control', 'placeholder' => 'Comenta']) !!}
                </div>
                <div class="form-group">
                    {!! Form::input('hidden','enabled',null,['class' => 'form-control']) !!}
                    {!! Form::input('hidden','vippost',null,['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::submit('Actualizar',['class' => 'btn btn-success form-control']) !!}
                </div>
                {!! Form::close() !!}
            </div>
            <div class="col-md-5 blog-right">
                <div class="in-form">
                    <div>
                        <h3>Bienvenido: {!! Auth::user()->name !!}</h3>
                        <div class="ckeck-bg">
                            <div class="checkbox-form">
                                <div class="check-left">
                                    <div class="check">
                                        {!! link_to('posts/create','Crear post',['class' => 'btn btn-info btn-lg btn-block']) !!}
                                    </div>
                                    <div class="check">
                                        {!! link_to('posts','Mis posts',['class' => 'btn btn-success btn-lg btn-block']) !!}
                                    </div>
                                </div>

                                <div class="check-right">
                                    <a href="{{ url('/auth/logout') }}" class="btn btn-default btn-lg btn-block"><i class="glyphicon glyphicon-log-out"></i> Logout</a>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <!-- //blog -->
@endsection