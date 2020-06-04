@extends('layouts.auth')

@section('content')
<div id="login-box" class="login-box visible widget-box no-border">
    <div class="widget-body">
        <div class="widget-main">
            <h4 class="header blue lighter bigger center">
                Enter your new password
            </h4>

            <div class="space-6"></div>
            <form method="POST" action="{{ route('password.update') }}">
                @csrf

                <input type="hidden" name="token" value="{{ $token }}">

                <div class="form-group row">
                    <label for="email" class="col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus readonly>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group row">
                    <label for="password" class="col-form-label text-md-right">{{ __('Password') }}</label>

                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group row">
                    <label for="password-confirm" class="col-form-label text-md-right">{{ __('Confirm Password') }}</label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Retype password">
                </div>

                <div class="form-group row mb-0">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Reset Password') }}
                    </button>
                </div>
            </form>
        </div><!-- /.widget-main -->
    </div><!-- /.widget-body -->
</div><!-- /.login-box -->
@endsection
