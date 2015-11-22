@extends('app')

@section('content')
    <!-- blog -->
    <div class="blog">
        <div class="container">
            <div class="col-md-7 blog-left">
                @if(Session::has('flash_message'))
                    <div class="alert alert-success">
                        {!! Session::get('flash_message') !!}
                    </div>
                @endif
                @if(count($posts) > 0 )
                    <h1 class="page-header">Tus publicaciones</h1>
                    <div class="recent-posts">
                        @foreach($posts as $post)
                            <div class="recent-posts-info">
                                <div class="posts-left sngl-img">
                                    <a href="#"> <img src="{{ asset('/images/'.$post->img_url) }}" alt="" style="height: 150px; width: auto;" class="img-responsive" /> </a>
                                </div>
                                <div class="posts-right">
                                    <div>
                                        <label>Creado hace: <small>{!! $post->created_at->diffForHumans() !!}</small></label>
                                    </div>
                                    <div>
                                        <label>Estatus :
                                            @if($post->enabled == 'false')
                                                <div class="badge">Sin Aprobar</div>
                                            @else
                                                <div class="badge">Aprobado</div>
                                            @endif
                                        </label>
                                    </div>
                                    <div>
                                        <label>Seleccionado como publicación del Mes :
                                            @if($post->vippost == 'false')
                                                <div class="badge">No</div>
                                            @else
                                                <div class="badge">Si</div>
                                            @endif
                                        </label>
                                    </div>
                                    <hr/>
                                    <div>
                                        {!! link_to('posts/'.$post->id,'Ver',['class' => 'btn btn-success btn-lg']) !!}
                                    </div>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        @endforeach
                        <div class="clearfix"> </div>
                    </div>
                    {!! $posts->render() !!}
                @else
                    <h1 class="page-heading">Aún no ha hecho una publicación</h1>
                @endif
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