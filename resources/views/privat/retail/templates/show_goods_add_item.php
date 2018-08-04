<!--[if lt IE 9]>

<![endif]-->
<div class="row">


    <div class="panel">
        <div class="panel-heading">
            <div class="panel-control">
                <button class="btn btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></button>
                <button class="btn btn-default" data-click="panel-reload"><i class="fa fa-refresh"></i></button>
                <button class="btn btn-default" data-click="panel-collapse"><i class="fa fa-chevron-down"></i></button>
                <button class="btn btn-default" data-dismiss="panel"><i class="fa fa-times"></i></button>
            </div>
            <h3 class="panel-title">Фото</h3>
        </div>
        <div class="panel-body">

            <!--Dropzonejs-->
            <!--===================================================-->
            <form id="demo-dropzone" action="/goods/upload_files" class="dropzone">
                <div class="dz-default dz-message">
                    <div class="dz-icon icon-wrap icon-circle icon-wrap-md"> <i class="fa fa-cloud-upload fa-2x"></i> </div>
                    <div>
                        <p class="dz-text">Бросьте файлы для загрузки</p>
                        <p class="text-muted">Или кликните тут</p>
                    </div>
                </div>
                <div class="fallback">
                    <input name="file" type="file" multiple />
                </div>
            </form>
            <!--===================================================-->
            <!-- End Dropzonejs -->

        </div>
    </div>

</div>


<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <a><h5>Видеотур о добавлении и управлении ассортиментом </h5></a>
                <div class="groups_or_goods">

                    <h1 style="display:inline-block;">Добавление новой позиции:</h1>
                    <button  style="margin-top:-10px;font-size:14px;display:inline-block;width:320px" class="copy_existing active btn btn-success btn-labeled fa fa-shopping-cart">Скопировать существующую позицию</button>


                </div>
            </div>
            <div class="row adding_item">
                <!--Default Tabs (Left Aligned)-->
                <!--===================================================-->
                <div class="tab-base tab-base_">

                    <!--Nav Tabs-->
                    <ul class="nav nav-tabs">
                        <li class="active" >
                            <a class="tab_" data-toggle="tab" href="#add_item-lft-tab-1" style="height:40px">
                               Основная информация

                            </a>
                        </li>
                        <li>
                            <a class="tab_" data-toggle="tab" href="#add_item-lft-tab-2" style="height:40px">
                                Характеристики
                                </a>
                        </li>
                        <li>
                            <a class="tab_" data-toggle="tab" href="#add_item-lft-tab-3" style="height:40px">
                                Скидки,сопутствующие товары в подарок
                                </a>
                        </li>

                        <li>
                            <a class="tab_" data-toggle="tab" href="#add_item-lft-tab-4" style="height:40px">
                               Дополнительная информация
                            </a>
                        </li>



                    </ul>

                    <!--Tabs Content-->
                    <div class="tab-content" style="min-height:630px;height:auto;">
                        <div id="add_item-lft-tab-1" class="tab-pane fade active in">

<form>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="panel">

                                        <!--Block Styled Form -->
                                        <!--===================================================-->

                                            <div class="panel-body" style="display: block;">
                                                <div class="row">
                                                    <div class="col-sm-2">

                                                    <label class="control-label">Название<i style="color:#ee1e2d">*</i>
                                                        <div class="info-box" style="cursor:pointer;display:inline-block;width:15px;height:15px;background:#eeee99"><i style="margin-left:5px" class="fa fa-info"></i></div>

                                                    <div class="info_box" style="display:none;position:absolute;z-index:9999;background:#fff;
                                                    width:450px;height:auto;padding:15px;
                                                    -webkit-box-shadow: 0px -1px 28px 0px rgba(0,0,0,0.75);
                                                    -moz-box-shadow: 0px -1px 28px 0px rgba(0,0,0,0.75);
                                                    box-shadow: 0px -1px 28px 0px rgba(0,0,0,0.75);
                                                    "

                                                    >
                                                        Название

                                                        <ul style="list-style: square;padding-left:10px;">
                                                            <li>Название будет показано в каталоге и в результатах поиска.
                                                            </li>
                                                            <li>Длина названия - до 110 символов.</li>
                                                            <li>Можно включать в название ключевые характеристики товара.</li>

                                                        </ul>
                                                            Название НЕ должно содержать «кричащих» слов (например «Купить»),
                                                        города и регионы, контактную информацию.
                                                        Товарам со словами «опт», «оптовый» и «оптом»
                                                        в названии устанавливается тип
                                                        «Товар продается оптом».
                                                    </div>

                                                    </label>

                                                    </div>
                                                    <div class="col-sm-10">
                                                       <input class="form-control" type="text">

                                                    </div>

                                                </div>
                                                <div class="row" style="margin-top:20px;">
                                                    <div class="col-sm-2">

                                                        <label class="control-label">Группа</label>

                                                    </div>
                                                    <div class="col-sm-10">

                                                        <div class="form-group">


                                                                <!-- Default choosen -->
                                                                <!--===================================================-->
                                                                <select data-placeholder="Choose a Country..." class="demo-chosen-select">
                                                                    <option value="United States">United States</option>
                                                                    <option value="United Kingdom">United Kingdom</option>
                                                                    <option value="Afghanistan">Afghanistan</option>
                                                                    <option value="Aland Islands">Aland Islands</option>
                                                                    <option value="Albania">Albania</option>
                                                                    <option value="Algeria">Algeria</option>
                                                                    <option value="American Samoa">American Samoa</option>
                                                                    <option value="Andorra">Andorra</option>
                                                                    <option value="Angola">Angola</option>
                                                                    <option value="Anguilla">Anguilla</option>
                                                                    <option value="Antarctica">Antarctica</option>
                                                                    <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                                                    <option value="Bolivia, Plurinational State of">Bolivia, Plurinational State of</option>
                                                                    <option value="Bonaire, Sint Eustatius and Saba">Bonaire, Sint Eustatius and Saba</option>
                                                                    <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                                                    <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                                                                    <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                                                                    <option value="French Polynesia">French Polynesia</option>
                                                                    <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                                                                    <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                                                    <option value="Honduras">Honduras</option>
                                                                    <option value="Hong Kong">Hong Kong</option>
                                                                </select>
                                                                <!--===================================================-->

                                                        </div>


                                                    </div>

                                                </div>
                                            </div>

                                        <!--===================================================-->
                                        <!--End Block Styled Form -->

                                    </div>



                                </div>
                                <div class="col-sm-6">
                                    <div class="panel">

                                        <!--Block Styled Form -->
                                        <!--===================================================-->

                                            <div class="panel-body" style="display: block;">
                                                <div class="row">
                                                    <div class="col-sm-2">

                                                        <label class="control-label">Наличие
                                                            <div class="info-box" style="cursor:pointer;display:inline-block;width:15px;height:15px;background:#eeee99"><i style="margin-left:5px" class="fa fa-info"></i></div>

                                                            <div class="info_box" style="display:none;position:absolute;z-index:9999;background:#fff;
                                                    width:450px;height:auto;padding:15px;
                                                    -webkit-box-shadow: 0px -1px 28px 0px rgba(0,0,0,0.75);
                                                    -moz-box-shadow: 0px -1px 28px 0px rgba(0,0,0,0.75);
                                                    box-shadow: 0px -1px 28px 0px rgba(0,0,0,0.75);
                                                    "

                                                            >
                                                                <b>Наличие</b>


                                                                Укажите наличие товара или возможность его поставки за определенный срок.
                                                                Если товар временно отсутствует,
                                                                Выберите пункт "нет в наличии".
                                                            </div>

                                                        </label>

                                                    </div>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" type="text">

                                                    </div>

                                                </div>
                                                <div class="row" style="margin-top:20px;">
                                                    <div class="col-sm-2">

                                                        <label class="control-label">Группа</label>

                                                    </div>
                                                    <div class="col-sm-10">

                                                        <div class="form-group">


                                                            <!-- Default choosen -->
                                                            <!--===================================================-->
                                                            <select data-placeholder="Choose a Country..." class="demo-chosen-select">
                                                                <option value="United States">United States</option>
                                                                <option value="United Kingdom">United Kingdom</option>
                                                                <option value="Afghanistan">Afghanistan</option>
                                                                <option value="Aland Islands">Aland Islands</option>
                                                                <option value="Albania">Albania</option>
                                                                <option value="Algeria">Algeria</option>
                                                                <option value="American Samoa">American Samoa</option>
                                                                <option value="Andorra">Andorra</option>
                                                                <option value="Angola">Angola</option>
                                                                <option value="Anguilla">Anguilla</option>
                                                                <option value="Antarctica">Antarctica</option>
                                                                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                                                <option value="Bolivia, Plurinational State of">Bolivia, Plurinational State of</option>
                                                                <option value="Bonaire, Sint Eustatius and Saba">Bonaire, Sint Eustatius and Saba</option>
                                                                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                                                <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                                                                <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                                                                <option value="French Polynesia">French Polynesia</option>
                                                                <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                                                                <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                                                <option value="Honduras">Honduras</option>
                                                                <option value="Hong Kong">Hong Kong</option>
                                                            </select>
                                                            <!--===================================================-->

                                                        </div>


                                                    </div>

                                                </div>
                                            </div>

                                        <!--===================================================-->
                                        <!--End Block Styled Form -->

                                    </div>
                                </div>

                            </div>
                        </form>








                        </div>
                        <div id="add_item-lft-tab-2" class="tab-pane fade">
                            <h4 class="text-thin">Second Tab Content</h4>
                            <ul class="nav navbar-nav">
                                <!-- list elements -->

                                <!-- standard drop down -->
                                <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle"> Управление товарами <b class="caret"></b></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a class="get_design" href="#">Добавить позицию</a></li>
                                        <li class="dropdown-submenu"> <a data-main="main" data-text="/goods_and_groups" href="#">Управление товарами и группами</a>

                                        </li>
                                        <li><a href="#">Управление категориями товаров</a></li>


                                    </ul>
                                    <!-- end dropdown-menu -->
                                </li>
                                <!-- end standard drop down -->
                                <!-- list elements -->

                                <li class="link dropdown"><a data-text="/privat/showCompanyMenu" data-toggle="dropdown" class="dropdown-toggle"> Витрина </a>

                                </li>
                                <!-- end standard drop down -->

                                <li class="link dropdown"><a data-text="/privat/showCompanyMenu" data-toggle="dropdown" class="dropdown-toggle"> Менеджеры групп </a>

                                </li>
                                <!-- end standard drop down -->
                                <!-- standard drop down -->

                            </ul>
                            <!-- end nav navbar-nav -->
                        </div>

                        <div id="add_item-lft-tab-3" class="tab-pane fade">
                            <h4 class="text-thin">Наслаждайся удобством управления заказами</h4>

                            <ul class="nav navbar-nav">
                                <!-- list elements -->
                                <li class="link dropdown"><a data-text="" data-toggle="dropdown" class="dropdown-toggle"> Заказы </a>

                                </li>
                                <li class="link dropdown"><a data-text="" data-toggle="dropdown" class="dropdown-toggle"> Сообщения</a>

                                </li>
                                <li class="link dropdown"><a data-text="" data-toggle="dropdown" class="dropdown-toggle"> Клиенты</a>

                                </li>
                                <li class="link dropdown"><a data-text="" data-toggle="dropdown" class="dropdown-toggle"> Уведомления</a>

                                </li>
                                <!-- standard drop down -->
                                <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle"> Настройка заказов <b class="caret"></b></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a class="get_design" href="#">Управление заказами и сообщениями</a></li>
                                        <li class="dropdown-submenu"> <a href="#">Менеджеры групп товаров</a>

                                        </li>
                                        <li><a href="#">Почта для заказов и сообщений</a></li>


                                    </ul>
                                    <!-- end dropdown-menu -->
                                </li>
                                <!-- end standard drop down -->
                                <!-- list elements -->


                            </ul>
                            <!-- end nav navbar-nav -->
                        </div>
                        <div id="add_item-lft-tab-4" class="tab-pane fade">
                            <h4 class="text-thin">Fourth Tab Content</h4>


                            <ul class="nav navbar-nav">
                                <!-- list elements -->

                                <!-- standard drop down -->
                                <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle"> Оформление <b class="caret"></b></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a class="get_design" href="#">Дизайн сайта</a></li>
                                        <li class="dropdown-submenu"> <a href="#">Управление главной</a>

                                        </li>
                                        <li><a href="#">Дополнительные настройки оформления</a></li>
                                        <li class="dropdown-submenu"> <a href="#">Витрина</a>

                                        </li>
                                        <!-- end dropdown-submenu -->
                                        <li><a href="#">Создание баннера </a></li>

                                    </ul>
                                    <!-- end dropdown-menu -->
                                </li>
                                <!-- end standard drop down -->
                                <!-- list elements -->

                                <li class="link dropdown"><a data-text="/privat/showCompanyMenu" data-toggle="dropdown" class="dropdown-toggle"> Меню сайта </a>

                                </li>
                                <!-- end standard drop down -->
                                <!-- standard drop down -->
                                <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle"> Наполнение <b class="caret"></b></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a class="get_design" href="#">Статьи / Новости</a></li>
                                        <li class="dropdown-submenu"> <a href="#">Файлы</a>

                                        </li>
                                        <li><a href="#">Фотогалерея</a></li>
                                        <li class="dropdown-submenu"> <a href="#">Друшие страницы</a>

                                        </li>


                                    </ul>
                                    <!-- end dropdown-menu -->
                                </li>
                                <!-- end standard drop down -->
                                <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle"> Интернет магазин<b class="caret"></b></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a class="get_design" href="#">Основные настройки интернет магазина</a></li>
                                        <li class="dropdown-submenu"> <a href="#">Добавить способы доставки</a>

                                        </li>
                                        <li><a href="#">Добавить способы оплаты</a></li>
                                        <li class="dropdown-submenu"> <a href="#">Условия возврата</a>

                                        </li>
                                        <li class="dropdown-submenu"> <a href="#">Регионы доставки</a>

                                        </li>
                                        <li class="dropdown-submenu"> <a href="#">Филиалы и представительства</a>

                                        </li>
                                        <li class="dropdown-submenu"> <a href="#">Доменное имя</a>

                                        </li>


                                    </ul>
                                    <!-- end dropdown-menu -->
                                </li>




                                <!-- standard drop down -->
                                <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle"> Данные о компании *<b class="caret"></b></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#">Название компании, логотип, описание, адрес</a></li>

                                        <li><a href="#">Дополнительная информация о компании</a></li>

                                        <!-- end dropdown-submenu -->
                                        <li><a href="#">Реквизиты компании</a></li>
                                        <li><a href="#">Регистрационные документы компании</a></li>
                                        <li><a href="#">График работы</a></li>
                                        <li><a href="#">Компания на карте города</a></li>
                                    </ul>
                                    <!-- end dropdown-menu -->
                                </li>
                                <!-- end standard drop down -->
                                <!-- standard drop down -->
                                <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle"> Отзывы <b class="caret"></b></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#">Отзывы о товарах и услугах</a></li>

                                        <li><a href="#">Быстрые оценки компании</a></li>

                                        <!-- end dropdown-submenu -->
                                        <li><a href="#">Отзывы о компании</a></li>

                                    </ul>
                                    <!-- end dropdown-menu -->
                                </li>
                                <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle"> Статистика <b class="caret"></b></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#">Сводная статистика</a></li>

                                        <li><a href="#">Статистика за период</a></li>

                                        <!-- end dropdown-submenu -->
                                        <li><a href="#">Google Analitics</a></li>
                                        <li><a href="#">Статистика посещений</a></li>

                                    </ul>
                                    <!-- end dropdown-menu -->
                                </li>

                            </ul>
                            <!-- end nav navbar-nav -->






                        </div>




                    </div>
                </div>
                <!--===================================================-->
                <!--End Default Tabs (Left Aligned)-->

            </div>

        </div>

    </div>
</div>


</div>



<style>
    .tab-base_ ul li a{
     padding:15px;
        background:#eee;
    }

    .tab-base_ ul li.active{
    border-top: 1px solid #000;
    border-left: 1px solid #000;
    border-right: 1px solid #000;
    height:45px;
    margin-top:-5px;
    }

    .tab-base_ ul li.active a{
       background:#fff;
    }

    .tab-base .nav-tabs>li:not(.active)>a {
     background-color: rgba(155,255,155,0.35);
        /* opacity: .7; */
        /* -webkit-transition: opacity, 0.3s; */
        /* transition: opacity, 0.3s; */

        opacity: .7;
        -webkit-transition: opacity, 0.3s;
        transition: opacity, 0.3s;
    }
    .tab-base_ ul li a.tab_ {

    }
    #myList .btn-default {
        min-width: 50px;
        min-height: 20px;
        top: -5px;
    }

    #myList .btn-danger {
        min-width: 50px;
        min-height: 20px;
        top: -5px;
    }

</style>




<script>
    $('.info-box').click(function(){
        $(this).parent('label').find(".info_box").toggle();

    })




    $.getScript( "/jasmine/js/demo/form-component.js", function( data, textStatus, jqxhr ) {
        console.log( data ); // Data returned
        console.log( textStatus ); // Success
        console.log( jqxhr.status ); // 200
        console.log( "Load was performed." );
    });


</script>
