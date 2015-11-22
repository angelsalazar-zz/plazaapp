@extends('app')

@section('content')
    <!-- blog -->
    <div class="blog">
        <div class="container">
            <div class="col-md-7 blog-left">
                <div class="blog-left-grid">
                    <h4><div >Fue creado el: {!! $post->created_at->format('d/m/Y') !!}</div></h4>
                    <br/>
                    <a href="#"><img src="{{ asset('/images/'.$post->img_url) }}" style="height: 600px; width: auto" alt=" " class="img-responsive" /></a>
                    <p class="dolore">{!! $post->description !!}</p>
                    <div class="row">
                        <div class="col-md-6">
                            {!! HTML::decode(link_to('posts/'.$post->id.'/edit', '<i class="glyphicon glyphicon-edit"></i> Editar',['class' => 'btn btn-primary btn-block'],null )) !!}
                        </div>
                        <div class="col-md-6">
                            {!! Form::open(['method' => 'DELETE', 'action' => ['PostController@destroy',$post->id]]) !!}
                            {!! Form::button('<i class="glyphicon glyphicon-remove-sign"></i> Eliminar', array('type' => 'submit','class' => 'btn btn-danger btn-block'))!!}
                            {!! Form::close() !!}
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md-5 blog-right">
                @if(Auth::guest())<h3>Login</h3>@endif
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