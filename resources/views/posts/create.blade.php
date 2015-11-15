@extends('app')

@section('content')
    <!-- blog -->
    <div class="blog">
        <div class="container">
            <div class="col-md-7 blog-left">
                <h3 class="page-header">Muestranos tus arreglos</h3>
                <br/>
                @include('partials.errors')
                {!! Form::open(array('url' => 'posts','files' => 'true')) !!}
                <div class="form-group">
                    {!! Form::label('img_url','Ruta de la imagen:')!!}
                    {!! Form::file('img_url') !!}
                </div>
                <div class="form-group">
                    {!! Form::textarea('description',null,['class' => 'form-control', 'placeholder' => 'Comenta']) !!}
                </div>
                <div class="form-group">
                    {!! Form::input('hidden','enabled','false',['class' => 'form-control']) !!}
                    {!! Form::input('hidden','vippost','false',['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::submit('Crear',['class' => 'btn btn-success form-control']) !!}
                </div>
                {!! Form::close() !!}
            </div>
            <div class="col-md-5 blog-right">
                @if(Auth::guest())<h3>Login</h3>@endif
                <div class="in-form">
                    @if (Auth::guest())
                        @include('partials.errors')
                        <form  role="form" method="POST" action="{{ url('/auth/login') }}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}">
                            <input type="password" class="form-control" placeholder="password" name="password">
                            <div class="ckeck-bg">
                                <div class="checkbox-form">
                                    <div class="check-left">
                                        <div class="check">
                                            <label class="checkbox"><input type="checkbox" name="remember" checked=""><i> </i>Remember Me</label>
                                        </div>
                                        <div class="check">
                                            <a class="btn btn-default btn-lg btn-block" href="{{ url('/auth/register') }}">Register</a>
                                        </div>
                                    </div>
                                    <div class="check-right">
                                        <button type="submit" class="btn btn-default btn-lg btn-block" >Login</button>
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                            </div>
                            <!--<div class="form-group">
                                    <div class="col-md-6">
                                        <a class="btn btn-primary btn-lg btn-block" href="{{ url('loginwithfb') }}">Facebook</a>
                                    </div>
                                </div>-->
                        </form>
                    @else
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
                    @endif
                </div>

            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <!-- //blog -->
@endsection