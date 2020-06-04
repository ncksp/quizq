@extends('layouts.auth')

@section('content')
<div id="signup-box" class="signup-box visible widget-box no-border">
    <div class="widget-body">
        <div class="widget-main">
            <h4 class="header green lighter bigger">
                <i class="ace-icon fa fa-users blue"></i>
                New User Registration
            </h4>

            <div class="space-6"></div>
            <p> Enter your details to begin: </p>

            <form action="{{ route('register') }}" method="post" id="form-register">
                @csrf
                <fieldset>
                    <label class="block clearfix">
                        <span class="block input-icon input-icon-right">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email" autofocus>

                            <i class="ace-icon fa fa-envelope"></i>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </span>
                    </label>

                    <label class="block clearfix">
                        <span class="block input-icon input-icon-right">
                            <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" placeholder="Username" >
                            <i class="ace-icon fa fa-user"></i>
                            @error('username')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </span>
                    </label>

                    <label class="block clearfix">
                        <span class="block input-icon input-icon-right">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Name" autofocus>

                            <i class="ace-icon fa fa-user"></i>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </span>
                    </label>

                    <label class="block clearfix">
                        <span class="block input-icon input-icon-right">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">

                            <i class="ace-icon fa fa-lock"></i>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </span>
                    </label>

                    <label class="block clearfix">
                        <span class="block input-icon input-icon-right">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Retype Password" >
                            <i class="ace-icon fa fa-retweet"></i>
                        </span>
                    </label>

                    <label class="block">
                        <input type="checkbox" class="ace" required />
                        <span class="lbl">
                            I accept the
                            <a href="#">User Agreement</a>
                        </span>
                    </label>

                    <div class="space-24"></div>

                    <div class="clearfix">
                        <button type="reset" class="width-30 pull-left btn btn-sm">
                            <i class="ace-icon fa fa-refresh"></i>
                            <span class="bigger-110">Reset</span>
                        </button>

                        <button type="submit" class="width-65 pull-right btn btn-sm btn-success">
                            <span class="bigger-110">Register</span>

                            <i class="ace-icon fa fa-arrow-right icon-on-right"></i>
                        </button>
                    </div>
                </fieldset>
            </form>
        </div>

        <div class="toolbar center">
            <a href="{{ route('login') }}#" data-target="#login-box" class="back-to-login-link">
                <i class="ace-icon fa fa-arrow-left"></i>
                Back to login
            </a>
        </div>
    </div><!-- /.widget-body -->
</div><!-- /.signup-box -->

@endsection
