

<div id="wrapper">
    <header id="header">
        <div id="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="header-top-left">
                            <ul id="top-links" class="clearfix">
                                <li><a href="#" title="My Wishlist"><span class="top-icon top-icon-pencil"></span><span class="hide-for-xs">My Wishlist</span></a></li>
                                <li><a href="#" title="My Account"><span class="top-icon top-icon-user"></span><span class="hide-for-xs">My Account</span></a></li>
                                <li><a href="cart.html" title="My Cart"><span class="top-icon top-icon-cart"></span><span class="hide-for-xs">My Cart</span></a></li>
                                <li><a href="checkout.html" title="Checkout"><span class="top-icon top-icon-check"></span><span class="hide-for-xs">Checkout</span></a></li>
                                <li><a href="checkout.html" title="Checkout"><i class="fa fa-phone" aria-hidden="true"></i><span class="hide-for-xs">067-486-72-40</span></a></li>
                                <li><a href="checkout.html" title="Checkout"><i class="fa fa-phone" aria-hidden="true"></i><span class="hide-for-xs">093-145-15-51</span></a></li>
                            </ul>
                        </div><!-- End .header-top-left -->
                        <div class="header-top-right">

                            <div class="header-text-container pull-right">
                                <p class="header-text">Добро пожаловать в Venedor!</p>
                            <?php
                                if(Auth::guest()){
                                ?>


                                <p class="header-link"><a href="<?php echo route('login') ?>">Логін</a>&nbsp;or&nbsp;
                                <a href="<?php echo route('register') ?>">регистрация</a></p>

                                <?
                                }
                                ?>

                            </div><!-- End .pull-right -->
                        </div><!-- End .header-top-right -->
                    </div><!-- End .col-md-12 -->
                </div><!-- End .row -->
            </div><!-- End .container -->
        </div><!-- End #header-top -->

        <div id="inner-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-sm-5 col-xs-12 logo-container">
                        <h1 class="logo clearfix">
                            <span>Responsive eCommerce Template</span>
                            <a href="index-2.html" title="Venedor eCommerce Template"><img src="/images/logo.png" alt="Venedor Commerce Template" width="188" height="67"></a>
                        </h1>
                    </div><!-- End .col-md-5 -->
                    <div class="col-md-7 col-sm-7 col-xs-12 header-inner-right clearfix">
                        <div class="header-inner-right-wrapper">
                            <div class="dropdown-cart-menu-container pull-right">
                                <div class="btn-group dropdown-cart">
                                    <button type="button" class="btn btn-custom dropdown-toggle" data-toggle="dropdown">
                                        <span class="cart-menu-icon"></span>
                                        0 item(s) <span class="drop-price">- $0.00</span>
                                    </button>

                                    <div class="dropdown-menu dropdown-cart-menu pull-right clearfix" role="menu">
                                        <p class="dropdown-cart-description">Recently added item(s).</p>
                                        <ul class="dropdown-cart-product-list">
                                            <li class="item clearfix">
                                                <a href="#" title="Delete item" class="delete-item"><i class="fa fa-times"></i></a>
                                                <a href="#" title="Edit item" class="edit-item"><i class="fa fa-pencil"></i></a>
                                                <figure>
                                                    <a href="product.html"><img src="/images/products/thumbnails/shoe1.jpg" alt="shoe 1"></a>
                                                </figure>
                                                <div class="dropdown-cart-details">
                                                    <p class="item-name">
                                                        <a href="product.html">Cam Optia AF Webcam </a>
                                                    </p>
                                                    <p>
                                                        1x
                                                        <span class="item-price">$499</span>
                                                    </p>
                                                </div><!-- End .dropdown-cart-details -->
                                            </li>
                                            <li class="item clearfix">
                                                <a href="#" title="Delete item" class="delete-item"><i class="fa fa-times"></i></a>
                                                <a href="#" title="Edit item" class="edit-item"><i class="fa fa-pencil"></i></a>
                                                <figure>
                                                    <a href="product.html"><img src="/images/products/thumbnails/shoe3.jpg" alt="shoe 3"></a>
                                                </figure>
                                                <div class="dropdown-cart-details">
                                                    <p class="item-name">
                                                        <a href="product.html">Iphone Case Cover Original</a>
                                                    </p>
                                                    <p>
                                                        1x
                                                        <span class="item-price">$499<span class="sub-price">.99</span></span>
                                                    </p>
                                                </div><!-- End .dropdown-cart-details -->
                                            </li>
                                        </ul>

                                        <ul class="dropdown-cart-total">
                                            <li><span class="dropdown-cart-total-title">Shipping:</span>$7</li>
                                            <li><span class="dropdown-cart-total-title">Total:</span>$1005<span class="sub-price">.99</span></li>
                                        </ul><!-- .dropdown-cart-total -->
                                        <div class="dropdown-cart-action">
                                            <p><a href="cart.html" class="btn btn-custom-2 btn-block">Cart</a></p>
                                            <p><a href="checkout.html" class="btn btn-custom btn-block">Checkout</a></p>
                                        </div><!-- End .dropdown-cart-action -->

                                    </div><!-- End .dropdown-cart -->
                                </div><!-- End .btn-group -->
                            </div><!-- End .dropdown-cart-menu-container -->
                            <div class="header-top-dropdowns pull-right">
                                <div class="btn-group dropdown-money">
                                    <button type="button" class="btn btn-custom dropdown-toggle" data-toggle="dropdown">
                                        <span class="hide-for-xs">US Dollar</span><span class="hide-for-lg">$</span>
                                    </button>
                                    <ul class="dropdown-menu pull-right" role="menu">
                                        <li><a href="#"><span class="hide-for-xs">Euro</span><span class="hide-for-lg">&euro;</span></a></li>
                                        <li><a href="#"><span class="hide-for-xs">Pound</span><span class="hide-for-lg">&pound;</span></a></li>
                                    </ul>
                                </div><!-- End .btn-group -->
                                <div class="btn-group dropdown-language">
                                    <button type="button" class="btn btn-custom dropdown-toggle" data-toggle="dropdown">
                                        <span class="flag-container"><img src="/images/england-flag.png" alt="flag of england"></span>
                                        <span class="hide-for-xs">English</span>
                                    </button>
                                    <ul class="dropdown-menu pull-right" role="menu">
                                        <li><a href="#"><span class="flag-container"><img src="/images/italy-flag.png" alt="flag of england"></span><span class="hide-for-xs">Italian</span></a></li>
                                        <li><a href="#"><span class="flag-container"><img src="/images/spain-flag.png" alt="flag of italy"></span><span class="hide-for-xs">Spanish</span></a></li>
                                        <li><a href="#"><span class="flag-container"><img src="/images/france-flag.png" alt="flag of france"></span><span class="hide-for-xs">French</span></a></li>
                                        <li><a href="#"><span class="sm-separator"><img src="/images/germany-flag.png" alt="flag of germany"></span><span class="hide-for-xs">German</span></a></li>
                                    </ul>
                                </div><!-- End .btn-group -->
                            </div><!-- End .header-top-dropdowns -->
                        </div><!-- End .header-inner-right-wrapper -->

                    </div><!-- End .col-md-7 -->
                </div><!-- End .row -->
            </div><!-- End .container -->

            <div id="main-nav-container">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 clearfix">

                            <nav id="main-nav">



                               <!-- <ul class="menu clearfix">-->


                                    <?php


                                    class Recursion
                                    {
                                        public $level;
                                        public $lang = 'en';

                                        public function get_cat($menu)
                                        {

                                            if (!$menu) {
                                                return NULL;
                                            }
                                            $arr_cat = array();
                                            if (count($menu) != 0) {

                                                //В цикле формируем массив

                                                foreach ($menu as $key => $row) {

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
                                                echo '<ul >';
                                            }
                                            else{
                                            ?>
                                            <ul class="menu clearfix">
                                            <?php
                                            }
                                            //перебираем в цикле массив и выводим на экран
                                            for ($i = 0; $i < count($arr[$parent_id]); $i++) {

                                                echo '
                                          <li>
                                        <a href="/category/'.$arr[$parent_id][$i]->id.'">';
                                                if($parent_id == 0){
                                                    /*echo '<i class="fa '.$arr[$parent_id][$i]->icon.'"></i>';*/
                                                }

                                                echo '
                                <span class="menu-title">' . $arr[$parent_id][$i]->name . '</span>
                                <i class="arrow"></i> 
                                            </a>';
                                                //рекурсия - проверяем нет ли дочерних категорий
                                                $this->view_cat($arr, $arr[$parent_id][$i]->id, 1);
                                                echo '</li> ';
                                            }
                                            if($parent_id !== 0) {
                                                echo '</ul>';
                                            }
                                        }
                                    }
                                    $rec= new Recursion;
                                    $result = $rec->get_cat($menu);
                                    //Выводи каталог на экран с помощью рекурсивной функции

                                    $rec->view_cat($result,0,0);

                                    ?>


                                <!--</ul>-->








                            </nav>

                            <div id="quick-access">
                                <form class="form-inline quick-search-form" role="form" action="#">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Search here">
                                    </div><!-- End .form-inline -->
                                    <button type="submit" id="quick-search" class="btn btn-custom"></button>
                                </form>
                            </div><!-- End #quick-access -->
                        </div><!-- End .col-md-12 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->

            </div><!-- End #nav -->
        </div><!-- End #inner-header -->
    </header><!-- End #header -->

    <section id="content">
