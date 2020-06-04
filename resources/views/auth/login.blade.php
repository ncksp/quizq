@extends('layouts.auth')

@section('content')
<div id="login-box" class="login-box visible widget-box no-border">
    <div class="widget-body">
        <div class="widget-main">
            <h4 class="header blue lighter bigger">
                <i class="ace-icon fa fa-coffee green"></i>
                Please Enter Your Information
            </h4>

            <div class="space-6"></div>

            <form action="{{ route('login') }}" method="post" id="form-login">
                @csrf
                <fieldset>
                    <label class="block clearfix">
                        <span class="block input-icon input-icon-right">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email" autofocus>
                            <i class="ace-icon fa fa-user"></i>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </span>
                    </label>

                    <label class="block clearfix">
                        <span class="block input-icon input-icon-right">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <i class="ace-icon fa fa-lock"></i>
                        </span>
                    </label>

                    <div class="space"></div>
                    <div class="clearfix">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                        <button type="submit" class="width-100 pull-right btn btn-sm btn-primary">
                            <i class="ace-icon fa fa-key"></i>
                            <span class="bigger-110">Login</span>
                        </button>
                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </div>

                    <div class="space-4"></div>
                </fieldset>
            </form>
        </div><!-- /.widget-main -->

        <div class="toolbar clearfix center">
            <div>
                <a href="{{ route('register') }}"  class="user-signup-link">
                    I want to register
                    <i class="ace-icon fa fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div><!-- /.widget-body -->
</div><!-- /.login-box -->
@endsection
