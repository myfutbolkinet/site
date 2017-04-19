

<div id="wrapper">
    <header id="header">
        <div id="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="header-top-left">
                            <ul id="top-links" class="clearfix">
                                <li><a href="/shoping_cart" title="Моя корзина"><span class="top-icon top-icon-cart"></span><span class="hide-for-xs">Моя корзина</span></a></li>
                                <li><a href="checkout.html" title="Checkout"><i class="fa fa-phone" aria-hidden="true"></i><span class="hide-for-xs">067-486-72-40</span></a></li>
                                <li><a href="checkout.html" title="Checkout"><i class="fa fa-phone" aria-hidden="true"></i><span class="hide-for-xs">093-145-15-51</span></a></li>
                            </ul>
                        </div><!-- End .header-top-left -->
                        <div class="header-top-right">

                            <div class="header-text-container pull-right">
                                <p class="header-text">Добро пожаловать в Venedor!</p>
                            <?php
                               /* if(Auth::guest()){
                                */?><!--


                                <p class="header-link"><a href="<?php /*echo route('login') */?>">Логін</a>&nbsp;or&nbsp;
                                <a href="<?php /*echo route('register') */?>">регистрация</a></p>

                                --><?/*
                                }*/
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

                                    <a href="<?php echo route('shoping_cart')?>" class="btn btn-custom dropdown-toggle"><!--<button type="button"  data-toggle="dropdown">-->
                                        <span class="cart-menu-icon"></span>

                                        <?php

                                        if(Session::has('cart')){
                                            $cart_count=session()->get('cart')->totalQty;
                                            $cart_price=session()->get('cart')->totalPrice*$curs;
                                        }
                                        else{
                                            $cart_count=0;
                                        }

                                        ?>



                                        <?php echo $cart_count;?> шт.

                                        <?php
                                        if(isset($cart_price)){
                                            echo '<span class="drop-price">-';
                                            echo $cart_price ;
                                            echo "грн.</span>";
                                        }
                                        ?>


                                        <!--</button>--></a>
                                </div><!-- End .btn-group -->
                            </div><!-- End .dropdown-cart-menu-container -->
                            <div class="header-top-dropdowns pull-right">

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

                                            if($arr[$parent_id][$i]->id==3){
                                                echo '
                                            <li> <a href="/contacts">';
                                            }else{
                                            echo '
                                            <li> <a href="/category/'.$arr[$parent_id][$i]->id.'">';

                                            }


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

                            </div><!-- End #quick-access -->
                        </div><!-- End .col-md-12 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->

            </div><!-- End #nav -->
        </div><!-- End #inner-header -->
    </header><!-- End #header -->

    <section id="content">
