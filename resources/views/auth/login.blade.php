@extends('app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-md-offset-3" style="padding-top: 100px">
                <div class="panel panel-default">
                    <div class="panel-heading">Login</div>
                    <div class="panel-body">
                        @include('partials.errors')

                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/login') }}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group">
                                <label class="col-md-4 control-label">E-Mail Address</label>
                                <div class="col-md-6">
                                    <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Password</label>
                                <div class="col-md-6">
                                    <input type="password" class="form-control" name="password">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember"> Remember Me
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-success btn-lg btn-block" style="margin-right: 10px">Login</button>
                                </div>
                                <div class="col-md-6">
                                    <a class="btn btn-default btn-lg btn-block" href="{{ url('/auth/register') }}">Register</a>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <a class="btn btn-link" href="{{ url('/password/email') }}">Forgot Your Password?</a>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-6">
                                    <a class="btn btn-primary btn-lg btn-block" href="{{ url('loginwithfb') }}">Facebook</a>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
