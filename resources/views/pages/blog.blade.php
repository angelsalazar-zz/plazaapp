@extends('app')

@section('content')
    <!-- blog -->
    <div class="blog">
        <div class="container">
            <div class="col-md-7 blog-left">
                <h3>Blog</h3>
                @foreach($recentsPosts as $recentPost)
                    <div class="blog-left-grid">
                        <h4>Post: {!! $recentPost->id !!}</h4>
                        <a href="#"><img src="{{ asset('images/'.$recentPost->img_url) }}" style="height: 426px; width: auto;" alt=" " class="img-responsive" /></a>
                        <p class="dolore">{!! $recentPost->description !!}</p>
                        <ul>
                            <li><a href="#"><i class="glyphicon glyphicon-user" aria-hidden="true"></i>{!! \App\User::find($recentPost->user_id)->name  !!}</a></li>
                            <li><a href="#"><i class="glyphicon glyphicon-tags" aria-hidden="true"></i>0 Tages</a></li>
                            <li><a href="#"><i class="glyphicon glyphicon-bookmark" aria-hidden="true"></i>dolore eu fugiat</a></li>
                            <li><a href="#"><i class="glyphicon glyphicon-comment" aria-hidden="true"></i>10 Comments</a></li>
                        </ul>

                    </div>
                @endforeach


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
                                        @if(Auth::user()->email == 'admin@plazaapp.com')
                                            <div class="check">
                                                {!! link_to('dashboard','Ir a dashboard',['class' => 'btn btn-success btn-lg btn-block']) !!}
                                            </div>
                                        @endif
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
                    <div class="recent-posts">
                        <h4>Pubicaciones del mes</h4>
                        @foreach($vipPosts as $post)
                        <div class="recent-posts-info">
                            <div class="posts-left sngl-img">
                                <a href="#"> <img src="{{ asset('images/'.$post->img_url) }}" alt="" class="img-responsive" /> </a>
                            </div>
                            <div class="posts-right">
                                <lable>{!! $post->created_at->format('d/m/Y') !!}</lable>
                                <h5><a href="#">Autor : {!! \App\User::find($post->user_id)->name !!} </a></h5>
                                <p>{!! $post->description !!}</p>
                                <a href="#" class="btn btn-primary hvr-rectangle-in">Ver</a>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        @endforeach
                        <div class="clearfix"> </div>
                    </div>
            </div>
            <div class="clearfix"> </div>
            <nav>
                {!! $recentsPosts->render() !!}
            </nav>
        </div>
    </div>
    <!-- //blog -->
@endsection