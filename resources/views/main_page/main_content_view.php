<div class="lg-margin"></div><!-- Space -->
<div class="container">
    <div class="row">
        <div class="col-md-12">


            <div class="lg-margin"></div><!-- Space -->
            <div class="row">

                <div class="col-md-12 col-sm-12 col-xs-12 main-content">
                    <div class="latest-items carousel-wrapper">
                        <header class="content-title">
                            <div class="title-bg">
                                <h2 class="title">Последние поступления</h2>
                            </div><!-- End .title-bg -->
                            <p class="title-desc">Только у нас вы можете найти новую модель со скидкой.</p>
                        </header>

                        <div class="carousel-controls">
                            <div id="latest-items-slider-prev" class="carousel-btn carousel-btn-prev">
                            </div><!-- End .carousel-prev -->
                            <div id="latest-items-slider-next" class="carousel-btn carousel-btn-next carousel-space">
                            </div><!-- End .carousel-next -->
                        </div><!-- End .carousel-controls -->
                        <div class="latest-items-slider owl-carousel">




                        <?php

                        foreach($latest as $good){
                            

                            ?>

                            <div class="item">

                                <div class="item-image-container">
                                    <figure>
                                        <a href="/good/<?php echo $good['original']['id']?>">
                                            <img src="/photos/<?php echo $good['original']['image_small']?>" alt="item3" class="item-image">
                                            <img src="/photos/<?php echo $good->photos[0]['original']['image_small']?>" alt="item3 Hover" class="item-image-hover">
                                        </a>
                                    </figure>
                                    <div class="item-price-container">
                                        <span class="item-price"><?php echo ceil($good['original']['price']*$curs)?><span class="sub-price">.грн</span></span>
                                    </div>
                                    <span class="new-rect">New</span>
                                    <span class="discount-rect">-10%</span>
                                </div><!-- End .item-image -->
                                <div class="item-meta-container">
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-result" data-result="95"></div>
                                        </div><!-- End .ratings -->
                                                    <span class="ratings-amount">
                                                        1 Reviews
                                                    </span>
                                    </div><!-- End .rating-container -->
                                    <h3 class="item-name"><a href="/good/<?php echo $good['original']['id']?>"><?php echo $good['original']['name']?></a></h3>
                                    <div class="item-action">

                                        <form class="cart_btn_form" method="post" action="<?php echo route('add_to_cart')?>">
                                            <?php echo csrf_field();?>
                                            <input type="hidden" name="id_good" value="<?php echo $good['original']['id']?>">
                                            <input type="hidden" class="inp_count" name="qnt" style="margin-left:-7px;width:80px;" value="1"/>
                                            
                                        </form>

                                        <a  href="#" class="cart_btn item-add-btn">
                                            <span class="icon-cart-text">В корзину</span>
                                        </a>
                                        <div class="item-action-inner">
                                            <a href="#" class="icon-button icon-like">Favourite</a>
                                            <a href="#" class="icon-button icon-compare">Checkout</a>
                                        </div><!-- End .item-action-inner -->
                                    </div><!-- End .item-action -->
                                </div><!-- End .item-meta-container -->
                            </div><!-- End .item -->
                            
                            
                            
                            <?
                            
                            
                            
                            
                        }?>    
                            
                            

                            
                            
                            
                            
                            
                            
                        </div><!--latest-items-slider -->
                    </div><!-- End .latest-items -->
                    <div class="lg-margin"></div><!-- Space -->

                    <div class="xlg-margin"></div><!-- Space -->

                    <div class="hot-items carousel-wrapper">
                        <header class="content-title">
                            <div class="title-bg">
                                <h2 class="title">Распродажа</h2>
                            </div><!-- End .title-bg -->
                            <p class="title-desc">Только у нас вы можете купить новую модель со скидкой</p>
                        </header>

                        <div class="carousel-controls">
                            <div id="hot-items-slider-prev" class="carousel-btn carousel-btn-prev">
                            </div><!-- End .carousel-prev -->
                            <div id="hot-items-slider-next" class="carousel-btn carousel-btn-next carousel-space">
                            </div><!-- End .carousel-next -->
                        </div><!-- End .carousel-controls -->
                        <div class="hot-items-slider owl-carousel">


                            <?php foreach($onsale as $good) {

                                ?>

                                <div class="item">

                                    <div class="item-image-container">
                                        <figure>
                                            <a href="/good/<?php echo $good['original']['id']?>">
                                                <img src="/photos/<?php echo $good['original']['image_small']?>" alt="item3" class="item-image">
                                                <img src="/photos/<?php echo $good->photos[0]['original']['image_small']?>" alt="item3 Hover"
                                                     class="item-image-hover">
                                            </a>
                                        </figure>
                                        <div class="item-price-container">
                                            <span class="item-price"><?php echo ceil($good['original']['price']*$curs)?>грн.</span>
                                        </div>
                                        <span class="new-rect">New</span>
                                        <span class="discount-rect"><?php echo ceil($good['original']['discount'])?>%</span>
                                    </div><!-- End .item-image -->
                                    <div class="item-meta-container">
                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-result" data-result="95"></div>
                                            </div><!-- End .ratings -->
                                                    <span class="ratings-amount">
                                                        1 Reviews
                                                    </span>
                                        </div><!-- End .rating-container -->
                                        <h3 class="item-name"><a href="/good/<?php echo $good['original']['id']?>"><?php echo $good['original']['name']?></a></h3>
                                        <div class="item-action">
                                            <a href="#" class="item-add-btn">
                                                <span class="icon-cart-text">Add to Cart</span>
                                            </a>
                                            <div class="item-action-inner">
                                                <a href="#" class="icon-button icon-like">Favourite</a>
                                                <a href="#" class="icon-button icon-compare">Checkout</a>
                                            </div><!-- End .item-action-inner -->
                                        </div><!-- End .item-action -->
                                    </div><!-- End .item-meta-container -->
                                </div><!-- End .item -->

                            <?php
                            }
                            ?>






                        </div><!--hot-items-slider -->
                        <div class="lg-margin"></div><!-- Space -->
                    </div><!-- End .hot-items -->
                </div><!-- End .col-md-12 -->

            </div><!-- End .row -->

            <div id="brand-slider-container" class="carousel-wrapper">
                <header class="content-title">
                    <div class="title-bg">
                        <h2 class="title">Manufacturers</h2>
                    </div><!-- End .title-bg -->
                </header>
                <div class="carousel-controls">
                    <div id="brand-slider-prev" class="carousel-btn carousel-btn-prev">
                    </div><!-- End .carousel-prev -->
                    <div id="brand-slider-next" class="carousel-btn carousel-btn-next carousel-space">
                    </div><!-- End .carousel-next -->
                </div><!-- End .carousel-controllers -->
                <div class="sm-margin"></div><!-- space -->
                <div class="brand-slider owl-carousel">
                    <a href="#"><img src="images/brands/brand-logo.png" alt="Brand Logo 1"></a>
                    <a href="#"><img src="images/brands/brand-logo.png" alt="Brand Logo 2"></a>
                    <a href="#"><img src="images/brands/brand-logo.png" alt="Brand Logo 3"></a>
                    <a href="#"><img src="images/brands/brand-logo.png" alt="Brand Logo 4"></a>
                    <a href="#"><img src="images/brands/brand-logo.png" alt="Brand Logo 5"></a>
                    <a href="#"><img src="images/brands/brand-logo.png" alt="Brand Logo 6"></a>
                    <a href="#"><img src="images/brands/brand-logo.png" alt="Brand Logo 7"></a>
                    <a href="#"><img src="images/brands/brand-logo.png" alt="Brand Logo 8"></a>
                    <a href="#"><img src="images/brands/brand-logo.png" alt="Brand Logo 9"></a>
                    <a href="#"><img src="images/brands/brand-logo.png" alt="Brand Logo 10"></a>
                    <a href="#"><img src="images/brands/brand-logo.png" alt="Brand Logo 11"></a>
                    <a href="#"><img src="images/brands/brand-logo.png" alt="Brand Logo 12"></a>
                    <a href="#"><img src="images/brands/brand-logo.png" alt="Brand Logo 13"></a>
                    <a href="#"><img src="images/brands/brand-logo.png" alt="Brand Logo 14"></a>
                    <a href="#"><img src="images/brands/brand-logo.png" alt="Brand Logo 15"></a>
                </div><!-- End .brand-slider -->
            </div><!-- End #brand-slider-container -->

        </div><!-- End .col-md-12 -->
    </div><!-- End .row -->
</div><!-- End .container -->

</section><!-- End #content -->
<script>
    $('.cart_btn').click(function(){
        $(this).parent().find('.cart_btn_form').submit();
    });
</script>