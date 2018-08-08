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
