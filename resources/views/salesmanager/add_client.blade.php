@extends('layouts.add_good_property_app')

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
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Создание свойства</h5>

                    <div class="ibox-tools">
                        <a href="/superadmin/add_good_property" class="btn btn-success btn-facebook btn-outline">
                            <i class="fa fa-plus"> </i> Создать свойство
                        </a>

                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>




                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <h5>Информация <small>Добавьте информацию о свойствах товаров</small></h5>
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

                                <div class="row">
                                    <div class="col-lg-8">

                                    <form id="form" class="addel"
                                          data-addel-hide="true"
                                          data-addel-add="1"
                                          data-addel-animation-duration="1000" action="/superadmin/good_property" method="post">

                                        <div class="form-group col-sm-12">
                                            <label class="col-sm-2 control-label"> Название *: </label>
                                            <div class="col-sm-10">
                                                <input class="form-control required" name="name" type="text" placeholder="Наберить назву товару"  data-parsley-group="order" data-parsley-required />
                                            </div>




                                        </div>
                                        <div class="form-group col-sm-12">
                                        <label class="col-sm-2 control-label">Имя колонки CSV* : </label>
                                        <div class="col-sm-10">
                                            <input class="form-control required" name="column" type="text" placeholder="Наберить артикул товару" data-parsley-group="order" data-parsley-required />
                                        </div>
                                        </div>

                                        <div class="form-group col-sm-12">
                                            <label class="col-sm-2 control-label"></label>
                                            <div class="col-sm-10">
                                            <div class="i-checks"><label> <input type="checkbox" name="active" value=""> <i></i> Активный</label></div>
                                            </div>
                                            <label class="col-sm-2 control-label"></label>
                                            <div class="col-sm-10">
                                                <div class="i-checks"><label> <input type="checkbox" name="main_property" value=""> <i></i> Главное свойство</label></div>
                                            </div>
                                            <label class="col-sm-2 control-label"></label>
                                            <div class="col-sm-10">
                                                <div class="i-checks"><label> <input type="checkbox" name="hint" value=""> <i></i> Подсказка</label></div>
                                            </div>
                                            <label class="col-sm-2 control-label"></label>
                                            <div class="col-sm-10">
                                                <div class="i-checks"><label> <input type="checkbox" name="show_on_goods_page" value=""> <i></i> Показать на странице товаров</label></div>
                                            </div>
                                            <label class="col-sm-2 control-label"></label>
                                            <div class="col-sm-10">
                                                <div class="i-checks"><label> <input type="checkbox" name="show_on_comparison" value=""> <i></i> Показать на странице сравнения товаров</label></div>
                                            </div>
                                            <label class="col-sm-2 control-label"></label>
                                            <div class="col-sm-10">
                                                <div class="i-checks"><label> <input type="checkbox" name="show_on_filter" value=""> <i></i> Показать в фильтре</label></div>
                                            </div>
                                            <label class="col-sm-2 control-label"></label>
                                            <div class="col-sm-10">
                                                <div class="i-checks"><label> <input type="checkbox" name="multiple" value=""> <i></i> Множественный выбор</label></div>
                                            </div>
                                        </div>



                                        <div class="form-group col-sm-12">
                                            <label class="col-sm-2 control-label"></label>
                                            <div class="ibox-content col-sm-10 control-label">
                                                <p>
                                                    Выберите категории в которых будет использоваться данное свйство
                                                </p>




                                                <input style="display:block" class="tagsinput form-control" type="text" name="categories" value="Amsterdam"/>
                                            </div>
                                            <br>



                                                <div class="form-group col-sm-12 categories">
                                                    <p class="font-bold">
                                                        Выбор категорий
                                                    </p>
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



                                            </div>





                                        <div class="form-group addel-target">
                                            <label for="person" class="control-label">
                                                Свойства
                                            </label>
                                            <div class="input-group">
                                                <input type="text" id="person" name="data[]" class="form-control">
                                                <span class="input-group-btn">
                            <button type="button" class="btn btn-danger addel-delete">
                                <i class="fa fa-remove">

                                </i>
                            </button>
                        </span>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <button type="button" class="btn btn-success btn-block addel-add">
                                                <i class="fa fa-plus"></i>
                                            </button>
                                        </div>



                                        <div class="hr-line-dashed"></div>
                                        <div class="form-group">
                                            <div class="col-sm-4 col-sm-offset-2">
                                                <button class="btn btn-white" type="submit">Cancel</button>
                                                <button class="btn btn-primary" type="submit">Save changes</button>
                                            </div>
                                        </div>

                                    </form>
                                    </div>
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
