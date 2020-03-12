@extends('main_site_marafett.layouts.app')

@section('content')



<!-- top big image (background is changed on page refresh)-->
<div class="showcase" data-bg="/img/background.jpg"></div>

<!-- content container fluid-->
<div class="container-fluid main-wrapp" id="content-grid">

    <!-- top products -->
    <div class="top-products">
        <div class="row">


            @foreach($images as $image)
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 text-center no-padding">
                    <div class="product product-blk-lg">
                        <a href="/product/{{$image->id}}" class="product-lnk"></a>
                        <img src="{{'/storage/'.$image->photos->skip(1)->first()->photo}}" alt="product-image" class="img-responsive product-img">
                        <div class="hover-caption" data-bg="{{'/storage/'.$image->photos->first()->photo}}">
                            <div class="text-uppercase product-controls">
                                <h5>
                                    <a href="product.html">{{$image->name}}</a>
                                </h5>
                                <span class="price">{{$image->price}} гривень</span>
                                <ul class="list-inline">
                                    <li>
                                        <input type="hidden" class="good_id" value="{{$image->id}}">
                                        <input type="hidden" class="price_value" value="{{$image->price}}">
                                        <?php
                                        //check if cart contains this good
                                        if(isset($products)){
                                        foreach($products as $key=>$value){
                                            if($image->id==$key){
                                            $cart_text[$image->id]='Товар в корзине';
                                            break;
                                            }
                                            else{
                                            $cart_text[$image->id]='Добавить в корзину';
                                            }
                                        }}else{
                                                $cart_text[$image->id]='Добавить в корзину';
                                            }

                                        ?>
                                        <button class="btn btn-default add_to_cart">{{$cart_text[$image->id]}}</button>

                                    </li>
                                    <li><button class="btn btn-default">Добавить в список желаний</button></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <!-- buttons -->
        <div class="row">
            <div class="col-lg-12 text-center text-uppercase">
                <a href="/products" class="btn btn-primary">Все товары</a>
            </div>
        </div>
    </div>

    <!-- product categories -->
    <div class="padded15 product-categories">
        <div class="row" id="category-block">
            <div class="text-uppercase col-lg-4 col-md-4 col-sm-4 cat-item">
                    <div class="category" data-bg="/storage/IMG_5076_1563711030.jpg">
                        <a href="/category?cat=2" class="cat-lnk"></a>
                        <h3 class="cat-title">ЮБКИ</h3>
                    </div>

            </div>
            <div class="text-uppercase col-lg-4 col-md-4 col-sm-4 cat-item cat-item-height2">
                <div class="journal-blk">
                    <div class="journal-intro text-center">
                        <span>Это может быть интересно</span>
                        <h3>Истории успеха</h3>
                        <a href="blog.html" class="btn btn-important">Статьи</a>
                    </div>
                </div>
            </div>
            <div class="text-uppercase col-lg-4 col-md-4 col-sm-4 cat-item">
                <div class="category" data-bg="/storage/IMG_5131_1566649652.jpg">
                    <a href="/category?cat=2" class="cat-lnk"></a>
                    <h3 class="cat-title">ПЛАТЬЯ</h3>
                </div>
            </div>
            <div class="text-uppercase col-lg-4 col-md-4 col-sm-4 cat-item">
                <div class="category" data-bg="/storage/IMG_5187_1563698106.jpg">
                    <a href="/category?cat=2" class="cat-lnk"></a>
                    <h3 class="cat-title">БЛУЗЫ</h3>
                </div>
            </div>
            <div class="text-uppercase col-lg-4 col-md-4 col-sm-4 cat-item">
                <div class="category" data-bg="/storage/width_IMG_5100_1566678536.jpg">
                    <a href="/category?cat=2" class="cat-lnk"></a>
                    <h3 class="cat-title">ДЛЯ ПЫШНЫХ ДАМ</h3>
                </div>
            </div>
        </div>
    </div>

    <!-- shop description -->
    <div class="padded30 shop-description">
        <div class="row">
            <div class="col-lg-offset-3 col-lg-6 text-center about-shop">
                <div class="section-title text-uppercase">
                    <span>Высокое качество &amp; только</span>
                    <h3>Лучшие материалы</h3>
                </div>
                <div class="section-wrapp">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                </div>
                <a href="#" class="btn btn-primary text-uppercase">О нас</a>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
<script>
    $('.add_to_cart').click(function(){
        var add_to_cart_array=[];
        var good_id=$(this).parent().find('.good_id').val()
        add_to_cart_array.push({'good_id':good_id,'qty':1})
        console.log('add_to_cart_array',add_to_cart_array)
        var valid=true;
        $.each(add_to_cart_array,function(index,value){
            if(value['qty'] == 0) {
                valid=false;
            }

        });
        if(valid!==false){
            $.post("/add_to_cart_action", JSON.stringify(add_to_cart_array), function( data ) {
            });}
        else{
            alert('Вы не выбрали не одного экземпляра товара')
        }

    })
</script>
    @endsection