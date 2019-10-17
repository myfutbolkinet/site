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
                                        @foreach ($categories as $key=>$category)
                                            @if($category->parent_id==0)

                                                <a >

                                                    <div  class="cat_block" >

                                                        <input  class="fahover_cubes_input" type="hidden" value="{{$category->id}}">

                                                            <div style="display:inline-block" class="i-checks">
                                                            <label> <input class="category_checkbox" type="checkbox" {{$category->checked}} value=""> </label>
                                                            </div>


                                                        <span style="position:relative;padding-left:20px;">{{$category->name}}</span>

                                                        <span class="fa arrow" style="float:right"></span>
                                                    </div></a>

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

@endsection
