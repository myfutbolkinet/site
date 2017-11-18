@extends('layouts.add_category_app')

@section('title', 'Main page')

@section('content')

    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>Добавление категории</h2>
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
    <div class="form-group col-sm-12">
        <label class="col-sm-2 control-label"></label>
        <div class="ibox-content col-sm-10 control-label">
            <p>
                Выберите категории в которых будет использоваться данное свйство
            </p>





        </div>
        <br>



        <div class="form-group col-sm-12 categories">
            <p class="font-bold">
                Выбор дочерней категории
            </p>
            <div class="block_main_categories cat_block_1" style="">
                @foreach ($categories as $key=>$category)
                    @if($category->parent_id==0)
                        <a >
                            <span class="fahover_cubes fa fa-cubes" style="" onclick="faclick()"></span>
                            <div class="cat_block" >

                                <input  class="fahover_cubes_input" type="hidden" value="{{$category->id}}">
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
