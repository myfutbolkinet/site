@extends('main_site.layouts.app')

@section('content')

    <!-- content container fluid-->
    <div class="container-fluid main-wrapp padded-top" id="content-grid">
        <!-- category navbar -->
        <nav class="navbar-fixed-top text-center text-uppercase product-nav">
            <h3 class="pull-left category-name">ОФОРМЛЕНИЕ ЗАКАЗА</h3>
            <span class="result-text pull-right">3 products</span>
        </nav>

        <!-- biling details form -->
        <div class="row padded15">
            <div class="col-lg 12 col-md-12 text-center text-uppercase">
                <h3 class="checkout-title">Информация о покупателе</h3>
            </div>
        </div>
        <!-- form -->
        <div class="row padded15">
            <div class="col-lg-12 col-md-12 text-uppercase">
                <hr>
                <form action="/send_order" id="checkout_form" method="post" class="billing-form">
                    <div class="form-group">
                        <input type="text" name="name" placeholder="Полное имя" class="form-control">
                    </div>

                    <div class="form-group">

                        <input type="email" name="email" class="form-control" placeholder="@if(isset($error)) {{$error}} @else Email @endif" required="required">
                    </div>
                    <div class="form-group">
                        <input type="text" name="phone" placeholder="Phone" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="text" name="country" placeholder="Страна" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="text" name="address" placeholder="Адрес" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="text" name="city" placeholder="Город" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="text" name="state" placeholder="Область" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="text" name="postal_code" placeholder="Почтовый код" class="form-control">
                    </div>
                </form>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="row padded15">
            <div class="col-lg-12 col-md-12">


            </div>
        </div>
        <div class="row padded15">
            <div class="col-lg-12 col-md-12 text-uppercase">
                <div class="order-notes">
                    <h5>Детали заказа</h5>
                    <textarea cols="30" name="orders_details" rows="10" class="order-mess"></textarea>
                </div>
            </div>
        </div>
        <!-- /.form -->

        <div class="row padded15">
            <div class="col-lg 12 col-md-12 text-center text-uppercase">
                <h3 class="checkout-title">Ваш заказ</h3>
            </div>
        </div>
        <!-- cart content -->
        <div class="row padded15">
            <!-- cart products -->
            <div class="col-lg-12 col-md-12">
                <div class="cart-content">
                    <!-- cart table -->
                    <div class="table-responsive">
                        <table class="table cart">
                            <thead>
                            <tr><th class="product-name">Товар</th>
                                <th class="product-price">Цена</th>
                                <th class="product-quantity">Количество</th>
                                <th class="product-subtotal">Сумма</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($products as $key=>$product)

                                <? $photo=\App\Photo::where('id_good',$key)->first();
                                ?>
                                <tr class="cart-item">
                                    <td class="product-name">
                                        <img src="/storage/{{$photo->photo}}" alt="product-image" class="img-responsive">
                                        <a href="#">{{$product['item']->name}}</a>
                                        <input type="hidden" class="product_in_cart" value="{{$key}}">
                                        <button class="remove_item btn">x Удалить из корзины</button>
                                    </td>
                                    <td class="product-price">{{$product['price']}}</td>
                                    <td class="product-quantity">
                                        <input type="hidden" class="qty_number" value="{{$key}}">
                                        <input class="qty" type="number" value="{{$product['summ_quantaty']}}">
                                    </td>
                                    <td class="product-subtotal">{{$product['price']*$product['summ_quantaty']}}
                                        <input type="hidden" class="qty_number" value="{{$key}}">
                                        <input class="item_summ" type="hidden" value="{{$product['price']*$product['summ_quantaty']}}">
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.cart table -->

                    <!-- payments -->
                    <div class="panel-group payments-panel" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default payment">
                            <div class="panel-heading" role="tab" id="headingOnePayment">
                                <h5 class="panel-title text-uppercase">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#paymentOne" aria-expanded="true" aria-controls="paymentOne">
                                        Проверка информации
                                    </a>
                                </h5>
                            </div>
                            <div id="paymentOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOnePayment">
                                <div class="panel-body">
                                    <div class="payment_box payment_box_check">
                                        <p>Просим перепроверить данные которые вы нам направляете</p>
                                        <a href="#" onclick="SendForm();return false;" class="btn btn-important">Разместить заказ</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- /.payments -->
                </div>
            </div>

        </div>

    </div>
    <!-- /.container-fluid -->

    <script>

        function SendForm(){
            $('#checkout_form').submit();
        }


        window.total=[];
        $(document).ready(function(){
            window.total=[];

            $.each($('.item_summ'),function(index,value,obj){
                console.log($(this).val())

                var input_number=$(this).parent().find('.qty_number').val()
                window.total[input_number]=parseInt($(this).val());
            });
            console.log(window.total)
        });

        $('.qty').change(function(){
            var qty=$(this).val();
            var input_number=$(this).parent().find('.qty_number').val()
            var price=$(this).parent().parent().find('.product-price').html()
            summ = qty*price
            console.log(summ)
            window.total[input_number]=parseInt(summ);
            console.log(window.total)
            var total = window.total.reduce(function(a,b){return(a+b)})
            console.log(total)
            $(this).parent().parent().find('.product-subtotal').html(summ)
            $('.total_cart').html('<b>'+total+' грн.</b>')

            $.post("/update_cart_qty", JSON.stringify({'qty':qty,'id':input_number}), function( data ) {

            });
        })

        $('.remove_item').click(function(){
            var good_id=$(this).parent().find('.product_in_cart').val();
            console.log(good_id);
            var _this=$(this)
            $.post("/delete_from_cart_action", JSON.stringify(good_id), function( data ) {
                _this.parent('.product-name').parent('.cart-item').remove()

            });
        })
    </script>
@endsection
