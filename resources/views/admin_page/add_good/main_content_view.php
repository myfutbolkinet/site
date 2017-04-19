

    <div class="boxed">

        <!--CONTENT CONTAINER-->
        <!--===================================================-->
        <div id="content-container">

            <!--Page Title-->
            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
            <div class="pageheader">
                <h3><i class="fa fa-home"></i> Добавление товара </h3>
                <div class="breadcrumb-wrapper"> <span class="label">Вы здесь:</span>
                    <ol class="breadcrumb">
                        <li> <a href="#"> Админ панель </a> </li>
                        <li class="active"> добавление товара </li>
                    </ol>
                </div>
            </div>



            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
            <!--End page title-->

            <!--Page content-->
            <!--===================================================-->
            <div id="page-content">

                <div class="row">
                    <div class="col-md-12">
                        <section class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Форма добавления товара</h3>
                            </div>
                            <div class="panel-body">
                                <h3 class="panel-title">Выберите какие присутствуют цвета в данной модели</h3>

                                <!-- START Form Wizard -->


<script>


</script>












                                <form class="form-horizontal form-bordered" method="POST" action="/functions_form" id="wizard-validate">
                                    <!-- Wizard Container 1 -->




                                    <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
                                    <div class="wizard-title">  Информация о товаре</div>
                                    <div class="wizard-container">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <h5 class="semibold text-primary">
                                                    <i class="fa fa-sign-in"></i> Основная информация о товаре
                                                </h5>
                                                <p class="text-muted"> Заполните основную информацию о товаре </p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label"> Название товара : </label>
                                            <div class="col-sm-6">
                                                <input class="form-control" name="name" type="text" placeholder="Наберить назву товару"  data-parsley-group="order" data-parsley-required />




                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label"> Артикул : </label>
                                            <div class="col-sm-6">
                                                <input class="form-control" name="artikul" type="text" placeholder="Наберить артикул товару" data-parsley-group="order" data-parsley-required />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label"> Категорія : </label>
                                            <div class="col-sm-6">
                                                <select class="form-control" name="category" placeholder="Виберить категорію" />
                                                <?php
                                                foreach($categories as $key=>$val){
                                                    if($val['original']['parent_id']!=0){
                                                    ?>
                                                    <option value="<?php echo $val['original']['id'];?>"><?php echo $val['original']['name'];?></option>
                                                    <?
                                                }}
                                                ?>

                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label"> Тип : </label>
                                            <div class="col-sm-6">
                                                <select class="form-control" name="type" placeholder="Виберить тип товару" />
                                                <?php
                                                foreach($types as $key=>$val){
                                                    ?>
                                                    <option value="<?php echo $val['original']['id'];?>"><?php echo $val['original']['name'];?></option>
                                                    <?
                                                }
                                                ?>

                                                </select>
                                            </div>
                                        </div>
                                        <div class=" form-group  ">
                                            <label class="col-sm-2 control-label"> Ціна : </label>
                                            <div class="col-sm-6 input-group mar-btm">
                                                <span class="input-group-addon"><i class="fa fa-dollar fa-lg"></i></span>
                                                <input class="form-control" name="price" type="text" placeholder="Введите цену"  data-parsley-group="order" data-parsley-required >
                                                <span class="input-group-addon">.00</span>
                                            </div>

                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label"> Количество в партии : </label>
                                            <div class="col-sm-6 input-group mar-btm">
                                               <input class="form-control" name="count" type="text" placeholder="Введите количество данной модели на складе"  data-parsley-group="order" data-parsley-required >

                                            </div>

                                        </div>
                                        <div class=" form-group  ">
                                            <label class="col-sm-2 control-label"> Скидка : </label>
                                            <div class="col-sm-6 input-group mar-btm">
                                                <span class="input-group-addon"><i class="fa fa-lg"></i></span>
                                                <input class="form-control" name="discount" type="text" placeholder="Введите первоначальную скидку"  data-parsley-group="order" data-parsley-required >
                                                <span class="input-group-addon">%</span>
                                            </div>

                                        </div>


                                        <div class=" form-group  ">
                                            <label class="col-sm-2 control-label"> Размеры : </label>
                                            <div class="col-sm-10 input-group mar-btm" style="height:100px">

                                                <div class="pad-ver" >

                                                    <!--Checkboxes without label-->
                                                    <!--===================================================-->

                                                    <div class="panel" style="margin-top:0px">


                                                        <div id="category-list-4" class="collapse in" style="height: auto;">
                                                            <div class="panel-body">
                                                                <ul class="filter-size-list clearfix">

                                                                    <li style="display:inline-block">
                                                                        <div style="position:relative;text-align:center;float:left;display:inline-block;width:50px;height:50px;border:#eee 1px solid">
                                                                            <h3 style="position:absolute;left:5px;top:-5px;">34</h3>
                                                                            <input style="position:absolute;z-index:1;left:15px;top:15px;" class="size_ " type="checkbox" name="34" value="34">
                                                                        </div>
                                                                    </li>
                                                                    <li style="display:inline-block">
                                                                        <div style="position:relative;text-align:center;float:left;display:inline-block;width:50px;height:50px;border:#eee 1px solid">
                                                                            <h3 style="position:absolute;left:5px;top:-5px;">35</h3>
                                                                            <input style="position:absolute;z-index:1;left:15px;top:15px;" class="size_ " type="checkbox" name="35" value="35">
                                                                        </div>
                                                                    </li>
                                                                    <li style="display:inline-block">
                                                                        <div style="position:relative;text-align:center;float:left;display:inline-block;width:50px;height:50px;border:#eee 1px solid">
                                                                            <h3 style="position:absolute;left:5px;top:-5px;">36</h3>
                                                                            <input style="position:absolute;z-index:1;left:15px;top:15px;" class="size_ " type="checkbox" name="36" value="36">
                                                                        </div>
                                                                    </li>
                                                                    <li style="display:inline-block">
                                                                        <div style="position:relative;text-align:center;float:left;display:inline-block;width:50px;height:50px;border:#eee 1px solid">
                                                                            <h3 style="position:absolute;left:5px;top:-5px;">37</h3>
                                                                            <input style="position:absolute;z-index:1;left:15px;top:15px;" class="size_ " type="checkbox" name="37" value="37">
                                                                        </div>
                                                                    </li>
                                                                    <li style="display:inline-block">
                                                                        <div style="position:relative;text-align:center;float:left;display:inline-block;width:50px;height:50px;border:#eee 1px solid">
                                                                            <h3 style="position:absolute;left:5px;top:-5px;">38</h3>
                                                                            <input style="position:absolute;z-index:1;left:15px;top:15px;" class="size_ " type="checkbox" name="38" value="38">
                                                                        </div>
                                                                    </li>
                                                                    <li style="display:inline-block">
                                                                        <div style="position:relative;text-align:center;float:left;display:inline-block;width:50px;height:50px;border:#eee 1px solid">
                                                                            <h3 style="position:absolute;left:5px;top:-5px;">39</h3>
                                                                            <input style="position:absolute;z-index:1;left:15px;top:15px;" class="size_ " type="checkbox" name="39" value="39">
                                                                        </div>
                                                                    </li>
                                                                    <li style="display:inline-block">
                                                                        <div style="position:relative;text-align:center;float:left;display:inline-block;width:50px;height:50px;border:#eee 1px solid">
                                                                            <h3 style="position:absolute;left:5px;top:-5px;">40</h3>
                                                                            <input style="position:absolute;z-index:1;left:15px;top:15px;" class="size_ " type="checkbox" name="40" value="40">
                                                                        </div>
                                                                    </li>



                                                                </ul>
                                                            </div><!-- End .panel-body -->
                                                        </div><!-- #collapse -->
                                                    </div>

                                                </div>
                                            </div>

                                        </div>


                                <div class=" form-group  ">
                                <label class="col-sm-2 control-label"> Цвета : </label>
                                    <div class="col-sm-10 input-group mar-btm" style="height:100px">

                                        <div class="pad-ver" >

                                            <!--Checkboxes without label-->
                                            <!--===================================================-->

                                            <div class="panel" style="margin-top:0px">
                                                

                                                <div id="category-list-4" class="collapse in" style="height: auto;">
                                                    <div class="panel-body">
                                                        <ul class="filter-color-list clearfix">

                                                            <li style="display:inline-block">
                                                                <div style="float:left;display:inline-block;width:15px;height:20px;">
                                                                    <input style="position:relative;z-index:1;float:left;margin-left:50px;margin-top:20px;display:inline-block" class="che_ " type="checkbox" name="color_bezh" value="ffe2af">
                                                                </div>
                                                                <a href="#" data-bgcolor="#ffe2af" class="filter-color-box" style="border:1px solid #eee;position:relative;z-index:0;float:left;display:inline-block;width:50px;height:50px;background:#ffe2af""></a>
                                                            </li>
                                                            <li style="display:inline-block">
                                                           <div style="float:left;display:inline-block;width:15px;height:20px;">
                                                               <input style="position:relative;z-index:1;float:left;margin-left:50px;margin-top:20px;display:inline-block" class="che_ " type="checkbox" name="color_white" value="ffffff">
                                                           </div>
                                                           <a href="#" data-bgcolor="#fff" class="filter-color-box" style="border:1px solid #eee;position:relative;z-index:0;float:left;display:inline-block;width:50px;height:50px;background:#ffddddfff""></a>
                                                           </li>
                                                            <li style="display:inline-block">
                                                                <div style="float:left;display:inline-block;width:15px;height:20px;">
                                                                    <input style="position:relative;z-index:1;float:left;margin-left:50px;margin-top:20px;display:inline-block" class="che_ " type="checkbox" name="color_red" value="ff0000">
                                                                </div>
                                                                <a href="#" data-bgcolor="#ff0000" class="filter-color-box" style="border:1px solid #eee;position:relative;z-index:0;float:left;display:inline-block;width:50px;height:50px;background-color: rgb(255, 0, 0)"></a>
                                                            </li>
                                                            <li style="display:inline-block">
                                                                <div style="float:left;display:inline-block;width:15px;height:20px;">
                                                                    <input style="position:relative;z-index:1;float:left;margin-left:50px;margin-top:20px;display:inline-block" class="che_ " type="checkbox" name="color_yellow" value="ffff33">
                                                                </div>
                                                                <a href="#" data-bgcolor="#ffff33" class="filter-color-box" style="border:1px solid #eee;position:relative;z-index:0;float:left;display:inline-block;width:50px;height:50px;background-color:#ffff33"></a>

                                                            </li>
                                                            <li style="display:inline-block">
                                                                <div style="float:left;display:inline-block;width:15px;height:20px;">
                                                                    <input style="position:relative;z-index:1;float:left;margin-left:50px;margin-top:20px;display:inline-block" class="che_ " type="checkbox" name="color_orange" value="ffff33">
                                                                </div>

                                                                <a href="#" data-bgcolor="#ff9900" class="filter-color-box" style="border:1px solid #eee;position:relative;z-index:0;float:left;display:inline-block;width:50px;height:50px;background-color:#ff9900"></a>
                                                            </li>
                                                            <li style="display:inline-block">
                                                                <div style="float:left;display:inline-block;width:15px;height:20px;">
                                                                    <input style="position:relative;z-index:1;float:left;margin-left:50px;margin-top:20px;display:inline-block" class="che_ " type="checkbox" name="color_pink" value="ff9999">
                                                                </div>

                                                                <a href="#" data-bgcolor="#ff9999" class="filter-color-box" style="border:1px solid #eee;position:relative;z-index:0;float:left;display:inline-block;width:50px;height:50px;background-color:#ff9999"></a>

                                                            </li>
                                                            <li style="display:inline-block">
                                                                <div style="float:left;display:inline-block;width:15px;height:20px;">
                                                                    <input style="position:relative;z-index:1;float:left;margin-left:50px;margin-top:20px;display:inline-block" class="che_ " type="checkbox" name="color_green" value="99cc33">
                                                                </div>

                                                                <a href="#" data-bgcolor="#99cc33" class="filter-color-box" style="border:1px solid #eee;position:relative;z-index:0;float:left;display:inline-block;width:50px;height:50px;background-color:#99cc33"></a>

                                                            </li>
                                                            <li style="display:inline-block">
                                                                <div style="float:left;display:inline-block;width:15px;height:20px;">
                                                                    <input style="position:relative;z-index:1;float:left;margin-left:50px;margin-top:20px;display:inline-block" class="che_ " type="checkbox" name="color_dark_green" value="339933">
                                                                </div>

                                                                <a href="#" data-bgcolor="#339933" class="filter-color-box" style="border:1px solid #eee;position:relative;z-index:0;float:left;display:inline-block;width:50px;height:50px;background-color:#339933"></a>

                                                            </li>
                                                            <li style="display:inline-block">
                                                                <div style="float:left;display:inline-block;width:15px;height:20px;">
                                                                    <input style="position:relative;z-index:1;float:left;margin-left:50px;margin-top:20px;display:inline-block" class="che_ " type="checkbox" name="color_malin" value="ff3366">
                                                                </div>

                                                                <a href="#" data-bgcolor="#ff3366" class="filter-color-box" style="border:1px solid #eee;position:relative;z-index:0;float:left;display:inline-block;width:50px;height:50px;background-color:#ff3366"></a>
                                                            </li>
                                                            <li style="display:inline-block">
                                                                <div style="float:left;display:inline-block;width:20px;height:20px;">
                                                                    <input style="position:relative;z-index:1;float:left;margin-left:50px;margin-top:20px;display:inline-block" class="che_ " type="checkbox" name="color_violet" value="cc33ff">
                                                                </div>

                                                                <a href="#" data-bgcolor="#cc33ff" class="filter-color-box" style="border:1px solid #eee;position:relative;z-index:0;float:left;display:inline-block;width:50px;height:50px;background-color:#cc33ff"></a>
                                                            </li>
                                                            <li style="display:inline-block">
                                                                <div style="float:left;display:inline-block;width:15px;height:20px;">
                                                                    <input style="position:relative;z-index:1;float:left;margin-left:50px;margin-top:20px;display:inline-block" class="che_ " type="checkbox" name="color_light_violet" value="9966cc">
                                                                </div>

                                                                <a href="#" data-bgcolor="#9966cc" class="filter-color-box" style="border:1px solid #eee;position:relative;z-index:0;float:left;display:inline-block;width:50px;height:50px;background-color:#9966cc"></a>
                                                            </li>
                                                            <li style="display:inline-block">
                                                                <div style="float:left;display:inline-block;width:15px;height:20px;">
                                                                    <input style="position:relative;z-index:1;float:left;margin-left:50px;margin-top:20px;display:inline-block" class="che_ " type="checkbox" name="color_light_blue" value="99ccff">
                                                                </div>

                                                                <a href="#" data-bgcolor="#99ccff" class="filter-color-box" style="border:1px solid #eee;position:relative;z-index:0;float:left;display:inline-block;width:50px;height:50px;background-color:#99ccff"></a>
                                                            </li>
                                                            <li style="display:inline-block">
                                                                <div style="float:left;display:inline-block;width:15px;height:20px;">
                                                                    <input style="position:relative;z-index:1;float:left;margin-left:50px;margin-top:20px;display:inline-block" class="che_ " type="checkbox" name="color_blue" value="3333cc">
                                                                </div>

                                                                <a href="#" data-bgcolor="#3333cc" class="filter-color-box" style="border:1px solid #eee;position:relative;z-index:0;float:left;display:inline-block;width:50px;height:50px;background-color:#3333cc"></a>
                                                            </li>
                                                            <li style="display:inline-block">
                                                                <div style="float:left;display:inline-block;width:15px;height:20px;">
                                                                    <input style="position:relative;z-index:1;float:left;margin-left:50px;margin-top:20px;display:inline-block" class="che_ " type="checkbox" name="color_grey" value="999999">
                                                                </div>

                                                                <a href="#" data-bgcolor="#999999" class="filter-color-box" style="border:1px solid #eee;position:relative;z-index:0;float:left;display:inline-block;width:50px;height:50px;background-color:#999999"></a>
                                                            </li>
                                                            <li style="display:inline-block">
                                                                <div style="float:left;display:inline-block;width:15px;height:20px;">
                                                                    <input style="position:relative;z-index:1;float:left;margin-left:50px;margin-top:20px;display:inline-block" class="che_ " type="checkbox" name="color_brown" value="663300">
                                                                </div>

                                                                <a href="#" data-bgcolor="#663300" class="filter-color-box" style="border:1px solid #eee;position:relative;z-index:0;float:left;display:inline-block;width:50px;height:50px;background-color:#663300"></a>
                                                            </li>
                                                            <li style="display:inline-block">
                                                                <div style="float:left;display:inline-block;width:15px;height:20px;">
                                                                    <input style="position:relative;z-index:1;float:left;margin-left:50px;margin-top:20px;display:inline-block" class="che_ " type="checkbox" name="color_black" value="000">
                                                                </div>

                                                                <a href="#" data-bgcolor="#000" class="filter-color-box" style="border:1px solid #eee;position:relative;z-index:0;float:left;display:inline-block;width:50px;height:50px;background-color:#000"></a>
                                                            </li>
                                                        </ul>
                                                    </div><!-- End .panel-body -->
                                                </div><!-- #collapse -->
                                            </div>















                                            <!--===================================================-->


                                        </div>
                                    </div>

                                </div>









                                        <div class=" form-group  ">

                                        </div>
                                    </div>
                                    <!--/ Wizard Container 1 -->
                                    <!-- Wizard Container 2 -->
                                    <div class="wizard-title"> Опис характеристика товару </div>
                                    <div class="wizard-container">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <h4 class="semibold text-primary"> <i class="fa fa-user"></i> Опис товару </h4>
                                                <p class="text-muted"> Характеристика </p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Опис товару: <span class="text-danger">*</span> </label>
                                                    <textarea name="editor1"></textarea>

                                                </div>
                                                <div class="col-md-6">
                                                    <label>Особливі умови придбання: <span class="text-danger">*</span> </label>
                                                    <textarea name="editor2"></textarea>

                                                </div>

                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <h4 class="semibold text-primary"> <i class="fa fa-cog"></i> Відео товару </h4>
                                                <p class="text-muted"> Додайте посилання на відео з ютубу </p>
                                            </div>
                                        </div>



                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Відео1: </label>
                                                    <input type="text" name="video1" class="form-control" placeholder="Посилання на відео з Ютубу" />
                                                </div>
                                                <div class="col-md-6">
                                                    <label> Відео2: </label>
                                                    <input type="text" name="video2" class="form-control" placeholder="Посилання на відео з Ютубу" />
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                    <!--/ Wizard Container 2 -->



                                    <!--/ Wizard Container 3 -->
                                    <!-- Wizard Container 4 -->

                                    <div class="wizard-title"> Основне Фото товару </div>
                                    <div class="wizard-container">






                                        <div id="appl_window1">

                                            <div id="close_window1" class="del_prod_btn"></div>
                                            <div id="add_photo1">
                                                <br>
                                                <h6>Выберите
                                                    <?
                                                    $count_images=1;
                                                    $image_width=1200;
                                                    $image_height=800;
                                                    $image_type='logo';
                                                    $image_index=1;
                                                    echo $count_images;
                                                    if($count_images==1){
                                                        echo "фотографию";
                                                    }
                                                    else if($count_images>1 && $count_images<5){
                                                        echo "фотографии";
                                                    }
                                                    else if($count_images>4){
                                                        echo "фотографий";
                                                    }
                                                    ?>
                                                    (не более 2М)
                                                    <?=$image_width?>х<?=$image_height?>px -
                                                    <?if($image_type=='logo'){
                                                        echo "логотип данного производителя";
                                                    }
                                                    else if($image_type=='door'){
                                                        echo "фотографии выбранной двери";
                                                    }
                                                    else if($image_type=='material' or $image_type=='material_edit'){
                                                        echo "фотографии материала";
                                                    }
                                                    ?>
                                                </h6>
                                                <label>Фотография*<span>&nbsp;&nbsp;&nbsp;       Чтобы добавить картинку, нажми обзор или просто перетащи в желтую область ниже &dArr;<hr></span></label>
                                                <br>
                                                <input type="file" name="my-pic[]" id="file-field4" class="image" multiple="multiple"/>
                                                <a id="cancel-all4">Отменить все</a>
                                                <div id="img-container4">
                                                    <ul id="img-list4"></ul>
                                                </div>
                                                <div id="leftpanel1">
                                                    <div id="actions1">


                                                        <input type="hidden" name="lwidth" value="<?=$image_width?>">
                                                        <input type="hidden" name="lheight" value="<?=$image_height?>">
                                                        <input type="hidden" name="lproducers" value="/upload">
                                                        <input type="hidden" name="ltype" value="<?=$image_type?>">
                                                        <span id="info-count1">Изображений не выбрано</span><br/>
                                                        Общий размер:<span id="info-size1">0</span> Кб<br/><br/>
                                                    </div>
                                                    <div id="console4"></div>
                                                    <div style="width:250px;" class="btn btn-primary apply_btn1">Сохранить фото на сервере</div>

                                                </div>
                                            </div>
                                        </div>

                                        <script>




                                            $(document).ready(function() {


                                                // Консоль
                                                var $console = $("#console4");

                                                // Инфа о выбранных файлах
                                                var countInfo = $("#info-count1");
                                                var sizeInfo = $("#info-size1");

                                                // ul-список, содержащий миниатюрки выбранных файлов
                                                var imgList = $('#img-list4');

                                                // Контейнер, куда можно помещать файлы методом drag and drop
                                                var dropBox = $('#img-container4');

                                                // Счетчик всех выбранных файлов и их размера
                                                var imgCount = 0;
                                                var imgSize = 0;


                                                // Стандарный input для файлов
                                                var fileInput = $('#file-field4');

                                                // Тестовый canvas
                                                /*  var canvas = document.getElementById('canvas');
                                                 var ctx = canvas.getContext("2d");
                                                 ctx.fillStyle = "rgb(128,128,128)";
                                                 ctx.fillRect (0, 0, 150, 150);
                                                 ctx.fillStyle = "rgb(200,0,0)";
                                                 ctx.fillRect (10, 10, 55, 50);
                                                 ctx.fillStyle = "rgba(0, 0, 200, 0.5)";
                                                 ctx.fillRect (30, 30, 55, 50); */


                                                ////////////////////////////////////////////////////////////////////////////
                                                // Подключаем и настраиваем плагин загрузки

                                                fileInput.damnUploader({
                                                    // куда отправлять
                                                    url: '/functions_image',
                                                    // имитация имени поля с файлом (будет ключом в $_FILES, если используется PHP)
                                                    fieldName:  'my-pic',
                                                    // дополнительно: элемент, на который можно перетащить файлы (либо объект jQuery, либо селектор)
                                                    dropBox: dropBox,
                                                    // максимальное кол-во выбранных файлов (если не указано - без ограничений)
                                                    limit: <?echo $count_images?>,
                                                    // когда максимальное кол-во достигнуто (вызывается при каждой попытке добавить еще файлы)
                                                    onLimitExceeded: function() {
                                                        log('Допустимое кол-во файлов уже выбрано');
                                                    },
                                                    // ручная обработка события выбора файла (в случае, если выбрано несколько, будет вызвано для каждого)
                                                    // если обработчик возвращает true, файлы добавляются в очередь автоматически
                                                    onSelect: function(file) {
                                                        addFileToQueue(file);
                                                        return false;
                                                    },
                                                    // когда все загружены
                                                    onAllComplete: function() {

                                                        log('<span style="color: white;">*** Все загрузки завершены! ***</span>');
                                                        imgCount = 0;
                                                        imgSize = 0;
                                                        updateInfo();

                                                    }
                                                });



                                                ////////////////////////////////////////////////////////////////////////////
                                                // Вспомогательные функции

                                                // Вывод в консоль
                                                function log(str) {
                                                    $('<p/>').html(str).prependTo($console);
                                                }

                                                // Вывод инфы о выбранных
                                                function updateInfo() {
                                                    countInfo.text( (imgCount == 0) ? 'Изображений не выбрано' : ('Изображений выбрано: '+imgCount));
                                                    sizeInfo.text( (imgSize == 0) ? '-' : Math.round(imgSize / 1024));
                                                }

                                                // Обновление progress bar'а
                                                function updateProgress(bar, value) {
                                                    var width = bar.width();
                                                    var bgrValue = -width + (value * (width / 100));
                                                    bar.attr('rel', value).css('background-position', bgrValue+'px center').text(value+'%');
                                                }

                                                // преобразование формата dataURI в Blob-данные
                                                function dataURItoBlob(dataURI) {
                                                    var BlobBuilder = (window.MSBlobBuilder || window.MozBlobBuilder || window.WebKitBlobBuilder || window.BlobBuilder);
                                                    if (!BlobBuilder) {
                                                        return false;
                                                    }
                                                    // convert base64 to raw binary data held in a string
                                                    // doesn't handle URLEncoded DataURIs
                                                    var pieces = dataURI.split(',');
                                                    var byteString = (pieces[0].indexOf('base64') >= 0) ? atob(pieces[1]) : unescape(pieces[1]);
                                                    // separate out the mime component
                                                    var mimeString = pieces[0].split(':')[1].split(';')[0];
                                                    // write the bytes of the string to an ArrayBuffer
                                                    var ab = new ArrayBuffer(byteString.length);
                                                    var ia = new Uint8Array(ab);
                                                    for (var i = 0; i < byteString.length; i++) {
                                                        ia[i] = byteString.charCodeAt(i);
                                                    }
                                                    // write the ArrayBuffer to a blob, and you're done
                                                    var bb = new BlobBuilder();
                                                    bb.append(ab);
                                                    return bb.getBlob(mimeString);
                                                }



                                                // Отображение выбраных файлов, создание миниатюр и ручное добавление в очередь загрузки.
                                                function addFileToQueue(file) {

                                                    // Создаем элемент li и помещаем в него название, миниатюру и progress bar
                                                    var li = $('<li/>').appendTo(imgList);
                                                    /* var title = $('<div/>').text(file.name+' ').appendTo(li); */
                                                    var cancelButton = $('<a/>').attr({
                                                        href: '#cancel',
                                                        title: 'отменить'
                                                    }).html('<img height="15" width="15" alt="X" src="/img/deleteIcon.png">').appendTo(/* title */li);

                                                    // Если браузер поддерживает выбор файлов (иначе передается специальный параметр fake,
                                                    // обозночающий, что переданный параметр на самом деле лишь имитация настоящего File)
                                                    if(!file.fake) {

                                                        // Отсеиваем не картинки
                                                        var imageType = /video.*/;
                                                        var imageType2 = /image.*/;
                                                        if (!file.type.match(imageType) && !file.type.match(imageType2)) {
                                                            log('Файл отсеян: `'+file.name+'` (тип '+file.type+')');
                                                            return true;
                                                        }

                                                        // Добавляем картинку и прогрессбар в текущий элемент списка
                                                        var div = $('<div/>').addClass('photo_frame').attr('rel', '0').appendTo(li);
                                                        var img = $('<img/>').appendTo(li);
                                                        /* var pBar = $('<div/>').addClass('progress').attr('rel', '0').text('0%').appendTo(li); */
                                                        // Создаем объект FileReader и по завершении чтения файла, отображаем миниатюру и обновляем
                                                        // инфу обо всех файлах (только в браузерах, подерживающих FileReader)
                                                        if($.support.fileReading) {
                                                            var reader = new FileReader();
                                                            reader.onload = (function(aImg) {
                                                                return function(e) {

                                                                    aImg.attr('src', e.target.result);

                                                                    aImg.attr('height', 100);
                                                                };
                                                            })(img);
                                                            reader.readAsDataURL(file);
                                                        }

                                                        log('Картинка добавлена: `'+file.name + '` (' +Math.round(file.size / 1024) + ' Кб)');
                                                        imgSize += file.size;
                                                    } else {
                                                        log('Файл добавлен: '+file.name);
                                                    }

                                                    imgCount++;
                                                    updateInfo();

                                                    // Создаем объект загрузки
                                                    var uploadItem = {
                                                        file: file,
                                                        /*  onProgress: function(percents) {
                                                         updateProgress(pBar, percents);
                                                         }, */
                                                        onComplete: function(successfully, data, errorCode) {

                                                            if(successfully) {

                                                                log('Файл `'+this.file.name+'` загружен, полученные данные:<br/>*****<br/>'+data+'<br/>*****');
                                                            } else{
                                                                if(!this.cancelled) {
                                                                    log('<span style="color:red;">Файл `'+this.file.name+'`: ошибка при загрузке. Код: '+errorCode+'</span>');
                                                                }
                                                            }
                                                        }
                                                    };

                                                    // ... и помещаем его в очередь
                                                    var queueId = fileInput.damnUploader('addItem', uploadItem);

                                                    // обработчик нажатия ссылки "отмена"
                                                    cancelButton.click(function() {
                                                        fileInput.damnUploader('cancel', queueId);
                                                        li.remove();
                                                        imgCount--;
                                                        imgSize -= file.fake ? 0 : file.size;
                                                        updateInfo();
                                                        log(file.name+' удален из очереди');
                                                        return false;
                                                    });

                                                    return uploadItem;
                                                }




                                                ////////////////////////////////////////////////////////////////////////////
                                                // Обработчики событий


                                                // Обработка событий drag and drop при перетаскивании файлов на элемент dropBox
                                                dropBox.bind({
                                                    dragenter: function() {
                                                        $(this).addClass('highlighted');
                                                        return false;
                                                    },
                                                    dragover: function() {
                                                        return false;
                                                    },
                                                    dragleave: function() {
                                                        $(this).removeClass('highlighted');
                                                        return false;
                                                    }
                                                });


                                                // Обаботка события нажатия на кнопку "Загрузить все".
                                                // стартуем все загрузки
                                                $(".apply_btn1").click(function() {
                                                    fileInput.damnUploader('startUpload');

                                                });


                                                // Обработка события нажатия на кнопку "Отменить все"
                                                $("#cancel-all4").click(function(){
                                                    fileInput.damnUploader('cancelAll');
                                                    imgCount = 0;
                                                    imgSize = 0;
                                                    updateInfo();
                                                    log('*** Все загрузки отменены ***');
                                                    imgList.empty();
                                                });


                                                // Обработка нажатия на тестовую канву
                                                /*     $(canvas).click(function() {
                                                 var blobData;
                                                 if (canvas.toBlob) {
                                                 // ожидается, что вскоре браузерами будет поддерживаться метод toBlob() для объектов Canvas
                                                 blobData = canvas.toBlob();
                                                 } else {
                                                 // ... а пока - конвертируем вручную из dataURI
                                                 blobData = dataURItoBlob(canvas.toDataURL('image/png'));
                                                 }
                                                 if (blobData === false) {
                                                 log("Ваш браузер не поддерживает BlobBuilder");
                                                 return ;
                                                 }
                                                 addFileToQueue(blobData)
                                                 }); */




                                                ////////////////////////////////////////////////////////////////////////////
                                                // Проверка поддержки File API, FormData и FileReader

                                                if(!$.support.fileSelecting) {
                                                    log('Ваш браузер не поддерживает выбор файлов (загрузка будет осуществлена обычной отправкой формы)');
                                                    $("#dropBox-label").text('если бы ты использовал хороший браузер, файлы можно было бы перетаскивать прямо в область ниже!');
                                                } else {
                                                    if(!$.support.fileReading) {
                                                        log('* Ваш браузер не умеет читать содержимое файлов (миниатюрки не будут показаны)');
                                                    }
                                                    if(!$.support.uploadControl) {
                                                        log('* Ваш браузер не умеет следить за процессом загрузки (progressbar не работает)');
                                                    }
                                                    if(!$.support.fileSending) {
                                                        log('* Ваш браузер не поддерживает объект FormData (отправка с ручной формировкой запроса)');
                                                    }
                                                    log('Выбор файлов поддерживается');
                                                }
                                                log('*** Проверка поддержки ***');

                                               
                                            });

                                            
                                        </script>





                                    </div>

                                    <!-- Wizard Container 3 -->

                                    <div class="wizard-title"> Фото товара </div>
                                    <div class="wizard-container">






                                        <div id="appl_window">

                                            <div id="close_window" class="del_prod_btn"></div>
                                            <div id="add_photo">
                                                <br>
                                                <h6>Выберите
                                                    <?
                                                    $count_images=10;
                                                    $image_width=1200;
                                                    $image_height=800;
                                                    $image_type='logo';
                                                    $image_index=1;
                                                    echo $count_images;
                                                    if($count_images==1){
                                                        echo "фотографию";
                                                    }
                                                    else if($count_images>1 && $count_images<5){
                                                        echo "фотографии";
                                                    }
                                                    else if($count_images>4){
                                                        echo "фотографий";
                                                    }
                                                    ?>
                                                    (не более 2М)
                                                    <?=$image_width?>х<?=$image_height?>px -
                                                    <?if($image_type=='logo'){
                                                        echo "логотип данного производителя";
                                                    }
                                                    else if($image_type=='door'){
                                                        echo "фотографии выбранной двери";
                                                    }
                                                    else if($image_type=='material' or $image_type=='material_edit'){
                                                        echo "фотографии материала";
                                                    }
                                                    ?>
                                                </h6>
                                                <label>Фотография*<span>&nbsp;&nbsp;&nbsp;       Чтобы добавить картинку, нажми обзор или просто перетащи в желтую область ниже &dArr;<hr></span></label>
                                                <br>
                                                <input type="file" name="my-pic[]" id="file-field3" class="image" multiple="multiple"/>
                                                <a id="cancel-all3">Отменить все</a>
                                                <div id="img-container3">
                                                    <ul id="img-list3"></ul>
                                                </div>
                                                <div id="leftpanel">
                                                    <div id="actions">


                                                        <input type="hidden" name="lwidth" value="<?=$image_width?>">
                                                        <input type="hidden" name="lheight" value="<?=$image_height?>">
                                                        <input type="hidden" name="lproducers" value="/upload">
                                                        <input type="hidden" name="ltype" value="<?=$image_type?>">
                                                        <span id="info-count">Изображений не выбрано</span><br/>
                                                        Общий размер:<span id="info-size">0</span> Кб<br/><br/>
                                                    </div>
                                                    <div id="console3"></div>
                                                    <div style="width:250px;" class="btn btn-primary apply_btn">Сохранить фото на сервере</div>

                                                </div>
                                            </div>
                                        </div>

                                        <script>




                                            $(document).ready(function() {


                                                // Консоль
                                                var $console = $("#console3");

                                                // Инфа о выбранных файлах
                                                var countInfo = $("#info-count");
                                                var sizeInfo = $("#info-size");

                                                // ul-список, содержащий миниатюрки выбранных файлов
                                                var imgList = $('#img-list3');

                                                // Контейнер, куда можно помещать файлы методом drag and drop
                                                var dropBox = $('#img-container3');

                                                // Счетчик всех выбранных файлов и их размера
                                                var imgCount = 0;
                                                var imgSize = 0;


                                                // Стандарный input для файлов
                                                var fileInput = $('#file-field3');

                                                // Тестовый canvas
                                                /*  var canvas = document.getElementById('canvas');
                                                 var ctx = canvas.getContext("2d");
                                                 ctx.fillStyle = "rgb(128,128,128)";
                                                 ctx.fillRect (0, 0, 150, 150);
                                                 ctx.fillStyle = "rgb(200,0,0)";
                                                 ctx.fillRect (10, 10, 55, 50);
                                                 ctx.fillStyle = "rgba(0, 0, 200, 0.5)";
                                                 ctx.fillRect (30, 30, 55, 50); */


                                                ////////////////////////////////////////////////////////////////////////////
                                                // Подключаем и настраиваем плагин загрузки

                                                var uploaded_data = [];
                                                var img_preloaded = false;
                                                fileInput.damnUploader({
                                                    // куда отправлять
                                                    url: '/functions_images',
                                                    // имитация имени поля с файлом (будет ключом в $_FILES, если используется PHP)
                                                    fieldName:  'my-pic',
                                                    // дополнительно: элемент, на который можно перетащить файлы (либо объект jQuery, либо селектор)
                                                    dropBox: dropBox,
                                                    // максимальное кол-во выбранных файлов (если не указано - без ограничений)
                                                    limit: <?echo $count_images?>,
                                                    // когда максимальное кол-во достигнуто (вызывается при каждой попытке добавить еще файлы)
                                                    onLimitExceeded: function() {
                                                        log('Допустимое кол-во файлов уже выбрано');
                                                    },
                                                    // ручная обработка события выбора файла (в случае, если выбрано несколько, будет вызвано для каждого)
                                                    // если обработчик возвращает true, файлы добавляются в очередь автоматически
                                                    onSelect: function(file) {
                                                        viewFile(file);
                                                        return false;
                                                    },

                                                    // когда все загружены
                                                    onAllComplete: function() {

                                                        log('<span style="color: blue;">*** Все загрузки завершены! ***</span>');
                                                        imgCount = 0;
                                                        imgSize = 0;
                                                        updateInfo();

                                                    }

                                                });



                                                ////////////////////////////////////////////////////////////////////////////
                                                // Вспомогательные функции

                                                // Вывод в консоль
                                                function log(str) {
                                                    $('<p/>').html(str).prependTo($console);
                                                }

                                                // Вывод инфы о выбранных
                                                function updateInfo() {
                                                    countInfo.text( (imgCount == 0) ? 'Изображений не выбрано' : ('Изображений выбрано: '+imgCount));
                                                    sizeInfo.text( (imgSize == 0) ? '-' : Math.round(imgSize / 1024));
                                                }

                                                // Обновление progress bar'а
                                                function updateProgress(bar, value) {
                                                    var width = bar.width();
                                                    var bgrValue = -width + (value * (width / 100));
                                                    bar.attr('rel', value).css('background-position', bgrValue+'px center').text(value+'%');
                                                }

                                                // преобразование формата dataURI в Blob-данные
                                                function dataURItoBlob(dataURI) {
                                                    var BlobBuilder = (window.MSBlobBuilder || window.MozBlobBuilder || window.WebKitBlobBuilder || window.BlobBuilder);
                                                    if (!BlobBuilder) {
                                                        return false;
                                                    }
                                                    // convert base64 to raw binary data held in a string
                                                    // doesn't handle URLEncoded DataURIs
                                                    var pieces = dataURI.split(',');
                                                    var byteString = (pieces[0].indexOf('base64') >= 0) ? atob(pieces[1]) : unescape(pieces[1]);
                                                    // separate out the mime component
                                                    var mimeString = pieces[0].split(':')[1].split(';')[0];
                                                    // write the bytes of the string to an ArrayBuffer
                                                    var ab = new ArrayBuffer(byteString.length);
                                                    var ia = new Uint8Array(ab);
                                                    for (var i = 0; i < byteString.length; i++) {
                                                        ia[i] = byteString.charCodeAt(i);
                                                    }
                                                    // write the ArrayBuffer to a blob, and you're done
                                                    var bb = new BlobBuilder();
                                                    bb.append(ab);
                                                    return bb.getBlob(mimeString);
                                                }

                                                var files_num = 0;
                                                function viewFile(file) {
                                                    files_num++;
                                                    file['id'] = files_num;
                                                    console.log(file);
                                                    uploaded_data.push(file);
                                                    addFileToQueue(file, file['id']);
                                                }

                                                // Отображение выбраных файлов, создание миниатюр и ручное добавление в очередь загрузки.
                                                function addFileToQueue(file, file_id) {

                                                    // Создаем элемент li и помещаем в него название, миниатюру и progress bar
                                                    var li = $('<li/>').appendTo(imgList);
                                                    /* var title = $('<div/>').text(file.name+' ').appendTo(li); */
                                                    var cancelButton = $('<a/>').attr({
                                                        href: '#cancel',
                                                        title: 'отменить'
                                                    }).html('<img height="15" width="15" alt="X" src="/img/deleteIcon.png">').appendTo(/* title */li);

                                                    // Если браузер поддерживает выбор файлов (иначе передается специальный параметр fake,
                                                    // обозночающий, что переданный параметр на самом деле лишь имитация настоящего File)
                                                    if(!file.fake) {

                                                        // Отсеиваем не картинки
                                                        var imageType = /video.*/;
                                                        var imageType2 = /image.*/;
                                                        if (!file.type.match(imageType) && !file.type.match(imageType2)) {
                                                            log('Файл отсеян: `'+file.name+'` (тип '+file.type+')');
                                                            return true;
                                                        }

                                                        // Добавляем картинку и прогрессбар в текущий элемент списка
                                                        var div = $('<div/>').addClass('photo_frame').attr('rel', '0').appendTo(li);
                                                        var img = $('<img/>').appendTo(li);
                                                        /* var pBar = $('<div/>').addClass('progress').attr('rel', '0').text('0%').appendTo(li); */
                                                        // Создаем объект FileReader и по завершении чтения файла, отображаем миниатюру и обновляем
                                                        // инфу обо всех файлах (только в браузерах, подерживающих FileReader)
                                                        if($.support.fileReading) {
                                                            var reader = new FileReader();
                                                            reader.onload = (function(aImg) {
                                                                return function(e) {

                                                                    aImg.attr('src', e.target.result);

                                                                    aImg.attr('height', 100);

                                                                    aImg.attr('id', "upload_id_"+file_id);

                                                                };
                                                            })(img);
                                                            reader.readAsDataURL(file);
                                                        }

                                                        log('Картинка добавлена: `'+file.name + '` (' +Math.round(file.size / 1024) + ' Кб)');
                                                        imgSize += file.size;
                                                    } else {
                                                        log('Файл добавлен: '+file.name);
                                                    }

                                                    imgCount++;
                                                    updateInfo();

                                                    // Создаем объект загрузки
                                                    var uploadItem = {
                                                        file: file,
                                                        /*  onProgress: function(percents) {
                                                         updateProgress(pBar, percents);
                                                         }, */
                                                        onComplete: function(successfully, data, errorCode) {

                                                            if(successfully) {


                                                                log('Файл `'+this.file.name+'` загружен, полученные данные:<br/>*****<br/>'+data+'<br/>*****');


                                                            } else{
                                                                if(!this.cancelled) {
                                                                    log('<span style="color:red;">Файл `'+this.file.name+'`: ошибка при загрузке. Код: '+errorCode+'</span>');
                                                                }
                                                            }
                                                        }
                                                    };

                                                    // ... и помещаем его в очередь
                                                    var queueId = fileInput.damnUploader('addItem', uploadItem);

                                                    // обработчик нажатия ссылки "отмена"
                                                    cancelButton.click(function() {
                                                        fileInput.damnUploader('cancel', queueId);
                                                        li.remove();
                                                        imgCount--;
                                                        imgSize -= file.fake ? 0 : file.size;
                                                        updateInfo();
                                                        log(file.name+' удален из очереди');
                                                        return false;
                                                    });

                                                    return uploadItem;
                                                }




                                                ////////////////////////////////////////////////////////////////////////////
                                                // Обработчики событий


                                                // Обработка событий drag and drop при перетаскивании файлов на элемент dropBox
                                                dropBox.bind({
                                                    dragenter: function() {
                                                        $(this).addClass('highlighted');
                                                        return false;
                                                    },
                                                    dragover: function() {
                                                        return false;
                                                    },
                                                    dragleave: function() {
                                                        $(this).removeClass('highlighted');
                                                        return false;
                                                    }
                                                });

                                                var nums_iter = 0;

                                                function damnStart(files, int, count) {
                                                    if (nums_iter < count) {
                                                        fileInput.damnUploader('clear');
                                                        fileInput.damnUploader('addItem', {
                                                            file: files[int],
                                                            onProgress: function() {
                                                                $("#upload_id_"+files[int]['id']).parent().append('<div class="loader" style="position: relative;"><img src="/img/loading2.gif" style="position: absolute; left: 0; right: 0; bottom: 0; margin: auto; width: 100px;"></div>');
                                                                $("#upload_id_"+files[int]['id']).parent().find(".loader").fadeIn("300");
                                                            },
                                                            onComplete: function(successfully, data, errorCode) {
                                                                if(successfully) {
                                                                    log('Файл `'+files[int].name+'` загружен, полученные данные:<br/>*****<br/>'+data+'<br/>*****');
                                                                } else{
                                                                    if(!this.cancelled) {
                                                                        log('<span style="color:red;">Файл `'+files[int].name+'`: ошибка при загрузке. Код: '+errorCode+'</span>');
                                                                    }
                                                                }
                                                                $("#upload_id_"+files[int]['id']).parent().find(".loader").fadeOut("300");
                                                                setTimeout(function(){
                                                                    nums_iter = nums_iter+1;
                                                                    damnStart(files, nums_iter, count);
                                                                }, 2000);
                                                            }
                                                        });
                                                        fileInput.damnUploader('startUpload');
                                                    } else if (nums_iter == count) {
                                                        log('<span style="color: white;">*** Все загрузки завершены! ***</span>');
                                                        imgCount = 0;
                                                        imgSize = 0;
                                                        updateInfo();
                                                    }
                                                }

                                                // Обаботка события нажатия на кнопку "Загрузить все".
                                                // стартуем все загрузки
                                                $(".apply_btn").click(function() {
                                                    var files_count = uploaded_data.length;
                                                    damnStart(uploaded_data, 0, files_count);
                                                });


                                                // Обработка события нажатия на кнопку "Отменить все"
                                                $("#cancel-all3").click(function(){
                                                    fileInput.damnUploader('cancelAll');
                                                    imgCount = 0;
                                                    imgSize = 0;
                                                    updateInfo();
                                                    log('*** Все загрузки отменены ***');
                                                    imgList.empty();
                                                });


                                                // Обработка нажатия на тестовую канву
                                                /*     $(canvas).click(function() {
                                                 var blobData;
                                                 if (canvas.toBlob) {
                                                 // ожидается, что вскоре браузерами будет поддерживаться метод toBlob() для объектов Canvas
                                                 blobData = canvas.toBlob();
                                                 } else {
                                                 // ... а пока - конвертируем вручную из dataURI
                                                 blobData = dataURItoBlob(canvas.toDataURL('image/png'));
                                                 }
                                                 if (blobData === false) {
                                                 log("Ваш браузер не поддерживает BlobBuilder");
                                                 return ;
                                                 }
                                                 addFileToQueue(blobData)
                                                 }); */




                                                ////////////////////////////////////////////////////////////////////////////
                                                // Проверка поддержки File API, FormData и FileReader

                                                if(!$.support.fileSelecting) {
                                                    log('Ваш браузер не поддерживает выбор файлов (загрузка будет осуществлена обычной отправкой формы)');
                                                    $("#dropBox-label").text('если бы ты использовал хороший браузер, файлы можно было бы перетаскивать прямо в область ниже!');
                                                } else {
                                                    if(!$.support.fileReading) {
                                                        log('* Ваш браузер не умеет читать содержимое файлов (миниатюрки не будут показаны)');
                                                    }
                                                    if(!$.support.uploadControl) {
                                                        log('* Ваш браузер не умеет следить за процессом загрузки (progressbar не работает)');
                                                    }
                                                    if(!$.support.fileSending) {
                                                        log('* Ваш браузер не поддерживает объект FormData (отправка с ручной формировкой запроса)');
                                                    }
                                                    log('Выбор файлов поддерживается');
                                                }
                                                log('*** Проверка поддержки ***');


                                            });


                                        </script>
                                        <div id="wizard_btn">123</div>
                                        <script>

                                            /*

                                             $('#wizard_btn').click(function() {
                                             alert('submited')
                                             $.ajaxSetup({
                                             headers:{
                                             'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
                                             }
                                             })
                                             $.ajax({
                                             type: "POST",
                                             url: '/add_rooms_form',
                                             data: $("#wizard").serialize(), // serializes the form's elements.
                                             success: function(data)
                                             {
                                             alert(data); // show response from the php script.
                                             }
                                             });
                                             });
                                             */


                                        </script>



                                    </div>


                                    <!-- Wizard Container 4 -->
                                </form>
                                <!--/ END Form Wizard -->
                            </div>
                        </section>
                    </div>
                </div>




            </div>
            <!--===================================================-->
            <!--End page content-->

        </div>
        <!--===================================================-->
        <!--END CONTENT CONTAINER-->




    </div>

