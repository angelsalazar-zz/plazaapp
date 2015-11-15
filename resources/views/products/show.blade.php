@extends('admin')

@section('content')
    <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
            <div class="panel panel-default bootcards-media">
                <div class="panel-heading">
                    <h3 class="panel-title">{!! $product->product_name !!}</h3>
                </div>
                <div class="panel-body">
                    {!! $product->description !!}
                </div>
                <img src="{{asset('/images/'.$product->img_url) }}" class="img-responsive center-block"/>
                <div class="panel-footer">
                    <div class="btn-group btn-group-justified">
                        <div class="btn-group">
                            @if($product->enabled == 'false')
                                {!! Form::open(['method' => 'PUT', 'action' => ['AdminProductsController@update',$product->id]]) !!}
                                {!! Form::input('hidden','product_name',$product->product_name,null) !!}
                                {!! Form::input('hidden','img_url',null,null) !!}
                                {!! Form::input('hidden','description',$product->description,null) !!}
                                {!! Form::input('hidden','enabled','true') !!}
                                {!! Form::button('<i class="glyphicon glyphicon-ok-circle"></i>Habilitar', array('type' => 'submit', 'class' => 'btn btn-default'))!!}
                                {!! Form::close() !!}
                            @else
                                {!! Form::open(['method' => 'PUT', 'action' => ['AdminProductsController@update',$product->id]]) !!}
                                {!! Form::input('hidden','product_name',$product->product_name,null) !!}
                                {!! Form::input('hidden','img_url',null,null) !!}
                                {!! Form::input('hidden','description',$product->description,null) !!}
                                {!! Form::input('hidden','enabled','false') !!}
                                {!! Form::button('<i class="glyphicon glyphicon-ok-sign"></i>Deshabilitar', array('type' => 'submit', 'class' => 'btn btn-default'))!!}
                                {!! Form::close() !!}
                            @endif
                        </div>
                        <div class="btn-group">
                            {!! HTML::decode(link_to('products/' .$product->id.'/edit', '<i class="glyphicon glyphicon-edit"></i> Editar', ['class' => 'btn btn-default'],null )) !!}

                        </div>
                        <div class="btn-group">
                            {!! Form::open(['method' => 'DELETE', 'action' => ['AdminProductsController@destroy',$product->id]]) !!}
                            {!! Form::button('<i class="glyphicon glyphicon-remove-sign"></i>Eliminar', array('type' => 'submit', 'class' => 'btn btn-default'))!!}
                            {!! Form::close() !!}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection