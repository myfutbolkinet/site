<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>SUPERADMIN_ADD_GOOD_PROPERTY</title>


    <link rel="stylesheet" href="{!! asset('css/vendor.css') !!}" />
    <link rel="stylesheet" href="{!! asset('css/app.css') !!}" />
    <link href="{!! asset('inspinia/css/bootstrap.min.css') !!}" rel="stylesheet">
    <link href="{!! asset('inspinia/font-awesome/css/font-awesome.css') !!}" rel="stylesheet">
    <link href="{!! asset('inspinia/css/plugins/iCheck/custom.css') !!}" rel="stylesheet">




    <link href="{!! asset('inspinia/css/animate.css') !!}" rel="stylesheet">
    <link href="{!! asset('inspinia/css/style.css') !!}" rel="stylesheet">

    <link href="{!! asset('inspinia/css/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css') !!}" rel="stylesheet">


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
        .fahover_cubes{
            text-align:center;width:45px;height:15px;background:#eee;float:left;
            margin-top:10px;
        }
        .fahover_cubes:hover{
            background:#FF0000;
            color:#fff;
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
</body>
</html>