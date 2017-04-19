<section id="content">
    <div id="category-header">
        <div class="row">
            <div class="container">
                <div class="col-2">
                    <div class="category-image">
                        <img src="/photos/<?php echo $goods[0]['original']['image_large']?>" alt="Shoe" class="img-responsive">
                    </div><!-- End .category-image -->

                </div><!-- End .col-2 -->

                <div class="col-2 last">
                    <div class="category-title">
                        <h2><?php echo $goods[0]['original']['name']?></h2>
                        <?php echo $goods[0]['original']['description']?>
                        <a href="/good/<?php echo $goods[0]['original']['id']?>" class="btn btn-custom">ПРОСМОТРЕТЬ</a>
                    </div><!-- End .category-title -->
                </div><!-- End .col-2 -->
            </div><!-- End .container -->
        </div><!-- End .row -->
    </div><!-- End #category-header -->
    <div id="category-breadcrumb">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="index-2.html">Home</a></li>
                <li><a href="#">Electronics</a></li>
                <li class="active">Mobile</li>
            </ul>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div class="row">

                    <div class="col-md-9 col-sm-8 col-xs-12 main-content">

                        <div class="category-toolbar clearfix">
                            <div class="toolbox-filter clearfix">

                                <div class="sort-box">
                                    <span class="separator">sort by:</span>
                                    <div class="btn-group select-dropdown">
                                        <button type="button" class="btn select-btn">Position</button>
                                        <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">
                                            <i class="fa fa-angle-down"></i>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">Date</a></li>
                                            <li><a href="#">Name</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="view-box">
                                    <a href="category.html" class="active icon-button icon-grid"><i class="fa fa-th-large"></i></a>
                                    <a href="/category/<?php echo $category_id;?>/list" class="icon-button icon-list"><i class="fa fa-th-list"></i></a>
                                </div><!-- End .view-box -->

                            </div><!-- End .toolbox-filter -->
                            <div class="toolbox-pagination clearfix">
                                <ul class="pagination">
                                    <?echo $goods->links();?>
                                </ul>
                                <div class="view-count-box">
                                    <span class="separator">view:</span>
                                    <div class="btn-group select-dropdown">
                                        <button type="button" class="btn select-btn">10</button>
                                        <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">
                                            <i class="fa fa-angle-down"></i>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">15</a></li>
                                            <li><a href="#">30</a></li>
                                        </ul>
                                    </div>
                                </div><!-- End .view-count-box -->

                            </div><!-- End .toolbox-pagination -->


                        </div><!-- End .category-toolbar -->
                        <div class="md-margin"></div><!-- .space -->
                        <div class="category-item-container">
                            <div class="row">
                                
                                <?php
                                foreach($goods as $good){

                                ?>

                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="item">
                                        <div class="item-image-container">
                                            <figure>
                                                <a href="/good/<?php echo $good['original']['id']?>">
                                                    <img src="/photos/<?php echo $good['original']['image_small']?>" alt="item1" class="item-image">
                                                    <img src="/photos/<?php echo $good->photos[0]['original']['image_small']?>" alt="item1  Hover" class="item-image-hover">
                                                </a>
                                            </figure>
                                            <div class="item-price-container">
                                                <span class="old-price"><?php echo $good['original']['price']*$curs?><span class="sub-price">грн.</span></span>
                                                <span class="item-price">
                                                    <?php
                                                    $discount_summ=(($good['original']['price']/100)*$good['original']['discount'])*$curs;
                                                    echo $good['original']['price']*$curs-$discount_summ;
                                                    ?>
                                                    <span class="sub-price">грн.</span></span>
                                            </div>
                                            <span class="new-rect">New</span>
                                            <span class="discount-rect">-<?php echo $good['original']['discount']?>%</span>
                                        </div><!-- End .item-image -->
                                        <div class="item-meta-container">
                                            <div class="ratings-container">

                                                <input type="range" value="<?php echo $good['original']['star']?>" step="0.5" id="backing5">
                                                <input class="rating_id_good " type="hidden" value="<?php echo $good['original']['id'];?>">
                                                <div class="rateit" data-rateit-backingfld="#backing5" data-rateit-resetable="false"  data-rateit-ispreset="true"
                                                     data-rateit-min="0" data-rateit-max="5">
                                                </div>
                                                <script>
                                                    $(".rateit").bind('rated', function (event, value) {
                                                        var id_good=$('.rating_id_good').val();
                                                        
                                                        $.ajax({
                                                            type: "POST",
                                                            url: '/change_rating',
                                                            data: {id_good:id_good,rating:value},
                                                            success: function (data){
                                                            }
                                                        });
                                                    
                                                    });

                                                </script>

                                            </div><!-- End .rating-container -->
                                            <h3 class="item-name"><a href="/good/<?php echo $good['original']['id']?>"><?php echo $good['original']['name']?></a></h3>
                                            <div class="item-action">





                                                        <form class="cart_btn_form" method="post" action="<?php echo route('add_to_cart')?>">
                                                            <?php echo csrf_field();?>
                                                            <input type="hidden" name="id_good" value="<?php echo $good['original']['id']?>">
                                                            <input type="hidden" class="inp_count" name="qnt" style="margin-left:-7px;width:80px;" value="1">
                                                        </form>

                                                    <a href="#" class="cart_btn item-add-btn">
                                                        <span class="icon-cart-text">В корзину</span>
                                                    </a>


                                                <div class="item-action-inner">
                                                    <a href="#" class="icon-button icon-like">Favourite</a>
                                                    <a href="#" class="icon-button icon-compare">Checkout</a>
                                                </div><!-- End .item-action-inner -->
                                            </div><!-- End .item-action -->
                                        </div><!-- End .item-meta-container -->
                                    </div><!-- End .item -->

                                </div><!-- End .col-md-4 -->

                                
                                
                                <?php
                                }
                                ?>
                                
                                
                                
                                
                                
                                
                                
                      
                            </div><!-- End .row -->
                        </div><!-- End .category-item-container -->

                        <div class="pagination-container clearfix">
                            <div class="pull-right">
                                <?
                                echo $goods->links();?>
                            </div><!-- End .pull-right -->

                            <!--<div class="pull-right view-count-box hidden-xs">
                                <span class="separator">view:</span>
                                <div class="btn-group select-dropdown">
                                    <button type="button" class="btn select-btn">10</button>
                                    <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">
                                        <i class="fa fa-angle-down"></i>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#">15</a></li>
                                        <li><a href="#">30</a></li>
                                    </ul>
                                </div>
                            </div>-->
                        </div><!-- End pagination-container -->


                    </div><!-- End .col-md-9 -->

                    <aside class="col-md-3 col-sm-4 col-xs-12 sidebar">
                        <div class="widget">
                            <div class="panel-group custom-accordion sm-accordion" id="category-filter">
                                <div class="panel">
                                    <div class="accordion-header">
                                        <div class="accordion-title"><span>Категории</span></div><!-- End .accordion-title -->
                                        <a class="accordion-btn opened"  data-toggle="collapse" data-target="#category-list-1"></a>
                                    </div><!-- End .accordion-header -->

                                    <div id="category-list-1" class="collapse in">
                                        <div class="panel-body">
                                            <ul class="category-filter-list jscrollpane">
                                                <?php
                                                foreach($menu as $m){


                                                 ?>
                                                    <li><a href="/category/<?php echo $m->id ?>"><?php
                                                     if($m->parent_id!=0){

                                                     echo $m->name ;
                                                     }


                                                    ?></a></li>

                                                 <?php

                                                }
                                                ?>




                                            </ul>
                                        </div><!-- End .panel-body -->
                                    </div><!-- #collapse -->
                                </div><!-- End .panel -->


                                <div class="panel">
                                    <div class="accordion-header">
                                        <div class="accordion-title"><span>Цена</span></div><!-- End .accordion-title -->
                                        <a class="accordion-btn opened"  data-toggle="collapse" data-target="#category-list-3"></a>
                                    </div><!-- End .accordion-header -->

                                    <div id="category-list-3" class="collapse in">
                                        <div class="panel-body">
                                            <div id="price-range">

                                            </div><!-- End #price-range -->
                                            <div id="price-range-details">
                                                <span class="sm-separator">от</span>
                                                <form id="price_range_form" method="get" action="/category/<?php echo $category_id?>">
                                                <input type="text" name="price-range-low" id="price-range-low" class="separator">
                                                <span class="sm-separator">до</span>
                                                <input type="text" name="price-range-high" id="price-range-high">
                                                
                                                </form>
                                            </div>
                                            <div id="price-range-btns">
                                                <a href="#" class="price_search_btn btn btn-custom-2 btn-sm">Ok</a>
                                                <a href="#" class="btn btn-custom-2 btn-sm">Очистить</a>
                                            </div>

                                        </div><!-- End .panel-body -->
                                    </div><!-- #collapse -->
                                </div><!-- End .panel -->

                            </div><!-- .panel-group -->
                        </div><!-- End .widget -->



                    </aside><!-- End .col-md-3 -->
                </div><!-- End .row -->


            </div><!-- End .col-md-12 -->
        </div><!-- End .row -->
    </div><!-- End .container -->

</section><!-- End #content -->
<script>
    $('.cart_btn').click(function(){
        $(this).parent().find('.cart_btn_form').submit();
    });
    
    $('.price_search_btn').click(function(){
        alert()
        $('#price_range_form').submit();
        
    })
</script>