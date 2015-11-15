@extends('app')

@section('content')
    <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
            @if(count($posts) > 0 )
            <h1 class="page-header">Tus publicaciones</h1>
                <div class="recent-posts">
                    <h4>Recent posts</h4>
                    @foreach($posts as $post)
                    <div class="recent-posts-info">
                        <div class="posts-left sngl-img">
                            <a href="#"> <img src="{{ asset('/images/'.$post->img_url) }}" alt="" class="img-responsive" /> </a>
                        </div>
                        <div class="posts-right">
                            <lable>Creado hace: {!! $post->created_at->diffForHumans() !!}</lable>
                            <h5><a href="single.html">FINIBUS BONORUM MALORUM </a></h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing incididunt.</p>
                            {!! link_to('posts/'.$post->id,'Ver',['class' => 'btn btn-success']) !!}
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    @endforeach
                    <div class="clearfix"> </div>
                </div>
            @else
                <h1 class="page-heading">Aún no ha hecho una publicación</h1>
            @endif
        </div>
    </div>

@endsection