@extends('admin')

@section('content')
    <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
            <h1 class="page-header">Crea una nueva publicidad</h1>
            @include('partials.errors')
            {!! Form::model($advertisement,['method' => 'PUT','files' => 'true', 'action' => ['AdminAdvertisementController@update',$advertisement->id]]) !!}
            {!! Form::input('hidden','enabled',null,['class' => 'form-control']) !!}
            <div class="form-group">
                {!! Form::label('img_url','Ruta de la imagen:')!!}
                {!! Form::file('img_url') !!}
            </div>
            <div class="form-group">
                {!! Form::label('img_url','Descripción de la promoción:')!!}
                {!! Form::input('text','description',null,['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Actualizar',['class' => 'btn btn-success form-control']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection