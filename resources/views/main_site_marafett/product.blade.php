@extends('main_site_marafett.layouts.app')

@section('content')


    <!-- content container fluid-->
    <div class="container-fluid main-wrapp" id="content-grid">
        <!-- product navbar -->
        <div class="navbar-fixed-top text-uppercase product-nav">
            <ul class="list-inline text-center">
                <li>
                    <a href="/">Главная</a>
                </li>
                <li class="active">
                    <a href="#page-content">Товар</a>
                </li>
                <li>
                    <a href="#description-tag">Описание</a>
                </li>
                <li>
                    <a href="#gallery-tag">Галерея</a>
                </li>
                <li>
                    <a href="#reviews-tag">Отзывы</a>
                </li>
            </ul>
            <div class="top-product-details">
                <h5 class="product-title">Alice skirt</h5>
                <div class="pull-right cart-detail">
                    <button class="btn btn-important btn-lg">
                        <span class="btn-text">В корзину</span>
                        -
                        <span class="product-price">&dollar;127.99</span>
                    </button>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- product showcase magic scroll ;-) -->
            <div class="product-showcase">
                <!-- product bg and slider -->
                <div class="product-bg">
                    <div class="showcase-scroll">
                        <div class="text-bg">Alice</div>
                        <!-- slider -->
                        <div class="col-lg-offset-2 col-lg-4 col-md-6 product-slider-wrapp">
                            <!-- product-slider -->
                            <div class="owl-carousel product-slider">
                                @foreach($product->photos->get() as $img)
                                    <div class="slide">
                                        <?php $big_photo=explode('small_',$img->photo);

                                        ?>
                                        <a href="/storage/{{$big_photo[1]}}"><img src="/storage/{{$img->photo}}" alt="product-image" class="img-responsive"></a>
                                    </div>

                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <!-- right content -->
                <div class="blk-product">
                    <div class="col-lg-offset-6 col-lg-4 col-md-offset-6 col-md-6 text-center">
                        <!-- product overview -->
                        <div class="product-spec-height">
                            <div class="product-overview" id="overview">
                                <h3 class="text-uppercase product-title">{{$product->name}}</h3>
                                <p class="subtitle">
                                    <?php print($product->description);?>
                                </p>


                                <div class="colors" style="padding: 20px;">
                                    @foreach($colors as $key=>$color)
                                        <div style="cursor:pointer;width:70px;text-align: center;display:inline-block;@if($key!=0) margin-left:40px @endif">
                                            <img width="50px;" height="50px;" class="thumbpost img-circle" src="/storage/{{$color->color}}">
                                            <label style="padding-left:10px;float:left;display:inline-block;position:absolute;margin-left:-30px;">Кол-во</label>
                                            <div class="cant-select" style="float:left;display:inline-block;margin-left:70px;">
                                                <input type="hidden" class="good_id" value="{{$color->id_good}}">
                                                <input type="hidden" class="qty_number" value="{{$key}}">
                                                <input  class="qty" style="width:120%" type="number"  name="qty" value="0">
                                            </div>
                                            <label style="padding-left:10px;float:left;display:inline-block;position:absolute;margin-left:-100px;margin-top:30px;">Размер</label>
                                            <!-- size select -->
                                            <div class="size-select" style="float:left;display:inline-block;margin-left:70px;">
                                                <select class="text-uppercase">
                                                    <option value="0" selected>xs</option>
                                                    <option value="1">s</option>
                                                    <option value="2">m</option>
                                                    <option value="3">xl</option>
                                                    <option value="4">xxl</option>
                                                </select>
                                            </div>
                                        </div>

                                    @endforeach

                                </div>


                                <!-- amount select -->
                                <!--div class="form-group cant-select">
                                    <input type="number" value="1">
                                </div>
                                <div class="form-group cant-select">
                                    <input type="number" value="1">
                                </div-->
                                <ul class="list-unstyled">
                                    <li>
                                        <button class="btn btn-important btn-lg">
                                            <span class="btn-text">В корзину</span>
                                            -
                                            <span class="product_price product-price">0</span>
                                        </button>
                                    </li>
                                    <li>
                                        <a href="#" class="btn btn-link"><i class="fa fa-heart-o"></i>Добавить в список желаний</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- product description -->
                        <div class="product-spec-height" id="description-tag">
                            <div class="product-overview" id="pd-description">
                                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingOne">
                                            <h4 class="panel-title">
                                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#descriptionTab" aria-expanded="true" aria-controls="descriptionTab">
                                                    Description
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="descriptionTab" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                            <div class="panel-body">
                                                <?php print($product->description2);?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingTwo">
                                            <h4 class="panel-title">
                                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#specTab" aria-expanded="false" aria-controls="specTab">
                                                    Specifications
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="specTab" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                            <div class="panel-body">
                                                <ul class="list-unstyled text-uppercase spec-list">
                                                    <li>
                                                        <strong>Case</strong>
                                                        <span>39 mm</span>
                                                    </li>
                                                    <li>
                                                        <strong>Material</strong>
                                                        <span>Steel</span>
                                                    </li>
                                                    <li>
                                                        <strong>Case color</strong>
                                                        <span>black</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingThree">
                                            <h4 class="panel-title">
                                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#shpTab" aria-expanded="false" aria-controls="shpTab">
                                                    Shipping / Returns
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="shpTab" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                            <div class="panel-body">
                                                <ul class="list-unstyled">
                                                    <li>Free shipping worldwide.</li>
                                                    <li>Fast and safe with DHL.</li>
                                                    <li>Easy returns within 14 days of delivery.</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- product stats -->
        <div class="padded15 product-stats">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 text-uppercase text-center">
                    <div class="status">
                        <span>Satisfaction</span>
                        <h4>Guaranteed</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-uppercase text-center">
                    <div class="status">
                        <span>30 days return</span>
                        <h4>policy</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-uppercase text-center">
                    <div class="status">
                        <span>Free orders</span>
                        <h4>delivery</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-uppercase text-center">
                    <div class="status">
                        <span>100% secured</span>
                        <h4>payments</h4>
                    </div>
                </div>
            </div>
        </div>

        <!-- product gallery -->
        <div class="padded15 product-gallery" id="gallery-tag">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="lg-img shine-effect">
                        <a href="http://placehold.it/750x1150" class="popup-lnk">
                            <img src="http://placehold.it/950x550" alt="product-image" class="img-responsive">
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="md-img shine-effect">
                        <a href="http://placehold.it/750x1150" class="popup-lnk">
                            <img src="http://placehold.it/550x750" alt="product-image" class="img-responsive">
                        </a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="sm-img shine-effect">
                        <a href="http://placehold.it/550x550" class="popup-lnk">
                            <img src="http://placehold.it/350x350" alt="product-image" class="img-responsive">
                        </a>
                    </div>
                    <div class="sm-img shine-effect">
                        <a href="http://placehold.it/550x550" class="popup-lnk">
                            <img src="http://placehold.it/350x350" alt="product-image" class="img-responsive">
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- testimonials  carousel -->
        <div class="padded15 testimonials" id="reviews-tag">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="testimonials-wrapp">
                        <div class="testimonials-header text-uppercase">
                            <span>10 users</span>
                            <h3>reviews</h3>
                        </div>
                        <div class="owl-carousel testimonials-carousel text-center">
                            <div class="testimonial">
                                <ul class="list-inline star-rating">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </p>
                                <h5 class="user-name text-uppercase">John Doe</h5>
                            </div>
                            <div class="testimonial">
                                <ul class="list-inline star-rating">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star-o"></i></li>
                                    <li><i class="fa fa-star-o"></i></li>
                                </ul>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, dignissimos nostrum! Maiores culpa quibusdam, ad, dolorem perspiciatis, at nobis doloremque nulla, cupiditate voluptatem unde illo odit iusto saepe aspernatur modi.</p>
                                <h5 class="user-name text-uppercase">Barack Kross</h5>
                            </div>
                            <div class="testimonial">
                                <ul class="list-inline star-rating">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star-half-o"></i></li>
                                </ul>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At facilis debitis placeat beatae? Labore eum unde repudiandae blanditiis impedit vero quisquam sequi ipsa, excepturi nulla totam tenetur veniam accusantium voluptate.</p>
                                <h5 class="user-name text-uppercase">Britney Sappers</h5>
                            </div>
                        </div>
                        <!-- carousel outside navigation -->
                        <div class="carousel-nav"></div>
                        <button class="btn btn-primary">Add review</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- instagram feed -->
        <div class="instagram-feed">
            <div class="row" id="instagram-block">
                <div class="text-uppercase col-lg-4 col-md-4 col-sm-4 col-xs-12 insta-item">
                    <ul class="list-inline">
                        <li data-bg="http://placehold.it/550x550" class="shine-effect">
                            <a href="http://placehold.it/550x750" class="popup-lnk" >
                            </a>
                        </li>
                        <li data-bg="http://placehold.it/550x550" class="shine-effect">
                            <a href="http://placehold.it/550x750" class="popup-lnk">
                            </a>
                        </li>
                        <li data-bg="http://placehold.it/550x550" class="shine-effect">
                            <a href="http://placehold.it/550x750" class="popup-lnk">
                            </a>
                        </li>
                        <li data-bg="http://placehold.it/550x550" class="shine-effect">
                            <a href="http://placehold.it/550x750" class="popup-lnk">
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="text-uppercase col-lg-4 col-md-4 col-sm-4 col-xs-12 insta-item insta-item-overflow">
                    <div class="category insta">
                        <div class="insta-intro text-center">
                            <span>Follow the vibe on</span>
                            <h3>Instagram</h3>
                            <a href="#" class="btn btn-important">@Themesdojo</a>
                        </div>
                    </div>
                </div>
                <div class="text-uppercase col-lg-4 col-md-4 col-sm-4 col-xs-12 insta-item">
                    <ul class="list-inline">
                        <li data-bg="http://placehold.it/550x550" class="shine-effect">
                            <a href="http://placehold.it/550x750" class="popup-lnk">
                            </a>
                        </li>
                        <li data-bg="http://placehold.it/550x550" class="shine-effect">
                            <a href="http://placehold.it/550x750" class="popup-lnk">
                            </a>
                        </li>
                        <li data-bg="http://placehold.it/550x550" class="shine-effect">
                            <a href="http://placehold.it/550x750" class="popup-lnk">
                            </a>
                        </li>
                        <li data-bg="http://placehold.it/550x550" class="shine-effect">
                            <a href="http://placehold.it/550x750" class="popup-lnk">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
<script>
    window.qty=[];
  $('.qty').change(function(){
      var qty=$(this).val();
      var input_number=$(this).parent().find('.qty_number').val()
      window.qty[input_number]=parseInt(qty);
      var price={{$product->price}}
      var total=$('.product_price').html()
      console.log(window.qty)
      summ = window.qty.reduce(function(a,b){return(a+b)})
      console.log(summ)
      var tot=summ*price
      $('.product_price').html('<b>'+summ+' * '+price+' = '+tot+' грн.</b>')
      console.log(total)
  });

    $('.product_price').click(function(){
        var add_to_cart_array=[];
        $.each($('.qty'),function(index,value,obj){
            console.log($(this).val())
            var good_id=$(this).parent().find('.good_id').val()
            console.log(good_id)
            add_to_cart_array.push({'good_id':good_id,'qty':$(this).val()})
        });

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