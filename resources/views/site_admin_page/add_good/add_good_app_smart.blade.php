<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="csrf-token" content="{{ csrf_token() }}">
    <title>ADD_GOOD</title>

    <!-- Basic Styles -->
    <link rel="stylesheet" type="text/css" media="screen" href="/smartAdmin/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="/smartAdmin/css/font-awesome.min.css">

    <!-- SmartAdmin Styles : Caution! DO NOT change the order -->
    <link rel="stylesheet" type="text/css" media="screen" href="/smartAdmin/css/smartadmin-production-plugins.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="/smartAdmin/css/smartadmin-production.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="/smartAdmin/css/smartadmin-skins.min.css">

    <link href="{!! asset('inspinia/css/plugins/steps/jquery.steps.css') !!}" rel="stylesheet">
    <!-- SmartAdmin RTL Support -->
    <link rel="stylesheet" type="text/css" media="screen" href="/smartAdmin/css/smartadmin-rtl.min.css">

    <!-- We recommend you use "your_style.css" to override SmartAdmin
         specific styles this will also ensure you retrain your customization with each SmartAdmin update.
    <link rel="stylesheet" type="text/css" media="screen" href="/smartAdmin/css/your_style.css"> -->

    <!-- Demo purpose only: goes with demo.js, you can delete this css when designing your own WebApp -->
    <link rel="stylesheet" type="text/css" media="screen" href="/smartAdmin/css/demo.min.css">

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

<!-- HEADER -->
@include ('partials.admin_header');
<!-- END HEADER -->

        <!-- Navigation -->
        @include('layouts.navigation')




            @yield('content')

<!-- PAGE FOOTER -->
@include ('partials.footer_admin');
<!-- END PAGE FOOTER -->





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

    <!-- JS TOUCH : include this plugin for mobile drag / drop touch events-->
    <script src="/smartAdmin/js/plugin/jquery-touch/jquery.ui.touch-punch.min.js"></script>

    <!-- TouchSpin -->
    <script src="{!! asset('inspinia/js/plugins/touchspin/jquery.bootstrap-touchspin.min.js') !!}"></script>

    <!-- Steps -->
    <script src="{!! asset('inspinia/js/plugins/steps/jquery.steps.min.js') !!}"></script>
    <!-- BOOTSTRAP JS -->
    <script src="/smartAdmin/js/bootstrap/bootstrap.min.js"></script>

    <!-- Jquery Validate -->
    <script src="{!! asset('inspinia/js/plugins/validate/jquery.validate.min.js') !!}"></script>
    <!-- Color picker -->
    <script src="{!! asset('inspinia/js/plugins/colorpicker/bootstrap-colorpicker.min.js') !!}"></script>

    <!-- iCheck -->
    <script src="{!! asset('inspinia/js/plugins/iCheck/icheck.min.js') !!}"></script>
    <!-- PAGE RELATED PLUGIN(S) -->
    <script src="{!! asset('/smartAdmin/js/plugin/dropzone/dropzone.min.js') !!}"></script>






<!--CKEDITOR-->
    <script src="{!! asset('ckeditor/ckeditor.js') !!}"></script>

    <script>
        Dropzone.autoDiscover = false;
        $("#mydropzone").dropzone({ url: "/file/post" });
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.

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
