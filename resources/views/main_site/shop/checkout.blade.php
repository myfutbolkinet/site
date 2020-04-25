@extends('main_site.layouts.app')


@section('content')

    <!-- Off-Canvas Wrapper-->
    <div class="offcanvas-wrapper">
        <!-- Page Title-->
        <div class="page-title">
            <div class="container">
                <div class="column">
                    <h1>Checkout</h1>
                </div>
                <div class="column">
                    <ul class="breadcrumbs">
                        <li><a href="index.html">Home</a>
                        </li>
                        <li class="separator">&nbsp;</li>
                        <li>Checkout</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Page Content-->
        <div class="container padding-bottom-3x mb-2">
            <div class="row">
                <!-- Checkout Adress-->
                <div class="col-xl-9 col-lg-8">
                    <div class="checkout-steps"><a onclick="submitAndReloadArea('/checkout_review')" href="#">4. Review</a><a onclick="submitAndReloadArea('/checkout_payment')" href="#"><span class="angle"></span>3. Payment</a><a onclick="submitAndReloadArea('/checkout_shipping')" href="#"><span class="angle"></span>2. Shipping</a><a class="active" href="/checkout"><span class="angle"></span>1. Address</a></div>
                    <h4>Billing Address</h4>
                    <hr class="padding-bottom-1x">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="checkout-fn">Имя</label>
                                <input class="form-control" type="text" id="checkout-fn" required>
                                <div style="display: none;color:red" id="validation_item_name" class="validation-advice">Поле обязательное.</div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="checkout-ln">Фамилия</label>
                                <input class="form-control" type="text" id="checkout-ln" required>
                                <div style="display: none;color:red" id="validation_item_ln" class="validation-advice">Поле обязательное.</div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="checkout-email">E-mail адрес</label>
                                <input class="form-control" type="email" id="checkout-email" pattern="[^@]+@[^@]+\.[a-zA-Z]{2,6}" required>
                                <div style="display: none;color:red" id="validation_item_email" class="validation-advice">Поле обязательное должно содержать валидный email.</div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="checkout-phone">Номер телефона</label>
                                <input class="form-control" type="text" id="checkout-phone">
                                <div style="display: none;color:red" id="validation_item_phone" class="validation-advice">Поле обязательное.</div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="checkout-company">Company</label>
                                <input class="form-control" type="text" id="checkout-company">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="checkout-country">Country</label>
                                <select class="form-control" id="checkout-country">
                                    <option>Choose country</option>
                                    <option>Australia</option>
                                    <option>Canada</option>
                                    <option>France</option>
                                    <option>Germany</option>
                                    <option>Switzerland</option>
                                    <option>USA</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="checkout-city">City</label>
                                <select class="form-control" id="checkout-city">
                                    <option>Choose city</option>
                                    <option>Amsterdam</option>
                                    <option>Berlin</option>
                                    <option>Geneve</option>
                                    <option>New York</option>
                                    <option>Paris</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="checkout-zip">ZIP Code</label>
                                <input class="form-control" type="text" id="checkout-zip">
                            </div>
                        </div>
                    </div>
                    <div class="row padding-bottom-1x">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="checkout-address1">Address 1</label>
                                <input class="form-control" type="text" id="checkout-address1">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="checkout-address2">Address 2</label>
                                <input class="form-control" type="text" id="checkout-address2">
                            </div>
                        </div>
                    </div>
                    <h4>Shipping Address</h4>
                    <hr class="padding-bottom-1x">
                    <div class="form-group">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="same_address" checked>
                            <label class="custom-control-label" for="same_address">Same as billing address</label>
                        </div>
                    </div>
                    <div class="checkout-footer">
                        <div class="column"><a class="btn btn-outline-secondary" href="/cart"><i class="icon-arrow-left"></i><span class="hidden-xs-down">&nbsp;Назад в корзину</span></a></div>
                        <div class="column"><a class="btn btn-primary" onclick="submitAndReloadArea('/checkout_shipping')" href="#"><span class="hidden-xs-down">Продолжить&nbsp;</span><i class="icon-arrow-right"></i></a></div>
                    </div>
                </div>
                <!-- Sidebar          -->
                <div class="col-xl-3 col-lg-4">
                    <aside class="sidebar">
                        <div class="padding-top-2x hidden-lg-up"></div>
                        <!-- Order Summary Widget-->
                        <section class="widget widget-order-summary">
                            <h3 class="widget-title">Order Summary</h3>
                            <? ?>
                            <table class="table">
                                <tr>
                                    <td>В корзине всего:</td>
                                    <td class="text-medium">{{$totalPrice}} грн.</td>
                                </tr>
                                <tr>
                                    <td>Shipping:</td>
                                    <td class="text-medium">$22.50</td>
                                </tr>
                                <tr>
                                    <td>Estimated tax:</td>
                                    <td class="text-medium">$3.42</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td class="text-lg text-medium">{{$totalPrice}} грн.</td>
                                </tr>
                            </table>
                        </section>
                        <!-- Featured Products Widget-->
                        <section class="widget widget-featured-products">
                            <h3 class="widget-title">Recently Viewed</h3>
                            <!-- Entry-->
                            <div class="entry">
                                <div class="entry-thumb"><a href="shop-single.html"><img src="img/shop/widget/01.jpg" alt="Product"></a></div>
                                <div class="entry-content">
                                    <h4 class="entry-title"><a href="shop-single.html">Oakley Kickback</a></h4><span class="entry-meta">$155.00</span>
                                </div>
                            </div>
                            <!-- Entry-->
                            <div class="entry">
                                <div class="entry-thumb"><a href="shop-single.html"><img src="img/shop/widget/02.jpg" alt="Product"></a></div>
                                <div class="entry-content">
                                    <h4 class="entry-title"><a href="shop-single.html">Top-Sider Fathom</a></h4><span class="entry-meta">$90.00</span>
                                </div>
                            </div>
                            <!-- Entry-->
                            <div class="entry">
                                <div class="entry-thumb"><a href="shop-single.html"><img src="img/shop/widget/03.jpg" alt="Product"></a></div>
                                <div class="entry-content">
                                    <h4 class="entry-title"><a href="shop-single.html">Vented Straw Fedora</a></h4><span class="entry-meta">$49.50</span>
                                </div>
                            </div>
                            <!-- Entry-->
                            <div class="entry">
                                <div class="entry-thumb"><a href="shop-single.html"><img src="img/shop/widget/04.jpg" alt="Product"></a></div>
                                <div class="entry-content">
                                    <h4 class="entry-title"><a href="shop-single.html">Big Wordmark Tote</a></h4><span class="entry-meta">$29.99</span>
                                </div>
                            </div>
                        </section>
                        <!-- Promo Banner-->
                        <section class="promo-box" style="background-image: url(img/banners/02.jpg);"><span class="overlay-dark" style="opacity: .4;"></span>
                            <div class="promo-box-content text-center padding-top-2x padding-bottom-2x">
                                <h4 class="text-light text-thin text-shadow">New Collection of</h4>
                                <h3 class="text-bold text-light text-shadow">Sunglasses</h3><a class="btn btn-outline-white btn-sm" href="shop-grid-ls.html">Shop Now</a>
                            </div>
                        </section>
                    </aside>
                </div>
            </div>
        </div>

    </div>
@endsection

@section('scripts_cart')
    <script>

        function isEmail(email) {
            var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            console.log(regex.test(email))
            return regex.test(email);
        }

        function submitAndReloadArea(link) {
            var name = $('#checkout-fn').val();
            var ln=$('#checkout-ln').val()
            var email = $('#checkout-email').val()
            var phone = $('#checkout-phone').val()
    if(name=='' || ln=='' || email=='' || !isEmail(email) || phone=='' ){
            if(name=='') {
                $('#validation_item_name').show();

            }
    if(ln=='') {
        $('#validation_item_ln').show();

    }
    if(phone=='') {
        $('#validation_item_phone').show();

    }
    console.log(isEmail(email))
    if(!isEmail(email)) {
        $('#validation_item_email').show();

    }
    return false;



            }else {
                $('#validation_item_custom_payment').hide();
                window.location.href='/save_customer_address'+link+'?name='+name+'&ln='+ln+'&email='+email+'&phone='+phone
            ///checkout_shipping
            }
        }
    </script>
@endsection