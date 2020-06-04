@extends('layouts.app')

@section('title', 'Dashboard')
@section('pages', 'Dashboard')
@section('content')
    <div class="row">
        <div class="col-xs-12">
            <!-- PAGE CONTENT BEGINS -->
            <div class="alert alert-block alert-success">
                <button type="button" class="close" data-dismiss="alert">
                    <i class="ace-icon fa fa-times"></i>
                </button>
                Welcome back,
                <strong class="green">
                    {{Auth::user()->name}}
                </strong>
            </div>

            <div class="row">
                <div class="space-6"></div>
                @yield('main-content', View::make('dashboard.'.App\Http\Middleware\Roles::currentRoles().'.index', ["questions" => $questions, "users" => $users]))

                <div class="vspace-12-sm"></div>
            </div><!-- /.row -->


            <!-- PAGE CONTENT ENDS -->
        </div><!-- /.col -->
    </div><!-- /.row -->

@endsection

@section('plugin-script')
    <!-- page specific plugin scripts -->

    <!--[if lte IE 8]>
        <script src="../../assets/js/excanvas.min.js"></script>
    <![endif]-->
    <script src="{{ asset('assets/js/jquery.easypiechart.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap-editable.min.js') }}"></script>
@endsection
@section('script')
    <!-- inline scripts related to this page -->
    <script type="text/javascript">
        jQuery(function($) {


            $('.easy-pie-chart.percentage').each(function() {
                var barColor = $(this).data('color') || '#555';
                var trackColor = '#E2E2E2';
                var size = parseInt($(this).data('size')) || 72;
                $(this).easyPieChart({
                    barColor: barColor,
                    trackColor: trackColor,
                    scaleColor: false,
                    lineCap: 'butt',
                    lineWidth: 20,
                    animate: true,
                    size: 110,
                }).css('color', barColor);
            });
        });
    </script>
    <script type="text/javascript">
        jQuery(function($) {
            $("#sidebar-dashboard").addClass("active");
        });
    </script>
@endsection
