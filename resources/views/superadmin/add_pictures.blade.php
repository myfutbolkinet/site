@extends('superadmin.add_cat_photo')

@section('title', 'Main page')

@section('content')
    <div id="main" role="main" style="">
        <div id="content">




    <div class="row">
    <div class="form-group col-sm-12">

        <label class="control-label" style="display:block;">Категория в каталоге*</label>
        <input type="hidden" name="id_cat">
        <input type="text" class="col-sm-11 control-label cat_name required" style="font-size:17px;">

    </div>













<div class="col-lg-9">
    <div class="form-group col-sm-12 categories">
        @if(isset($categories) && $categories!==null)
            <div class="block_main_categories cat_block_1" style="">
                @foreach ($categories as $key=>$category)
                    @if($category->parent_id==0)
                        <div>
                        <button style="width:15px;height:15px;display:inline-block"></button><a style="display:inline-block"><div style="display:inline-block" class="cat_block" >
                                <input type="hidden" value="{{$category->id}}">
                                <span style="padding-left:5px;display:inline-block">{{$category->name}}</span>

                                <span class="fa arrow" style="float:right"></span>
                            </div></a></div>
                    @endif
                @endforeach

            </div>
            <div class="block_main_categories cat_block_2" >


            </div>
            <div class="block_main_categories cat_block_3" >


            </div>
            <div class="block_main_categories cat_block_4" >


            </div>

        @else
            <div style="width:100%;height:100px;color:#fff;background:red;text-align:center">

                <h3>У вас не выбраны категории товаров для использования в вашем интернет магазине </h3>
                <a href="/admin/menu_areas">Перейти для выбора категорий</a>
            </div>
        @endif
    </div>
</div>
    <div class="col-lg-3">
    <div style="position:relative;width:100%;height:300px;background:#eee;">
        <div class="photo " style="position:relative">
            <div style="display:none">
                <input id="main_photo" class="fileupload" name="myFile" type="file">
            </div>
            <div class="form-group col-sm-12 photo_blocks" style="position:relative;width:300px;height:300px;border:#000 dashed 1px;">

                <div class="photo_inside " style="width:100%;height:100%;">
                    <div class="photo_image"></div>
                    <div class="photo_icon" style="z-index:9999;position:absolute;margin:130px 110px;">
                        <i class="fa fa-camera " style="z-index:9999;color:grey;font-size: 48px;"></i>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>

    </div>
    </div>

    </div>
@endsection
