@extends('layouts.goods_properties_app')

@section('title', 'Main page')

@section('content')
    <div id="main" role="main" style="">

        <!-- Main view  -->

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
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>Свойства товаров</h2>
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
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Свойства товаров</h5>

                    <div class="ibox-tools">
                        <a href="/superadmin/add_good_property" class="btn btn-success btn-facebook btn-outline">
                            <i class="fa fa-plus"> </i> Создать свойство
                        </a>

                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>




                    </div>
                </div>
                <div class="ibox-content">
                    <div class="row">
                        <div class="col-sm-5 m-b-xs"><select class="input-sm form-control input-s-sm inline">
                                <option value="0">Option 1</option>
                                <option value="1">Option 2</option>
                                <option value="2">Option 3</option>
                                <option value="3">Option 4</option>
                            </select>
                        </div>
                        <div class="col-sm-4 m-b-xs">
                            <div data-toggle="buttons" class="btn-group">
                                <label class="btn btn-sm btn-white"> <input type="radio" id="option1" name="options"> Day </label>
                                <label class="btn btn-sm btn-white active"> <input type="radio" id="option2" name="options"> Week </label>
                                <label class="btn btn-sm btn-white"> <input type="radio" id="option3" name="options"> Month </label>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="input-group"><input type="text" placeholder="Search" class="input-sm form-control"> <span class="input-group-btn">
                                        <button type="button" class="btn btn-sm btn-primary"> Go!</button> </span></div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>

                                <th></th>
                                <th>ID </th>
                                <th>Свойство </th>
                                <th>Использовать в категориях</th>
                                <th>Имя колонки CSV</th>
                                <th>Статус</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($properties as $val)
                                <tr>
                                    <td><input type="checkbox"  checked class="i-checks" name="input[]"></td>
                                    <td>{{$val->id}}</td>
                                    <td><a href="/superadmin/good_property/{{$val->id}}">{{$val->name}}</a></td>
                                    <td>

                                        @foreach($val->categories as $cats)

                                        <p>{{$cats}}</a>
                                        @endforeach

                                    </td>
                                </tr>
                            @endforeach


                            </tbody>
                        </table>
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
