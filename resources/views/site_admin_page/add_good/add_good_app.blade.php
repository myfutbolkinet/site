<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="csrf-token" content="{{ csrf_token() }}">
    <title>ADD_GOOD</title>


    <link rel="stylesheet" href="{!! asset('css/vendor.css') !!}" />
    <link rel="stylesheet" href="{!! asset('css/app.css') !!}" />
    <link href="{!! asset('inspinia/css/bootstrap.min.css') !!}" rel="stylesheet">
    <link href="{!! asset('inspinia/font-awesome/css/font-awesome.css') !!}" rel="stylesheet">
    <link href="{!! asset('inspinia/css/plugins/iCheck/custom.css') !!}" rel="stylesheet">
    <link href="{!! asset('inspinia/css/plugins/chosen/bootstrap-chosen.css') !!}" rel="stylesheet">
    <link href="{!! asset('inspinia/css/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css') !!}" rel="stylesheet">
    <link href="{!! asset('inspinia/css/plugins/colorpicker/bootstrap-colorpicker.min.css') !!}" rel="stylesheet">
    <link href="{!! asset('inspinia/css/plugins/cropper/cropper.min.css') !!}" rel="stylesheet">
    <link href="{!! asset('inspinia/css/plugins/switchery/switchery.css') !!}" rel="stylesheet">
    <link href="{!! asset('inspinia/css/plugins/jasny/jasny-bootstrap.min.css') !!}" rel="stylesheet">
    <link href="{!! asset('inspinia/css/plugins/nouslider/jquery.nouislider.css') !!}" rel="stylesheet">
    <link href="{!! asset('inspinia/css/plugins/datapicker/datepicker3.css') !!}" rel="stylesheet">
    <link href="{!! asset('inspinia/css/plugins/ionRangeSlider/ion.rangeSlider.css') !!}" rel="stylesheet">
    <link href="{!! asset('inspinia/css/plugins/ionRangeSlider/ion.rangeSlider.skinFlat.css') !!}" rel="stylesheet">
    <link href="{!! asset('inspinia/css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css') !!}" rel="stylesheet">
    <link href="{!! asset('inspinia/css/plugins/clockpicker/clockpicker.css') !!}" rel="stylesheet">
    <link href="{!! asset('inspinia/css/plugins/daterangepicker/daterangepicker-bs3.css') !!}" rel="stylesheet">


    <link href="{!! asset('inspinia/css/plugins/touchspin/jquery.bootstrap-touchspin.min.css') !!}" rel="stylesheet">
    <link href="{!! asset('inspinia/css/plugins/select2/select2.min.css') !!}" rel="stylesheet">

    <link href="{!! asset('inspinia/css/plugins/steps/jquery.steps.css') !!}" rel="stylesheet">


    <link href="{!! asset('/inspinia/css/plugins/dropzone/dropzone.css') !!}" rel="stylesheet">



    <link href="{!! asset('inspinia/css/plugins/dualListbox/bootstrap-duallistbox.min.css') !!}" rel="stylesheet">
    <link href="{!! asset('inspinia/css/animate.css') !!}" rel="stylesheet">
    <link href="{!! asset('inspinia/css/style.css') !!}" rel="stylesheet">
    <link href="{!! asset('/css/style_admin.css') !!}" rel="stylesheet">


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
        @include('layouts.navigation_view')

        <!-- Page wraper -->
        <div id="page-wrapper" class="gray-bg">

            <!-- Page wrapper -->
            @include('layouts.topnavbar')

            <!-- Main view  -->
            @include('layouts.goods_topnavbar')

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

    <!--CKEDITOR-->
    <script src="{!! asset('ckeditor/ckeditor.js') !!}"></script>
    <script src="{!! asset('inspinia/js/bootstrap.min.js') !!}"></script>

    <!-- Custom and plugin javascript -->
    <script src="{!! asset('inspinia/js/inspinia.js') !!}"></script>

    <script src="{!! asset('inspinia/js/plugins/slimscroll/jquery.slimscroll.min.js') !!}"></script>

    <script src="{!! asset('inspinia/js/plugins/metisMenu/jquery.metisMenu.js') !!}"></script>




    <!-- Jquery Validate -->
    <script src="{!! asset('inspinia/js/plugins/validate/jquery.validate.min.js') !!}"></script>



    <!-- Chosen -->
    <script src="{!! asset('inspinia/js/plugins/chosen/chosen.jquery.js') !!}"></script>

    <!-- JSKnob -->
    <script src="{!! asset('inspinia/js/plugins/jsKnob/jquery.knob.js') !!}"></script>

    <!-- Input Mask-->
    <script src="{!! asset('inspinia/js/plugins/jasny/jasny-bootstrap.min.js') !!}"></script>
    <!-- NouSlider -->
    <script src="{!! asset('inspinia/js/plugins/nouslider/jquery.nouislider.min.js') !!}"></script>

    <!-- Switchery -->
    <script src="{!! asset('inspinia/js/plugins/switchery/switchery.js') !!}"></script>
    <!-- Color picker -->
    <script src="{!! asset('inspinia/js/plugins/colorpicker/bootstrap-colorpicker.min.js') !!}"></script>

    <!-- Clock picker -->
    <script src="{!! asset('inspinia/js/plugins/clockpicker/clockpicker.js') !!}"></script>

    <!-- IonRangeSlider -->
    <script src="{!! asset('inspinia/js/plugins/ionRangeSlider/ion.rangeSlider.min.js') !!}"></script>

    <!-- iCheck -->
    <script src="{!! asset('inspinia/js/plugins/iCheck/icheck.min.js') !!}"></script>

    <!-- MENU -->
    <script src="{!! asset('inspinia/js/plugins/metisMenu/jquery.metisMenu.js') !!}"></script>


    <!-- Image cropper -->
    <script src="{!! asset('inspinia/js/plugins/cropper/cropper.min.js') !!}"></script>

    <!-- Date range use moment.js same as full calendar plugin -->
    <script src="{!! asset('inspinia/js/plugins/fullcalendar/moment.min.js') !!}"></script>



    <!-- Select2 -->
    <script src="{!! asset('inspinia/js/plugins/select2/select2.full.min.js') !!}"></script>

    <!-- TouchSpin -->
    <script src="{!! asset('inspinia/js/plugins/touchspin/jquery.bootstrap-touchspin.min.js') !!}"></script>

    <!-- Tags Input -->
    <script src="{!! asset('inspinia/js/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js') !!}"></script>

    <!-- Dual Listbox -->
    <script src="{!! asset('inspinia/js/plugins/dualListbox/jquery.bootstrap-duallistbox.js') !!}"></script>

    <!-- Steps -->
    <script src="{!! asset('inspinia/js/plugins/steps/jquery.steps.min.js') !!}"></script>
    <!-- DROPZONE -->
    <script src="{!! asset('/smartAdmin/js/plugin/dropzone/dropzone.min.js') !!}"></script>
    <script>
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.



        Dropzone.autoDiscover = false;
var myDropzone_files=[];
           $("#mydropzone").dropzone({
                url: "/admin/fileupload",
                params: {

                },
                addRemoveLinks : true,
                maxFilesize: 2.5,
                dictDefaultMessage: '<span class="text-center"><span class="font-lg visible-xs-block visible-sm-block visible-lg-block"><span class="font-lg"><i class="fa fa-caret-right text-danger"></i> Drop files <span class="font-xs">to upload</span></span><span>&nbsp&nbsp<h4 class="display-inline"> (Or Click)</h4></span>',
                dictResponseError: 'Error uploading file!',
                paramName: "file",
                autoProcessQueue: true,
                uploadMultiple: false, // uplaod files in a single request
                //parallelUploads: 100, // use it with uploadMultiple
                maxFiles: 5,
                acceptedFiles: ".png, .jpeg, .jpg",
                // Language Strings
                dictFileTooBig: "File is to big ",
                dictInvalidFileType: "Invalid File Type",
                dictCancelUpload: "Cancel",
                dictRemoveFile: "Remove",
                dictMaxFilesExceeded: "Only 5 files are allowed",
                dictDefaultMessage: "Drop files here to upload",
               init: function(file) {



               },
                success: function(file, data){
                    myDropzone_files.push(file)
                    console.log(data);
                },
                removedfile:function(file){
                    console.log(myDropzone_files);
                    var index=myDropzone_files.map(function(obj,index){
                        if(file==obj){
                            return index;
                        }
                    }).filter(isFinite)[0];
                    console.log(index);

                    $.ajax({
                        type: "POST",
                        dataType: 'json',
                        async: false,
                        url: '/admin/delete_image_from_session',
                        data: {file_index: index}, // serializes the form's elements.
                        success: function (dataprop) {
                            console.log(dataprop);
                        }

                    });
                }
            });





        setTimeout(function(){
            CKEDITOR.replace( 'editor1' );
        },500);
    </script>


    <script>

        $.ajaxSetup({
            headers:{
                'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
            }
        })


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




            $("#wizard").steps();
            $("#form").steps({
                bodyTag: "fieldset",
                onStepChanging: function (event, currentIndex, newIndex)
                {
                    //Пробуем поднять dropzone
                    if (newIndex === 2 )
                    {
                        $('#mydropzone_block').css('display','block');
                    }

                    if (newIndex === 0 ||  newIndex === 1 || newIndex === 3)
                    {
                        $('#mydropzone_block').css('display','none');
                    }

                    // Always allow going backward even if the current step contains invalid fields!
                    if (currentIndex > newIndex)
                    {
                        return true;
                    }

                    // Forbid suppressing "Warning" step if the user is to young
                    if (newIndex === 3 && Number($("#age").val()) < 18)
                    {
                        return false;
                    }

                    var form = $(this);

                    // Clean up if user went backward before
                    if (currentIndex < newIndex)
                    {
                        // To remove error styles
                        $(".body:eq(" + newIndex + ") label.error", form).remove();
                        $(".body:eq(" + newIndex + ") .error", form).removeClass("error");
                    }

                    // Disable validation on fields that are disabled or hidden.
                    form.validate().settings.ignore = ":disabled,:hidden";

                    // Start validation; Prevent going forward if false
                    return form.valid();
                },
                onStepChanged: function (event, currentIndex, priorIndex)
                {
                    // Suppress (skip) "Warning" step if the user is old enough.
                    if (currentIndex === 2 && Number($("#age").val()) >= 18)
                    {
                        $(this).steps("next");
                    }

                    // Suppress (skip) "Warning" step if the user is old enough and wants to the previous step.
                    if (currentIndex === 2 && priorIndex === 3)
                    {
                        $(this).steps("previous");
                    }
                },
                onFinishing: function (event, currentIndex)
                {
                    var form = $(this);

                    // Disable validation on fields that are disabled.
                    // At this point it's recommended to do an overall check (mean ignoring only disabled fields)
                    form.validate().settings.ignore = ":disabled";

                    // Start validation; Prevent form submission if false
                    return form.valid();
                },
                onFinished: function (event, currentIndex)
                {
                    var form = $(this);

                    // Submit form input
                    form.submit();
                }
            }).validate({
                errorPlacement: function (error, element)
                {
                    element.before(error);
                },
                rules: {
                    confirm: {
                        equalTo: "#password"
                    }
                }
            });


            $('#form').delegate('.btn_delete_color','click',function(){
                var color=$(this).parent('.color_div').find('input').val()
                alert(color)
                if (confirm("Удалить цвет "+color+"?")) {
                $(this).parent('.color_div').remove() ;
                    alert("Цвет "+color+" удален!")
                } else {
                    alert("Вы нажали кнопку отмена")
                }
            })


    $('.cat_name').focus(function (){


    }, function (){
        //mouse leave
        $('.touchspin2').focus();alert('Чтобы ввести в это поле информацию выберите категорию в таблице ниже,конечная категория будет зафиксированна')

    });

$('.color_btn').click(function(){
    var color=$('.input_color').val()
    alert(color)
    $('.position_colors').append('<div class="color_div" style="width:150px;display:inline-block">' +
        '<input type="text" style="width:100px;" name="color[]" class="demo1" value="'+color+'" />' +
        '<div style="background:'+color+';display:inline-block;width:25px;height:25px"></div>' +
        '<a class="btn_delete_color btn btn-danger btn-rounded btn-outline" href="#">Удалить</a></div>')


});




            var divStyle = $('.back-change')[0].style;
            $('#demo_apidemo').colorpicker({
                color: divStyle.backgroundColor
            }).on('changeColor', function(ev) {
                divStyle.backgroundColor = ev.color.toHex();
            $('.input_color').val(ev.color.toHex())
            });


            $('.categories').delegate('.cat_block','click',function(){

                var id_cat = $(this).parent('a').find('input').val()
                var cl=$(this).parent('a').parent().attr('class');
                cl=cl.split(' ')[1]
                var simbol=parseInt(cl.slice(10))+1
                new_block_cl=cl.slice(0, 10)+simbol

                $.ajax({
                    type: "POST",
                    dataType: 'json',
                    async: false,
                    url: '/show_subcat',
                    data: {id_cat: id_cat,is_user:1}, // serializes the form's elements.
                    success: function (data) {
                        if(data.message=='null'){
                        //проверить чтобы соседние последующие блоки были пусты

                        $('input[name="id_cat"]').val(data.value.id)
                        $('.cat_name').val(data.value.info.name)
                            alert('меняется категория')
                        //достать все свойства категории и отобразить в блоке #properties
                            $.ajax({
                                type: "POST",
                                dataType: 'json',
                                async: false,
                                url: '/show_property_by_category',
                                data: {id_cat: data.value.id}, // serializes the form's elements.
                                success: function (dataprop) {
                                    if(dataprop=='no_properties'){


                                    }
                                else{
                                console.log(dataprop);
                                $('#properties').empty();
                                     $.each( dataprop, function( k, prop ) {
                                      //alert(prop.name)
                                      /*   prop_array = prop.data.split(',');*/
                                       $('#properties').append(' <div style="border-right:1px solid #000;border-left:1px solid #000" class="prop col-md-3" >' +
                                            '<input type="hidden" value="'+prop.id+'">' +
                                           ' <div><h3 style="text-align:center;margin-top:10px;">'+prop.name+'</h3></div>'
                                            +'<div id="prop_datas_'+k+'" class=""></div>'+
                                            '</div>')

                                    $.each( prop.data, function( v, dat ) {
                                    //alert(dat.data)

                                    $('#prop_datas_'+k).append('<div><div class="i-checks"><label><input type="radio" value="'+dat.id+'" name="property['+prop.id+'][]"> <i></i> '+dat.data+'</label></div></div>');
                                    });


                                         $('.i-checks').iCheck({
                                             checkboxClass: 'icheckbox_square-green',
                                             radioClass: 'iradio_square-green',
                                         });
                                     });
                                }
                                }

                            });


                        //если (data.value.info.parent_num) ==2
                        //удалить 3,4
                            // если (data.value.info.parent_num) ==3
                            //4
                         if(data.value.info.parent_num==2){
                             $('.cat_block_3').empty();
                             $('.cat_block_4').empty();
                         }
                         else if(data.value.info.parent_num==3){
                             $('.cat_block_4').empty();
                         }

                        }
                       else{
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
                        $.each( data.value, function( key, value ) {
                            $('.'+new_block_cl+'').append(' <a ><div class="cat_block" >' +
                                '<input type="hidden" value="'+value.id+'">' +
                                value.name+
                                '<span class="fa arrow" style="float:right"></span>' +
                                '</div></a>')
                        });

                    }}

                });




            });

        });




    </script>
</body>
</html>
