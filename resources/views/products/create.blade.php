@extends('admin')

@section('content')
    <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
            <h1 class="page-header">Ingresa un nuevo producto</h1>

            @include('partials.errors')
            {!! Form::open(array('url' => 'products','files' => 'true')) !!}
            {!! Form::input('hidden','enabled','false',null) !!}
            <div class="form-group">
                {!! Form::label('img_url','Ruta de la imagen:')!!}
                {!! Form::file('img_url') !!}
            </div>
            <div class="form-group">
                {!! Form::label('product_name','Nombre del producto:')!!}
                {!! Form::input('text','product_name',null,['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('description','Descripción del producto:')!!}
                {!! Form::textarea('description',null,['class' => 'form-control']) !!}
            </div>
                {!! Form::submit('Crear',['class' => 'btn btn-success form-control']) !!}

            {!! Form::close() !!}

        </div>
    </div>
@endsection