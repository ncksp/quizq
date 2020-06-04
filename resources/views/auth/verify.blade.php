@extends('layouts.auth')

@section('content')
<div id="login-box" class="login-box visible widget-box no-border">
    <div class="widget-body">
        <div class="widget-main">
            <h4 class="header blue lighter bigger center">
                {{ __('Verify Your Email Address') }}
            </h4>

            <div class="space-6"></div>
            @if (session('resent'))
                <div class="alert alert-success" role="alert">
                    {{ __('A fresh verification link has been sent to your email address.') }}
                </div>
            @endif

            {{ __('Before proceeding, please check your email for a verification link.') }}
            {{ __('If you did not receive the email') }}
            <div class="space-6"></div>

            <form method="POST" class="text-center" action="{{ route('verification.resend') }}">
                @csrf
                <button type="submit" class="btn btn-success btn-sm">{{ __('Click here to send email') }}</button>
            </form>
        </div><!-- /.widget-main -->
    </div><!-- /.widget-body -->
</div><!-- /.login-box -->
@endsection
