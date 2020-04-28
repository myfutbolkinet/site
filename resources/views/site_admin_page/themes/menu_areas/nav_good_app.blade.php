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





    <!-- IMPORTANT: APP CONFIG -->
    <script src="/smartAdmin/js/app.config.js"></script>
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







    <script src="{!! asset('inspinia/js/bootstrap.min.js') !!}"></script>
    <script src="{!! asset('inspinia/js/plugins/metisMenu/jquery.metisMenu.js') !!}"></script>
    <script src="{!! asset('inspinia/js/plugins/slimscroll/jquery.slimscroll.min.js') !!}"></script>


    <!-- Custom and plugin javascript -->
    <script src="{!! asset('inspinia/js/inspinia.js') !!}"></script>
    <script src="{!! asset('inspinia/js/plugins/pace/pace.min.js') !!}"></script>

    <!-- iCheck -->
    <script src="{!! asset('inspinia/js/plugins/iCheck/icheck.min.js') !!}"></script>

    <!-- Jquery Validate -->
    <script src="{!! asset('inspinia/js/plugins/validate/jquery.validate.min.js') !!}"></script>
    <!-- Tags Input -->
    <script src="{!! asset('inspinia/js/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js') !!}"></script>

    <!-- iCheck -->
    <script src="{!! asset('inspinia/js/plugins/iCheck/icheck.min.js') !!}"></script>
    <script>
        $(document).ready(function () {
            console.log(789);
            checked_categories=[];
            <?php if(isset($json)){?>
                checked_categories=eval('<?php echo $json;?>');
            <?php } ?>

            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green',
            });
        });
    </script>

///////////////////////////////////////////////



    <script>
        function checkValue(value,arr){
            var status = 'Not exist';

            for(var i=0; i<arr.length; i++){
                var name = arr[i];
                if(name == value){
                    status = 'Exist';
                    break;
                }
            }

            return status;
        }


        //Установка чекбоксов по всем подкатегориям если он активен
        $('.categories').delegate('input','ifChecked',function(event) {

            var id_cat=$(this).parent('div').parent('label').parent('div').parent('div').find('.fahover_cubes_input').val();
            console.log('id_cat',id_cat);
            if(checkValue(id_cat,checked_categories)=='Not exist'){checked_categories.push(id_cat);}
            //alert(event.type + ' callback');
            //Найти все подкатегории во всех уровнях и поставить checkbox on

            $.ajax({
                method: 'POST',
                dataType: 'json',
                async:false,
                url: "/show_subcat_all_levels",
                data: {id_cat: id_cat}, // serializes the form's elements.
                success: function (data) {

                    $.each( data, function( key, value ) {
                        //Если в этом массиве
                        //alert(key+' -> '+value.name)
                        // Добавить в глобальную переменную все айдишники категорий
                        if(checkValue(value.id,checked_categories)=='Not exist'){checked_categories.push(value.id);}
                        //TODO Найти родительские категории
                        //       alert(window.checked_categories)

                    });
                }
            });

            // Найти элемент на экране которому соответствует данный id_cat и эмитировать click
            var id_cat_input=$('.fahover_cubes_input[value="'+id_cat+'"]').parent('.cat_block')
            id_cat_input.click();
            //Обновить предыдущий блок категорий
            //

            //перегрузить предыдущий блок с родительскими категориями
            //определение блока в котором произошел клик #class


            var block_class=$(this).parent('div').parent('label').parent('div').parent('div').parent('a').parent('div').attr('class');
            block_class=block_class.replace('block_main_categories ', '');
            //alert(block_class)
            reload_parent_blocks(id_cat,block_class);
//alert('installing')
            //alert(checked_categories)

        });

        $('.categories').delegate('input','ifUnchecked',function(event) {


            var id_cat=$(this).parent('div').parent('label').parent('div').parent('div').find('.fahover_cubes_input').val()

            //alert(id_cat)
            //id блока в котором расположены категории
            //var id_block=$(this).parent('div').parent('label').parent('div').parent('div').find('.fahover_cubes_input').parent('.cat_block').attr('class')
            //alert(id_block)
            if(checkValue(id_cat,checked_categories)=='Exist'){
                console.log('id_cat',id_cat);
                //checked_categories.splice($.inArray(itemtoRemove, checked_categories),1);

                checked_categories = jQuery.grep(checked_categories, function(value) {
                    return value != id_cat;
                });
            }
            //alert(checked_categories)
            //alert(event.type + ' callback');
            //Найти все подкатегории во всех уровнях и поставить checkbox on

            $.ajax({
                method: 'POST',
                dataType: 'json',
                async:false,
                url: "/show_subcat_all_levels_back",
                data: {id_cat: id_cat}, // serializes the form's elements.
                success: function (data) {
                    console.log('show_subcat_all_levels_back',data);
                    //alert(checked_categories)
                    $.each( data, function( key, value ) {
                        //Если в этом массиве
                        //alert(value.id+' -> '+value.name)
                        // Добавить в глобальную переменную все айдишники категорий
                        if(checkValue(value.id,checked_categories)=='Exist'){

                            checked_categories = jQuery.grep(checked_categories, function(val) {
                                return val != value.id;
                            });
                            // checked_categories.splice($.inArray(value.id,checked_categories),1);

                        }

                    });
                }
            });

            //обнулить все соседние блоки справа с категориями
            // Найти элемент на экране которому соответствует данный id_cat и эмитировать click
            var id_cat_input=$('.fahover_cubes_input[value="'+id_cat+'"]').parent('.cat_block')
            id_cat_input.click();
            //перегрузить предыдущий блок с родительскими категориями

        });

        function reload_parent_blocks(id_cat,block_class){

//Если родительский блок не равен .cat_block_1
            if(block_class=='cat_block_1'){
                // alert('Exit');
                return true;
            }
            else{
//Понижение класса блока (was -> cat_block_2) (is -> cat_block_1)
                block_num =block_class.charAt ( block_class.length - 1 );
                block_num=block_num-1;
                block_class=block_class.slice(0,-1);
                block_class=block_class+block_num
//отобразить в каждом родительском блоке категории замена id_cat вызов display_parent_blocks_categories
                display_parent_blocks_categories(block_class,id_cat)
            }
        }

        function display_parent_blocks_categories(block_class,id_cat){
//удаление всех категорий из текущего блока
            $('.'+block_class).empty();
            //AJAX заполнить категориями текущий блок
            $.ajax({
                method: 'POST',
                dataType: 'json',
                async:false,
                url: "/show_parent_cats",
                data: {id_cat: id_cat}, // serializes the form's elements.
                success: function (data) {
                    //alert(checked_categories)

                    $.each( data.values, function( key, value ) {
                        //alert(value.id+' -> '+value.name)
                        if(checkValue(value.id,checked_categories)=='Not exist'){

                            $('.'+block_class+'').append(' <a ><div class="cat_block" >' +
                                '<input class="fahover_cubes_input" type="hidden" value="'+value.id+'">' +

                                '<div style="display:inline-block" class="i-checks"><label> <input class="category_checkbox" type="checkbox" value=""> </label></div>\n' +
                                value.name+
                                '<span class="fa arrow" style="float:right"></span>' +
                                '</div></a>')

                        }
                        else{

                            //alert(checked_categories)

                            $('.'+block_class+'').append(' <a ><div class="cat_block" >' +
                                '<input class="fahover_cubes_input" type="hidden" value="'+value.id+'">' +

                                '<div style="display:inline-block" class="i-checks"><label> <input class="category_checkbox" checked type="checkbox" value=""> </label></div>\n' +
                                value.name+
                                '<span class="fa arrow" style="float:right"></span>' +
                                '</div></a>')
                        }
                    });


                    //понизить id_cat
                    //alert(data.id_cat)
                    reload_parent_blocks(data.id_cat,block_class)
                }
            });

            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green',
            });

        }

        $('.btn_save_categories').click(function(){
            cats_array=checked_categories;

            $.ajax({
                method: 'POST',
                dataType: 'json',
                async:false,
                url: "/save_cats_list",
                data: {cats_array: cats_array}, // serializes the form's elements.
                success: function (data) {
                    alert(data)
                    if (data=='Changes saved'){
                        alert('Изменения сохранены на диск')
                    }
                }
            });
        })
    </script>

@yield('scripts')
</body>
</html>
