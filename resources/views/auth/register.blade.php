@extends('layouts.app')

@section('content')
    <div class="container login-register-container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h2 class="logo text-center">Instantgram</h2>

                <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                    {!! csrf_field() !!}

                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        {{--<label class="col-md-4 control-label">Name</label>--}}

                        <div class="col-md-6">
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Name">

                            @if ($errors->has('name'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        {{--<label class="col-md-4 control-label">E-Mail Address</label>--}}

                        <div class="col-md-6">
                            <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email">

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

                    <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                        {{--<label class="col-md-4 control-label">Confirm Password</label>--}}

                        <div class="col-md-6">
                            <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password">

                            @if ($errors->has('password_confirmation'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-default btn-block">
                                <i class="fa fa-btn fa-user"></i>Register
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
@endsection
