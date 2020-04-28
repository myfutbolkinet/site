<header class="navbar navbar-sticky">
    <!-- Search-->
    <form class="site-search" method="get">
        <input type="text" name="site_search" placeholder="Type to search...">
        <div class="search-tools"><span class="clear-search">Clear</span><span class="close-search"><i class="icon-cross"></i></span></div>
    </form>
    <div class="site-branding">
        <div class="inner">
            <!-- Off-Canvas Toggle (#shop-categories)--><a class="offcanvas-toggle cats-toggle" href="#shop-categories" data-toggle="offcanvas"></a>
            <!-- Off-Canvas Toggle (#mobile-menu)--><a class="offcanvas-toggle menu-toggle" href="#mobile-menu" data-toggle="offcanvas"></a>
            <!-- Site Logo--><a class="site-logo" href="index.html"><img src="/main_site/img/logo/logo.png" alt="Unishop"></a>
        </div>
    </div>
    <!-- Main Navigation-->
    <nav class="site-menu">
        <ul>

            @foreach(json_decode(unserialize($additional_menu)) as $line)
                <?
                $item=\App\AdditionalMenu::where('nestable_id',$line->id)->first();
                ?>
                @if(array_key_exists('children',$line))
                    <li class="has-megamenu"><a @if($item->text=='not_linked') href="#" @else href="{{$item->link}}" @endif><span>{{$item->text}}</span></a>
                        <ul class="mega-menu">
                            @foreach($line->children as $inserted)
                                <?
                                $itemChild=\App\AdditionalMenu::where('nestable_id',$inserted->id)->first();
                                ?>
                                @if($itemChild->is_photo)
                                        <li>
                                            <section class="promo-box" style="background-image: url(main_site/img/banners/{{$itemChild->photo}});"><span class="overlay-dark" style="opacity: .4;"></span>
                                                <div class="promo-box-content text-center padding-top-2x padding-bottom-2x">
                                                    <h4 class="text-light text-thin text-shadow">{{$itemChild->text}}</h4>
                                                    <h3 class="text-bold text-light text-shadow">Попробуй </h3><a class="btn btn-sm btn-primary" href="#">Купить сейчас</a>
                                                </div>
                                            </section>

                                @else

                                    <li><a href="{{$itemChild->link}}">{{$itemChild->text}}</a>
                                @endif
                            @endforeach
                            @else
                                    <li><a href="{{$item->link}}">{{$item->text}}</a></li>
                            @endif
                            @if(array_key_exists('children',$line))
                        </ul >
                    </li>
                @endif


            @endforeach

        </ul>
    </nav>
    <!-- Toolbar-->
    <div class="toolbar">
        <div class="inner">
            <div class="tools">
                <div class="search"><i class="icon-search"></i></div>
                <div class="account"><a href="account-orders.html"></a><i class="icon-head"></i>
                    <ul class="toolbar-dropdown">
                        <li class="sub-menu-user">
                            <div class="user-ava"><img src="main_site/img/account/user-ava-sm.jpg" alt="Daniel Adams">
                            </div>
                            <div class="user-info">
                                <h6 class="user-name">Daniel Adams</h6><span class="text-xs text-muted">290 Reward points</span>
                            </div>
                        </li>
                        <li><a href="account-profile.html">My Profile</a></li>
                        <li><a href="account-orders.html">Orders List</a></li>
                        <li><a href="account-wishlist.html">Wishlist</a></li>
                        <li class="sub-menu-separator"></li>
                        <li><a href="#"> <i class="icon-unlock"></i>Logout</a></li>
                    </ul>
                </div>
                <div class="cart">
                </div>
            </div>
        </div>
    </div>
</header>

@section('scripts_header')
<script>
    console.log(123)
    $.reloadCart();

        $('.delete_from_cart').click(function(){
        var id=$(this).parent().parent().find('.cart_item_id').val()
            console.log(id)
            $.ajax({
                method: 'POST',
                dataType: 'json',
                async:false,
                url: "/delete_from_cart",
                data: {id: id}, // serializes the form's elements.
                success: function (data) {
                }
            });
        })



</script>

@endsection