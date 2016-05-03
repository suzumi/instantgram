@extends('layouts.app')

        <!-- Main Content -->
@section('content')
    <div class="container login-register-container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <h2 class="logo text-center">Instantgram</h2>

                <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/email') }}">
                    {!! csrf_field() !!}

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

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-default btn-block">
                                <i class="fa fa-btn fa-envelope"></i>Send Password Reset Link
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
@endsection
