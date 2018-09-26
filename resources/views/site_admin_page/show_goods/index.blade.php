@extends('site_admin_page.show_goods.goods_and_groups')

@section('title', 'Main page')

@section('content')

    <div id="main" role="main" style="">

        <!-- Main view  -->
    @include('layouts.goods_topnavbar')
    <!-- RIBBON -->
        <div id="ribbon">

            <div class="back_btn" style="z-index:999;margin-left:-10px;display:inline-block;position:relative;left:0px;width:30px;height:40px;background:linear-gradient(to right,#3a3633 93%,#2a2725 100%);">
                <a href="@php echo (isset($_SERVER['HTTP_REFERER'])) ?  $_SERVER['HTTP_REFERER'] : ''; @endphp "><i style="position:absolute;color:#fff;top:15px;left:10px;" class="fa fa-step-backward"></i></a>
            </div>

            <span class="ribbon-button-alignment" style="position:absolute;right:30px">
					<a href="javascript:window.location.reload();"><span id="refresh" class="btn btn-ribbon" >
						<i class="fa fa-refresh"></i>
					</span></a>
				</span>

            <!-- breadcrumb -->


        </div>
        <!-- END RIBBON -->

        <!-- MAIN CONTENT -->
        <div id="content">


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
                    <strong>Здесь представлены все ваши товарные позиции</strong>


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
<form id="send_cats_array" action="/show_cats_list" method="POST">
    <input type="hidden" name="cats_array" class="cats_array" value="">
</form>
                                    <div class="row">
                                        <button type="button" class="btn_show_categories btn btn-primary btn-lg">Показать товары</button>
                                    </div>




                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
            <div id="tab-3" class="tab-pane active">
                <div class="panel-body">
                    <strong>Чтобы отобразились товары по выбранным категориям сперва выберите категории перейдя по ссылке <a href="#tab-2" data-toggle="tab" aria-expanded="true">Задать фильтр выборки товаров по категориям</a></strong>


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

        </div></div>
@endsection
