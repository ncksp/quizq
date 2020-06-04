@extends('layouts.app')
@section('title', 'Profile Page')

@section('meta-custom')
<link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.custom.min.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/css/jquery.gritter.min.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/css/select2.min.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datepicker3.min.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/css/bootstrap-editable.min.css') }}" />
@endsection

@section('pages', 'Profile')

@section('content')
<div class="col-xs-12">
    <!-- PAGE CONTENT BEGINS -->
    <div>
        <div id="user-profile-1" class="user-profile row">
            <div class="col-xs-12 col-sm-3 center">
                <div>
                    <span class="profile-picture">
                        <img id="avatar" class="editable img-responsive" alt="Alex's Avatar" src="../../assets/images/avatars/profile-pic.jpg" />
                    </span>

                    <div class="space-4"></div>

                    <div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
                        <div class="inline position-relative">
                            <a href="#" class="user-title-label dropdown-toggle" data-toggle="dropdown">
                                <span class="white">{{Auth::user()->name}}</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="hr hr12 dotted"></div>

                <div class="hr hr16 dotted"></div>
            </div>

            <div class="col-xs-12 col-sm-9">

                <div class="space-12"></div>

                <div class="profile-user-info profile-user-info-striped">
                    <div class="profile-info-row">
                        <div class="profile-info-name"> Username </div>

                        <div class="profile-info-value">
                        <span class="editable" id="username">{{Auth::user()->username}}</span>
                        </div>
                    </div>

                    <div class="profile-info-row">
                        <div class="profile-info-name"> Fullname </div>

                        <div class="profile-info-value">
                            <span class="editable" id="fullname">{{Auth::user()->name}} </span>
                        </div>
                    </div>

                    <div class="profile-info-row">
                        <div class="profile-info-name"> Joined </div>

                        <div class="profile-info-value">
                            <span class="editable" id="signup">{{Auth::user()->created_at->format('Y M d')}}</span>
                            ({{Auth::user()->created_at->diffForHumans()}})
                        </div>
                    </div>

                    <div class="profile-info-row">
                        <div class="profile-info-name"> Email </div>

                        <div class="profile-info-value">
                            <span class="editable" id="email">{{Auth::user()->email}}</span>
                        </div>
                    </div>
                </div>

                <div class="space-20"></div>
                <div class="space-6"></div>
            </div>
        </div>
    </div>

    <!-- PAGE CONTENT ENDS -->
</div><!-- /.col -->
@endsection

@section('plugin-script')
<script src="{{ asset('assets/js/jquery-ui.custom.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.ui.touch-punch.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.gritter.min.js') }}"></script>
<script src="{{ asset('assets/js/bootbox.js') }}"></script>
<script src="{{ asset('assets/js/jquery.easypiechart.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.hotkeys.index.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap-wysiwyg.min.js') }}"></script>
<script src="{{ asset('assets/js/select2.min.js') }}"></script>
<script src="{{ asset('assets/js/spinbox.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap-editable.min.js') }}"></script>
<script src="{{ asset('assets/js/ace-editable.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.maskedinput.min.js') }}"></script>

@endsection

@section('script')

<script type="text/javascript">
    jQuery(function($) {
        $("#sidebar-profile").addClass("active");
    });
    jQuery(function($) {

        //editables on first profile page
        $.fn.editable.defaults.mode = 'inline';
        $.fn.editableform.loading = "<div class='editableform-loading'><i class='ace-icon fa fa-spinner fa-spin fa-2x light-blue'></i></div>";
        $.fn.editableform.buttons = '<button type="submit" class="btn btn-info editable-submit"><i class="ace-icon fa fa-check"></i></button>' +
            '<button type="button" class="btn editable-cancel"><i class="ace-icon fa fa-times"></i></button>';

        //editables

        //text editable
        $('#username')
            .editable({
                type: 'text',
                name: 'username',
                success: function(response, newValue) {
                }
            });

        $('#fullname')
            .editable({
                type: 'text',
                name: 'fullname'
            });

        $('#email')
            .editable({
                type: 'email',
                name: 'email'
            });
    });
</script>
@endsection
