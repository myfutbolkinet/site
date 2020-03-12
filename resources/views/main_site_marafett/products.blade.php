@extends('main_site_marafett.layouts.app')

@section('content')


    <!-- content container fluid-->
    <div class="container-fluid main-wrapp padded-top" id="content-grid">
        <!-- category navbar -->
        <nav class="navbar-fixed-top text-center text-uppercase product-nav">
            <h3 class="pull-left category-name">Магазин</h3>
            <span class="result-text">показано 16 из 76 товаров</span>
            <div class="pull-right blog-pagination">

                {{ $goods->links('partials.simple-default') }}
                <!--ul class="pagination shop-pagination">
                    <li>
                        <a href="#"><i class="fa fa-angle-left"></i>Previous products</a>
                    </li>
                    <li class="visible">
                        <a href="#">Next products<i class="fa fa-angle-right"></i></a>
                    </li>
                </ul-->
                <div class="sorting-select">
                    <?
                   $cat=request()->input('cat');
                   $url=Request::fullUrl();

                    function remove_url_query($url, $key) {
                        $url = preg_replace('/(?:&|(\?))' . $key . '=[^&]*(?(1)&|)?/i', "$1", $url);
                        $url = rtrim($url, '?');
                        $url = rtrim($url, '&');
                        return $url;
                    }

                    $url=remove_url_query($url, 'price_filter');
                    ?>
                    <select class="text-uppercase" onchange="location = this.value;">
                        <option value="{{$url}}">сортировка</option>
                        <option value="{{$url}}&price_filter=1">от дешевых к дорогим</option>
                        <option value="{{$url}}&price_filter=2">от дорогих к дешевым</option>
                    </select>
                </div>
            </div>
            <button class="filters-btn btn">
                <i class="fa fa-sliders" aria-hidden="true"></i>
            </button>
        </nav>

        <!-- category filters -->
        <div class="category-filters text-uppercase" id="filters-sidebar">
            <!-- filters controls -->
            <div class="controls">
                <h5>Фильтры</h5>
                <button class="filters-btn btn">
                    <i class="fa fa-sliders" aria-hidden="true"></i>
                </button>
            </div>

            <!-- price filter -->
            <div class="widget widget_price_filter">
                <h5 class="widget-title">Price range</h5>
                <div id="price-range"></div>
                <input type="text" id="amount" readonly>
                <button class="btn btn-primary btn-sm pull-right" id="applyFilter">Filter</button>
                <div class="clearfix"></div>
            </div>
            <!-- categories filter-->
            <div class="widget widget_categories">
                <h5 class="widget-title">Categories</h5>
                <h5>Men's clothing</h5>
                <ul class="list-unstyled">
                    <li><a href="#">Hoodies &amp; Sweatshirts</a></li>
                    <li><a href="#">Jackets &amp; Coats</a></li>
                    <li><a href="#">Pants &amp; Chinos</a></li>
                    <li><a href="#">T-Shirts &amp; Tanks</a></li>
                </ul>
                <h5>Women's clothing</h5>
                <ul class="list-unstyled">
                    <li><a href="#">Coats &amp; Jackets</a></li>
                    <li><a href="#">Dresses</a></li>
                    <li><a href="#">Hoodies &amp; Sweatshirts</a></li>
                    <li><a href="#">Tops</a></li>
                </ul>
            </div>
            <!-- colors filter-->
            <div class="widget widget_colors">
                <h5 class="widget-title">Colors</h5>
                <ul class="list-unstyled">
                    <li>
                        <a href="#">Black</a>
                        <span>4</span>
                    </li>
                    <li>
                        <a href="#">Blue</a>
                        <span>1</span>
                    </li>
                    <li>
                        <a href="#">Brown</a>
                        <span>8</span>
                    </li>
                    <li>
                        <a href="#">Red</a>
                        <span>3</span>
                    </li>
                </ul>
            </div>
        </div>

        <!-- products -->
        <div class="top-products all-products cat_v2">

            <div class="row padded15">


                @foreach($goods as $good)

                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 text-center">
                    <div class="product product-blk-lg">
                        <a href="/product/{{$good->id}}" class="product-lnk"></a>
                        <img src="/storage/{{$good->photos->first()->photo}}" alt="product-image" class="img-responsive product-img">
                        <div class="hover-caption" data-bg="{{'/storage/'.$good->photos->skip(1)->first()->photo}}">
                            <div class="text-uppercase product-controls">
                                <h5>
                                    <a href="product.html">{{$good->name}}</a>
                                </h5>
                                <span class="price">{{$good->price}}</span>


                                <?php
                                //check if cart contains this good
                                if(isset($products)){
                                    foreach($products as $key=>$value){
                                        if($good->id==$key){
                                            $cart_text[$good->id]='Товар в корзине';
                                            break;
                                        }
                                        else{
                                            $cart_text[$good->id]='Добавить в корзину';
                                        }
                                    }}else{
                                    $cart_text[$good->id]='Добавить в корзину';
                                }

                                ?>


                                <ul class="list-inline">
                                    <li><button class="btn btn-default">{{$cart_text[$good->id]}}</button></li>
                                    <li><button class="btn btn-default">Добавить в желания</button></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>

        </div>
        <div class="blog-pagination">
    {{ $goods->links('partials.simple-default') }}
        </div>


        <!-- instagram feed -->
        <div class="instagram-feed">
            <div class="row" id="instagram-block">
                <div class="text-uppercase col-lg-4 col-md-4 col-sm-4 col-xs-12 insta-item">
                    <ul class="list-inline">
                        <li data-bg="http://placehold.it/550x550" class="shine-effect">
                            <a href="http://placehold.it/700x550" class="popup-lnk"></a>
                        </li>
                        <li data-bg="http://placehold.it/550x550" class="shine-effect">
                            <a href="http://placehold.it/700x550" class="popup-lnk"></a>
                        </li>
                        <li data-bg="http://placehold.it/550x550" class="shine-effect">
                            <a href="http://placehold.it/700x550" class="popup-lnk"></a>
                        </li>
                        <li data-bg="http://placehold.it/550x550" class="shine-effect">
                            <a href="http://placehold.it/700x550" class="popup-lnk"></a>
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
                            <a href="http://placehold.it/900x550" class="popup-lnk"></a>
                        </li>
                        <li data-bg="http://placehold.it/550x550" class="shine-effect">
                            <a href="http://placehold.it/700x950" class="popup-lnk"></a>
                        </li>
                        <li data-bg="http://placehold.it/550x550" class="shine-effect">
                            <a href="http://placehold.it/700x750" class="popup-lnk"></a>
                        </li>
                        <li data-bg="http://placehold.it/550x550" class="shine-effect">
                            <a href="http://placehold.it/700x550" class="popup-lnk"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->


@endsection