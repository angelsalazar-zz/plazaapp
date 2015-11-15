@extends('admin')

@section('content')
    <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading clearfix">
                    <h3 class="panel-title pull-left">Base Card Title</h3>
                    {!! Form::model($message,['method' => 'PUT', 'action' => ['AdminMessageController@update',$message->id]]) !!}
                        {!! Form::input('hidden','name',null,null) !!}
                        {!! Form::input('hidden','email',null,null) !!}
                        {!! Form::input('hidden','phone',null,null) !!}
                        {!! Form::input('hidden','message',null) !!}
                        {!! Form::input('hidden','seen','true',null) !!}
                        {!! Form::submit('Marcar como leido',['class' => 'btn btn-primary pull-right']) !!}
                    {!! Form::close() !!}
                </div>
                <div class="list-group">
                    <div class="list-group-item">
                        <p class="list-group-item-text">Nombre:</p>
                        <h4 class="list-group-item-heading">{!! $message->name !!}</h4>
                    </div>
                    <div class="list-group-item">
                        <p class="list-group-item-text">Email:</p>
                        <h4 class="list-group-item-heading">{!! $message->email !!}</h4>
                    </div>
                    <div class="list-group-item">
                        <p class="list-group-item-text">Teléfono:</p>
                        <h4 class="list-group-item-heading">{!! $message->phone !!}</h4>
                    </div>
                    <div class="list-group-item">
                        <p class="list-group-item-text">{!! $message->message !!}</p>
                    </div>
                </div>
                <div class="panel-footer">
                    <small>Floreria plaza</small>
                </div>
            </div>
        </div>
    </div>
@endsection