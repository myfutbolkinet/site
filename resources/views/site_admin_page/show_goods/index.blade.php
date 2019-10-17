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
123

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


                <a href="<?php echo $m['href']?>" aria-expanded="true" style="height:40px">
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
            <div id="tab-1" class="tab-pane @if($active_menu2_item==1) active @endif">
                <div class="panel-body">
                    <strong>Здесь представлены все ваши товарные позиции</strong>
    @if(isset($goods))

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
                                            <th>Фото</th>
                                            <th>#</th>
                                            <th>#Модели</th>
                                            <th>Артикул</th>
                                            <th>Наименование</th>
                                            <th>Цена</th>
                                            <th>Цвет</th>
                                            <th>Действия</th>
                                        </tr>
                                        </thead>
                                        <tbody>


                                        @foreach($goods as $good)
                                        <tr id="tr_{{$good->id}}">

                                            <td>
                                                @if($good->photos->first())
                                                <img width="120px;" height="120px;"  src="/storage/{{$good->photos->first()->photo}}">
                                            @endif
                                            </td>
                                            <td>{{$good->id}}  </td>
                                            <td>{{$good->model_id}}  </td>
                                            <td>{{$good->articul}}</td>
                                            <td>{{$good->name}}</td>
                                            <td>{{$good->price}}</td>
                                            <td >
                                                <div style="width:70px;text-align: center">
                                                @if($good->colors->first())
                                                    <img width="50px;" height="50px;" class="thumbpost img-circle" src="/storage/{{$good->colors->first()->color}}">
                                                @endif
                                </div>

                                            </td>
                                            <td>
                                                <ul class="demo-btns">

                                                    <li>
                                                        <a href="#" id="trash_{{$good->id}}"
                                                           class="btn btn-danger btn-sm delete_dialog_link"><i
                                                                    class="glyphicon glyphicon-trash"></i></a>
                                                    </li>

                                                    <li>
                                                <a href="/admin/clone_good/{{$good->id}}"><span  id="clone_{{$good->id}}"
                                                       class="btn btn-success btn-sm featured_dialog_link featured"><i
                                                            class="glyphicon glyphicon-send"></i></span></a>
                                                        </li>


                                                    <li>
                                                        <a href="/admin/edit_good/{{$good->id}}"><span  id="edit_{{$good->id}}"
                                                                                                         class="btn btn-success btn-sm featured_dialog_link featured"><i
                                                                        class="glyphicon glyphicon-pencil"></i></span></a>
                                                    </li>

                                                    @if($good->main_screen==0)
                                                    <li>
                                                        <a href="#" id="screen_{{$good->id}}"
                                                           class="btn btn-danger btn-sm screen_link"><i
                                                                    class="glyphicon glyphicon-gift"></i></a>
                                                    </li>
                                                    @else
                                                        <li>
                                                            <a href="#" id="screen_{{$good->id}}"
                                                               class="btn btn-successr btn-sm screen_link"><i
                                                                        class="glyphicon glyphicon-gift"></i></a>
                                                        </li>
                                                    @endif


                                                </ul>
                                            </td>
                                        </tr>
                                        @endforeach

                                        {{ $goods->links() }}
                                        </tbody>
                                    </table>
                                    {{ $goods->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                @endif

                    <style>
                        .thumbpost {
                            object-position: center; /* Center the image within the element */
                            object-fit: cover;

                           width: 147%;
                           max-height: 50px;
                        }
                    </style>

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
            <div id="tab-2" class="tab-pane @if($active_menu2_item==2) active @endif" >
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
                                                @if($categories!==null)
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
                                                @else
                                                    <div style="width:100%;height:100px;color:#fff;background:red;text-align:center">

                                                        <h3>У вас не выбраны категории товаров для использования в вашем интернет магазине </h3>
                                                        <a href="/admin/menu_areas">Перейти для выбора категорий</a>
                                                    </div>
                                                @endif
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
                                        <button type="button" class="btn_show_categories btn btn-primary btn-lg">Применить фильтр</button>
                                    </div>




                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
            <div id="tab-3" class="tab-pane @if($active_menu2_item==3) active @endif">
                @if(!isset($goods))
                <div class="panel-body">
                    <strong>Чтобы отобразились товары по выбранным категориям сперва выберите категории перейдя по ссылке <a href="/admin/goods_and_groups/filter" data-toggle="tab" aria-expanded="true">Задать фильтр выборки товаров по категориям</a></strong>


                </div>
                @else
                <div class="panel-body">
                    <strong>Здесь представлены все ваши товарные позиции в соответствии с фильтром категорий</strong>


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
                                            <th>Фото</th>
                                            <th>#</th>
                                            <th>Артикул</th>
                                            <th>Наименование</th>
                                            <th>Цена</th>
                                            <th>Username</th>
                                        </tr>
                                        </thead>
                                        <tbody>


                                        @foreach($goods as $good)
                                            <tr>

                                                <td>
                                                    @if($good->photos->first())
                                                        <img width="50px;" height="50px;"  src="/storage/{{$good->photos->first()->photo}}">
                                                    @endif
                                                </td>
                                                <td>{{$good->id}}  </td>
                                                <td>{{$good->articul}}</td>
                                                <td>{{$good->name}}</td>
                                                <td>{{$good->price}}</td>
                                            </tr>
                                        @endforeach
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
                                    <h5>Здесь представлены все ваши товарные позиции в соответствии с фильтром категорий</h5>




                                </div>

                            </div>
                        </div>

                    </div>
                </div>
                @endif
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
@section('script')

@endsection