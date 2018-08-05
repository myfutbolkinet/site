@extends('site_admin_page.show_goods.goods_and_groups')

@section('title', 'Main page')

@section('content')

    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>Show goods</h2>
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


    <div class="row border-bottom">
        <!--Nav Tabs-->
        <ul class="nav nav-tabs">
            <?php
            foreach ($sub_menu2 as $key=>$m){
            if($active_menu2_item==$key){
            ?>
            <li class="active" style="height:40px">
            <?php
            }
            else{
            ?>
            <li style="height:40px">
                <?php
                }
                ?>


                <a href="<?php echo '#'.$m['data_href']?>" data-toggle="tab" aria-expanded="true" style="height:40px">
                    <div  style="top:-10px;position:relative;margin:0 auto;">
                        <div style="width:auto;position:relative;margin:0 auto;" class="btn btn-default btn-rounded btn_aditional"><img src="/img/Aufgaben.png"><span style="padding-left:10px;"><?php echo $m['btn_title']?></span></div>
                    </div>

                </a>
            </li>



            <?php


            }
            ?>


        </ul>
        <div class="tab-content">
            <div id="tab-1" class="tab-pane active">
                <div class="panel-body">
                    <strong>Lorem ipsum dolor sit amet, consectetuer adipiscing</strong>

                    <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of
                        existence in this spot, which was created for the bliss of souls like mine.</p>

                    <p>I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents. I should be incapable of drawing a single stroke at
                        the present moment; and yet I feel that I never was a greater artist than now. When.</p>
                </div>
            </div>
            <div id="tab-2" class="tab-pane">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="ibox">
                                <div class="ibox-title">
                                    <h5>Вы можете выбрать категории товары которых вы будете просматривать сейчас</h5>



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
                                        Настройка фильтра категорий
                                    </h2>
                                    <p>
                                        Будут показаны товары находящиеся в выбранных категориях
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
                                        <button type="button" class="btn_save_categories btn btn-primary btn-lg">Показать товары</button>
                                    </div>




                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>













    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Товары</h5>
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

                    <table class="table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Артикул</th>
                            <th>Наименование</th>
                            <th>Цена</th>
                            <th>Username</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                        </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>




        <div class="row">
            <div class="col-lg-12">
                <div class="ibox">
                    <div class="ibox-title">
                        <h5>Здесь представлены все ваши товарные позиции</h5>




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


@endsection
