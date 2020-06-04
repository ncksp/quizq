@extends('layouts.auth')

@section('content')
<div id="login-box" class="login-box visible widget-box no-border">
    <div class="widget-body">
        <div class="widget-main">
            <h4 class="header blue lighter bigger center">
                Please confirm your password before continuing.
            </h4>

            <div class="space-6"></div>
            <form method="POST" action="{{ route('password.confirm') }}">
                @csrf
                <fieldset>
                    <div class="form-group row">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="space"></div>
                    <div class="form-group row">
                        <button type="submit" class="width-100 pull-right btn btn-sm btn-primary">
                            <i class="ace-icon fa fa-key"></i>
                            <span class="bigger-110">Confirm Password</span>
                        </button>
                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </div>
                </fieldset>
            </form>
        </div><!-- /.widget-main -->
    </div><!-- /.widget-body -->
</div><!-- /.login-box -->
@endsection
