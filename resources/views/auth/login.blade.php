@extends('layouts.app')

@section('content')
    <div class="container login-register-container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h2 class="logo text-center">Instantgram</h2>

                <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                    {!! csrf_field() !!}

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        {{--<label class="col-md-4 control-label">E-Mail Address</label>--}}

                        <div class="col-md-6">
                            <input type="email" class="form-control" name="email" value="{{ old('email') }}"
                                   placeholder="Email">

                            @if ($errors->has('email'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        {{--<label class="col-md-4 control-label">Password</label>--}}

                        <div class="col-md-6">
                            <input type="password" class="form-control" name="password" placeholder="Password">

                            @if ($errors->has('password'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
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
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-default btn-block btn-login">
                                <i class="fa fa-btn fa-sign-in"></i>Login
                            </button>

                            <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
@endsection
