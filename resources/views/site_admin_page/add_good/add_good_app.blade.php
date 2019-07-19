<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <!--<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">-->

    <title> SmartAdmin </title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Basic Styles -->
    <link rel="stylesheet" type="text/css" media="screen" href="/smartAdmin/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="/smartAdmin/css/font-awesome.min.css">

    <!-- SmartAdmin Styles : Caution! DO NOT change the order -->
    <link rel="stylesheet" type="text/css" media="screen" href="/smartAdmin/css/smartadmin-production-plugins.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="/smartAdmin/css/smartadmin-production.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="/smartAdmin/css/smartadmin-skins.min.css">

    <link href="{!! asset('inspinia/css/plugins/steps/jquery.steps.css') !!}" rel="stylesheet">

    <link href="{!! asset('inspinia/css/plugins/touchspin/jquery.bootstrap-touchspin.min.css') !!}" rel="stylesheet">
    <!-- SmartAdmin RTL Support -->
    <link rel="stylesheet" type="text/css" media="screen" href="/smartAdmin/css/smartadmin-rtl.min.css">

    <!-- We recommend you use "your_style.css" to override SmartAdmin
         specific styles this will also ensure you retrain your customization with each SmartAdmin update.
    <link rel="stylesheet" type="text/css" media="screen" href="/smartAdmin/css/your_style.css"> -->

    <!-- Demo purpose only: goes with demo.js, you can delete this css when designing your own WebApp -->
    <link rel="stylesheet" type="text/css" media="screen" href="/smartAdmin/css/demo.min.css">

    <link href="{!! asset('inspinia/css/plugins/iCheck/custom.css') !!}" rel="stylesheet">
    <link href="{!! asset('inspinia/css/plugins/colorpicker/bootstrap-colorpicker.min.css') !!}" rel="stylesheet">
    <link href="{!! asset('inspinia/css/plugins/clockpicker/clockpicker.css') !!}" rel="stylesheet">
    <!-- FAVICONS -->
    <link rel="shortcut icon" href="img/favicon/favicon.ico" type="image/x-icon">
    <link rel="icon" href="img/favicon/favicon.ico" type="image/x-icon">

    <!-- GOOGLE FONT -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,300,400,700">

    <!-- Specifying a Webpage Icon for Web Clip
         Ref: https://developer.apple.com/library/ios/documentation/AppleApplications/Reference/SafariWebContent/ConfiguringWebApplications/ConfiguringWebApplications.html -->
    <link rel="apple-touch-icon" href="img/splash/sptouch-icon-iphone.png">
    <link rel="apple-touch-icon" sizes="76x76" href="img/splash/touch-icon-ipad.png">
    <link rel="apple-touch-icon" sizes="120x120" href="img/splash/touch-icon-iphone-retina.png">
    <link rel="apple-touch-icon" sizes="152x152" href="img/splash/touch-icon-ipad-retina.png">

    <link href="{!! asset('inspinia/css/plugins/iCheck/custom.css') !!}" rel="stylesheet">

    <!--link rel="stylesheet" type="text/css" media="screen" href="/css/neu.css">
    <link rel="stylesheet" type="text/css" media="screen" href="/css/credit_edit_media.css"-->
    <!--link href="{!! asset('/inspinia/css/style.css') !!}" rel="stylesheet"-->
    <link href="{!! asset('/css/style_admin.css') !!}" rel="stylesheet">
    <link href="{!! asset('inspinia/css/plugins/touchspin/jquery.bootstrap-touchspin.min.css') !!}" rel="stylesheet">
    <!--link href="/css/jquery.Jcrop.css" rel="stylesheet"-->

    <link href="/inspinia/css/style.css" rel="stylesheet">
    <link href="/inspinia/css/plugins/cropper/cropper.min.css" rel="stylesheet">


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
        .wizard-big.wizard > .content {
            min-height: 1620px;
        }

        .ibox-content {
            clear: both;
        }
        .ibox-content {
            background-color: #ffffff;
            color: inherit;
            padding: 15px 20px 20px 20px;
            border-color: #e7eaec;
            border-image: none;
            border-style: solid solid none;
            border-width: 1px 0;
        }
        .ibox-title {
            -moz-border-bottom-colors: none;
            -moz-border-left-colors: none;
            -moz-border-right-colors: none;
            -moz-border-top-colors: none;
            background-color: #ffffff;
            border-color: #e7eaec;
            border-image: none;
            border-style: solid solid none;
            border-width: 2px 0 0;
            color: inherit;
            margin-bottom: 0;
            padding: 15px 15px 7px;
            min-height: 48px;
        }
        .float-e-margins .btn {
            margin-bottom: 5px;
        }
        .btn-success {
            background-color: #1c84c6;
            border-color: #1c84c6;
            color: #FFFFFF;
        }
        .btn-w-m {
            min-width: 120px;
        }

        .btn {
            border-radius: 3px;
        }
        .btn-rounded {
            border-radius: 50px;
        }
        .btn-outline {
            color: inherit;
            background-color: transparent;
            transition: all .5s;
        }
        .btn-danger {
            background-color: #ed5565;
            border-color: #ed5565;
            color: #FFFFFF;
        }
    </style>
</head>
<body>
<!-- HEADER -->
@include ('layouts.admin_header');
<!-- END HEADER -->
        <!-- Navigation -->
        @include('layouts.navigation_view')




            @yield('content')





@section('scripts')


    <!--================================================== -->

    <!-- PACE LOADER - turn this on if you want ajax loading to show (caution: uses lots of memory on iDevices)-->
    <script data-pace-options='{ "restartOnRequestAfter": true }' src="/smartAdmin/js/plugin/pace/pace.min.js"></script>

    <!-- Link to Google CDN's jQuery + jQueryUI; fall back to local -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        if (!window.jQuery) {
            document.write('<script src="/smartAdmin/js/libs/jquery-3.2.1.min.js"><\/script>');
        }
    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script>
        if (!window.jQuery.ui) {
            document.write('<script src="/smartAdmin/js/libs/jquery-ui.min.js"><\/script>');
        }
    </script>

    <!-- IMPORTANT: APP CONFIG -->
    <script src="/smartAdmin/js/app.config.js"></script>
    <!--CKEDITOR-->
    <script src="{!! asset('ckeditor/ckeditor.js') !!}"></script>

    <!-- Jquery Validate -->
    <script src="{!! asset('inspinia/js/plugins/validate/jquery.validate.min.js') !!}"></script>
    <!-- BOOTSTRAP JS -->
    <script src="/smartAdmin/js/bootstrap/bootstrap.min.js"></script>
    <!-- Color picker -->
    <script src="{!! asset('inspinia/js/plugins/colorpicker/bootstrap-colorpicker.min.js') !!}"></script>
    <!-- CUSTOM NOTIFICATION -->
    <script src="/smartAdmin/js/notification/SmartNotification.min.js"></script>
    <!-- Steps -->
    <script src="{!! asset('inspinia/js/plugins/steps/jquery.steps.min.js') !!}"></script>
    <!-- JS TOUCH : include this plugin for mobile drag / drop touch events-->
    <script src="/smartAdmin/js/plugin/jquery-touch/jquery.ui.touch-punch.min.js"></script>

    <!-- iCheck -->
    <script src="{!! asset('inspinia/js/plugins/iCheck/icheck.min.js') !!}"></script>
    <!--[if IE 8]>

    <h1>Your browser is out of date, please update your browser by going to www.microsoft.com/download</h1>

    <![endif]-->

    <!-- Demo purpose only -->
    <script src="/smartAdmin/js/demo.min.js"></script>

    <!-- MAIN APP JS FILE -->
    <script src="/smartAdmin/js/app.min.js"></script>

    <!-- ENHANCEMENT PLUGINS : NOT A REQUIREMENT -->
     <!-- PAGE RELATED PLUGIN(S) -->



    <!-- PAGE RELATED PLUGIN(S) -->
    <script src="/smartAdmin/js/plugin/dropzone/dropzone.min.js"></script>

    <!--script src="/js/jquery.Jcrop.min.js"></script>

  <!-- Image cropper -->
    <script src="/inspinia/js/plugins/cropper/cropper.min.js"></script>



    <!-- iCheck -->
    <script src="{!! asset('inspinia/js/plugins/iCheck/icheck.min.js') !!}"></script>
<script>


</script>

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

            $("#spinner-decimal").spinner({
                step : 1,
                numberFormat : "n",
                min : 0,
                max : 100,

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
        $('input[name="name"]').focus();alert('Чтобы ввести в это поле информацию выберите категорию в таблице ниже,конечная категория будет зафиксированна')

    });


            ///////////////////////////////////////////////////////////////////////////////////////--photos adding--//////////////////////////////////////////////////////


            $('.photo_blocks').click(function(){
                $(this).parent().find('.fileupload').click()
                console.log('fileupload');
            });

            $(".fileupload").change(function (e){//input[name='myFile']

                var fileName = $(this).val();
                var file_data = $(this).prop('files')[0];
                var _this=$(this);
                console.log('file_data');
                console.log(file_data);
                var form_data = new FormData();
                form_data.append('file', file_data);
                console.log(form_data);
                $.ajax({
                    url: '/admin/add_photo_file', // point to server-side PHP script
                    dataType: 'text',  // what to expect back from the PHP script, if anything
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: form_data,
                    type: 'post',
                    success: function(php_script_response){

                        var file=php_script_response.replace(/"/g , '')
                        console.log(file);
                        console.log(_this);
                        _this.parent('div').parent('.photo').find('.photo_blocks').find('.photo_image').empty();
                        _this.parent('div').parent('.photo').find('.photo_blocks').find('.photo_image').prepend(

                           "<img style='position:absolute;margin-left:-13px;z-index:998;width:100%;height:100%' src='/storage/"+file+"'>"+
                               "<div style='margin-left:-13px;z-index:999;width:100%;height:100%;position:absolute;background:rgba(255,255,255,0.5)'></div>"
                        );
                        _this.parent('div').parent('.photo').find('.photo_blocks').find('.photo_icon .fa-camera').css('color','#fff')
                    }
                });

            });



 ///////////////////////////////////////////////////////////////////////////////////////--colors adding--//////////////////////////////////////////////////////
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
                        //достать все свойства категории и отобразить в блоке #properties Временно заремлена
         /*                   $.ajax({
                                type: "POST",
                                dataType: 'json',
                                async: false,
                                url: '/show_property_by_category',
                                data: {id_cat: data.value.id},
                                success: function (dataprop) {
                                    if(dataprop=='no_properties'){


                                    }
                                else{
                                console.log(dataprop);
                                $('#properties').empty();
                                     $.each( dataprop, function( k, prop ) {
                                       $('#properties').append(' <div style="border-right:1px solid #000;border-left:1px solid #000" class="prop col-md-3" >' +
                                            '<input type="hidden" value="'+prop.id+'">' +
                                           ' <div><h3 style="text-align:center;margin-top:10px;">'+prop.name+'</h3></div>'
                                            +'<div id="prop_datas_'+k+'" class=""></div>'+
                                            '</div>')

                                    $.each( prop.data, function( v, dat ) {
                                   $('#prop_datas_'+k).append('<div><div class="i-checks"><label><input type="radio" value="'+dat.id+'" name="property['+prop.id+'][]"> <i></i> '+dat.data+'</label></div></div>');
                                    });


                                         $('.i-checks').iCheck({
                                             checkboxClass: 'icheckbox_square-green',
                                             radioClass: 'iradio_square-green',
                                         });
                                     });
                                }
                                }

                            });*/


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


            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green',
            });



            var crop_max_width = 400;
            var crop_max_height = 400;
            var jcrop_api;
            var canvas;
            var context;
            var image;

            var prefsize;

            $("#file").change(function() {
                loadImage(this);
            });

            function loadImage(input) {
                if (input.files && input.files[0]) {
                    console.log(123)
                    var reader = new FileReader();
                    canvas = null;
                    reader.onload = function(e) {
                        image = new Image();
                        image.onload = validateImage;
                        image.src = e.target.result;
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            }

            function dataURLtoBlob(dataURL) {
                var BASE64_MARKER = ';base64,';
                if (dataURL.indexOf(BASE64_MARKER) == -1) {
                    var parts = dataURL.split(',');
                    var contentType = parts[0].split(':')[1];
                    var raw = decodeURIComponent(parts[1]);

                    return new Blob([raw], {
                        type: contentType
                    });
                }
                var parts = dataURL.split(BASE64_MARKER);
                var contentType = parts[0].split(':')[1];
                var raw = window.atob(parts[1]);
                var rawLength = raw.length;
                var uInt8Array = new Uint8Array(rawLength);
                for (var i = 0; i < rawLength; ++i) {
                    uInt8Array[i] = raw.charCodeAt(i);
                }

                return new Blob([uInt8Array], {
                    type: contentType
                });
            }

            function validateImage() {
                if (canvas != null) {
                    image = new Image();
                    image.onload = restartJcrop;
                    image.src = canvas.toDataURL('image/png');
                } else restartJcrop();
            }


            function validateImageC(res) {
                if (canvas != null) {
                    console.log('canvas!=null');
                    image = new Image();
                    image.onload = restartCrop(res);
                    image.src = canvas.toDataURL('image/png');
                } else restartCrop();
            }



            function restartJcrop() {
                if (jcrop_api != null) {
                    jcrop_api.destroy();
                }
                $("#views").empty();
                $("#views").append("<canvas id=\"canvas\">");
                canvas = $("#canvas")[0];
                context = canvas.getContext("2d");
                canvas.width = image.width;
                canvas.height = image.height;
                context.drawImage(image, 0, 0);
                $("#canvas").Jcrop({
                    onSelect: selectcanvas,
                    onRelease: clearcanvas,
                    boxWidth: crop_max_width,
                    boxHeight: crop_max_height
                }, function() {
                    jcrop_api = this;
                });
                clearcanvas();
            }

            function clearcanvas() {
                prefsize = {
                    x: 0,
                    y: 0,
                    w: canvas.width,
                    h: canvas.height,
                };
            }




            function restartCrop(res) {
                console.log('restartCrop()');
                if (jcrop_api != null) {
                    jcrop_api.destroy();
                }


                $("#views").empty();
                $("#views").append("<canvas id=\"canvas\">");
                canvas = $("#canvas")[0];
                context = canvas.getContext("2d");
                canvas.width = image.width;
                canvas.height = image.height;
                context.drawImage(image, 0, 0);

                canvas.cropper("replace", res);
             /*   $("#canvas").Jcrop({
                    onSelect: selectcanvas,
                    onRelease: clearcanvas,
                    boxWidth: crop_max_width,
                    boxHeight: crop_max_height
                }, function() {
                    jcrop_api = this;
                });*/
                //clearcanvas();
            }

            function selectcanvas(coords) {
                prefsize = {
                    x: Math.round(coords.x),
                    y: Math.round(coords.y),
                    w: Math.round(coords.w),
                    h: Math.round(coords.h)
                };
            }

            function applyCrop() {
                canvas.width = prefsize.w;
                canvas.height = prefsize.h;
                context.drawImage(image, prefsize.x, prefsize.y, prefsize.w, prefsize.h, 0, 0, canvas.width, canvas.height);
                validateImage();
            }

            function applyScale(scale) {
                if (scale == 1) return;
                canvas.width = canvas.width * scale;
                canvas.height = canvas.height * scale;
                context.drawImage(image, 0, 0, canvas.width, canvas.height);
                validateImage();
            }

            function applyRotate() {
                canvas.width = image.height;
                canvas.height = image.width;
                context.clearRect(0, 0, canvas.width, canvas.height);
                context.translate(image.height / 2, image.width / 2);
                context.rotate(Math.PI / 2);
                context.drawImage(image, -image.width / 2, -image.height / 2);
                validateImage();
            }

            function applyHflip() {
                context.clearRect(0, 0, canvas.width, canvas.height);
                context.translate(image.width, 0);
                context.scale(-1, 1);
                context.drawImage(image, 0, 0);
                validateImage();
            }

            function applyVflip() {
                context.clearRect(0, 0, canvas.width, canvas.height);
                context.translate(0, image.height);
                context.scale(1, -1);
                context.drawImage(image, 0, 0);
                validateImage();
            }

            $("#cropbutton").click(function(e) {
                applyCrop();
            });
            $("#scalebutton").click(function(e) {
                var scale = prompt("Scale Factor:", "1");
                applyScale(scale);
            });
            $("#rotatebutton").click(function(e) {
                applyRotate();
            });
            $("#hflipbutton").click(function(e) {
                applyHflip();
            });
            $("#vflipbutton").click(function(e) {
                applyVflip();
            });

            $("#form1").submit(function(e) {
                e.preventDefault();
                formData = new FormData($(this)[0]);
                console.log()
                var blob = dataURLtoBlob(canvas.toDataURL('image/png'));
                //---Add file blob to the form data
                formData.append("cropped_image[]", blob);
                $.ajax({
                    url: "/admin/send_crop_color_to_server",
                    type: "POST",
                    data: formData,
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function(data) {
                        console.log(data);
                        alert("Success");
                    },
                    error: function(data) {
                        alert("Error");
                    },
                    complete: function(data) {}
                });
            });









            var $image = $(".image-crop > img")
            $($image).cropper({
                aspectRatio: 1.618,
                preview: ".img-preview",
                done: function(data) {
                    // Output the result data for cropping image.
                }
            });

            var $inputImage = $("#inputImage");
            if (window.FileReader) {
                $inputImage.change(function() {
                    var reader = new FileReader();
                    var fileReader = new FileReader(),
                        files = this.files,
                        file;

                    if (!files.length) {
                        return;
                    }

                    file = files[0];

                    if (/^image\/\w+$/.test(file.type)) {
                        fileReader.readAsDataURL(file);

                        canvas = null;
                  /*      reader.onload = function(e) {
                            image = new Image();
                            image.onload = validateImageC;
                            image.src = e.target.result;
                        }*/
                        //reader.readAsDataURL(input.files[0]);
                        reader.readAsDataURL(file);

                        fileReader.onload = function (e) {
                            $inputImage.val("");
                            $image.cropper("reset", true).cropper("replace", this.result);
                            console.log($image)
                         /*   image = new Image();
                            image.onload = validateImageC(this.result);
                            image.src = e.target.result;
                            console.log(image)*/

                            };
                    } else {
                        showMessage("Please choose an image file.");
                    }
                });
            } else {
                $inputImage.addClass("hide");
            }

            $("#download").click(function() {
                console.log(123)
                //window.open($image.cropper("getDataURL"));
                loadImage($inputImage);

                formData = new FormData();
                console.log(formData)
                var blob = dataURLtoBlob($image.cropper("getDataURL"));//canvas.toDataURL('image/png')
                //---Add file blob to the form data
                formData.append("cropped_image[]", blob);
                $.ajax({
                    url: "/admin/send_crop_color_to_server",
                    type: "POST",
                    data: formData,
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function(data) {
                        console.log(data);
                        alert("Success");
                    },
                    error: function(data) {
                        alert("Error");
                    },
                    complete: function(data) {}
                });
            });

            $("#zoomIn").click(function() {
                $image.cropper("zoom", 0.1);
            });

            $("#zoomOut").click(function() {
                $image.cropper("zoom", -0.1);
            });

            $("#rotateLeft").click(function() {
                $image.cropper("rotate", 45);
            });

            $("#rotateRight").click(function() {
                $image.cropper("rotate", -45);
            });

            $("#setDrag").click(function() {
                $image.cropper("setDragMode", "crop");
            });















        });





    </script>




</body>
</html>
