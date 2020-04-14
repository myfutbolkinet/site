<div class="table-responsive shopping-cart">

                <table class="table">
                    <thead>
                    <tr>
                        <th>Наименование товара</th>
                        <th class="text-center">Количество</th>
                        <th class="text-center">Всего</th>
                        <th class="text-center">Скидка</th>
                        <th class="text-center"><a class="btn btn-sm btn-outline-danger delete_from_cart_all" href="#">Очистить корзину</a></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($cart->items as $key=>$item)
                        <?
                        $photo= \App\Photo::where('id_good',$item['item']->id)->first();
                        ?>
                    <tr>
                        <td>
                            <div class="product-item"><a class="product-thumb" href="shop-single.html"><img src="/storage/{{$photo->photo}}" alt="Product"></a>
                                <div class="product-info">
                                    <h4 class="product-title"><a href="shop-single.html">{{$item['item']->name}}</a></h4><span><em>Size:</em> 10.5</span><span><em>Color:</em> Dark Blue</span>
                                </div>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="count-input">
                                <select class="form-control">
                                    @for($i=0;$i<20;$i++)
                                    @if($item['summ_quantaty']==$i)
                                            <option selected value="{{$i}}">{{$i}}</option>
                                        @else
                                            <option value="{{$i}}">{{$i}}</option>
                                        @endif
                                    @endfor

                                </select>
                            </div>
                        </td>
                        <td class="text-center text-lg text-medium">{{$item['item']['price']}}</td>
                        <td class="text-center text-lg text-medium">{{$item['item']['discount']}}%</td>
                        <td class="text-center">
                            <input type="hidden" class="cart_item_id" value="{{$item['item']->id}}">
                            <a class="remove-from-cart delete_from_cart_big" href="#" data-toggle="tooltip" title="Remove item"><i class="icon-cross"></i></a></td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>

</div>

<div class="shopping-cart-footer">
    <div class="column">
        <form class="coupon-form" method="post">
            <input class="form-control form-control-sm" type="text" placeholder="Coupon code" required>
            <button class="btn btn-outline-primary btn-sm" type="submit">Использовать купон</button>
        </form>
    </div>
    <div class="column text-lg">Всего: <span class="text-medium">{{$cart->totalPrice}}</span></div>
</div>