@extends('admin')

@section('content')
    <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
            <div class="panel panel-default bootcards-media">
                <div class="panel-heading">
                    <h3 class="panel-title">Autor: {!! \App\User::find($post->user_id)->name !!}</h3>
                </div>
                <div class="panel-body">
                    {!! $post->description !!}
                </div>
                <img src="{{asset('/images/'.$post->img_url) }}" class="img-responsive center-block"/>
                <div class="panel-footer">
                    <div class="btn-group btn-group-justified">
                        <div class="btn-group">
                            @if($post->enabled == 'false')
                                {!! Form::open(['method' => 'PUT', 'action' => ['AdminPostController@update',$post->id]]) !!}
                                {!! Form::input('hidden','img_url',null,null) !!}
                                {!! Form::input('hidden','description',$post->description,null) !!}
                                {!! Form::input('hidden','enabled','true') !!}
                                {!! Form::input('hidden','vippost','false') !!}
                                {!! Form::button('<i class="glyphicon glyphicon-ok-circle"></i>Aprobar', array('type' => 'submit', 'class' => 'btn btn-default'))!!}
                                {!! Form::close() !!}
                            @else
                                {!! Form::open(['method' => 'PUT', 'action' => ['AdminPostController@update',$post->id]]) !!}
                                {!! Form::input('hidden','img_url',null,null) !!}
                                {!! Form::input('hidden','description',$post->description,null) !!}
                                {!! Form::input('hidden','enabled','false') !!}
                                {!! Form::input('hidden','vippost','false') !!}
                                {!! Form::button('<i class="glyphicon glyphicon-ok-sign"></i>Desaprobar', array('type' => 'submit', 'class' => 'btn btn-default'))!!}
                                {!! Form::close() !!}
                            @endif
                        </div>
                        <div class="btn-group">
                            @if($post->vippost == 'false')
                                {!! Form::open(['method' => 'PUT', 'action' => ['AdminPostController@update',$post->id]]) !!}
                                {!! Form::input('hidden','img_url',null,null) !!}
                                {!! Form::input('hidden','description',$post->description,null) !!}
                                {!! Form::input('hidden','enabled',$post->enabled) !!}
                                {!! Form::input('hidden','vippost','true') !!}
                                {!! Form::button('<i class="glyphicon glyphicon-star-empty"></i>Si', array('type' => 'submit', 'class' => 'btn btn-default'))!!}
                                {!! Form::close() !!}
                            @else
                                {!! Form::open(['method' => 'PUT', 'action' => ['AdminPostController@update',$post->id]]) !!}
                                {!! Form::input('hidden','img_url',null,null) !!}
                                {!! Form::input('hidden','description',$post->description,null) !!}
                                {!! Form::input('hidden','enabled',$post->enabled) !!}
                                {!! Form::input('hidden','vippost','false') !!}
                                {!! Form::button('<i class="glyphicon glyphicon-star"></i>No', array('type' => 'submit', 'class' => 'btn btn-default'))!!}
                                {!! Form::close() !!}
                            @endif
                        </div>
                        <div class="btn-group">
                            {!! Form::open(['method' => 'DELETE', 'action' => ['AdminProductsController@destroy',$post->id]]) !!}
                            {!! Form::button('<i class="glyphicon glyphicon-remove-sign"></i>Eliminar', array('type' => 'submit', 'class' => 'btn btn-default'))!!}
                            {!! Form::close() !!}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection