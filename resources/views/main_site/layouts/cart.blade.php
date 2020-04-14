
<a href="cart.html"></a><i class="icon-bag"></i><span class="count">{{(isset($cart->totalQty)) ? $cart->totalQty : 0 }}</span><span class="subtotal">{{(isset($cart->totalPrice)) ? $cart->totalPrice : 0 }} грн.</span>
@if(isset($cart->items))
    <div class="toolbar-dropdown cart_block">

        @foreach($cart->items as $key=>$item)
            <?
           $photo= \App\Photo::where('id_good',$item['item']->id)->first();
            ?>
            <div class="dropdown-product-item">
                <input type="hidden" class="cart_item_id" value="{{$item['item']->id}}">
                <span class="dropdown-product-remove"><i class="icon-cross delete_from_cart"></i></span><a class="dropdown-product-thumb" href=""><img src="/storage/{{$photo->photo}}" alt="Product"></a>
                <div class="dropdown-product-info"><a class="dropdown-product-title" href="/product/{{$item['item']->id}}">{{$item['item']->name}}</a><span class="dropdown-product-details">{{$item['summ_quantaty']}} x {{$item['price']}}</span></div>
            </div>
    @endforeach

    <!--span class="summ"></span-->
        <div class="toolbar-dropdown-group">
            <div class="column"><span class="text-lg">Всего:</span></div>
            <div class="column text-right"><span class="text-lg text-medium">{{(isset($cart->totalPrice)) ? $cart->totalPrice : 0 }} грн.</span></div>
        </div>
        <div class="toolbar-dropdown-group">
            <div class="column"><a class="btn btn-sm btn-block btn-secondary" href="/shoping_cart">Подробнее</a></div>
            <div class="column"><a class="btn btn-sm btn-block btn-success" href="/checkout-address">Заказать</a></div>
        </div>
    </div>
@endif