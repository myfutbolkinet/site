

    <!--CONTENT CONTAINER-->
    <!--===================================================-->
    <div id="content-container" >

        <!--Page Title-->
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <div class="pageheader">
            <h3><i class="fa fa-home"></i> Tab </h3>
            <div class="breadcrumb-wrapper"> <span class="label">You are here:</span>
                <ol class="breadcrumb">
                    <li> <a href="#"> Home </a> </li>
                    <li class="active"> Tab </li>
                </ol>
            </div>
        </div>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <!--End page title-->

        <!--Page content-->
        <!--===================================================-->
        <div id="page-content" style="border-left:2px dashed #ee1e2d">

            <div class="row">
                <div class="col-sm-12">





                    <!--Default Tabs (Left Aligned)-->
                    <!--===================================================-->
                    <div class="tab-base">

                        <!--Nav Tabs-->
                        <ul class="nav nav-tabs">
                            <?php
                            foreach ($menu as $key=>$m){
                            if($active_menu_item==$key){
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


                                    <a data-toggle="tab" href="<?php echo '#'.$m['href']?>" style="height:40px">
                                        <div  style="top:-10px;position:relative;margin:0 auto;">
                                            <button data-href="<?php echo $m['data_href']?>" style="width:auto;position:relative;margin:0 auto;" class="btn btn-default btn-rounded"><img src="/img/Aufgaben.png"><span style="padding-left:10px;"><?php echo $m['btn_title']?></span></button>
                                        </div>

                                    </a>
                                </li>



                            <?php


                            }
                            ?>


                        </ul>
                        <?php
                        $a=0;
                        $count_m=count($menu);
                        foreach($menu as $key=>$m){
                        if ($a == 0){
                        ?>
                        <div class="tab-content" style="min-height:130px;">

                            <?php

                            }
                            if ($active_menu_item == $key){
                            ?>
                            <div id="<?php echo $m['href'] ?>" class="tab-pane fade active in">
                                <?php

                                }
                                else{
                                ?>
                                <div id="<?php echo $m['href'] ?>" class="tab-pane fade">
                                    <?php

                                    }
                                    if(isset($m['tab'])){
                                    ?>
                                    <h4 class="text-thin"><?php echo (isset($m['tab']['text'])) ? $m['tab']['text'] : "" ?></h4>
                                    <ul class="nav navbar-nav">
                                        <?php
                                        //@TO:DO посчитать числовые ключи в массиве $m['tab']


                                        foreach ($m['tab'] as $k => $m_ul) {
                                            if (is_int($k)) {
                                                //Если есть в массиве числовые ключи то выводить <li><ul>
                                                if (array_key_exists(0, $m_ul)) {
                                                    //посчитать количество числовых $mr
                                                    $count_k = 0;
                                                    foreach ($m_ul as $ks => $ms) {
                                                        if (is_int($ks)) {
                                                            $count_k++;
                                                        }
                                                    }
                                                    $d = 0;
                                                    foreach ($m_ul as $kr => $mr) {
                                                        if (!is_int($kr)) {
                                                            ?>
                                                            <li class="link dropdown">
                                                            <a <?php echo (isset($m_ul['main']) && $m_ul['main'] === true) ? 'data-main="main"' : ""; ?> <?php echo (isset($m_ul['main']) && $m_ul['main'] === true) ? 'data-text="' . $m_ul['data-text'] . '"' : ""; ?>
                                                                    data-toggle="dropdown"
                                                                    class="dropdown-toggle"> <?php echo $m_ul['name'] ?>
                                                                <b class="caret"></b></a>
                                                            <ul class="dropdown-menu" role="menu">

                                                            <?php

                                                        } else {
                                                            ?>
                                                            <li><a class="get_design" href="#"><?php echo $mr['name'] ?></a></li>


                                                            <!--Если последний элемент текущего массива выводить </ul></li>-->
                                                            <?php
                                                            if ($d == $count_k) {
                                                                ?>
                                                                </ul></li>

                                                                <?php

                                                            }
                                                        }


                                                        $d++;
                                                    }
                                                } else {
                                                    ?>
                                                    <li class="link dropdown">
                                                        <a <?php echo (isset($m_ul['main']) && $m_ul['main'] === true) ? 'data-main="main"' : ""; ?> <?php echo (isset($m_ul['main']) && $m_ul['main'] === true) ? 'data-text="' . $m_ul['data-text'] . '"' : ""; ?>
                                                                data-toggle="dropdown"
                                                                class="dropdown-toggle"> <?php echo $m_ul['name'] ?>
                                                        </a></li>

                                                    <?php

                                                }

                                                //Если нету выводит <li>


                                            }

                                            //@TO:DO Если числовой ключ в массива $m['tab'] последий вывести </ul>


                                            //@TO:DO Если числовой ключ в массива $m['tab'] последий вывести </ul>


                                        }

                                        }

                                    ?>

                           </div>
                        <?php

                        $a++;
                        }
                        ?>


                        </div>
                    </div>
                    <!--===================================================-->
                    <!--End Default Tabs (Left Aligned)-->



                </div> <!--tab-base-->
            </div>

        </div>
        <!--===================================================-->
        <!--End page content-->

    <!--===================================================-->
    <!--END CONTENT CONTAINER-->

        <div id="result" style="border-left:2px dashed #ee1e2d" class="col-md-12">
            <div class="row">




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
                                <ul class="nav nav-tabs add_item_edition">
                                    <li class="active" >
                                        <a class="tab_" data-toggle="tab" href="#add_item-lft-tab-1" style="height:40px">
                                            Основная информация

                                        </a>
                                    </li>
                                    <li>
                                        <a class="tab_" data-toggle="tab" href="#add_item-lft-tab-2" style="height:40px">
                                            Фотографии товара
                                        </a>
                                    </li>
                                    <li>
                                        <a class="tab_" data-toggle="tab" href="#add_item-lft-tab-3" style="height:40px">
                                            Характеристики
                                        </a>
                                    </li>
                                    <li>
                                        <a class="tab_" data-toggle="tab" href="#add_item-lft-tab-4" style="height:40px">
                                            Скидки,сопутствующие товары в подарок
                                        </a>
                                    </li>

                                    <li>
                                        <a class="tab_" data-toggle="tab" href="#add_item-lft-tab-5" style="height:40px">
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
                                                                <div class="col-sm-3">

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
                                                                <div class="col-sm-9">
                                                                    <input class="form-control" type="text">

                                                                </div>

                                                            </div>
                                                            <div class="row" style="margin-top:20px;">
                                                                <div class="col-sm-3">

                                                                    <label class="control-label">Группа</label>

                                                                </div>
                                                                <div class="col-sm-9">

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
                                                            <div class="row" style="position:relative;top:-20px;">
                                                            <div class="col-md-3">
                                                            </div>
                                                                <div class="col-md-9">
                                                            <a href="">Создать новую группу</a>
                                                                </div>
                                                            </div>
                                                            <div class="row" style="">
                                                                <div class="col-sm-3">

                                                                    <label class="control-label">Тип<i style="color:#ee1e2d">*</i>
                                                                        <div class="info-box" style="cursor:pointer;display:inline-block;width:15px;height:15px;background:#eeee99"><i style="margin-left:5px" class="fa fa-info"></i></div>

                                                                        <div class="info_box" style="display:none;position:absolute;z-index:9999;background:#fff;
                                                    width:450px;height:auto;padding:15px;
                                                    -webkit-box-shadow: 0px -1px 28px 0px rgba(0,0,0,0.75);
                                                    -moz-box-shadow: 0px -1px 28px 0px rgba(0,0,0,0.75);
                                                    box-shadow: 0px -1px 28px 0px rgba(0,0,0,0.75);
                                                    "

                                                                        >
                                                                            Тип
                                                                            <p>Тип товара определяет размещение товара в каталоге по признаку оптовой продажи.
                                                                                <b>Внимание!</b>
                                                                                Внимательно указывайте для товара тип и категорию,
                                                                                чтобы ваш товар был размещён в правильном разделе каталога.
                                                                                Выбирайте: </p>
                                                                            <ul style="list-style: square;padding-left:10px;">
                                                                                <li>"Товар продается тольео в розницу"
                                                                                    <p>Для потребительских и промышленных товаров с розничными ценами. </p>
                                                                                </li>
                                                                                <li>«Товар продается только оптом»
                                                                                    <p>Для потребительских и промышленных товаров, которые продаются только оптом. </p>
                                                                                </li>
                                                                                <li>«Товар продается оптом и в розницу»
                                                                                    <p>Для товаров, которые продаются и оптом и в розницу.</p>
                                                                                </li>
                                                                                <li>«Услуга»
                                                                                    <p>Для услуг, предоставляемых частным лицам или компаниям. </p>
                                                                                </li>

                                                                            </ul>

                                                                        </div>

                                                                    </label>

                                                                </div>
                                                                <div class="col-sm-9">

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

                                                            <div class="row" style="">
                                                                <div class="col-sm-3">

                                                                    <label class="control-label">Розничная цена
                                                                        <div class="info-box" style="cursor:pointer;display:inline-block;width:15px;height:15px;background:#eeee99"><i style="margin-left:5px" class="fa fa-info"></i></div>

                                                                        <div class="info_box" style="display:none;position:absolute;z-index:9999;background:#fff;
                                                    width:450px;height:auto;padding:15px;
                                                    -webkit-box-shadow: 0px -1px 28px 0px rgba(0,0,0,0.75);
                                                    -moz-box-shadow: 0px -1px 28px 0px rgba(0,0,0,0.75);
                                                    box-shadow: 0px -1px 28px 0px rgba(0,0,0,0.75);
                                                    "

                                                                        >
                                                                            <b>Розничная цена</b>
                                                                            <p>Минимальная стоимость товарной позиции,
                                                                                конечная стоимость которой зависит от разных факторов.
                                                                                На страницах всех товаров или услуг группы, к которой
                                                                                применен шаблон формы предварительного расчета стоимости
                                                                                (из созданных вами в <a>Конструкторе заказов</a>), стоимость
                                                                                отображается только как <b>«Цена от:»</b>.
                                                                                При стандартной форме заказа (примененной по умолчанию)
                                                                                возможен выбор отображения стоимости товарной позиции
                                                                                как <b>«Цена:»</b> либо как <b>«Цена от:»</b></p>


                                                                        </div>

                                                                    </label>

                                                                </div>
                                                                <div class="col-sm-9">

                                                                    <div class="form-group">
                                                                        <div class="col-sm-3">
                                                                        <input class="form-control"  type="text">
                                                                        </div>
                                                                        <div class="col-sm-5">
                                                                        <!-- Default choosen -->
                                                                        <!--===================================================-->
                                                                        <select  data-placeholder="Choose a Country..." class="demo-chosen-select">
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
                                                                        <div class="col-sm-1">
                                                                            <p>за</p>
                                                                        </div>
                                                                        <div class="col-sm-3">
                                                                            <select  data-placeholder="Choose a Country..." class="demo-chosen-select">
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
                                                                        </div>
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
                                                                <div class="col-sm-3">

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
                                                                <div class="col-sm-9">
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
                                                            <div class="row" style="">
                                                                <div class="col-sm-3">

                                                                    <label class="control-label">Количество</label>

                                                                </div>
                                                                <div class="col-sm-9" style="margin-top:-10px">

                                                                    <input class="form-control" type="text">


                                                                </div>

                                                            </div>
                                                            <div class="row" style="margin-top:20px;">
                                                                <div class="col-sm-3">

                                                                    <label class="control-label">Код</label>

                                                                </div>
                                                                <div class="col-sm-9" style="margin-top:0px">

                                                                    <input class="form-control" type="text">


                                                                </div>

                                                            </div>
                                                        </div>

                                                        <!--===================================================-->
                                                        <!--End Block Styled Form -->

                                                    </div>
                                                </div>

                                            </div>
                                            <!--===================================================-->
                                            <!--Start Block CKEDITOR -->
                                            <div class="row">
                                                <div class="col-sm-1">
                                                    <label class="control-label">Описание
                                                        <div class="info-box" style="cursor:pointer;display:inline-block;width:15px;height:15px;background:#eeee99"><i style="margin-left:5px" class="fa fa-info"></i></div>

                                                        <div class="info_box" style="display:none;position:absolute;z-index:9999;background:#fff;
                                                    width:450px;height:auto;padding:15px;
                                                    -webkit-box-shadow: 0px -1px 28px 0px rgba(0,0,0,0.75);
                                                    -moz-box-shadow: 0px -1px 28px 0px rgba(0,0,0,0.75);
                                                    box-shadow: 0px -1px 28px 0px rgba(0,0,0,0.75);
                                                    "

                                                        >
                                                            <b>Описание</b>


                                                            Описание поможет покупателю узнать всё о вашем товаре или услуге. Опишите:
                                                            <ul style="list-style: square;padding-left:10px;">
                                                                <li>Возможности товара/сути услуги.
                                                                </li>
                                                                <li>Конкурентные преимущества.
                                                                </li>
                                                                <li>Технические характеристики.
                                                                </li>
                                                                <li>Специальные предложения для покупателей.
                                                                </li>
                                                                Убедитесь в отсутствии в описании орфографических ошибок.
                                                                Не указывайте в описании ваши контактные данные
                                                                — они будут показаны в блоке «Контактная информация».
                                                            </ul>
                                                        </div>

                                                    </label>
                                                </div>
                                                <div class="col-sm-11">
                                                    <textarea name="editor1" id="editor1" rows="10" cols="80">
                                                                             This is my textarea to be replaced with CKEditor.
                                                         </textarea>

                                                </div>
                                            </div>
                                            <div class="row">

                                                <ul id="categories" class="" style="">


                                                    <?
                                                    class Recursion
                                                    {
                                                        public $level;
                                                        public $lang = 'en';

                                                        public function get_cat($categories)
                                                        {

                                                            if (!$categories) {
                                                                return NULL;
                                                            }
                                                            $arr_cat = array();
                                                            if (count($categories) != 0) {

                                                                //В цикле формируем массив

                                                                foreach ($categories as $key => $row) {

                                                                    //Формируем массив где ключами являются адишники на родительские категории
                                                                    if (empty($arr_cat[$row->parent_id])) {
                                                                        $arr_cat[$row->parent_id] = array();
                                                                    }
                                                                    $arr_cat[$row->parent_id][] = $row;
                                                                }


                                                                //возвращаем массив
                                                                return $arr_cat;
                                                            }
                                                        }


                                                        //вывод каталогa с помощью рекурсии
                                                        public function view_cat($arr, $parent_id = 0, $level ) {

                                                            //Условия выхода из рекурсии
                                                            if (empty($arr[$parent_id])) {
                                                                return;
                                                            }
                                                            if($parent_id !== 0) {
                                                                echo '<ul class="" >';
                                                            }
                                                            //перебираем в цикле массив и выводим на экран
                                                            for ($i = 0; $i < count($arr[$parent_id]); $i++) {



                                                                echo '
                                          <li>
                                        <a href="'.$arr[$parent_id][$i]->link.'">';



                                                                if($parent_id == 0){
                                                                    echo '<div class="" style="position:relative;top:12px;display:inline-block;background-repeat:no-repeat;width:30px;height:30px;background-image:url('.$arr[$parent_id][$i]->icon.');"></div>';
                                                                    echo '<div class="" style="position:relative;top:12px;display:none;background-repeat:no-repeat;width:30px;height:30px;background-image:url('.$arr[$parent_id][$i]->icon_hover.');"></div>';
                                                                }


                                                                if($parent_id == 0) {
                                                                    echo '
                                        <span class="">' . $arr[$parent_id][$i]->name . '</span>
                                        <i class="arrow"></i> 
                                        </a>';
                                                                }
                                                                else{

                                                                    if($level==1){
                                                                        echo '
                                        <span style="font-size:12px;" class="second_level">' . $arr[$parent_id][$i]->name . '</span>
                                        <i class="arrow"></i> 
                                        </a>';
                                                                    }
                                                                    elseif($level==2){
                                                                        echo '
                                        <span style="font-size:12px;" class="third_level">' . $arr[$parent_id][$i]->name . '</span>
                                        <i class="arrow"></i> 
                                        </a>';
                                                                    }

                                                                }
                                                                //рекурсия - проверяем нет ли дочерних категорий
                                                                $this->view_cat($arr, $arr[$parent_id][$i]->id, $level+1);
                                                                echo '</li> ';
                                                            }
                                                            if($parent_id !== 0) {
                                                                echo '</ul>';
                                                            }
                                                        }
                                                    }
                                                    $rec= new Recursion;

                                                    $result = $rec->get_cat($categories);
                                                    //Выводи каталог на экран с помощью рекурсивной функции

                                                    $rec->view_cat($result,0,0);

                                                    ?>


                                                </ul>
                                            </div>
                                        </form>

<style>
    .second_level{
        margin-left:300px;
    }
    .third_level{
        position:relative;
        margin-left:600px;
        display:none;
    }
</style>








                                    </div>
                                    <div id="add_item-lft-tab-2" class="tab-pane fade">
                                        <h4 class="text-thin">Фотографии товара</h4>
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


</div>

<style>
    .nav-tabs li a{
        padding:0px 0px;

    }
    .add_item_edition li a{
        padding:10px 10px;

    }
    .add_item_edition li.active {
        border-top:1px solid #000000;
        border-left:1px solid #000000;
        border-right:1px solid #000000;
    }
    .add_item_edition li :not(.active) {
        border-bottom:1px solid #000000;
        border-top:1px solid #c2e1ee;
        border-left:1px solid #c2e1ee;
        border-right:1px solid #c2e1ee;
    }
    .tab-base{
        -webkit-box-shadow: -4px 10px 5px 0px rgba(184,184,184,1);
        -moz-box-shadow: -4px 10px 5px 0px rgba(184,184,184,1);
        box-shadow: -4px 10px 5px 0px rgba(184,184,184,1);

    }
.control-label{float:right;}
</style>
<script>

    $('.info-box').click(function(){
        $(this).parent('label').find(".info_box").toggle();

    })
    $( document ).ready(function() {
        $('.nav-tabs').find('.active').find('.btn').removeClass('btn-default')
        $('.nav-tabs').find('.active').find('.btn').addClass('btn-primary')


    })
    $('.nav-tabs li').click(function(){


        $('.nav-tabs li').find('.btn').removeClass('btn-primary')
        $('.nav-tabs li').find('.btn').addClass('btn-default')

        $(this).find('.btn').removeClass('btn-default')
        $(this).find('.btn').addClass('btn-primary');


    })

</script>

<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('.get_design').click(function(){

        $.ajax({
            type: 'POST',
            dataType: 'json',
            url: '/get_designs',
            data:'design=all',
            success: function(jsondata){
                $('.results').html('Name = ' + jsondata.name + ', Nickname = ' + jsondata.nickname);
            }
        });

    })

</script>




        <script>
            // Replace the <textarea id="editor1"> with a CKEditor
            // instance, using default configuration.
            CKEDITOR.replace( 'editor1' );
        </script>























