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
                        <li><a href="\">Home</a>
                        </li>
                        <li class="separator">&nbsp;</li>
                        <li>Checkout</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Page Content-->
        <div class="container padding-bottom-3x mb-2">
            <div class="card text-center">
                <div class="card-body padding-top-2x">
                    <h3 class="card-title">Благодарим за Ваш заказ!</h3>
                    <p class="card-text">Ваш заказ был размещен и будет обработать так скоро как это возможно.</p>
                    <p class="card-text">Убедитесь что вы записали номер Вашего заказа <span class="text-medium">34VB5540K83</span></p>
                    <p class="card-text">Вскоре вы получите уведомление по электронной почте о том что Ваш заказ обработан.
                        <u>You can now:</u>
                    </p>
                    <div class="padding-top-1x padding-bottom-1x"><a class="btn btn-outline-secondary" href="shop-grid-ls.html">Go Back Shopping</a><a class="btn btn-outline-primary" href="order-tracking.html"><i class="icon-location"></i>&nbsp;Track order</a></div>
                </div>
            </div>
        </div>
@endsection

@section('scripts_cart')
    <script>

    </script>
@endsection