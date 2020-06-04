@extends('layouts.auth')

@section('content')
<div id="login-box" class="login-box visible widget-box no-border">
    <div class="widget-body">
        <div class="widget-main">
            <h4 class="header blue lighter bigger center">
                Reset Password
            </h4>
            <div class="space-6"></div>

            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <form action="{{ route('password.email') }}" method="post" id="form-login">
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

                    <div class="space"></div>
                    <div class="clearfix">
                        <button type="submit" class="width-100 pull-right btn btn-sm btn-primary">
                            <i class="ace-icon fa fa-key"></i>
                            <span class="bigger-110">Send Password Reset Link</span>
                        </button>
                    </div>

                    <div class="space-4"></div>
                </fieldset>
            </form>
        </div><!-- /.widget-main -->
        <div class="toolbar clearfix center">
            <div>
                <a href="{{ route('login') }}"  class="user-signup-link">
                    <i class="ace-icon fa fa-arrow-left"></i>
                    Back to login
                </a>
            </div>
        </div>
    </div><!-- /.widget-body -->
</div><!-- /.login-box -->
@endsection
