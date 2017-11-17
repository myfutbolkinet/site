<section id="content">
    <div id="breadcrumb-container">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="index-2.html">Главная</a></li>
                <li class="active">Корзина</li>
            </ul>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <header class="content-title">
                    <h1 class="title">Корзина</h1>
                    <p class="title-desc">Доставка осуществляется Новой почтой за счет заказчика.</p>
                </header>
                <div class="xs-margin"></div><!-- space -->
                
                
                
                <div class="row">

                    <div class="col-md-12 table-responsive">

                        <table class="table cart-table">
                            <thead>
                            <tr>
                                <th class="table-title">Название товара</th>
                                <th class="table-title">Артикул</th>
                                <th class="table-title">Цена за единицу</th>
                                <th class="table-title">Количество</th>
                                <th class="table-title">Сумма</th>
                            </tr>
                            </thead>
                            <tbody>


                            <?php foreach ($products as $product){
                             //загрузить данные по товару из базы
                            $good=App\Good::where('id',$product['item']['id'])
                            ->get();


                            ?>
                            <tr>
                                <td class="item-name-col">
                                    <figure>
                                        <a href="#"><img src="/photos/<?php echo $good[0]['original']['image_small']?>" alt="Lowlands Lace Blouse"></a>
                                    </figure>
                                    <header class="item-name"><a href="#"><?php echo $good[0]['original']['name']?></a></header>
                                    <ul>
                                        <li>Color: White</li>
                                        <li>Size: SM</li>
                                    </ul>
                                </td>
                                <td class="item-code"><?php echo $good[0]['original']['articul']?></td>
                                <td class="item-price-col"><span class="item-price-special"><?php echo $product['price']*$curs;?></span></td>
                                <td>


                                        <h3><?php echo $product['summ_quantaty']?></h3>

                                </td>
                                <td class="item-total-col"><span class="item-price-special"><?php echo $product['summ_quantaty']*$product['summ']*$curs;?></span>
                                    <div class="btn-group">
                                    <a href="#" class="close-button dropdown-toggle"></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="<?php echo  route('delete_product_by_one',['product'=>$product['item']['id']]) ?>">Видалити по 1</a></li>
                                        <li><a href="<?php echo route('delete_products',['product'=>$product['item']['id']]) ?>">Видалити всі</a></li>
                                    </ul>
                                    </div>
                                </td>
                            </tr>
                            <?}?>

                            </tbody>
                        </table>

                    </div><!-- End .col-md-12 -->

                </div><!-- End .row -->
                <div class="lg-margin"></div><!-- End .space -->

                <div class="row">



                    <!--<div class="col-md-8 col-sm-12 col-xs-12">

                        <div class="tab-container left clearfix">
                            <ul class="nav-tabs">
                                <li class="active"><a href="#shipping" data-toggle="tab">Shipping &amp; Taxes</a></li>
                                <li><a href="#discount" data-toggle="tab">Discount Code</a></li>
                                <li><a href="#gift" data-toggle="tab">Gift voucher </a></li>

                            </ul>
                            <div class="tab-content clearfix">
                                <div class="tab-pane active" id="shipping">

                                    <form action="#" id="shipping-form">
                                        <p>Enter your destination to get a shipping estimate.</p>
                                        <div class="xs-margin"></div>
                                        <div class="form-group">
                                            <label for="select-country" class="control-label">Country&#42;</label>
                                            <div class="input-container">
                                                <select name="select-country" class="form-control" id="select-country">
                                                    <option value="Italy">Italy</option>
                                                    <option value="France">France</option>
                                                    <option value="Spain">Spain</option>
                                                    <option value="Brazil">Brazil</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="sm-margin"></div>
                                        <div class="form-group">
                                            <label for="select-state" class="control-label">Regison&amp;State&#42;</label>
                                            <div class="input-container">
                                                <select name="select-state" class="form-control" id="select-state">
                                                    <option value="Italy">Italy</option>
                                                    <option value="France">France</option>
                                                    <option value="Spain">Spain</option>
                                                    <option value="Brazil">Brazil</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="sm-margin"></div>
                                        <div class="form-group">
                                            <label for="select-country" class="control-label"  >Post Code&#42;</label>
                                            <div class="input-container">
                                                <input type="text" required class="form-control" placeholder="Your fax">
                                            </div>
                                        </div>
                                        <div class="sm-margin"></div>
                                        <p class="text-right">
                                            <input type="submit" class="btn btn-custom-2" value="GET QUOTES">
                                        </p>
                                    </form>

                                </div>

                                <div class="tab-pane" id="discount">
                                    <p>Enter your discount coupon code here.</p>
                                    <form action="#">
                                        <div class="input-group">
                                            <input type="text" required class="form-control" placeholder="Coupon code">

                                        </div>
                                        <input type="submit" class="btn btn-custom-2" value="APPLY COUPON">
                                    </form>
                                </div>

                                <div class="tab-pane" id="gift">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi dignissimos nostrum debitis optio molestiae in quam dicta labore obcaecati ullam necessitatibus animi deleniti minima dolor suscipit nobis est excepturi inventore.</p>
                                </div>

                            </div>
                        </div>

                    </div>-->
                    <div class="lg-margin visible-sm visible-xs"></div><!-- space -->
                    <div class="col-md-5 col-sm-12 col-xs-12">

                        <table class="table total-table">
                            <tbody>
                            <tr>
                                <td class="total-table-title">Общая сумма:</td>
                                <td><?php echo $totalPrice*$curs;?></td>
                            </tr>
                            <tr>
                                <!--<td class="total-table-title">Shipping:</td>
                                <td>$6.00</td>
                            </tr>
                            <tr>
                                <td class="total-table-title">TAX (0%):</td>
                                <td>$0.00</td>-->
                            </tr>
                            </tbody>
                            <tfoot>
                           <!-- <tr>
                                <td>Total:</td>
                                <td>$440.50</td>
                            </tr>-->
                            </tfoot>
                        </table>
                        <div class="md-margin"></div><!-- End .space -->
                        <a href="/" class="btn btn-custom-2">ПРОДОЛЖИТЬ ПОКУПКИ</a>
                        <a href="/billing" class="btn btn-custom">ОФОРМИТЬ ЗАКАЗ</a>
                    </div><!-- End .col-md-4 -->
                </div><!-- End .row -->
                <div class="lg-margin2x"></div><!-- Space -->



            </div><!-- End .col-md-12 -->
        </div><!-- End .row -->
    </div><!-- End .container -->

</section><!-- End #content -->