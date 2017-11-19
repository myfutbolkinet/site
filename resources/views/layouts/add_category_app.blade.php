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


    <script>
        $.ajaxSetup({
            headers:{
                'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
            }
        })




        $(document).ready(function(){

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
                            $.each( data.value, function( key, value ) {
                                $('.'+new_block_cl+'').append(' <a ><span onclick="faclick()" class="fahover_cubes fa fa-cubes" style=""></span><div class="cat_block" >' +
                                    '<input class="fahover_cubes_input" type="hidden" value="'+value.id+'">' +
                                    value.name+
                                    '<span class="fa arrow" style="float:right"></span>' +
                                    '</div></a>')
                            });

                        }}

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
                    }
                }
            });
        });
    </script>

</body>
</html>
