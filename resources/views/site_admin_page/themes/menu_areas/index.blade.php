@extends('site_admin_page.themes.menu_areas.nav_good_app')

@section('title', 'Main page')

@section('content')

    <div id="main" role="main" style="">

        <!-- MAIN CONTENT -->
        <div id="content">

    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>Wizard</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li>
                    <a>Forms</a>
                </li>
                <li class="active">
                    <strong>Wizard</strong>
                </li>
            </ol>
        </div>
        <div class="col-lg-2">

        </div>
    </div>




    <div class="row">
        <div class="col-lg-12">
            <div class="ibox">
                <div class="ibox-title">
                    <h5>Вы можете выбрать категории которые будут использоваться на вашем сайте</h5>



                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-wrench"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#">Config option 1</a>
                            </li>
                            <li><a href="#">Config option 2</a>
                            </li>
                        </ul>
                        <a class="close-link">
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                    <h2>
                        Форма выбора категорий
                    </h2>
                    <p>
                        Выбранные категории будут доступны для наполнения в вашем интернет магазине
                    </p>

                        <div class="row">
                            <div class="col-sm-12" >
                                <p class="font-bold">
                                При выборе категории автоматически будут выбраны родительские категории а также все дочерние
                                </p> <input class="parent_category required" name="parent_id" type="text" value="">
                                <div class="categories">
                                    <div class="block_main_categories cat_block_1" style="">

                                        <? $i=0;?>
                                        @foreach ($categories as $key=>$category)
                                            @if($category->parent_id==0)
                                                @if($i==0)
                                                <div>
                                                    <input type="hidden" class="category_level" value="{{$category->parent_id}}">
                                                    <button class="add_category_into_level"><i class="fa fa-plus"></i>Добавить категорию в уровень</button>

                                                </div>
                                                 @endif
                                                <a >

                                                    <div  class="cat_block" >

                                                        <input  class="fahover_cubes_input" type="hidden" value="{{$category->id}}">

                                                        <button class="edit_cat"><i class="fa fa-pencil"></i></button>

                                                            <div style="display:inline-block" class="i-checks">
                                                            <label> <input class="category_checkbox" type="checkbox" {{$category->checked}} value=""> </label>
                                                            </div>


                                                        <span style="position:relative;padding-left:20px;">{{$category->name}}</span>

                                                        <span class="fa arrow" style="float:right"></span>
                                                    </div></a>
                                                  <?$i++;?>
                                            @endif
                                        @endforeach

                                    </div>

                                    <div class="block_main_categories cat_block_2" >


                                    </div>
                                    <div class="block_main_categories cat_block_3" >


                                    </div>
                                    <div class="block_main_categories cat_block_4" >


                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <button type="button" class="btn_save_categories btn btn-primary btn-lg">Сохранить изменения</button>
                        </div>




                </div>
            </div>
        </div>

    </div>









    <div class="wrapper wrapper-content animated fadeInRight">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center m-t-lg">
                            <h1>
                                Welcome in Magelan Laravel Starter Project
                            </h1>
                            <small>
                                It is an application skeleton for a typical web ecommerce app. You can use it to quickly bootstrap your webapp projects.
                            </small>
                        </div>
                    </div>
                </div>
    </div>

        </div>
    </div>
    <div id="dialog_simple" title="Dialog Simple Title">

    </div>

    <div id="addtab" title="Изменение названия категории">

        <form>

            <fieldset>
                <input name="authenticity_token" type="hidden">
                <div class="form-group">
                    <label>Ссылка</label>
                    <input class="form-control" id="tab_title" value="" placeholder="Text field" type="text">
                </div>

                <div class="form-group">
                    <label>Название категории</label>
                    <input class="form-control" id="cat_name" value="" placeholder="Text field" type="text">
                </div>
            </fieldset>

        </form>

    </div>
@endsection
@section('scripts')

    <script>

        function addTab() {
            // clear fields
            $("#tab_title").val("");
            $("#tab_content").val("");
        }



        // modal dialog init: custom buttons and a "close" callback reseting the form inside

        var dialog = $("#addtab").dialog({
            autoOpen : false,
            width : 600,
            resizable : false,
            modal : true,
            buttons : [{
                html : "<i class='fa fa-times'></i>&nbsp; Отмена",
                "class" : "btn btn-default",
                click : function() {
                    $(this).dialog("close");

                }
            }, {

                html :  "<i class='fa fa-plus '></i>&nbsp; <span class='add_edit_category_btn'>Изменить</span>",
                "class" : "btn btn-danger",
                click : function(e) {
                    console.log('click_action')
                    console.log('cat_id',window.cat_id)
                    dialog.find("form").submit()
                    $(this).dialog("close");
                }
            }]
        });
        var form = dialog.find("form").submit(function(event) {

            console.log(event.target.elements[2].value)
            console.log(event.target.elements[2].value)
            console.log(window.cat_id)
            var level=window.level
            if(window.cat_id==null && window.parent_id!=null){
            var action = 'add'
        }
        else{
                var action = 'edit'
            }

            $.ajax({
                url: '/admin/change_category_name', // point to server-side PHP script
                dataType: 'json',  // what to expect back from the PHP script, if anything
                cache: false,
                data: {name:event.target.elements[3].value,link:event.target.elements[2].value,id:window.cat_id,action:action},
                type: 'post',
                success: function(){
                    window.parent_id=null;
                    conlole.log('here')
                }
            });




            dialog.dialog("close");
            event.preventDefault();
        });



        $(function() {
            $("#dialog_simple").dialog({
                autoOpen: false
            });
        })
        $(document).ready(function() {


            // Dialog click
            $('.edit_cat').click(function () {
                console.log(333)
                window.cat_id=$(this).parent().find('.fahover_cubes_input').val()
                $( "#addtab" ).dialog( "option", "title", "Изменение названия категории" );
                dialog.dialog("open");
                return false;

            });


            $('.categories').delegate('.edit_cat','click',function(event) {
                console.log(334)
                window.cat_id=$(this).parent().find('.fahover_cubes_input').val()
                $('.add_edit_category_btn').text('Изменить')
                $( "#addtab" ).dialog( "option", "title", "Изменение названия категории" );

                dialog.dialog("open");
                return false;
            })
        })
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
                        console.log(333)
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
                            console.log(123)
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

                                if(key==0){
                                    console.log(key)
                                    $('.'+new_block_cl+'').append('<div>'+

                                    '<input type="hidden" class="category_level" value="'+value.parent_id+'">'+
                                        '<button class="add_category_into_level"><i class="fa fa-plus"></i>Добавить категорию в уровень</button>'+

                                    '</div>')
                                }

                                if(checkValue(value.id,checked_categories)=='Not exist'){

                                    $('.'+new_block_cl+'').append(' <a ><div class="cat_block" >' +
                                        '<input class="fahover_cubes_input" type="hidden" value="'+value.id+'">' +
                                        '<button class="edit_cat"><i class="fa fa-pencil"></i></button>'+
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

       $('.categories').delegate('.add_category_into_level','click',function(event) {
            console.log(334)
           window.cat_id=null;
           window.parent_cat_id=$(this).parent().find('.category_level').val()
           $('.add_edit_category_btn').text('Добавить')
           $( "#addtab" ).dialog( "option", "title", "Добавление новой категории в уровень" );
            console.log(window.parent_cat_id)

            dialog.dialog("open");
            return false;
        })
    </script>
    @endsection