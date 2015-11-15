@extends('admin')

@section('content')
    <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
            <div class="panel panel-default bootcards-media">
                <div class="panel-heading">
                    <h3 class="panel-title">Número de Promoción : {!! $advertisement->id !!}</h3>
                </div>
                <div class="panel-body">
                    {!! $advertisement->description !!}
                </div>
                <img src="{{asset('/images/'.$advertisement->img_url) }}" class="img-responsive center-block"/>
                <div class="panel-footer">
                    <div class="btn-group btn-group-justified">
                        <div class="btn-group">
                            @if($advertisement->enabled == 'false')
                                {!! Form::open(['method' => 'PUT', 'action' => ['AdminAdvertisementController@update',$advertisement->id]]) !!}
                                {!! Form::input('hidden','description',$advertisement->description,null) !!}
                                {!! Form::input('hidden','img_url',null,null) !!}
                                {!! Form::input('hidden','enabled','true') !!}
                                {!! Form::button('<i class="glyphicon glyphicon-ok-circle"></i>Habilitar', array('type' => 'submit', 'class' => 'btn btn-default'))!!}
                                {!! Form::close() !!}
                            @else
                                {!! Form::open(['method' => 'PUT', 'action' => ['AdminAdvertisementController@update',$advertisement->id]]) !!}
                                {!! Form::input('hidden','description',$advertisement->description,null) !!}
                                {!! Form::input('hidden','img_url',null,null) !!}
                                {!! Form::input('hidden','enabled','false') !!}
                                {!! Form::button('<i class="glyphicon glyphicon-ok-sign"></i>Deshabilitar', array('type' => 'submit', 'class' => 'btn btn-default'))!!}
                                {!! Form::close() !!}
                            @endif
                        </div>
                        <div class="btn-group">
                            {!! HTML::decode(link_to('advertisements/' .$advertisement->id.'/edit', '<i class="glyphicon glyphicon-edit"></i> Editar', ['class' => 'btn btn-default'],null )) !!}

                        </div>
                        <div class="btn-group">
                            {!! Form::open(['method' => 'DELETE', 'action' => ['AdminAdvertisementController@destroy',$advertisement->id]]) !!}
                            {!! Form::button('<i class="glyphicon glyphicon-remove-sign"></i>Eliminar', array('type' => 'submit', 'class' => 'btn btn-default'))!!}
                            {!! Form::close() !!}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection