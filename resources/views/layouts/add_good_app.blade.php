<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD_GOOD</title>


    <link rel="stylesheet" href="{!! asset('css/vendor.css') !!}" />
    <link rel="stylesheet" href="{!! asset('css/app.css') !!}" />
    <link href="{!! asset('css/bootstrap.min.css') !!}" rel="stylesheet">
    <link href="{!! asset('font-awesome/css/font-awesome.css') !!}" rel="stylesheet">
    <link href="{!! asset('css/plugins/iCheck/custom.css') !!}" rel="stylesheet">
    <link href="{!! asset('css/plugins/steps/jquery.steps.css') !!}" rel="stylesheet">
    <link href="{!! asset('css/plugins/touchspin/jquery.bootstrap-touchspin.min.css') !!}" rel="stylesheet">
    <link href="{!! asset('css/plugins/select2/select2.min.css') !!}" rel="stylesheet">





    <link href="{!! asset('css/plugins/chosen/bootstrap-chosen.css') !!}" rel="stylesheet">

    <link href="{!! asset('css/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css') !!}" rel="stylesheet">

    <link href="{!! asset('css/plugins/colorpicker/bootstrap-colorpicker.min.css') !!}" rel="stylesheet">

    <link href="{!! asset('css/plugins/cropper/cropper.min.css') !!}" rel="stylesheet">

    <link href="{!! asset('css/plugins/switchery/switchery.css') !!}" rel="stylesheet">

    <link href="{!! asset('css/plugins/jasny/jasny-bootstrap.min.css') !!}" rel="stylesheet">


    <link href="{!! asset('css/plugins/datapicker/datepicker3.css') !!}" rel="stylesheet">

    <link href="{!! asset('css/plugins/ionRangeSlider/ion.rangeSlider.css') !!}" rel="stylesheet">
    <link href="{!! asset('css/plugins/ionRangeSlider/ion.rangeSlider.skinFlat.css') !!}" rel="stylesheet">

    <link href="{!! asset('css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css') !!}" rel="stylesheet">

    <link href="{!! asset('css/plugins/clockpicker/clockpicker.css') !!}" rel="stylesheet">

    <link href="{!! asset('css/plugins/daterangepicker/daterangepicker-bs3.css') !!}" rel="stylesheet">


    <link href="{!! asset('css/plugins/dualListbox/bootstrap-duallistbox.min.css') !!}" rel="stylesheet">
    <link href="{!! asset('css/animate.css') !!}" rel="stylesheet">
    <link href="{!! asset('css/style.css') !!}" rel="stylesheet">
</head>
<body>

  <!-- Wrapper-->
    <div id="wrapper">

        <!-- Navigation -->
        @include('layouts.navigation')

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
    <script src="{!! asset('js/jquery-3.1.1.min.js') !!}"></script>
    <script src="{!! asset('js/bootstrap.min.js') !!}"></script>

    <!-- Custom and plugin javascript -->
    <script src="{!! asset('js/inspinia.js') !!}"></script>
    <script src="{!! asset('js/plugins/pace/pace.min.js') !!}"></script>
    <script src="{!! asset('js/plugins/slimscroll/jquery.slimscroll.min.js') !!}"></script>

    <!-- Chosen -->
    <script src="{!! asset('js/plugins/chosen/chosen.jquery.js') !!}"></script>

    <!-- JSKnob -->
    <script src="{!! asset('js/plugins/jsKnob/jquery.knob.js') !!}"></script>

    <!-- Input Mask-->
    <script src="{!! asset('js/plugins/jasny/jasny-bootstrap.min.js') !!}"></script>

    <!-- Data picker -->
    <script src="{!! asset('js/plugins/datapicker/bootstrap-datepicker.js') !!}"></script>


    <!-- IonRangeSlider -->
    <script src="{!! asset('js/plugins/ionRangeSlider/ion.rangeSlider.min.js') !!}"></script>

    <!-- iCheck -->
    <script src="{!! asset('js/plugins/iCheck/icheck.min.js') !!}"></script>

    <!-- MENU -->
    <script src="{!! asset('js/plugins/metisMenu/jquery.metisMenu.js') !!}"></script>

    <!-- Color picker -->
    <script src="{!! asset('js/plugins/colorpicker/bootstrap-colorpicker.min.js') !!}"></script>

    <!-- Clock picker -->
    <script src="{!! asset('js/plugins/clockpicker/clockpicker.js') !!}"></script>

    <!-- Image cropper -->
    <script src="{!! asset('js/plugins/cropper/cropper.min.js') !!}"></script>

    <!-- Date range use moment.js same as full calendar plugin -->
    <script src="{!! asset('js/plugins/fullcalendar/moment.min.js') !!}"></script>

    <!-- Date range picker -->
    <script src="{!! asset('js/plugins/daterangepicker/daterangepicker.js') !!}"></script>

    <!-- Select2 -->
    <script src="{!! asset('js/plugins/select2/select2.full.min.js') !!}"></script>

    <!-- TouchSpin -->
    <script src="{!! asset('js/plugins/touchspin/jquery.bootstrap-touchspin.min.js') !!}"></script>

    <!-- Tags Input -->
    <script src="{!! asset('js/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js') !!}"></script>

    <!-- Dual Listbox -->
    <script src="{!! asset('js/plugins/dualListbox/jquery.bootstrap-duallistbox.js') !!}"></script>



    <script>
        $(document).ready(function(){
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
