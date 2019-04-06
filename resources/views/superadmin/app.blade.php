<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD_GOOD</title>


    <link rel="stylesheet" href="{!! asset('css/vendor.css') !!}" />
    <link rel="stylesheet" href="{!! asset('css/app.css') !!}" />
    <link href="{!! asset('inspinia/css/bootstrap.min.css') !!}" rel="stylesheet">
    <link href="{!! asset('inspinia/font-awesome/css/font-awesome.css') !!}" rel="stylesheet">
    <link href="{!! asset('inspinia/inspinia/css/plugins/iCheck/custom.css') !!}" rel="stylesheet">
    <link href="{!! asset('inspinia/css/plugins/steps/jquery.steps.css') !!}" rel="stylesheet">
    <link href="{!! asset('inspinia/css/plugins/touchspin/jquery.bootstrap-touchspin.min.css') !!}" rel="stylesheet">
    <link href="{!! asset('inspinia/css/plugins/select2/select2.min.css') !!}" rel="stylesheet">





    <link href="{!! asset('inspinia/css/plugins/chosen/bootstrap-chosen.css') !!}" rel="stylesheet">

    <link href="{!! asset('inspinia/css/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css') !!}" rel="stylesheet">

    <link href="{!! asset('inspinia/css/plugins/colorpicker/bootstrap-colorpicker.min.css') !!}" rel="stylesheet">

    <link href="{!! asset('inspinia/css/plugins/cropper/cropper.min.css') !!}" rel="stylesheet">

    <link href="{!! asset('inspinia/css/plugins/switchery/switchery.css') !!}" rel="stylesheet">

    <link href="{!! asset('inspinia/css/plugins/jasny/jasny-bootstrap.min.css') !!}" rel="stylesheet">


    <link href="{!! asset('inspinia/css/plugins/datapicker/datepicker3.css') !!}" rel="stylesheet">

    <link href="{!! asset('inspinia/css/plugins/ionRangeSlider/ion.rangeSlider.css') !!}" rel="stylesheet">
    <link href="{!! asset('inspinia/css/plugins/ionRangeSlider/ion.rangeSlider.skinFlat.css') !!}" rel="stylesheet">

    <link href="{!! asset('inspinia/css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css') !!}" rel="stylesheet">

    <link href="{!! asset('inspinia/css/plugins/clockpicker/clockpicker.css') !!}" rel="stylesheet">

    <link href="{!! asset('css/plugins/daterangepicker/daterangepicker-bs3.css') !!}" rel="stylesheet">


    <link href="{!! asset('inspinia/css/plugins/dualListbox/bootstrap-duallistbox.min.css') !!}" rel="stylesheet">
    <link href="{!! asset('inspinia/css/animate.css') !!}" rel="stylesheet">
    <link href="{!! asset('inspinia/css/style.css') !!}" rel="stylesheet">
    <style>
        .cat_block:hover{
            background:#ee9;
        }
        .cat_block{
            padding:10px 15px;

        }
        .block_main_categories{
            width:24%;
            height:350px;
            border:1px solid #0000cc;
            overflow-y:auto;
            display:inline-block;

        }
    </style>
</head>
<body>

  <!-- Wrapper-->
    <div id="wrapper">

        <!-- Navigation -->


        <!-- Page wraper -->
        <div id="page-wrapper" class="gray-bg">

            <!-- Page wrapper -->
            @include('layouts.topnavbar')

            <!-- Main view  -->
            @yield('content')

            <!-- Footer -->
            @include('layouts.footer')

        </div>
        <!-- End page wrapper-->

    </div>
    <!-- End wrapper-->


@section('scripts')

    <!-- Mainly scripts -->
    <script src="{!! asset('inspinia/js/jquery-3.1.1.min.js') !!}"></script>
    <script src="{!! asset('inspinia/js/bootstrap.min.js') !!}"></script>

    <!-- Custom and plugin javascript -->
    <script src="{!! asset('inspinia/js/inspinia.js') !!}"></script>
    <script src="{!! asset('inspinia/js/plugins/pace/pace.min.js') !!}"></script>
    <script src="{!! asset('inspinia/js/plugins/slimscroll/jquery.slimscroll.min.js') !!}"></script>

    <!-- Chosen -->
    <script src="{!! asset('inspinia/js/plugins/chosen/chosen.jquery.js') !!}"></script>

    <!-- JSKnob -->
    <script src="{!! asset('inspinia/js/plugins/jsKnob/jquery.knob.js') !!}"></script>

    <!-- Input Mask-->
    <script src="{!! asset('inspinia/js/plugins/jasny/jasny-bootstrap.min.js') !!}"></script>

    <!-- Data picker -->
    <script src="{!! asset('inspinia/js/plugins/datapicker/bootstrap-datepicker.js') !!}"></script>


    <!-- IonRangeSlider -->
    <script src="{!! asset('inspinia/js/plugins/ionRangeSlider/ion.rangeSlider.min.js') !!}"></script>

    <!-- iCheck -->
    <script src="{!! asset('inspinia/js/plugins/iCheck/icheck.min.js') !!}"></script>

    <!-- MENU -->
    <script src="{!! asset('inspinia/js/plugins/metisMenu/jquery.metisMenu.js') !!}"></script>

    <!-- Color picker -->
    <script src="{!! asset('inspinia/js/plugins/colorpicker/bootstrap-colorpicker.min.js') !!}"></script>

    <!-- Clock picker -->
    <script src="{!! asset('inspinia/js/plugins/clockpicker/clockpicker.js') !!}"></script>

    <!-- Image cropper -->
    <script src="{!! asset('inspinia/js/plugins/cropper/cropper.min.js') !!}"></script>

    <!-- Date range use moment.js same as full calendar plugin -->
    <script src="{!! asset('inspinia/js/plugins/fullcalendar/moment.min.js') !!}"></script>

    <!-- Date range picker -->
    <script src="{!! asset('inspinia/js/plugins/daterangepicker/daterangepicker.js') !!}"></script>

    <!-- Select2 -->
    <script src="{!! asset('inspinia/js/plugins/select2/select2.full.min.js') !!}"></script>

    <!-- TouchSpin -->
    <script src="{!! asset('inspinia/js/plugins/touchspin/jquery.bootstrap-touchspin.min.js') !!}"></script>

    <!-- Tags Input -->
    <script src="{!! asset('inspinia/js/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js') !!}"></script>

    <!-- Dual Listbox -->
    <script src="{!! asset('inspinia/js/plugins/dualListbox/jquery.bootstrap-duallistbox.js') !!}"></script>



    <script>

        $.ajaxSetup({
            headers:{
                'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
            }
        })

/*        $('.cat_block').click(function(){
            alert()
            var id_cat = $(this).parent('a').find('input').val()
            var cl=$(this).parent('a').parent().attr('class');
            cl=cl.split(' ')[1]
            var simbol=parseInt(cl.slice(10))+1
            alert(cl)
            alert(simbol)
            new_block_cl=cl.slice(0, 10)+simbol
            $.ajax({
                type: "POST",
                dataType: 'json',
                url: '/admin/show_subcat',
                data: {id_cat: id_cat}, // serializes the form's elements.
                success: function (data) {
                    $('.'+new_block_cl+'').empty();
                    switch(new_block_cl){
                        case 'cat_block_2':
                            $('.cat_block_3').empty();
                            $('.cat_block_4').empty();
                        break;
                        case 'cat_block_3':
                            $('.cat_block_4').empty();
                            break;

                    }
                    $.each( data, function( key, value ) {
                        $('.'+new_block_cl+'').append(' <a ><div class="cat_block" >' +
                            '<input type="hidden" value="'+value.id+'">' +
                            value.name+
                            '<span class="fa arrow" style="float:right"></span>' +
                            '</div></a>')
                    });

                }

            });

        })*/
$('.categories').delegate('.cat_block','click',function(){

    alert()
    var id_cat = $(this).parent('a').find('input').val()
    var cl=$(this).parent('a').parent().attr('class');
    cl=cl.split(' ')[1]
    var simbol=parseInt(cl.slice(10))+1
    alert(cl)
    alert(simbol)
    new_block_cl=cl.slice(0, 10)+simbol
    $.ajax({
        type: "POST",
        dataType: 'json',
        url: '/admin/show_subcat',
        data: {id_cat: id_cat}, // serializes the form's elements.
        success: function (data) {
            $('.'+new_block_cl+'').empty();
            switch(new_block_cl){
                case 'cat_block_2':
                    $('.cat_block_3').empty();
                    $('.cat_block_4').empty();
                    break;
                case 'cat_block_3':
                    $('.cat_block_4').empty();
                    break;

            }
            $.each( data, function( key, value ) {
                $('.'+new_block_cl+'').append(' <a ><div class="cat_block" >' +
                    '<input type="hidden" value="'+value.id+'">' +
                    value.name+
                    '<span class="fa arrow" style="float:right"></span>' +
                    '</div></a>')
            });

        }

    });

})

        $(document).ready(function(){
            show_subcat();
            $(".touchspin2").TouchSpin({
                min: 0,
                max: 100,
                step: 0.1,
                decimals: 2,
                boostat: 5,
                maxboostedstep: 10,
                postfix: '%',
                buttondown_class: 'btn btn-white',
                buttonup_class: 'btn btn-white'
            });



        });




    </script>


</body>
</html>
