@extends('admin')

@section('content')
    <div class="row">
        <div class="col-lg-10 col-lg-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Galeria de publicidad</h3>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                        <tr class="active"><th>descripción</th><th>Status</th><th>fecha</th><th></th></tr>
                        </thead>
                        <tbody>
                        @foreach($advertisements as $advertisement)
                            <tr>
                                <td>{!! $advertisement->description !!}</td>
                                @if($advertisement->enabled == 'false')
                                    <td><span class="badge">Deshabilitado</span></td>
                                @else
                                    <td><span class="badge badge-primary">Habilitado</span></td>
                                @endif
                                <td>{!! $advertisement->created_at->format('d/m/Y') !!}</td>
                                <td>{!! link_to('advertisements/' .$advertisement->id ,'Ver',['class' => 'btn btn-primary btn-sm btn-block']) !!}</td>
                            </tr>
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