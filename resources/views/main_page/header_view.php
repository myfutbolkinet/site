

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


    <div class="content" style="margin:0 auto;width:100%;z-index:9;position:relative" >
        <div class="row" style="text-align:center;position:relative;margin:0 auto;height:650px;">
            <div class="span12 " style="text-align:center;position:relative;margin:0 auto;height:600px;background:rgba(255,255,255,0.9);">
                <!-- Enable MaxWidth Switching -->
                <input checked type=radio name=respond id=desktop />
                <input type=radio name=respond id=tablet />
                <input type=radio name=respond id=mobile />
                <article id=slider>

                    <!-- Slider Setup -->
                    <input checked type=radio name=slider id=slide1 />
                    <input type=radio name=slider id=slide2 />
                    <input type=radio name=slider id=slide3 />
                    <input type=radio name=slider id=slide4 />
                    <input type=radio name=slider id=slide5 />
                    <!-- The Slider -->
                    <div id=slides>
                        <div id=overflow>
                            <div class=inner>
                                <article>
                                    <div class=info><h3>Cloud Dragon</h3> by <a href="http://voyager3.tumblr.com">Brendan Zabarauskas</a></div>
                                    <img src="/img/slider1.jpg">
                                </article>
                                <article>
                                    <div class=info><h3>Mountain Fort</h3> by <a href="http://voyager3.tumblr.com">Brendan Zabarauskas</a></div>
                                    <img src="/img/slider2.jpg"/>
                                </article>
                                <article>
                                    <div class=info><h3>Mountain Outpost</h3> by <a href="http://voyager3.tumblr.com">Brendan Zabarauskas</a></div>
                                    <img src="/img/slider3.jpg" />
                                </article>
                                <article>
                                    <div class=info><h3>Cliffs</h3> by <a href="http://voyager3.tumblr.com">Brendan Zabarauskas</a></div>
                                    <img src="/img/slider1.jpg" />
                                </article>
                                <article>
                                    <div class=info><h3>Hill Fort</h3> by <a href="http://voyager3.tumblr.com">Brendan Zabarauskas</a></div>
                                    <img src="/img/slider2.jpg"/>
                                </article>
                            </div> <!-- .inner -->
                        </div> <!-- #overflow -->
                    </div> <!-- #slides -->
                    <!-- Controls and Active Slide Display -->
                    <div id=controls>
                        <label for=slide1></label>
                        <label for=slide2></label>
                        <label for=slide3></label>
                        <label for=slide4></label>
                        <label for=slide5></label>
                    </div> <!-- #controls -->
                    <div id=active>
                        <label for=slide1></label>
                        <label for=slide2></label>
                        <label for=slide3></label>
                        <label for=slide4></label>
                        <label for=slide5></label>
                    </div> <!-- #active -->


                </article> <!-- #slider -->


                <style>


                    ol, ul {
                        list-style: none; }
                    table {
                        border-collapse: collapse;
                        border-spacing: 0; }
                    caption, th, td {
                        text-align: left;
                        font-weight: normal;
                        vertical-align: middle; }
                    q, blockquote {
                        quotes: none; }
                    q:before, q:after, blockquote:before, blockquote:after {
                        content: "";
                        content: none; }
                    a img {
                        border: none; }
                    article, aside, details, figcaption, figure, footer, header, hgroup, menu, nav, section, summary {
                        display: block; }



                    h1,h2,h3,h4,h5,h6 {
                        font-weight:bold;
                        font-size: 16px;
                        margin: 12px 0;
                    }

                    h1 {
                        margin: 35px 0 5px;
                        font-size: 26px;
                        font-weight: normal;
                    }

                    #slider {
                        text-align: center;
                    }

                    h2 {
                        margin: 40px 0 25px;
                        border-bottom: 1px solid #bbb;
                        padding: 0 0 10px;
                    }

                    p {
                        margin: 0 0 16px;
                    }

                    strong {
                        font-weight: bold;
                    }

                    label, a {
                        color: teal;
                        cursor: pointer;
                        text-decoration: none;
                    }
                    label:hover, a:hover {
                        color: #000 !important;
                    }
                    * { -moz-box-sizing: border-box; -webkit-box-sizing: border-box; box-sizing: border-box; }
                    label, #active, img { -moz-user-select:none;-webkit-user-select:none; }
                    .catch { display: block; height: 0; overflow: hidden; }
                    #slider {
                        margin: 0 auto;
                    }
                    #description {
                        margin: 25px auto;
                        text-align: left;
                        max-width: 650px;
                        padding: 0 25px;
                    }
                    .respond {
                        margin: 0 auto;
                        max-width: 370px;
                    }









                    /* NEW EXPERIMENT */
                    /* Slider Setup */

                    input {
                        display: none;
                    }

                    #slide1:checked ~ #slides .inner { margin-left:0; }
                    #slide2:checked ~ #slides .inner { margin-left:-100%; }
                    #slide3:checked ~ #slides .inner { margin-left:-200%; }
                    #slide4:checked ~ #slides .inner { margin-left:-300%; }
                    #slide5:checked ~ #slides .inner { margin-left:-400%; }


                    #overflow {
                        width: 100%;
                        overflow: hidden;
                    }

                    article img {
                        width: 100%;
                    }

                    #slides .inner {
                        width: 500%;
                        line-height: 0;
                    }

                    #slides article {
                        width: 20%;
                        float: left;
                    }

                    /* Slider Styling */

                    /* Control Setup */

                    #controls {
                        margin: -25% 0 0 0;
                        width: 100%;
                        height: 50px;
                    }

                    #controls label {
                        display: none;
                        width: 50px;
                        height: 50px;
                        opacity: 0.3;
                    }

                    #active {
                        margin: 23% 0 0;
                        text-align: center;
                    }

                    #active label {
                        -webkit-border-radius: 5px;
                        -moz-border-radius: 5px;
                        border-radius: 5px;
                        display: inline-block;
                        width: 10px;
                        height: 10px;
                        background: #bbb;
                    }

                    #active label:hover {
                        background: #ccc;
                        border-color: #777 !important;
                    }

                    #controls label:hover {
                        opacity: 0.8;
                    }

                    #slide1:checked ~ #controls label:nth-child(2),
                    #slide2:checked ~ #controls label:nth-child(3),
                    #slide3:checked ~ #controls label:nth-child(4),
                    #slide4:checked ~ #controls label:nth-child(5),
                    #slide5:checked ~ #controls label:nth-child(1) {
                        background: url('http://csscience.com/responsiveslidercss3/next.png') no-repeat;
                        float: right;
                        margin: 0 -70px 0 0;
                        display: block;
                    }


                    #slide1:checked ~ #controls label:nth-child(5),
                    #slide2:checked ~ #controls label:nth-child(1),
                    #slide3:checked ~ #controls label:nth-child(2),
                    #slide4:checked ~ #controls label:nth-child(3),
                    #slide5:checked ~ #controls label:nth-child(4) {
                        background: url('http://csscience.com/responsiveslidercss3/prev.png') no-repeat;
                        float: left;
                        margin: 0 0 0 -70px;
                        display: block;
                    }

                    #slide1:checked ~ #active label:nth-child(1),
                    #slide2:checked ~ #active label:nth-child(2),
                    #slide3:checked ~ #active label:nth-child(3),
                    #slide4:checked ~ #active label:nth-child(4),
                    #slide5:checked ~ #active label:nth-child(5) {
                        background: #333;
                        border-color: #333 !important;
                    }

                    /* Info Box */

                    .info {
                        line-height: 20px;
                        margin: 0 0 -150%;
                        position: absolute;
                        font-style: italic;
                        padding: 30px 30px;
                        opacity: 0;
                        color: #000;
                        text-align: left;
                    }

                    .info h3 {
                        color: #333;
                        margin: 0 0 5px;
                        font-weight: normal;
                        font-size: 22px;
                        font-style: normal;
                    }

                    /* Slider Styling */

                    #slides {
                        margin: 45px 0 0;
                        -webkit-border-radius: 5px;
                        -moz-border-radius: 5px;
                        border-radius: 5px;
                        box-shadow: 1px 1px 4px #666;
                        padding: 1%;
                        background: #fff;
                        background: rgb(252,255,244); /* Old browsers */
                        background: -moz-linear-gradient(top,  rgba(252,255,244,1) 0%, rgba(219,218,201,1) 100%); /* FF3.6+ */
                        background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(252,255,244,1)), color-stop(100%,rgba(219,218,201,1))); /* Chrome,Safari4+ */
                        background: -webkit-linear-gradient(top,  rgba(252,255,244,1) 0%,rgba(219,218,201,1) 100%); /* Chrome10+,Safari5.1+ */
                        background: -o-linear-gradient(top,  rgba(252,255,244,1) 0%,rgba(219,218,201,1) 100%); /* Opera 11.10+ */
                        background: -ms-linear-gradient(top,  rgba(252,255,244,1) 0%,rgba(219,218,201,1) 100%); /* IE10+ */
                        background: linear-gradient(top,  rgba(252,255,244,1) 0%,rgba(219,218,201,1) 100%); /* W3C */
                        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#fcfff4', endColorstr='#dbdac9',GradientType=0 ); /* IE6-9 */
                    }


                    /* Animation */

                    #slides .inner {
                        -webkit-transform: translateZ(0);
                        -webkit-transition: all 800ms cubic-bezier(0.770, 0.000, 0.175, 1.000);
                        -moz-transition: all 800ms cubic-bezier(0.770, 0.000, 0.175, 1.000);
                        -ms-transition: all 800ms cubic-bezier(0.770, 0.000, 0.175, 1.000);
                        -o-transition: all 800ms cubic-bezier(0.770, 0.000, 0.175, 1.000);
                        transition: all 800ms cubic-bezier(0.770, 0.000, 0.175, 1.000); /* easeInOutQuart */

                        -webkit-transition-timing-function: cubic-bezier(0.770, 0.000, 0.175, 1.000);
                        -moz-transition-timing-function: cubic-bezier(0.770, 0.000, 0.175, 1.000);
                        -ms-transition-timing-function: cubic-bezier(0.770, 0.000, 0.175, 1.000);
                        -o-transition-timing-function: cubic-bezier(0.770, 0.000, 0.175, 1.000);
                        transition-timing-function: cubic-bezier(0.770, 0.000, 0.175, 1.000); /* easeInOutQuart */
                    }

                    #slider {
                        -webkit-transform: translateZ(0);
                        -webkit-transition: all 0.5s ease-out;
                        -moz-transition: all 0.5s ease-out;
                        -o-transition: all 0.5s ease-out;
                        transition: all 0.5s ease-out;
                    }

                    #controls label{
                        -webkit-transform: translateZ(0);
                        -webkit-transition: opacity 0.2s ease-out;
                        -moz-transition: opacity 0.2s ease-out;
                        -o-transition: opacity 0.2s ease-out;
                        transition: opacity 0.2s ease-out;
                    }

                    #slide1:checked ~ #slides article:nth-child(1) .info,
                    #slide2:checked ~ #slides article:nth-child(2) .info,
                    #slide3:checked ~ #slides article:nth-child(3) .info,
                    #slide4:checked ~ #slides article:nth-child(4) .info,
                    #slide5:checked ~ #slides article:nth-child(5) .info {
                        opacity: 1;
                        -webkit-transition: all 1s ease-out 0.6s;
                        -moz-transition: all 1s ease-out 0.6s;
                        -o-transition: all 1s ease-out 0.6s;
                        transition: all 1s ease-out 0.6s;
                    }

                    .info, #controls, #slides, #active, #active label, .info h3, .desktop, .tablet, .mobile {
                        -webkit-transform: translateZ(0);
                        -webkit-transition: all 0.5s ease-out;
                        -moz-transition: all 0.5s ease-out;
                        -o-transition: all 0.5s ease-out;
                        transition: all 0.5s ease-out;
                    }

                    /* Respond Options */

                    #desktop:checked ~ #slider {
                        max-width: 960px;
                    }

                    #tablet:checked ~ #slider {
                        max-width: 850px;
                    }

                    #mobile:checked ~ #slider {
                        max-width: 450px;
                    }

                    #desktop:checked ~ #slider .desktop,
                    #tablet:checked ~ #slider .tablet,
                    #mobile:checked ~ #slider .mobile {
                        color: #777;
                        opacity: 1;
                    }

                    .desktop, .tablet, .mobile {
                        display: inline-block;
                        width: 60px;
                        height: 60px;
                        padding-top: 50px;
                        opacity: 0.35;
                        font-size: 12px;
                    }

                    .desktop:hover, .tablet:hover, .mobile:hover {
                        opacity: 0.2;
                    }

                    .desktop {
                        background: url('http://csscience.com/responsiveslidercss3/desktop.png') no-repeat;
                    }

                    .tablet {
                        background: url('http://csscience.com/responsiveslidercss3/tablet.png') no-repeat;
                    }

                    .mobile {
                        background: url('http://csscience.com/responsiveslidercss3/mobile.png') no-repeat;
                    }

                    /* Responsive Styling */

                    /* Tablet */

                    #tablet:checked ~ #slider #controls {
                        margin: -25% 0 0 12%;
                        width: 76%;
                        height: 50px;
                    }

                    #tablet:checked ~ #slider #controls label {
                        -moz-transform: scale(0.8);
                        -webkit-transform: scale(0.8);
                        -o-transform: scale(0.8);
                        -ms-transform: scale(0.8);
                        transform: scale(0.8);
                    }

                    #tablet:checked  ~ #slider #slides, #mobile:checked  ~ #slider #slides {
                        padding: 1% 0;
                        -webkit-border-radius: 0px;
                        -moz-border-radius: 0px;
                        border-radius: 0px;
                    }

                    #tablet:checked ~ #slider #active {
                        margin: 22% 0 0;
                    }

                    @media only screen and (max-width: 850px) and (min-width: 450px) {

                        #slider #controls {
                            margin: -25% 0 0 15%;
                            width: 70%;
                            height: 50px;
                        }

                        #slider #controls label {
                            -moz-transform: scale(0.8);
                            -webkit-transform: scale(0.8);
                            -o-transform: scale(0.8);
                            -ms-transform: scale(0.8);
                            transform: scale(0.8);
                        }

                        #slider #slides {
                            padding: 1% 0;
                            -webkit-border-radius: 0px;
                            -moz-border-radius: 0px;
                            border-radius: 0px;
                        }

                        #slider #active {
                            margin: 22% 0 0;
                        }

                    }

                    /* Mobile */

                    #mobile:checked ~ #slider #controls {
                        margin: -28% 0 0 24%;
                        width: 50%;
                        height: 50px;
                    }

                    #mobile:checked ~ #slider #active {
                        margin: 23% 0 0;
                    }

                    #mobile:checked ~ #slider #slides .info {
                        opacity: 0 !important;
                    }

                    #mobile:checked ~ #slider #controls label {
                        -moz-transform: scale(0.6);
                        -webkit-transform: scale(0.6);
                        -o-transform: scale(0.6);
                        -ms-transform: scale(0.6);
                        transform: scale(0.6);
                    }


                    @media only screen and (max-width: 450px) {

                        #slider #controls {
                            margin: -28% 0 0 24%;
                            width: 50%;
                            height: 50px;
                        }

                        #slider #active {
                            margin: 23% 0 0;
                        }

                        #slider #slides {
                            padding: 1% 0;
                            -webkit-border-radius: 0px;
                            -moz-border-radius: 0px;
                            border-radius: 0px;
                        }

                        #slider #slides .info {
                            opacity: 0 !important;
                        }

                        #slider #controls label {
                            -moz-transform: scale(0.6);
                            -webkit-transform: scale(0.6);
                            -o-transform: scale(0.6);
                            -ms-transform: scale(0.6);
                            transform: scale(0.6);
                        }

                    }


                    @media only screen and (min-width: 850px) {


                    }
                </style>


            </div>
        </div>
    </div>
    <section id="content" style="">