@extends('site_admin_page.add_good.add_good_app')

@section('title', 'Main page')

@section('content')

    <div id="main" role="main" style="">

        <!-- Main view  -->
    @include('layouts.goods_topnavbar')
    <!-- RIBBON -->
        <div id="ribbon">

            <div class="back_btn"
                 style="z-index:999;margin-left:-10px;display:inline-block;position:relative;left:0px;width:30px;height:40px;background:linear-gradient(to right,#3a3633 93%,#2a2725 100%);">
                <a href="@php echo (isset($_SERVER['HTTP_REFERER'])) ?  $_SERVER['HTTP_REFERER'] : ''; @endphp "><i
                            style="position:absolute;color:#fff;top:15px;left:10px;"
                            class="fa fa-step-backward"></i></a>
            </div>

            <span class="ribbon-button-alignment" style="position:absolute;right:30px">
					<a href="javascript:window.location.reload();"><span id="refresh" class="btn btn-ribbon">
						<i class="fa fa-refresh"></i>
					</span></a>
				</span>

            <!-- breadcrumb -->


        </div>
        <!-- END RIBBON -->

        <!-- MAIN CONTENT -->
        <div id="content">


            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox">
                        <div class="ibox-title">
                            <h5>Сейчас вы клонируете товар</h5>

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
                                Форма редактирования товарной позиции
                            </h2>
                            <p>
                                Постепенно измените информацию о товарной позиции в соответствующих полях
                            </p>


                            <form id="form" action="/admin/edit_good" method="post" class="wizard-big">


                                <h1>Основные данные о товаре</h1>
                                <fieldset>
                                    <h2>Редактируем позицию</h2>
                                    <div class="row">
                                        <div class="col-lg-9" style="border-right:#000 dashed 1px">
                                    <input type="hidden" name="good_id" value="{{$good->id}}">

                                            <div class="form-group col-sm-12">

                                                <div class="col-sm-8">

                                                    <label class="control-label"> Название товара : </label>
                                                    <input class="form-control required" name="name" type="text"
                                                           placeholder="Наберить назву товару"
                                                           data-parsley-group="order" data-parsley-required value="{{$good->name}}" />
                                                </div>

                                                <div class="col-sm-3 input-group">
                                                    <label class="control-label"> Артикул : </label>
                                                    <input class="form-control required" name="artikul" type="text"
                                                           placeholder="Наберить артикул товару"
                                                           data-parsley-group="order" data-parsley-required value="{{$good->articul}}" />
                                                </div>


                                            </div>

                                            <div class="form-group col-sm-3" style="position:relative;top:5px;">

                                                <div style="padding-left:15px;">
                                                    <label class="control-label"> Ціна : </label>
                                                    <div class="col-sm-12 input-group ">

                                                        <span class="input-group-addon"><i
                                                                    class="fa fa-dollar fa-lg"></i></span>
                                                        <input name="price" class="form-control required" type="text"
                                                               placeholder="Введите цену" value="{{$good->price}}">
                                                        <span class="input-group-addon">.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group col-sm-9" style="position:relative;top:5px;">
                                                <div class="col-sm-3 ">
                                                    <label class="control-label"> Количество в партии : </label>
                                                    <input class="form-control" name="count" type="text"
                                                           placeholder="Введите количество данной модели на складе"
                                                           data-parsley-group="order" data-parsley-required value="{{$good->qnt}}">

                                                </div>
                                                <div class="col-sm-3" style="margin-left:20px;">
                                                    <div class="form-group">
                                                        <label>Скидка %: </label>
                                                        <input class="form-control" id="spinner-decimal"
                                                               name="spinner-decimal" value="5">
                                                    </div>

                                                </div>

                                            </div>

                                            <div class="form-group col-sm-12">

                                                <label class="control-label" style="display:block;">Категория в
                                                    каталоге*</label>
                                                <input type="hidden" name="id_cat" value="{{$good->category}}">
                                                <input type="hidden" name="model_id" value="{{$good->model_id}}">
                                                <?
                                                    $parent_cat=\App\Category::where('id',$good->category)->first();
                                                $parent_cat_name=\App\Category::where('id',$parent_cat->parent_id)->first()->name;
                                                ?>
                                                <input type="text" class="col-sm-11 control-label cat_name required"
                                                       style="font-size:17px;" value="{{$parent_cat_name.">".$parent_cat->name}}">

                                            </div>


                                            <div class="form-group col-sm-12 categories">

                                                @if($categories!==null)
                                                    <div class="block_main_categories cat_block_1" style="">
                                                        @foreach ($categories as $key=>$category)
                                                            @if($category->parent_id==0)
                                                                <a>
                                                                    <div class="cat_block">
                                                                        <input type="hidden" value="{{$category->id}}">
                                                                        {{$category->name}}

                                                                        <span class="fa arrow"
                                                                              style="float:right"></span>
                                                                    </div>
                                                                </a>
                                                            @endif
                                                        @endforeach

                                                    </div>
                                                    <div class="block_main_categories cat_block_2">


                                                    </div>
                                                    <div class="block_main_categories cat_block_3">


                                                    </div>
                                                    <div class="block_main_categories cat_block_4">


                                                    </div>

                                                @else
                                                    <div style="width:100%;height:100px;color:#fff;background:red;text-align:center">

                                                        <h3>У вас не выбраны категории товаров для использования в вашем
                                                            интернет магазине </h3>
                                                        <a href="/admin/menu_areas">Перейти для выбора категорий</a>
                                                    </div>
                                                @endif
                                            </div>


                                            <div class="form-group col-sm-12">
                                                <label>Описание *</label>
                                                <textarea name="editor1" id="editor1" rows="10" cols="80">
                                                {{$good->description}}
                                            </textarea>

                                            </div>


                                        </div>
                                        <div class="col-lg-3 " style="position:relative">
                                            <div style="position:relative;width:100%;height:300px;background:#eee;">
                                                <div class="photo " style="position:relative">
                                                    <div style="display:none">
                                                        <input type="hidden" class="photo_id" value="{{$photos->first()->id}}">
                                                        <input id="main_photo" class="fileupload" name="myFile"
                                                               type="file">
                                                    </div>
                                                    <div class="form-group col-sm-12 photo_blocks"
                                                         style="position:relative;width:300px;height:300px;border:#000 dashed 1px;">

                                                        <div class="photo_inside " style="width:100%;height:100%;">
                                                            <div class="photo_image">

                                                                <img style='position:absolute;margin-left:-13px;z-index:998;width:100%;height:100%'  src="/storage/{{$photos->first()->photo}}"></div>
                                                            <div style='margin-left:-13px;z-index:999;width:100%;height:100%;position:absolute;background:rgba(255,255,255,0.5)'></div>

                                                            <div class="photo_icon"
                                                                 style="z-index:9999;position:absolute;margin:130px 110px;">
                                                                <i class="fa fa-camera "
                                                                   style="z-index:9999;color:grey;font-size: 48px;"></i>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            @for($i=0;$i<9;$i++)
                                                <div class="photo"
                                                     style="display:inline-block;position:relative;margin-left:0px;left:10px">
                                                    <div style="display:none">
                                                        <input type="hidden" class="photo_id" value="@if(isset($photos->get($i+1)->id)){{$photos->get($i+1)->id}} @endif">
                                                        <input id="main_photod" class="fileupload" name="myFiled"
                                                               type="file">
                                                    </div>
                                                    <div class="form-group col-sm-12 photo_blocks"
                                                         style="position:relative;width:90px;height:90px;border:#000 dashed 1px;">

                                                        <div class="photo_inside " style="width:100%;height:100%;">
                                                            <div class="photo_image">
                                                             @if(isset($photos->get($i+1)->photo))
                                                                <img style='position:absolute;margin-left:-13px;z-index:998;width:100%;height:100%'  src="/storage/@if(isset($photos->get($i+1)->photo)){{$photos->get($i+1)->photo}} @endif">
                                                            <div style='margin-left:-13px;z-index:999;width:100%;height:100%;position:absolute;background:rgba(255,255,255,0.5)'></div>
                                                            @endif
                                                            </div>

                                                            <div class="photo_icon"
                                                                 style="z-index:9999;position:absolute;margin:31px 15px;">
                                                                <i class="fa fa-camera "
                                                                   style="color:grey;font-size: 28px;"></i>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            @endfor

                                        </div>
                                    </div>

                                </fieldset>
                                <h1>Дополнительные данные о товаре</h1>
                                <fieldset>
                                    <h2>Вы можете сразу добавить цвет данного товара</h2>

                                    <div class="ibox float-e-margins row">
                                        <div class="ibox-title  col-sm-12">
                                            <div class="ibox float-e-margins">
                                                <div class="ibox-title  back-change">
                                                    <h5>Image cropper <small>http://fengyuanchen.github.io/cropper/</small></h5>
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
                                                    <p>
                                                        A simple jQuery image cropping plugin.
                                                    </p>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="image-crop" style="width:100%">
                                                                <img src="/storage/{{$color->color}}" style="width:100%">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <h4>Preview image</h4>
                                                            <div class="img-preview img-preview-sm"></div>
                                                            <div id="views"></div>
                                                            <h4>Comon method</h4>
                                                            <p>
                                                                You can upload new image to crop container and easy download new cropped image.
                                                            </p>
                                                            <div class="btn-group">
                                                                <label title="Upload image file" for="inputImage" class="btn btn-primary">
                                                                    <input type="file" accept="image/*" name="file" id="inputImage" class="hide">
                                                                    Upload new image
                                                                </label>
                                                                <label title="Donload image" id="download" class="btn btn-primary">Download</label>
                                                            </div>
                                                            <h4>Other method</h4>
                                                            <p>
                                                                You may set cropper options with <code>$(image}).cropper(options)</code>
                                                            </p>
                                                            <div class="btn-group">
                                                                <button class="btn btn-white" id="zoomIn" type="button">Zoom In</button>
                                                                <button class="btn btn-white" id="zoomOut" type="button">Zoom Out</button>
                                                                <button class="btn btn-white" id="rotateLeft" type="button">Rotate Left</button>
                                                                <button class="btn btn-white" id="rotateRight" type="button">Rotate Right</button>
                                                                <button class="btn btn-warning" id="setDrag" type="button">New crop</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>


                                </fieldset>

                                <h1>Фильтра</h1>
                                <fieldset>
                                    <h2>Информация о дополнительных свойсвах применимых к товару установите
                                        значения</h2>


                                    <div class="row">


                                        <div class="panel panel-info">
                                            <div class="panel-heading">
                                                Выберите доступные сезоны для этого товара
                                            </div>
                                            <div class="panel-body">



                                                <?php $i = 0;
                                                ?>
                                                @foreach($seasons as $season)
                                                @foreach($good->getSeasons->get() as $active_season)
                                                    <? if($active_season->id==$season->id){
                                                        $active_array[]=$season->id;
                                                    }

                                                    ?>


                                                @endforeach
                                                    @if($i==0)
                                                        <div class="col-md-2">
                                                            <div class="i-checks"><label> <input name="season[]"  type="checkbox" value="{{$season->id}}" @if((isset($active_array)) && in_array($season->id,$active_array)) checked="checked" @endif> <i></i> {{$season->name}} </label></div>

                                                            @endif
                                                            @if($i %4 == 0 && $i!=0)
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="i-checks"><label> <input name="season[]" type="checkbox" value="{{$season->id}}" @if((isset($active_array)) && in_array($season->id,$active_array)) checked="checked" @endif> <i></i> {{$season->name}} </label></div>

                                                            @elseif(!($i %4 == 0) && $i!=0)
                                                                <div class="i-checks"><label> <input name="season[]" type="checkbox" value=" {{$season->id}}" @if((isset($active_array)) && in_array($season->id,$active_array)) checked="checked" @endif> <i></i> {{$season->name}} </label></div>


                                                            @endif
                                                            @if(count($seasons)==$i+1)
                                                        </div>
                                                    @endif

                                                    <?php $i++;?>
                                                @endforeach



                                            </div>
                                        </div>



                                    </div>




                                    <div class="row">


                                        <div class="panel panel-primary">
                                            <div class="panel-heading">
                                                Выберите доступные размеры для этого товара
                                            </div>
                                            <div class="panel-body">



                                                <?php $i = 0;?>
                                                @foreach($sizes as $size)
                                                        @foreach($good->getSizes->get() as $active_size)
                                                            <?
                                                            if($active_size->id==$size->id){
                                                                $active_size_array[]=$size->id;
                                                            }

                                                            ?>


                                                        @endforeach
                                                    @if($i==0)
                                                        <div class="col-md-2">
                                                            <div class="i-checks"><label> <input name="sizes[]" type="checkbox" value="{{$size->id}}" @if((isset($active_size_array)) && in_array($size->id,$active_size_array)) checked="checked" @endif> <i></i> {{$size->name}} </label></div>

                                                            @endif
                                                            @if($i %4 == 0 && $i!=0)
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="i-checks"><label> <input name="sizes[]" type="checkbox" value="{{$size->id}}" @if((isset($active_size_array)) && in_array($size->id,$active_size_array)) checked="checked" @endif> <i></i> {{$size->name}} </label></div>

                                                            @elseif(!($i %4 == 0) && $i!=0)
                                                                <div class="i-checks"><label> <input name="sizes[]" type="checkbox" value=" {{$size->id}}" @if((isset($active_size_array)) && in_array($size->id,$active_size_array)) checked="checked" @endif> <i></i> {{$size->name}} </label></div>


                                                            @endif
                                                            @if(count($sizes)==$i+1)
                                                        </div>
                                                    @endif

                                                    <?php $i++;?>
                                                @endforeach



                                            </div>
                                        </div>



                                    </div>

                                    <div class="row">


                                        <div class="panel panel-success">
                                            <div class="panel-heading">
                                                Выберите доступные ткани для этого товара
                                            </div>
                                            <div class="panel-body">



                                                <?php $i = 0;?>
                                                @foreach($fabrics as $fabric)
                                                        @foreach($good->getFabrics->get() as $active_fabric)
                                                            <? if($active_fabric->id==$fabric->id){
                                                                $active_fabric_array[]=$fabric->id;
                                                            }

                                                            ?>


                                                        @endforeach
                                                    @if($i==0)
                                                        <div class="col-md-2">
                                                            <div class="i-checks"><label> <input name="fabric[]" type="checkbox" value="{{$fabric->id}}" @if((isset($active_fabric_array)) && in_array($fabric->id,$active_fabric_array)) checked="checked" @endif> <i></i> {{$fabric->name}} </label></div>

                                                            @endif
                                                            @if($i %4 == 0 && $i!=0)
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="i-checks"><label> <input name="fabric[]" type="checkbox" value="{{$fabric->id}}" @if((isset($active_fabric_array)) && in_array($fabric->id,$active_fabric_array)) checked="checked" @endif> <i></i> {{$fabric->name}} </label></div>

                                                            @elseif(!($i %4 == 0) && $i!=0)
                                                                <div class="i-checks"><label> <input name="fabric[]" type="checkbox" value=" {{$fabric->id}}" @if((isset($active_fabric_array)) && in_array($fabric->id,$active_fabric_array)) checked="checked" @endif> <i></i> {{$fabric->name}} </label></div>


                                                            @endif
                                                            @if(count($fabrics)==$i+1)
                                                        </div>
                                                    @endif

                                                    <?php $i++;?>
                                                @endforeach



                                            </div>
                                        </div>



                                    </div>

                                    <div class="row">


                                        <div class="panel panel-danger">
                                            <div class="panel-heading">
                                                Выберите доступную отделку для этого товара
                                            </div>
                                            <div class="panel-body">



                                                <?php $i = 0;?>
                                                @foreach($decorations as $decoration)

                                                        @foreach($good->getDecorations->get() as $active_decoration)
                                                            <? if($active_decoration->id==$decoration->id){
                                                                $active_decoration_array[]=$decoration->id;
                                                            }

                                                            ?>


                                                        @endforeach


                                                    @if($i==0)
                                                        <div class="col-md-2">
                                                            <div class="i-checks"><label> <input name="decoration[]" type="checkbox" value="{{$decoration->id}}" @if((isset($active_decoration_array)) && in_array($decoration->id,$active_decoration_array)) checked="checked" @endif> <i></i> {{$decoration->name}} </label></div>

                                                            @endif
                                                            @if($i %4 == 0 && $i!=0)
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="i-checks"><label> <input name="decoration[]" type="checkbox" value="{{$decoration->id}}" @if((isset($active_decoration_array)) && in_array($decoration->id,$active_decoration_array)) checked="checked" @endif> <i></i> {{$decoration->name}} </label></div>

                                                            @elseif(!($i %4 == 0) && $i!=0)
                                                                <div class="i-checks"><label> <input name="decoration[]" type="checkbox" value=" {{$decoration->id}}" @if((isset($active_decoration_array)) && in_array($decoration->id,$active_decoration_array)) checked="checked" @endif> <i></i> {{$decoration->name}} </label></div>


                                                            @endif
                                                            @if(count($decorations)==$i+1)
                                                        </div>
                                                    @endif

                                                    <?php $i++;?>
                                                @endforeach



                                            </div>
                                        </div>



                                    </div>
                                    <div class="row">


                                        <div class="panel panel-warning">
                                            <div class="panel-heading">
                                                Выберите доступные виды изделия для этого товара
                                            </div>
                                            <div class="panel-body">



                                                <?php $i = 0;?>
                                                @foreach($product_types as $product_type)

                                                        @foreach($good->getProducttypes->get() as $active_producttype)
                                                            <? if($active_producttype->id==$product_type->id){
                                                                $active_producttype_array[]=$product_type->id;
                                                            }

                                                            ?>


                                                        @endforeach

                                                    @if($i==0)
                                                        <div class="col-md-2">
                                                            <div class="i-checks"><label> <input name="product_type[]" type="checkbox" value="{{$product_type->id}}" @if((isset($active_producttype_array)) && in_array($product_type->id,$active_producttype_array)) checked="checked" @endif> <i></i> {{$product_type->name}} </label></div>

                                                            @endif
                                                            @if($i %4 == 0 && $i!=0)
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="i-checks"><label> <input name="product_type[]" type="checkbox" value="{{$product_type->id}}" @if((isset($active_producttype_array)) && in_array($product_type->id,$active_producttype_array)) checked="checked" @endif> <i></i> {{$product_type->name}} </label></div>

                                                            @elseif(!($i %4 == 0) && $i!=0)
                                                                <div class="i-checks"><label> <input name="product_type[]" type="checkbox" value=" {{$product_type->id}}" @if((isset($active_producttype_array)) && in_array($product_type->id,$active_producttype_array)) checked="checked" @endif> <i></i> {{$product_type->name}} </label></div>


                                                            @endif
                                                            @if(count($product_types)==$i+1)
                                                        </div>
                                                    @endif

                                                    <?php $i++;?>
                                                @endforeach



                                            </div>
                                        </div>



                                    </div>





                                    <div id="properties">


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
                                It is an application skeleton for a typical web ecommerce app. You can use it to quickly
                                bootstrap your webapp projects.
                            </small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>

        $(".fileupload").change(function (e){//input[name='myFile']

            var fileName = $(this).val();
            var file_data = $(this).prop('files')[0];
            var _this=$(this);
            console.log('file_data');
            console.log(file_data);
            var form_data = new FormData();
            form_data.append('file', file_data);
            console.log(form_data);
            $.ajax({
                url: '/admin/add_photo_file', // point to server-side PHP script
                dataType: 'text',  // what to expect back from the PHP script, if anything
                cache: false,
                contentType: false,
                processData: false,
                data: form_data,
                type: 'post',
                success: function(php_script_response){

                    var file=php_script_response.replace(/"/g , '')
                    console.log(file);
                    console.log(_this);
                    _this.parent('div').parent('.photo').find('.photo_blocks').find('.photo_image').empty();
                    _this.parent('div').parent('.photo').find('.photo_blocks').find('.photo_image').prepend(

                        "<img style='position:absolute;margin-left:-13px;z-index:998;width:100%;height:100%' src='/storage/"+file+"'>"+
                        "<div style='margin-left:-13px;z-index:999;width:100%;height:100%;position:absolute;background:rgba(255,255,255,0.5)'></div>"
                    );
                    _this.parent('div').parent('.photo').find('.photo_blocks').find('.photo_icon .fa-camera').css('color','#fff')
                }
            });

        });
    </script>

@endsection
