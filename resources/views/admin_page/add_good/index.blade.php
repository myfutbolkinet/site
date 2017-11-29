@extends('layouts.add_good_app')

@section('title', 'Main page')

@section('content')

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
                        <h5>Вы можете добавить товарную позицию</h5>



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
                            Форма добавления товарной позиции
                        </h2>
                        <p>
                            Постепенно добавьте информацию о товарной позиции в соответствующие поля
                        </p>

                        <form id="form" action="/admin/add_good" method="post" class="wizard-big">





                            <h1>Основные данные о товаре</h1>
                            <fieldset>
                                <h2>Добавляем позицию</h2>
                                <div class="row">
                                    <div class="col-lg-8">



                                        <div class="form-group col-sm-12">
                                            <label class="col-sm-2 control-label"> Название товара : </label>
                                            <div class="col-sm-5">
                                                <input class="form-control required" name="name" type="text" placeholder="Наберить назву товару"  data-parsley-group="order" data-parsley-required />
                                            </div>
                                                <label class="col-sm-2 control-label"> Артикул : </label>
                                                <div class="col-sm-3 input-group">
                                                    <input class="form-control required" name="artikul" type="text" placeholder="Наберить артикул товару" data-parsley-group="order" data-parsley-required />
                                                </div>



                                        </div>



                                            <div class="form-group col-sm-12" style="position:relative;top:5px;">
                                         {{--   <label class="col-sm-2 control-label"> Категорія : </label>
                                            <div class="col-sm-5">
                                                <select class="form-control" name="category" placeholder="Виберить категорію" />
                                                @foreach($categories as $key=>$val)
                                                @if($val->parent_id!=0)

                                                <option value="{{$val->id}}">{{ $val->name}}</option>
                                                @endif
                                                @endforeach
                                                </select>
                                            </div>--}}
                                                <label class="col-sm-2 control-label"> Ціна : </label>

                                                <div class="col-sm-5 input-group m-b" style="padding-left:13px;padding-right:13px;">
                                                    <span class="input-group-addon"><i class="fa fa-dollar fa-lg"></i></span>
                                                    <input name="price" class="form-control required" type="text" placeholder="Введите цену">
                                                    <span class="input-group-addon">.00</span>
                                                </div>



                                        </div>

                                        <div class="form-group col-sm-12">

                                            <label class="col-sm-2 control-label"> Тип : </label>
                                            <div class="col-sm-5">
                                                <select class="form-control" name="type" placeholder="Виберить тип товару" />
                                                @foreach ($types as $key=>$val)
                                                    <option value="{{$val->id}}">{{$val->name}}</option>
                                                    @endforeach
                                                    </select>
                                            </div>

                                            <label class="col-sm-2 control-label"> Количество в партии : </label>
                                            <div class="col-sm-3 input-group ">
                                                <input class="form-control" name="count" type="text" placeholder="Введите количество данной модели на складе"  data-parsley-group="order" data-parsley-required >

                                            </div>

                                        </div>
                                        <div class="form-group col-sm-12">
                                            <label class="col-sm-2 control-label"> Скидка : </label>
                                            <div class="col-sm-5">

                                                <input class="touchspin2" type="text" value="5" name="discount">
                                            </div>
                                            <label class="col-sm-2 control-label"> </label>
                                            <div class="col-sm-3 input-group ">
                                            </div>
                                        </div>








                                        <div class="form-group ">
                                            <label class="col-sm-2 control-label" style="display:block;">Категория в каталоге*</label>
                                            <input type="hidden" name="id_cat">
                                            <input type="text" class="col-sm-10 control-label cat_name required" style="font-size:17px;">

                                        </div>
                                        <div class="form-group col-sm-12 categories">
                                            <div class="block_main_categories cat_block_1" style="">
                                                @foreach ($categories as $key=>$category)
                                                    @if($category->parent_id==0)
                                                        <a ><div class="cat_block" >
                                                                <input type="hidden" value="{{$category->id}}">
                                                                {{$category->name}}

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


                                        <div class="form-group col-sm-12">
                                            <label>Описание *</label>
                                            <textarea name="editor1" id="editor1" rows="10" cols="80">
                                                This is my textarea to be replaced with CKEditor.
                                            </textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="text-center">
                                            <div style="margin-top: 20px">
                                                <i class="fa fa-sign-in" style="font-size: 180px;color: #e5e5e5 "></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </fieldset>
                            <h1>Дополнительные данные о товаре</h1>
                            <fieldset>
                                <h2>Profile Information</h2>

                                <div class="ibox float-e-margins row">
                                    <div class="ibox-title  col-sm-12">
                                        <div class="col-sm-1 back-change" style="width:100px;height:50px;margin:10px;"></div>
                                        <h5 class="col-sm-2 " style="text-align:center;margin-top:10px;">Последний выбранный цвет </h5>

                                        <input class="input_color col-sm-1" style="margin-top:-20px;margin:10px;" type="text" class="form-control demo1" value="" />
                                        <button  type="button" style="display:inline-block;padding:10px;" class="col-sm-2 btn btn-w-m btn-success color_btn">Добавить цвет в коллекцию</button>
                                    </div>

                                    <div class="ibox-content">
                                       <div class="position_colors">


                                       </div>

                                        <a data-color="rgb(255, 255, 255)" id="demo_apidemo" class="btn btn-white btn-block colorpicker-element" href="#">Добавить цвет позиции</a>
                                        <br/>
                                    </div>
                                </div>

                                <div id="properties">


                                </div>


                            </fieldset>

                            <h1>Фотографии</h1>
                            <fieldset>
                                <div class="text-center" style="margin-top: 120px">
                                    <h2>You did it Man :-)</h2>
                                </div>
                            </fieldset>

                            <h1>Описания и видео с Youtube</h1>
                            <fieldset>
                                <h2>Terms and Conditions</h2>
                                <input id="acceptTerms" name="acceptTerms" type="checkbox" class="required">
                                <label for="acceptTerms">I agree with the Terms and Conditions.</label>
                            </fieldset>
                        </form>
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
