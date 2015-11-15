@extends('admin')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="jumbotron jumbotron-fluid">
                <div class="container">
                    <h1 class="display-3">¡Bienvenido al dashboard!</h1>
                    <p class="lead">
                        {!! Auth::user()->name !!}
                        <br/>
                        Tiene <a class="badge">{!! $quantity !!}</a>  mensaje(s).
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection