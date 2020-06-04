@extends('layouts.app')
@section('title','Report')

@section('meta-custom')
<style>
    body {
        overflow-x: hidden;
    }
</style>
@endsection

@section('pages', 'Report')

@section('content')
<div class="col-xs-12">
    <!-- PAGE CONTENT BEGINS -->
    <div class="row">
        <div class="space-6"></div><div class="row">
            <div class="col-sm-12">

                <div class="col-sm-4">
                    <div class="widget-box" id="widget-box-10">
                        <div class="widget-header widget-header-small">
                            <h4 class="widget-title smaller">Average Score</h4>
                        </div>

                        <div class="widget-body">
                            <div class="widget-main padding-6">
                                <div class="tab-content">
                                    The average value obtained from the number of questions done divided by the number of correct
                                    <div class="widget-body">
                                        <div class="widget-main padding-16">
                                            <div class="clearfix">
                                                <div class="center">
                                                    <div class="easy-pie-chart percentage" data-percent="85" data-color="#CA5952">
                                                        <span class="percent">85</span>
                                                    </div>
                                                </div>
                                                <div class="hr dotted"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="widget-box" id="widget-box-10">
                        <div class="widget-header widget-header-small">
                            <h4 class="widget-title smaller">Quiz Taken</h4>
                        </div>

                        <div class="widget-body">
                            <div class="widget-main padding-6">
                                <div class="tab-content">
                                    <div class="widget-body">
                                        <div class="widget-main padding-16">
                                            <div class="clearfix">
                                                <ul class="list-unstyled">
                                                    <li>
                                                        <h5><i class="ace-icon fa fa-caret-right blue"></i> Total Quiz : <span class="badge badge-primary">11</span></h5>
                                                    </li>
                                                    <div class="hr dotted"></div>
                                                    <li>
                                                        <h5><i class="ace-icon fa fa-caret-right blue"></i> Quiz Taken : <span class="badge badge-success">6</span></h5>
                                                    </li>
                                                    <div class="hr dotted"></div>
                                                    <li>
                                                        <h5><i class="ace-icon fa fa-caret-right blue"></i> Remaining Quiz : <span class="badge badge-warning">5</span></h5>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="widget-box" id="widget-box-10">
                        <div class="widget-header widget-header-small">
                            <h4 class="widget-title smaller">Question Taken Report</h4>
                        </div>

                        <div class="widget-body">


                            <div class="widget-main padding-6">
                                <div class="tab-content">
                                    <div class="widget-body">
                                        <div class="widget-main padding-16">
                                            <div class="clearfix">
                                                <ul class="list-unstyled">
                                                    <li>
                                                        <h5><i class="ace-icon fa fa-caret-right blue"></i> Question Total : <span class="badge badge-primary">85</span></h5>
                                                    </li>
                                                    <div class="hr dotted"></div>
                                                    <li>
                                                        <h5><i class="ace-icon fa fa-caret-right blue"></i> Question Correct : <span class="badge badge-success">72</span></h5>
                                                    </li>
                                                    <div class="hr dotted"></div>
                                                    <li>
                                                        <h5><i class="ace-icon fa fa-caret-right blue"></i> Question Incorrect : <span class="badge badge-warning">13</span></h5>
                                                    </li>
                                                </ul>
                                                <div class="hr dotted"></div>
                                                <div class="center">
                                                    <div class="easy-pie-chart percentage" data-percent="84.7" data-color="#6fb3e0">
                                                        <span class="percent">84.7</span>%
                                                    </div>
                                                    <p>Percentage</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="space-20"></div>
        <div class="row">
            <div class="col-sm-12 mb-5">
                <div class="col-sm-3 mb-5">
                    <div class="widget-box widget-color-grey">
                        <div class="widget-header">
                            <h5 class="widget-title bigger darker">CS001 - Interaction Design</h5>
                        </div>

                        <div class="widget-body">
                            <div class="widget-main">
                                <ul class="list-unstyled spaced2">
                                    <li>
                                        <i class="ace-icon fa fa-check green"></i>
                                        Correct : 11
                                    </li>

                                    <li>
                                        <i class="ace-icon fa fa-times red"></i>
                                        Wrong : 4
                                    </li>
                                </ul>
                            </div>

                            <div>
                                <a href="#" class="btn btn-block btn-warning">
                                    <i class="ace-icon fa fa-shopping-cart bigger-110"></i>
                                    <span>Score : 73.3</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 mb-5">
                    <div class="widget-box widget-color-grey">
                        <div class="widget-header">
                            <h5 class="widget-title bigger darker">CS004 - Social Interaction</h5>
                        </div>

                        <div class="widget-body">
                            <div class="widget-main">
                                <ul class="list-unstyled spaced2">
                                    <li>
                                        <i class="ace-icon fa fa-check green"></i>
                                        Correct : 9
                                    </li>

                                    <li>
                                        <i class="ace-icon fa fa-times red"></i>
                                        Wrong : 1
                                    </li>
                                </ul>
                            </div>

                            <div>
                                <a href="#" class="btn btn-block btn-warning">
                                    <i class="ace-icon fa fa-shopping-cart bigger-110"></i>
                                    <span>Score : 90</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 mb-5">
                    <div class="widget-box widget-color-grey">
                        <div class="widget-header">
                            <h5 class="widget-title bigger darker">CS005 - Emotional interaction </h5>
                        </div>

                        <div class="widget-body">
                            <div class="widget-main">
                                <ul class="list-unstyled spaced2">
                                    <li>
                                        <i class="ace-icon fa fa-check green"></i>
                                        Correct : 13
                                    </li>

                                    <li>
                                        <i class="ace-icon fa fa-times red"></i>
                                        Wrong : 2
                                    </li>
                                </ul>
                            </div>

                            <div>
                                <a href="#" class="btn btn-block btn-warning">
                                    <i class="ace-icon fa fa-shopping-cart bigger-110"></i>
                                    <span>Score : 86.7</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 mb-5">
                    <div class="widget-box widget-color-grey">
                        <div class="widget-header">
                            <h5 class="widget-title bigger darker">CS008 - Data Analysis, Interpretation, and Presentation </h5>
                        </div>

                        <div class="widget-body">
                            <div class="widget-main">
                                <ul class="list-unstyled spaced2">
                                    <li>
                                        <i class="ace-icon fa fa-check green"></i>
                                        Correct : 10
                                    </li>

                                    <li>
                                        <i class="ace-icon fa fa-times red"></i>
                                        Wrong : 5
                                    </li>
                                </ul>
                            </div>

                            <div>
                                <a href="#" class="btn btn-block btn-warning">
                                    <i class="ace-icon fa fa-shopping-cart bigger-110"></i>
                                    <span>Score : 66.7</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 mb-5">
                    <div class="widget-box widget-color-grey">
                        <div class="widget-header">
                            <h5 class="widget-title bigger darker">CS0010 - Introducing Evaluation </h5>
                        </div>

                        <div class="widget-body">
                            <div class="widget-main">
                                <ul class="list-unstyled spaced2">
                                    <li>
                                        <i class="ace-icon fa fa-check green"></i>
                                        Correct : 15
                                    </li>

                                    <li>
                                        <i class="ace-icon fa fa-times red"></i>
                                        Wrong : 0
                                    </li>
                                </ul>
                            </div>

                            <div>
                                <a href="#" class="btn btn-block btn-warning">
                                    <i class="ace-icon fa fa-shopping-cart bigger-110"></i>
                                    <span>Score : 100</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 mb-5">
                    <div class="widget-box widget-color-grey">
                        <div class="widget-header">
                            <h5 class="widget-title bigger darker">CS0011 - Advanced Evaluation  </h5>
                        </div>

                        <div class="widget-body">
                            <div class="widget-main">
                                <ul class="list-unstyled spaced2">
                                    <li>
                                        <i class="ace-icon fa fa-check green"></i>
                                        Correct : 14
                                    </li>

                                    <li>
                                        <i class="ace-icon fa fa-times red"></i>
                                        Wrong : 1
                                    </li>
                                </ul>
                            </div>

                            <div>
                                <a href="#" class="btn btn-block btn-warning">
                                    <i class="ace-icon fa fa-shopping-cart bigger-110"></i>
                                    <span>Score : 93.3</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="vspace-12-sm"></div>
    </div><!-- /.row -->


    <!-- PAGE CONTENT ENDS -->
</div><!-- /.col -->
@endsection

@section('plugin-script')
    <!-- page specific plugin scripts -->

    <!--[if lte IE 8]>
        <script src="{{ asset('assets/js/excanvas.min.js') }}"></script>
    <![endif]-->
    <script src="{{ asset('assets/js/jquery.easypiechart.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap-editable.min.js') }}"></script>

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
            $("#sidebar-report").addClass("active");
        });
    </script>
@endsection


