@extends('admin')

@section('content')
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Mensajes enviados</h3>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                        <tr class="active"><th>Nombre</th><th>Email</th><th>fecha</th><th></th></tr>
                        </thead>
                        <tbody>
                        @foreach($messages as $message)
                            <tr><td>{!! $message->name !!}</td><td>{!! $message->email !!}</td><td>{!! $message->created_at->format('d/m/Y') !!}</td><td>{!! link_to('msgs/' .$message->id.'/edit' ,'Ver',['class' => 'btn btn-primary btn-sm btn-block']) !!}</td></tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="panel-footer">
                    <small>Built with Bootcards - Table Card</small>
                </div>
            </div>

        </div>
    </div>
@endsection