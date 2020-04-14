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
                    <div class="checkout-steps"><a href="/checkout_review">4. Review</a><a href="/checkout_payment"><span class="angle"></span>3. Payment</a><a class="active" href="/checkout_shipping"><span class="angle"></span>2. Shipping</a><a class="completed" href="/checkout"><span class="angle"></span><span class="step-indicator icon-circle-check"></span>1. Address</a></div>
                    <h4>Choose Shipping Method</h4>
                    <hr class="padding-bottom-1x">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead class="thead-default">
                            <tr>
                                <th></th>
                                <th>Shipping method</th>
                                <th>Delivery time</th>
                                <th>Handling fee</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="align-middle">
                                    <div class="custom-control custom-radio mb-0">
                                        <input class="custom-control-input" type="radio" id="courier" name="shipping-method" checked>
                                        <label class="custom-control-label" for="courier"></label>
                                    </div>
                                </td>
                                <td class="align-middle"><span class="text-medium">Courier</span><br><span class="text-muted text-sm">All Addresses(default zone), United States & Canada</span></td>
                                <td class="align-middle">2 - 4 days</td>
                                <td class="align-middle">$22.50</td>
                            </tr>
                            <tr>
                                <td class="align-middle">
                                    <div class="custom-control custom-radio mb-0">
                                        <input class="custom-control-input" type="radio" id="local" name="shipping-method">
                                        <label class="custom-control-label" for="local"></label>
                                    </div>
                                </td>
                                <td class="align-middle"><span class="text-medium">Local Shipping</span><br><span class="text-muted text-sm">All Addresses(default zone), United States & Canada</span></td>
                                <td class="align-middle">up to one week</td>
                                <td class="align-middle">$10.00</td>
                            </tr>
                            <tr>
                                <td class="align-middle">
                                    <div class="custom-control custom-radio mb-0">
                                        <input class="custom-control-input" type="radio" id="flat" name="shipping-method">
                                        <label class="custom-control-label" for="flat"></label>
                                    </div>
                                </td>
                                <td class="align-middle"><span class="text-medium">Flat Rate</span><br><span class="text-muted text-sm">All Addresses(default zone)</span></td>
                                <td class="align-middle">5 - 7 days</td>
                                <td class="align-middle">$33.85</td>
                            </tr>
                            <tr>
                                <td class="align-middle">
                                    <div class="custom-control custom-radio mb-0">
                                        <input class="custom-control-input" type="radio" id="ups" name="shipping-method">
                                        <label class="custom-control-label" for="ups"></label>
                                    </div>
                                </td>
                                <td class="align-middle"><span class="text-medium">UPS Ground Shipping</span><br><span class="text-muted text-sm">All Addresses(default zone)</span></td>
                                <td class="align-middle">4 - 6 days</td>
                                <td class="align-middle">$18.00</td>
                            </tr>
                            <tr>
                                <td class="align-middle">
                                    <div class="custom-control custom-radio mb-0">
                                        <input class="custom-control-input" type="radio" id="pickup" name="shipping-method">
                                        <label class="custom-control-label" for="pickup"></label>
                                    </div>
                                </td>
                                <td class="align-middle"><span class="text-medium">Local Pickup from store</span><br><span class="text-muted text-sm">All Addresses(default zone)</span></td>
                                <td class="align-middle">&mdash;</td>
                                <td class="align-middle">$0.00</td>
                            </tr>
                            <tr>
                                <td class="align-middle">
                                    <div class="custom-control custom-radio mb-0">
                                        <input class="custom-control-input" type="radio" id="locker" name="shipping-method">
                                        <label class="custom-control-label" for="locker"></label>
                                    </div>
                                </td>
                                <td class="align-middle"><span class="text-medium">Pick Up at Unishop Locker</span><br><span class="text-muted text-sm">All Addresses(default zone), United States & Canada</span></td>
                                <td class="align-middle">&mdash;</td>
                                <td class="align-middle">$9.99</td>
                            </tr>
                            <tr>
                                <td class="align-middle">
                                    <div class="custom-control custom-radio mb-0">
                                        <input class="custom-control-input" type="radio" id="global" name="shipping-method">
                                        <label class="custom-control-label" for="global"></label>
                                    </div>
                                </td>
                                <td class="align-middle"><span class="text-medium">Unishop Global Export</span><br><span class="text-muted text-sm">All Addresses(default zone), outside United States</span></td>
                                <td class="align-middle">3 - 4 days;</td>
                                <td class="align-middle">$25.00</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="checkout-footer margin-top-1x">
                        <div class="column"><a class="btn btn-outline-secondary" href="checkout-address.html"><i class="icon-arrow-left"></i><span class="hidden-xs-down">&nbsp;Back</span></a></div>
                        <div class="column"><a class="btn btn-primary" href="checkout-payment.html"><span class="hidden-xs-down">Continue&nbsp;</span><i class="icon-arrow-right"></i></a></div>
                    </div>
                </div>
                <!-- Sidebar          -->
                <div class="col-xl-3 col-lg-4">
                    <aside class="sidebar">
                        <div class="padding-top-2x hidden-lg-up"></div>
                        <!-- Order Summary Widget-->
                        <section class="widget widget-order-summary">
                            <h3 class="widget-title">Order Summary</h3>
                            <table class="table">
                                <tr>
                                    <td>Cart Subtotal:</td>
                                    <td class="text-medium">$289.68</td>
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
                                    <td class="text-lg text-medium">$315.60</td>
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

    </script>
@endsection