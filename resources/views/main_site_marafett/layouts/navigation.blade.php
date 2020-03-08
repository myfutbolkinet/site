<!-- navbar for mobile devices only -->
<nav class="navbar navbar-default navbar-fixed-top visible-xs inView">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header text-center">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mobile-menu" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- cart icon view -->
            <div class="text-center cart-show">
                <a href="#" class="cart-lnk" data-bg="img/cart_bag.png">
                    <span class="summ">{{(isset($cart->totalPrice)) ? $cart->totalPrice : 0 }}</span>
                </a>
                <span class="val text-uppercase">грн</span>
            </div>
            <a class="navbar-brand" href="/">
                <img alt="Brand" src="/img/mlogo.jpg">
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="mobile-menu">
            <!-- magazine name -->
            <div class="shop-name">
                <h4>
                    <span class="text-uppercase">TS</span>
                    Shop
                </h4>
                <span class="text-uppercase shop-subtitle">Personality wear</span>
            </div>

            <!-- menu -->
            <ul class="nav navbar-nav">
                <li class="active text-uppercase">
                    <a href="home.html">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="dropdown text-uppercase">
                    <button class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Men <span class="caret"></span></button>
                    <ul class="dropdown-menu">
                        <li class="menu-item">
                            <a href="#">Tshirts</a>
                        </li>
                        <li class="menu-item">
                            <a href="#">Sweaters</a>
                        </li>
                        <li class="menu-item">
                            <a href="#">Pants</a>
                        </li>
                        <li class="menu-item">
                            <a href="#">Boots</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown text-uppercase">
                    <button class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Women <span class="caret"></span></button>
                    <ul class="dropdown-menu">
                        <li class="menu-item">
                            <a href="#">Tshirts</a>
                        </li>
                        <li class="menu-item">
                            <a href="#">Sweaters</a>
                        </li>
                        <li class="menu-item">
                            <a href="#">Pants</a>
                        </li>
                        <li class="menu-item">
                            <a href="#">Sunglasses</a>
                        </li>
                    </ul>
                </li>
                <li class="text-uppercase">
                    <button class="btn">Kids</button>
                </li>
                <li class="text-uppercase">
                    <a href="#">Custom Design</a>
                </li>
                <li>
                    <a href="#">Account +</a>
                </li>
                <li>
                    <a href="about.html">About</a>
                </li>
                <li>
                    <a href="contact.html">Contact</a>
                </li>
            </ul>
            <!-- socials -->
            <ul class="mobile-social-lnk list-inline text-center">
                <li>
                    <a href="#"><i class="fa fa-facebook-official"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                </li>
                <li>
                    <a href="callto:+9018230918">+9018230918</a>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container -->
</nav>

<!-- Left side fixed navigation (Main Menu) -->
<aside class="hidden-xs nav-showcase inView">
    <!-- controls -->
    <div class="nav-controls">
        <!-- brand -->
        <a class="store-brand" href="/">
            <img alt="Brand" src="img/mlogo.jpg">
        </a>

        <!-- main menu button -->
        <button class="btn" type="button" id="menuSwitch">
            <span></span>
            <span></span>
            <span></span>
        </button>

        <!-- cart icon view -->
        <div class="text-center cart-show">
            <a href="#" class="cart-lnk" data-bg="img/cart_bag.png">
                <span class="summ">{{(isset($cart->totalPrice)) ? $cart->totalPrice : 0 }}</span>
                <input type="hidden" class="summ_total" value="{{(isset($cart->totalPrice)) ? $cart->totalPrice : 0 }}">
            </a>
            <span class="val text-uppercase">грн</span>
        </div>
    </div>

    <!-- main-menu-content -->
    <div class="menu-content" id="main-menu">
        <!-- magazine name -->
        <div class="shop-name">
            <h4>
                <span class="text-uppercase">TS</span>
                Shop
            </h4>
            <span class="text-uppercase shop-subtitle">Прекрасная одежда</span>
        </div>
        <!-- the menu -->
        <ul class="nav menu-list text-uppercase">
            <li class="menu-item active">
                <a href="home.html">Home</a>
            </li>
            <li class="menu-item menu-item-dropdown">
                <button class="btn">Женская Одежда <span>+</span></button>
                <!-- the submenu -->
                <div class="sub-nav sub-nav-menu">
                    <ul class="list-unstyled">
                        <li class="menu-item">
                            <a href="/category?cat=2">Платья</a>
                        </li>
                        <li class="menu-item">
                            <a href="/category?cat=3">Блузы</a>
                        </li>
                        <li class="menu-item">
                            <a href="#">Кардиганы, ветровки</a>
                        </li>
                        <li class="menu-item">
                            <a href="#">Для пышных дам</a>
                        </li>
                        <li class="menu-item">
                            <a href="#">Юбки</a>
                        </li>
                        <li class="menu-item">
                            <a href="#">Брюки, комбенизоны</a>
                        </li>
                        <li class="menu-item">
                            <a href="#">Товары со скидкой</a>
                        </li>
                        <li class="menu-item">
                            <a href="#">Кофты</a>
                        </li>
                        <li class="menu-item">
                            <a href="#">Спортивная одежда</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="menu-item menu-item-dropdown">
                <button class="btn">Детская одежда <span>+</span></button>
                <!-- the submenu -->
                <div class="sub-nav sub-nav-menu">
                    <ul class="list-unstyled">
                        <li class="menu-item">
                            <a href="#">Платья для девочек</a>
                        </li>

                    </ul>
                </div>
            </li>
            <li class="menu-item menu-item-dropdown">
                <button class="btn">Школьная форма <span>+</span></button>
                <!-- the submenu -->
                <div class="sub-nav sub-nav-menu">
                    <ul class="list-unstyled">
                        <li class="menu-item">
                            <a href="#">Для девочек</a>
                        </li>

                    </ul>
                </div>
            </li>

            <li class="menu-item menu-item-dropdown">
                <button class="btn">Аксессуары <span>+</span></button>
                <!-- the submenu -->
                <div class="sub-nav sub-nav-menu">
                    <ul class="list-unstyled">
                        <li class="menu-item">
                            <a href="#">Бижутерия</a>
                        </li>

                    </ul>
                </div>
            </li>
        </ul>
        <ul class="nav menu-list">
            <li class="menu-item">
                <a href="#">Личный кабинет +</a>
            </li>
            <li class="menu-item">
                <a href="about.html">О нас</a>
            </li>
            <li class="menu-item">
                <a href="contact.html">Контакты</a>
            </li>
        </ul>

        <!-- menu contacts -->
        <ul class="list-inline menu-contacts">
            <li>
                <a href="#"><i class="fa fa-facebook-official"></i></a>
            </li>
            <li>
                <a href="#"><i class="fa fa-instagram"></i></a>
            </li>
            <li>
                <a href="#"><i class="fa fa-twitter"></i></a>
            </li>
            <li class="pull-right">
                <a href="callto:+9018230918">+9018230918</a>
            </li>
        </ul>
    </div>
</aside>
<!-- /.Left side fixed navigation (Main Menu) -->

<!-- right side fixed cart content -->
<aside class="cart-showcase">
    <div class="cart-wrapp">
        <h4 class="text-uppercase text-center cart-title">Ваша корзина</h4>
        <ul class="cart-products list-unstyled">
        <? $summ=0;?>
            @if(isset($products))
            @foreach($products as $key=>$product)
                    @if(isset($product)&&!empty($product))
                <? $photo=\App\Photo::where('id_good',$key)->first();

                $summ=$summ+$product['price'];
                ?>
            <li class="mini_cart_product">
                <input type="hidden" class="product_in_cart" value="{{$key}}">
                <button type="button" class="remove_item close" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <a href="#">
                    <img src="/storage/{{$photo->photo}}" alt="product-image" class="img-responsive pull-left">
                    <span class="product-title text-uppercase">{{$product['item']->name}}</span>
                </a>
                <span class="quantity-nr">{{$product['price']}} X {{$product['summ_quantaty']}}</span>
            </li>
                @endif
            @endforeach
                @endif

        </ul>
        <div class="cart-control">
            <ul class="list-inline">
                <li class="pull-left">
                    <h4>Итого</h4>
                </li>
                <li class="pull-right total-cash">
                    <span>Грн</span>
                    <span class="total_in_right">{{$summ}}</span>
                </li>
            </ul>
            <div class="clearfix"></div>
            <a href="/shoping_cart" class="btn btn-primary">Просмотреть корзину</a>
            <a href="checkout.html" class="btn btn-important">Сделать заказ</a>
        </div>
    </div>
</aside>

<script>

    $('.remove_item').click(function(){
        var good_id=$(this).parent().find('.product_in_cart').val();
        console.log(good_id);
        var _this=$(this)
        $.post("/delete_from_cart_action", JSON.stringify(good_id), function( data ) {
            _this.parent('.mini_cart_product').remove()

        });
    })
</script>