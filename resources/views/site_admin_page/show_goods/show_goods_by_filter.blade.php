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
            <div id="tab-1" class="tab-pane active">
                <div class="panel-body">
                    <strong>Здесь представлены ваши товарные позиции в соответствии с выбранными категориями</strong>



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
                                            <th>Категория</th>
                                            <th>Цена</th>
                                            <th>Действия</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        @foreach($goods as $value)

                                        <tr>
                                            <td>{{$value->id}}</td>
                                            <td>{{$value->articul}}</td>
                                            <td>{{$value->name}}</td>
                                            <td>{{$value->category}}</td>
                                            <td>{{$value->price}}</td>
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
                                    <h5>Здесь представлены ваши товарные позиции в соответствии с выбранными категориям</h5>




                                </div>

                            </div>
                        </div>

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


@endsection
