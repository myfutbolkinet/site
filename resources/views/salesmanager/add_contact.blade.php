@extends('salesmanager.add_contact_app')

@section('title', 'Main page')

@section('content')

    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>Создание контакта</h2>
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
                    <h5>Создание контакта</h5>

                    <div class="ibox-tools">
                        <a href="/superadmin/add_good_property" class="btn btn-success btn-facebook btn-outline">
                            <i class="fa fa-plus"> </i> Создать контакт
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
                                <h5>Информация <small>Добавьте информацию о новом контакте</small></h5>
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
                                          data-addel-animation-duration="1000" action="/salesmanager/add_contact" method="post">

                                        <div class="form-group col-sm-12">
                                            <label class="col-sm-2 control-label"> Количество контактов: </label>
                                            <div class="col-sm-10">
                                                <input class="form-control" name="number_of_contacts" type="text" placeholder="Количество контактов"  data-parsley-group="order" data-parsley-required />
                                            </div>
                                        </div>
                                        <div class="form-group col-sm-12">
                                            <label class="col-sm-2 control-label"> Имя: </label>
                                            <div class="col-sm-10">
                                                <input class="form-control" name="name" type="text" placeholder="Имя контакта"  data-parsley-group="order" data-parsley-required />
                                            </div>
                                        </div>
                                        <div class="form-group col-sm-12">
                                        <label class="col-sm-2 control-label">Название компании : </label>
                                        <div class="col-sm-10">
                                            <input class="form-control" name="company_name" type="text" placeholder="Название компании" data-parsley-group="order" data-parsley-required />
                                        </div>
                                        </div>
                                        <div class="form-group col-sm-12">
                                            <label class="col-sm-2 control-label">Статус контакта : </label>
                                            <div class="col-sm-10">
                                                <div class="i-checks"><label> <input type="radio" name="status" value="1" checked=""> <i></i> Сырой контакт </label></div>
                                                <div class="i-checks"><label> <input type="radio" name="status" value="2" > <i></i> Потенциальный клиент </label></div>
                                                <div class="i-checks"><label> <input type="radio" name="status" value="3" > <i></i> Клиент </label></div>
                                                <div class="i-checks"><label> <input type="radio" name="status" value="4" > <i></i> Постоянный клиент (6месяцев)</label></div>
                                            </div>
                                        </div>
                                        <div class="form-group col-sm-12">
                                            <label class="col-sm-2 control-label">Мобильный телефон : </label>
                                            <div class="col-sm-10">
                                                <input class="form-control" name="mobile" type="text" placeholder="Мобильный телефон" data-parsley-group="order" data-parsley-required />
                                            </div>
                                        </div>
                                        <div class="form-group col-sm-12">
                                            <label class="col-sm-2 control-label">Дополнительный телефон : </label>
                                            <div class="col-sm-10">
                                                <input class="form-control" name="add_phone" type="text" placeholder="Дополнительный телефон" data-parsley-group="order" data-parsley-required />
                                            </div>
                                        </div>
                                        <div class="form-group col-sm-12">
                                            <label class="col-sm-2 control-label">Email : </label>
                                            <div class="col-sm-10">
                                                <input class="form-control" name="email" type="email" placeholder="Email" data-parsley-group="order" data-parsley-required />
                                            </div>
                                        </div>
                                        <div class="form-group col-sm-12">
                                            <label class="col-sm-2 control-label">Вебсайт : </label>
                                            <div class="col-sm-10">
                                                <input class="form-control" name="website" type="text" placeholder="Вебсайт" data-parsley-group="order" data-parsley-required />
                                            </div>
                                        </div>
                                        <div class="form-group col-sm-12">
                                            <label class="col-sm-2 control-label">Skype : </label>
                                            <div class="col-sm-10">
                                                <input class="form-control" name="skype" type="text" placeholder="Skype" data-parsley-group="order" data-parsley-required />
                                            </div>
                                        </div>
                                        <div class="form-group col-sm-12">
                                            <label class="col-sm-2 control-label">Статус ответа : </label>
                                            <div class="col-sm-10">
                                                <select class="form-control m-b" name="answer_status">
                                                    @foreach($answer_statuses as $val)
                                                    <option value="{{$val->id}}">{{$val->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group col-sm-12">
                                            <label class="col-sm-2 control-label">Пожелания клиента : </label>
                                            <div class="col-sm-10">
                                                <textarea style="width:100%" name="wishes"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group col-sm-12">
                                            <label class="col-sm-2 control-label">Описание последнего звонка : </label>
                                            <div class="col-sm-10">
                                                <textarea style="width:100%" name="description_of_last_call"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group col-sm-12">
                                            <label class="col-sm-2 control-label">Последний контакт : </label>
                                            <div class="col-sm-10">
                                                <div class="form-group" id="data_1">
                                                    <label class="font-normal">Дата последнего контакта с клиентом</label>
                                                    <div class="input-group date">
                                                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" name="last_call" class="form-control" value="{{$date}}">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group col-sm-12">
                                            <label class="col-sm-2 control-label">Следующий звонок назначен : </label>
                                            <div class="col-sm-10">
                                                <div class="form-group" id="data_2">
                                                    <label class="font-normal">Дата запланированного звонка по согласованию с клиентом</label>
                                                    <div class="input-group date">
                                                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" name="next_call" class="form-control" value="03/04/2014">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group col-sm-12">
                                            <label class="col-sm-2 control-label">Город : </label>
                                            <div class="col-sm-10">
                                                <input class="form-control" name="city" type="text" placeholder="Город" data-parsley-group="order" data-parsley-required />
                                            </div>
                                        </div>

                                        <div class="form-group col-sm-12">
                                            <label class="col-sm-2 control-label">Улица : </label>
                                            <div class="col-sm-10">
                                                <input class="form-control" name="street" type="text" placeholder="Улица" data-parsley-group="order" data-parsley-required />
                                            </div>
                                        </div>
                                        <div class="form-group col-sm-12">
                                            <label class="col-sm-2 control-label">Дом : </label>
                                            <div class="col-sm-10">
                                                <input class="form-control" name="house" type="text" placeholder="Дом" data-parsley-group="order" data-parsley-required />
                                            </div>
                                        </div>
                                        <div class="form-group col-sm-12">
                                            <label class="col-sm-2 control-label">Индекс : </label>
                                            <div class="col-sm-10">
                                                <input class="form-control" name="index" type="text" placeholder="Код" data-parsley-group="order" data-parsley-required />
                                            </div>
                                        </div>
                                        <div class="form-group col-sm-12">
                                            <label class="col-sm-2 control-label">Офис : </label>
                                            <div class="col-sm-10">
                                                <input class="form-control" name="office" type="text" placeholder="Офис" data-parsley-group="order" data-parsley-required />
                                            </div>
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
