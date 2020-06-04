@extends('layouts.app')
@section('title','Material Management')

@section('pages', 'Question Management')

@section('content')
    @if (session('status'))
        <div class="alert alert-info">
            {{ session('status') }}
        </div>
    @endif
    <div class="container-fluid">
        <a href="{{route('materials')}}">Back</a>
    </div>
    <div class="col-xs-12">
    <!-- PAGE CONTENT BEGINS -->
        <div class="row">
            <div class="col-xs-12">
                <div class="clearfix">
                    <div class="pull-right tableTools-container"></div>
                </div>
                <div class="table-header">
                    Results for "Questions" in <b>{{$material->material}}</b>
                </div>

                <div class="space-20"></div>

                <a href="{{route('add-question', $material->id_material )}}" class="btn btn-success btn-sm">Add new question</a>
                <!-- div.dataTables_borderWrap -->
                <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>

                            <th>#</th>
                            <th>Question</th>
                            <th>Details</th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($questions as $question)
                            <tr>
                                <td>
                                    {{$loop->iteration}}
                                </td>
                                <td>{{$question->question}}</td>
                                <td>
                                    <a href="#" id="btn-show" data-toggle="modal" data-id="{{$question->id}}" data data-target="#modal-detail">Click Here</a>
                                </td>

                                <td>
                                    <div class="action-buttons">
                                        <a class="green" href="{{route('question-detail', [$question->id_material, $question->id])}}">
                                            <i class="ace-icon fa fa-pencil bigger-130"></i>
                                        </a>
                                        <a class="red" href="#" id="btn-delete" data-toggle="modal" data-id="{{$question->id}}"  data-name="{{$question->question}}" data-target="#modal-delete">
                                            <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    <!-- PAGE CONTENT ENDS -->
    </div><!-- /.col -->
    <div class="modal fade" id="modal-detail" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Details Question</h4>
                </div>
                <div class="modal-body">
                    <div>
                        <h4>Category <b id="category-text"> asdasd</b></h4>
                        <hr>
                        <label for=""><b>Question:</b></label>
                        <p id="question-text"></p>

                        <label for=""><b>Option A:</b></label>
                        <p id="option_a-text"></p>

                        <label for=""><b>Option B:</b></label>
                        <p id="option_b-text"></p>

                        <label for=""><b>Option C:</b></label>
                        <p id="option_c-text"></p>

                        <label for=""><b>Option D:</b></label>
                        <p id="option_d-text"></p>

                        <label for=""><b>Answer:</b></label>
                        <p id="answer-text"></p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
      </div>

    <div class="modal fade" id="modal-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Delete Question</h4>
                </div>
                <div class="modal-body">
                    <p id="text"></p>
                </div>
                <div class="modal-footer">
                    <form action="{{route('delete-question', $material->id_material)}}" method="post">
                        @csrf
                        <input type="text" id="data-id" name="id" hidden>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger">Remove</button>
                    </form>
                </div>
            </div>
        </div>
      </div>
@endsection

@section('plugin-script')
<script src="{{ asset('assets/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.dataTables.bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('assets/js/buttons.flash.min.js') }}"></script>
<script src="{{ asset('assets/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('assets/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('assets/js/buttons.colVis.min.js') }}"></script>
<script src="{{ asset('assets/js/dataTables.select.min.js') }}"></script>
@endsection

@section('script')
<script>
    $('body').delegate('#btn-delete','click',function(){
        $('#modal-delete #data-id').val($(this).data('id'))
        $('#modal-delete #text').text('Are you sure want to remove question : '+$(this).data('name') + '? ')
    })
    $('body').delegate('#btn-show','click',function(){
        var base = "{{route('material-question', $material->id_material)}}"
        $.get(base+"/"+$(this).data('id')+"/show", function( data ) {
            data = JSON.parse(data);
            $('#modal-detail #category-text').text(data.material.material)
            $('#modal-detail #question-text').text(data.question.question)
            $('#modal-detail #option_a-text').text(data.question.option_a)
            $('#modal-detail #option_b-text').text(data.question.option_b)
            $('#modal-detail #option_c-text').text(data.question.option_c)
            $('#modal-detail #option_d-text').text(data.question.option_d)
            $('#modal-detail #answer-text').text(data.question.answer)
        });
    })
</script>
<script type="text/javascript">
    jQuery(function($) {
        $("#sidebar-question").addClass("active");
    });
</script>

<script type="text/javascript">
    jQuery(function($) {
        //initiate dataTables plugin
        var myTable =
            $('#dynamic-table')
            //.wrap("<div class='dataTables_borderWrap' />")   //if you are applying horizontal scrolling (sScrollX)
            .DataTable({
                bAutoWidth: false,
                "aoColumns": [{
                        "bSortable": true
                    },
                    null, null,
                    {
                        "bSortable": true
                    },
                ],
                "aaSorting": [],


                //"bProcessing": true,
                //"bServerSide": true,
                //"sAjaxSource": "http://127.0.0.1/table.php"	,

                //,
                //"sScrollY": "200px",
                //"bPaginate": false,

                //"sScrollX": "100%",
                //"sScrollXInner": "120%",
                //"bScrollCollapse": true,
                //Note: if you are applying horizontal scrolling (sScrollX) on a ".table-bordered"
                //you may want to wrap the table inside a "div.dataTables_borderWrap" element

                //"iDisplayLength": 50


                // select: {
                //     style: 'multi'
                // }
            });



        $.fn.dataTable.Buttons.defaults.dom.container.className = 'dt-buttons btn-overlap btn-group btn-overlap';

        new $.fn.dataTable.Buttons(myTable, {
            buttons: [{
                    "extend": "colvis",
                    "text": "<i class='fa fa-search bigger-110 blue'></i> <span class='hidden'>Show/hide columns</span>",
                    "className": "btn btn-white btn-primary btn-bold",
                    columns: ':not(:first):not(:last)'
                },
                {
                    "extend": "copy",
                    "text": "<i class='fa fa-copy bigger-110 pink'></i> <span class='hidden'>Copy to clipboard</span>",
                    "className": "btn btn-white btn-primary btn-bold"
                },
                {
                    "extend": "csv",
                    "text": "<i class='fa fa-database bigger-110 orange'></i> <span class='hidden'>Export to CSV</span>",
                    "className": "btn btn-white btn-primary btn-bold"
                },
                {
                    "extend": "excel",
                    "text": "<i class='fa fa-file-excel-o bigger-110 green'></i> <span class='hidden'>Export to Excel</span>",
                    "className": "btn btn-white btn-primary btn-bold"
                },
                {
                    "extend": "pdf",
                    "text": "<i class='fa fa-file-pdf-o bigger-110 red'></i> <span class='hidden'>Export to PDF</span>",
                    "className": "btn btn-white btn-primary btn-bold"
                },
                {
                    "extend": "print",
                    "text": "<i class='fa fa-print bigger-110 grey'></i> <span class='hidden'>Print</span>",
                    "className": "btn btn-white btn-primary btn-bold",
                    autoPrint: false,
                }
            ]
        });
        myTable.buttons().container().appendTo($('.tableTools-container'));

        //style the message box
        var defaultCopyAction = myTable.button(1).action();
        myTable.button(1).action(function(e, dt, button, config) {
            defaultCopyAction(e, dt, button, config);
            $('.dt-button-info').addClass('gritter-item-wrapper gritter-info gritter-center white');
        });


        var defaultColvisAction = myTable.button(0).action();
        myTable.button(0).action(function(e, dt, button, config) {

            defaultColvisAction(e, dt, button, config);


            if ($('.dt-button-collection > .dropdown-menu').length == 0) {
                $('.dt-button-collection')
                    .wrapInner('<ul class="dropdown-menu dropdown-light dropdown-caret dropdown-caret" />')
                    .find('a').attr('href', '#').wrap("<li />")
            }
            $('.dt-button-collection').appendTo('.tableTools-container .dt-buttons')
        });

        ////

        setTimeout(function() {
            $($('.tableTools-container')).find('a.dt-button').each(function() {
                var div = $(this).find(' > div').first();
                if (div.length == 1) div.tooltip({
                    container: 'body',
                    title: div.parent().text()
                });
                else $(this).tooltip({
                    container: 'body',
                    title: $(this).text()
                });
            });
        }, 500);





        myTable.on('select', function(e, dt, type, index) {
            if (type === 'row') {
                $(myTable.row(index).node()).find('input:checkbox').prop('checked', true);
            }
        });
        myTable.on('deselect', function(e, dt, type, index) {
            if (type === 'row') {
                $(myTable.row(index).node()).find('input:checkbox').prop('checked', false);
            }
        });




        /////////////////////////////////
        //table checkboxes
        $('th input[type=checkbox], td input[type=checkbox]').prop('checked', false);

        //select/deselect all rows according to table header checkbox
        $('#dynamic-table > thead > tr > th input[type=checkbox], #dynamic-table_wrapper input[type=checkbox]').eq(0).on('click', function() {
            var th_checked = this.checked; //checkbox inside "TH" table header

            $('#dynamic-table').find('tbody > tr').each(function() {
                var row = this;
                if (th_checked) myTable.row(row).select();
                else myTable.row(row).deselect();
            });
        });

        //select/deselect a row when the checkbox is checked/unchecked
        $('#dynamic-table').on('click', 'td input[type=checkbox]', function() {
            var row = $(this).closest('tr').get(0);
            if (this.checked) myTable.row(row).deselect();
            else myTable.row(row).select();
        });



        $(document).on('click', '#dynamic-table .dropdown-toggle', function(e) {
            e.stopImmediatePropagation();
            e.stopPropagation();
            e.preventDefault();
        });



        //And for the first simple table, which doesn't have TableTools or dataTables
        //select/deselect all rows according to table header checkbox
        var active_class = 'active';
        $('#simple-table > thead > tr > th input[type=checkbox]').eq(0).on('click', function() {
            var th_checked = this.checked; //checkbox inside "TH" table header

            $(this).closest('table').find('tbody > tr').each(function() {
                var row = this;
                if (th_checked) $(row).addClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', true);
                else $(row).removeClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', false);
            });
        });




        /********************************/
        //add tooltip for small view action buttons in dropdown menu
        $('[data-rel="tooltip"]').tooltip({
            placement: tooltip_placement
        });

        //tooltip placement on right or left
        function tooltip_placement(context, source) {
            var $source = $(source);
            var $parent = $source.closest('table')
            var off1 = $parent.offset();
            var w1 = $parent.width();

            var off2 = $source.offset();
            //var w2 = $source.width();

            if (parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2)) return 'right';
            return 'left';
        }




        /***************/
        $('.show-details-btn').on('click', function(e) {
            e.preventDefault();
            $(this).closest('tr').next().toggleClass('open');
            $(this).find(ace.vars['.icon']).toggleClass('fa-angle-double-down').toggleClass('fa-angle-double-up');
        });
        /***************/





        /**
        //add horizontal scrollbars to a simple table
        $('#simple-table').css({'width':'2000px', 'max-width': 'none'}).wrap('<div style="width: 1000px;" />').parent().ace_scroll(
          {
        	horizontal: true,
        	styleClass: 'scroll-top scroll-dark scroll-visible',//show the scrollbars on top(default is bottom)
        	size: 2000,
        	mouseWheelLock: true
          }
        ).css('padding-top', '12px');
        */


    })
</script>
@endsection
