@extends('main_site.layouts.app')

@section('content')
    <? dump($products);?>
    <!-- content container fluid-->
    <div class="container-fluid main-wrapp padded-top" id="content-grid">
        <!-- category navbar -->
        <nav class="navbar-fixed-top text-center text-uppercase product-nav">
            <h3 class="pull-left category-name">Корзина</h3>
            <span class="result-text pull-right">3 товаров</span>
        </nav>


        <!-- cart content -->
        <div class="row padded15">
            <!-- cart products -->
            <div class="col-lg-9 col-md-9">
                <div class="cart-content">
                    <div class="table-responsive">
                        <table class="table cart">
                            <thead>
                            <tr>
                                <th class="product-name">Товар</th>
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
                    <ul class="list-inline cart-controls">
                        <li class="pull-right">
                            <button class="btn btn-default cart-update">Обновить корзину</button>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- cart totals -->
            <div class="col-lg-3 col-md-3 text-uppercase">
                <div class="cart-totals">
                    <h5>Сумма корзины</h5>
                    <ul class="list-unstyled">
                        <li>
                            <span>Общая сумма</span>
                            <b class="pull-right total_cart">{{$totalPrice}}</b>
                        </li>
                        <li>
                            <span>Оптовая скидка 10%</span>
                            <? $discount=($totalPrice/100)*10;?>
                            <b class="pull-right">{{(count($products) >= 10) ? $discount : 0}}</b>
                        </li>
                        <li>
                            <hr>
                        </li>
                        <li>
                            <span>Общая сумма</span>
                            <b class="pull-right">{{(count($products) >= 10) ? $totalPrice-$discount : $totalPrice}}</b>
                        </li>
                    </ul>
                    <a href="/checkout" class="btn btn-important">Оформить заказ</a>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

    <script>
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
