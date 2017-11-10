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
                        <h5>Wizard with Validation</h5>
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
                            Validation Wizard Form
                        </h2>
                        <p>
                            This example show how to use Steps with jQuery Validation plugin.
                        </p>

                        <form id="form" action="#" class="wizard-big">
                            <h1>Основные данные о товаре</h1>
                            <fieldset>
                                <h2>Добавляем позицию</h2>
                                <div class="row">
                                    <div class="col-lg-8">



                                        <div class="form-group">
                                            <label class="col-sm-2 control-label"> Название товара : </label>
                                            <div class="col-sm-5">
                                                <input class="form-control" name="name" type="text" placeholder="Наберить назву товару"  data-parsley-group="order" data-parsley-required />
                                            </div>
                                                <label class="col-sm-2 control-label"> Артикул : </label>
                                                <div class="col-sm-3 input-group">
                                                    <input class="form-control" name="artikul" type="text" placeholder="Наберить артикул товару" data-parsley-group="order" data-parsley-required />
                                                </div>



                                        </div>



                                            <div class="form-group" style="position:relative;top:5px;">
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
                                                    <input name="price" class="form-control" type="text" placeholder="Введите цену">
                                                    <span class="input-group-addon">.00</span>
                                                </div>



                                        </div>

                                        <div class="form-group">

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
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label"> Скидка : </label>
                                            <div class="col-sm-5 input-group bootstrap-touchspin">
                                                <span class="input-group-btn">
                                                    <button class="btn btn-white bootstrap-touchspin-down" type="button">-</button>
                                                </span>
                                                <span class="input-group-addon bootstrap-touchspin-prefix" style="display: none;"></span>
                                                <input class="touchspin2 form-control" value="55" name="discount" style="display: block;" type="text">
                                                <span class="input-group-addon bootstrap-touchspin-postfix">%</span>
                                                <span class="input-group-btn"><button class="btn btn-white bootstrap-touchspin-up" type="button">+</button></span>
                                            </div>

                                        </div>








                                        <div class="form-group">
                                            <label>Username *</label>
                                            <input id="userName" name="userName" type="text" class="form-control required">
                                        </div>
                                        <div class="form-group">
                                            <label>Password *</label>
                                            <input id="password" name="password" type="text" class="form-control required">
                                        </div>
                                        <div class="form-group">
                                            <label>Confirm Password *</label>
                                            <input id="confirm" name="confirm" type="text" class="form-control required">
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
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>First name *</label>
                                            <input id="name" name="name" type="text" class="form-control required">
                                        </div>
                                        <div class="form-group">
                                            <label>Last name *</label>
                                            <input id="surname" name="surname" type="text" class="form-control required">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Email *</label>
                                            <input id="email" name="email" type="text" class="form-control required email">
                                        </div>
                                        <div class="form-group">
                                            <label>Address *</label>
                                            <input id="address" name="address" type="text" class="form-control">
                                        </div>
                                    </div>
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
                                <input id="acceptTerms" name="acceptTerms" type="checkbox" class="required"> <label for="acceptTerms">I agree with the Terms and Conditions.</label>
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
