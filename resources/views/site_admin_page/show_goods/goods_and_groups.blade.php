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
    <!--link rel="stylesheet" type="text/css" media="screen" href="/css/neu.css"-->
    <!--link rel="stylesheet" type="text/css" media="screen" href="/css/credit_edit_media.css"-->

    <link href="{!! asset('inspinia/css/plugins/touchspin/jquery.bootstrap-touchspin.min.css') !!}" rel="stylesheet">
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
            min-height: 1220px;
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

<!-- Footer -->
@include('layouts.footer')


    <!--================================================== -->
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

    <!-- Jquery Validate -->
    <script src="{!! asset('inspinia/js/plugins/validate/jquery.validate.min.js') !!}"></script>
    <!-- BOOTSTRAP JS -->
    <script src="/smartAdmin/js/bootstrap/bootstrap.min.js"></script>

    <!-- JS TOUCH : include this plugin for mobile drag / drop touch events-->
    <script src="/smartAdmin/js/plugin/jquery-touch/jquery.ui.touch-punch.min.js"></script>

    <!-- iCheck -->
    <script src="/inspinia/js/plugins/iCheck/icheck.min.js"></script>
    <!--[if IE 8]>

    <h1>Your browser is out of date, please update your browser by going to www.microsoft.com/download</h1>

    <![endif]-->

    <!-- Demo purpose only -->
    <script src="/smartAdmin/js/demo.min.js"></script>

    <!-- MAIN APP JS FILE -->
    <script src="/smartAdmin/js/app.min.js"></script>



    <script>
        $(document).ready(function () {
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

    <script>
        $.ajaxSetup({
            headers:{
                'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
            }
        })





        $('.categories').delegate('.cat_block','click',function(){

            var id_cat = $(this).parent('a').find('input').val()
            var cl=$(this).parent('a').parent().attr('class');
            cl=cl.split(' ')[1]
            var simbol=parseInt(cl.slice(10))+1
            new_block_cl=cl.slice(0, 10)+simbol

            $.ajax({
                method: 'POST',
                dataType: 'json',
                async:false,
                url: "/show_subcat",
                data: {id_cat: id_cat}, // serializes the form's elements.
                success: function (data) {
                    if(data.message=='null'){

                        //проверить чтобы соседние последующие блоки были пусты

                        //если (data.value.info.parent_num) ==2
                        //удалить 3,4
                        // если (data.value.info.parent_num) ==3
                        //4
                        if(data.value.info.parent_num==1){
                            $('.cat_block_2').empty();
                            $('.cat_block_3').empty();
                            $('.cat_block_4').empty();
                        }
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

                        if(new_block_cl=='cat_block_4'){
                            $.each( data.value, function( key, value ) {

                                if(checkValue(value.id,checked_categories)=='Not exist') {
                                    $('.' + new_block_cl + '').append(' <a ><div class="cat_block" >' +
                                        '<input class="fahover_cubes_input" type="hidden" value="' + value.id + '">' +

                                        '<div style="display:inline-block" class="i-checks"><label> <input class="category_checkbox" type="checkbox" value=""> </label></div>\n' +
                                        value.name +
                                        '</div></a>')
                                }
                                else{
                                    $('.' + new_block_cl + '').append(' <a ><div class="cat_block" >' +
                                        '<input class="fahover_cubes_input" type="hidden" value="' + value.id + '">' +

                                        '<div style="display:inline-block" class="i-checks"><label> <input class="category_checkbox" checked type="checkbox" value=""> </label></div>\n' +
                                        value.name +
                                        '</div></a>')
                                }

                            });

                        }
                        else{
                            $.each( data.value, function( key, value ) {

                                if(checkValue(value.id,checked_categories)=='Not exist'){

                                    $('.'+new_block_cl+'').append(' <a ><div class="cat_block" >' +
                                        '<input class="fahover_cubes_input" type="hidden" value="'+value.id+'">' +

                                        '<div style="display:inline-block" class="i-checks"><label> <input class="category_checkbox" type="checkbox" value=""> </label></div>\n' +
                                        value.name+
                                        '<span class="fa arrow" style="float:right"></span>' +
                                        '</div></a>')

                                }
                                else{

                                    //alert(checked_categories)

                                    $('.'+new_block_cl+'').append(' <a ><div class="cat_block" >' +
                                        '<input class="fahover_cubes_input" type="hidden" value="'+value.id+'">' +

                                        '<div style="display:inline-block" class="i-checks"><label> <input class="category_checkbox" checked type="checkbox" value=""> </label></div>\n' +
                                        value.name+
                                        '<span class="fa arrow" style="float:right"></span>' +
                                        '</div></a>')
                                }



                            });
                        }


                    }}

            });


            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green',
            });

        });



        $('.categories').delegate('.fahover_cubes','click',function() {
            var id_cat = $(this).parent('a').find('.fahover_cubes_input').val();
            $('.parent_category').val(id_cat);
            $.ajax({
                type: "POST",
                dataType: 'json',
                url: '/show_parent_categories_tree',
                data: {id_cat:id_cat}, // serializes the form's elements.
                success: function (data) {

                    $('.cat_name').html(data.name)
                }
            });
        });

        $("#form").validate({
            errorPlacement: function (error, element)
            {
                element.before(error);
            },
            rules: {
                confirm: {
                    equalTo: "#password"
                },
            }
        });

        $("#form").submit(function(event){
            var link = $('#link').val()

            $.ajax({
                type: "POST",
                dataType: 'json',
                url: '/if_link_exist',
                async:false,
                data: {link:link}, // serializes the form's elements.
                success: function (data) {
                    if(data==1){
                        $('#link_validation').css('display','block');
                        event.preventDefault();
                        return false;
                    }
                    else{
                        $('#link_validation').css('display','none');
                    }
                }

            });


        })

    </script>



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

            var id_cat=$(this).parent('div').parent('label').parent('div').parent('div').find('.fahover_cubes_input').val()
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
                        //Найти
                        //       alert(window.checked_categories)

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

        $('.btn_show_categories').click(function(){
            cats_array=checked_categories;
            $('.cats_array').val(cats_array)
            //$('#send_cats_array').submit();

           $.ajax({
                method: 'POST',
                dataType: 'json',
                async:false,
                url: "/admin/save_cats_filter",
                data: {cats_array: cats_array}, // serializes the form's elements.
                success: function (data) {
                    console.log(data)

                }
            });
        })
    </script>
</body>
</html>
