@extends('admin')

@section('content')
    <div class="row">
        <div class="col-lg-10 col-lg-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Galeria de productos</h3>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                        <tr class="active"><th>Nombre del producto</th><th>Status</th><th>fecha</th><th></th></tr>
                        </thead>
                        <tbody>
                        @foreach($products as $product)
                            <tr>
                                <td>{!! $product->product_name !!}</td>
                                @if($product->enabled == 'false')
                                    <td><span class="badge">Deshabilitado</span></td>
                                @else
                                    <td><span class="badge badge-primary">Habilitado</span></td>
                                @endif
                                <td>{!! $product->created_at->format('d/m/Y') !!}</td>
                                <td>{!! link_to('products/' .$product->id ,'Ver',['class' => 'btn btn-primary btn-sm btn-block']) !!}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="panel-footer">
                    <small>Built with Bootcards - Table Card</small>
                </div>
            </div>
            {!! $products->render() !!}

        </div>
    </div>
@endsection