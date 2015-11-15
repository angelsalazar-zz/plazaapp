@extends('admin')

@section('content')
    <div class="row">
        <div class="col-lg-10 col-lg-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Publicaciones de usuarios</h3>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                        <tr class="active"><th>Autor</th><th>Status</th><th>Post del mes</th><th>fecha</th><th></th></tr>
                        </thead>
                        <tbody>
                        @foreach($posts as $post)
                            <tr>
                                <td>{!! \App\User::find($post->user_id)->name !!}</td>
                                @if($post->enabled == 'false')
                                    <td><span class="badge">Sin aprobar</span></td>
                                @else
                                    <td><span class="badge badge-primary">Aprobado</span></td>
                                @endif
                                @if($post->vippost == 'false')
                                    <td><span class="badge">No</span></td>
                                @else
                                    <td><span class="badge">Si</span></td>
                                @endif
                                <td>{!! $post->created_at->format('d/m/Y') !!}</td>
                                <td>{!! link_to('pts/' .$post->id ,'Ver',['class' => 'btn btn-primary btn-sm btn-block']) !!}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="panel-footer">
                    <small>Built with Bootcards - Table Card</small>
                </div>
            </div>
            {!! $posts->render() !!}
        </div>
    </div>


@endsection