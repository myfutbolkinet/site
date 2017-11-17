<section id="content">
    <div id="breadcrumb-container">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="index-2.html">Главная</a></li>
                <li class="active">Оформление заказа</li>
            </ul>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <header class="content-title">
                    <h1 class="title">Оформление заказа</h1>
                    <p class="title-desc">На этой странице вы можете оформиз заказ на товар находящийся в корзине</p>
                </header>
                <div class="xs-margin"></div><!-- space -->
                <form action="/checkout" method="post" id="checkout-form">


                    <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
                    <div class="panel-group custom-accordion" id="checkout">


                        <div class="panel">
                            <div class="accordion-header">
                                <div class="accordion-title">1 шаг: <span>Информация о покупателе</span></div><!-- End .accordion-title -->
                                <a class="accordion-btn"  data-toggle="collapse" data-target="#billing"></a>
                            </div><!-- End .accordion-header -->

                            <div id="billing" class="collapse">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-xs-12">

                                            <h2 class="checkout-title">Персональная информация</h2>
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="input-icon input-icon-user"></span><span class="input-text">Имя&#42;</span></span>
                                                <input type="text" name="name" required class="form-control input-lg" placeholder="Ваше имя">
                                            </div><!-- End .input-group -->
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="input-icon input-icon-user"></span><span class="input-text">Фамилия&#42;</span></span>
                                                <input type="text" name="sername" required class="form-control input-lg" placeholder="Ваша фамилия">
                                            </div><!-- End .input-group -->
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="input-icon input-icon-email"></span><span class="input-text">Email&#42;</span></span>
                                                <input type="text" name="email" required class="form-control input-lg" placeholder="Ваш Email">
                                            </div><!-- End .input-group -->
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="input-icon input-icon-phone"></span><span class="input-text">Телефон&#42;</span></span>
                                                <input type="text" name="telephone" required class="form-control input-lg" placeholder="Ваш телефон">
                                            </div><!-- End .input-group -->






                                        </div><!-- End .col-md-6 -->

                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <h2 class="checkout-title">Ваш адрес</h2>

                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="input-icon input-icon-address"></span><span class="input-text">Адрес 1&#42;</span></span>
                                                <input type="text" name="address" class="form-control input-lg" placeholder="Ваш Адресс">
                                            </div><!-- End .input-group -->

                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="input-icon input-icon-city"></span><span class="input-text">Город&#42;</span></span>
                                                <input type="text" name="city" required class="form-control input-lg" placeholder="Ваш город">
                                            </div><!-- End .input-group -->
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="input-icon input-icon-postcode"></span><span class="input-text">Почтовый код&#42;</span></span>
                                                <input type="text" name="index" required class="form-control input-lg" placeholder="Ваш почтовый индекс">
                                            </div><!-- End .input-group -->

                                            <div class="input-group lg-margin">
                                                <span class="input-group-addon"><span class="input-icon input-icon-region"></span><span class="input-text">Область&#42;</span></span>
                                                <select name="select-state" class="form-control input-lg" id="select-state">
                                                    <option value=" "> </option>
                                                    <option value="Киевская">Киевская</option>
                                                    <option value="Одесская">Одесская</option>
                                                    <option value="Львовская">Львовская</option>
                                                    <option value="Днепропетровская">Днепропетровская</option>
                                                    <option value="Черниговская">Черниговская</option>
                                                    <option value="Харьковская">Харьковская</option>
                                                    <option value="Житомерская">Житомерская</option>
                                                    <option value="Полтавская">Полтавская</option>
                                                    <option value="Херсонская">Херсонская</option>
                                                    <option value="Запорожская">Запорожская</option>
                                                    <option value="Луганская">Луганская</option>
                                                    <option value="Донецкая">Донецкая</option>
                                                    <option value="Винницкая">Винницкая</option>
                                                    <option value="Кировоградская">Кировоградская</option>
                                                    <option value="Николаевская">Николаевская</option>
                                                    <option value="Сумская">Сумская</option>
                                                    <option value="Черкаская">Черкаская</option>
                                                    <option value="Хмельницкая">Хмельницкая</option>
                                                    <option value="Волынская">Волынская</option>
                                                    <option value="Ровенская">Ровенская</option>
                                                    <option value="Иванофранковская">Иванофранковская</option>
                                                    <option value="Тернопольскаяя">Тернопольскаяя</option>
                                                    <option value="Закарпатская">Закарпатская</option>
                                                    <option value="Черновицкая">Черновицкая</option>
                                                </select>
                                            </div><!-- End .input-group -->

                                        </div><!-- End .col-md-6 -->

                                    </div><!-- End .row -->
                                </div><!-- End .panel-body -->
                            </div><!-- End .panel-collapse -->

                        </div><!-- End .panel -->

                        <div class="panel">
                            <div class="accordion-header">
                                <div class="accordion-title">2 Шаг: <span>Детали доставки</span></div><!-- End .accordion-title -->
                                <a class="accordion-btn"  data-toggle="collapse" data-target="#delivery-details"></a>
                            </div><!-- End .accordion-header -->

                            <div id="delivery-details" class="collapse">
                                <div class="panel-body">
                                    <p>Доставка осуществляется новой почтой возможна оплата наложенным платежом</p>
                                </div><!-- End .panel-body -->
                            </div><!-- End .panel-collapse -->

                        </div><!-- End .panel -->




                        <!--<div class="panel">
                            <div class="accordion-header">
                                <div class="accordion-title">5 Step: <span>Payment Method</span></div>
                                <a class="accordion-btn"  data-toggle="collapse" data-target="#payment-method"></a>
                            </div>

                            <div id="payment-method" class="collapse">
                                <div class="panel-body">
                                    <p>Choose your payment method.</p>
                                </div>
                            </div>

                        </div>-->

                        <div class="panel">
                            <div class="accordion-header">
                                <div class="accordion-title">3 Шаг: <span>Подтверждение покупки</span></div><!-- End .accordion-title -->
                                <a class="accordion-btn opened"  data-toggle="collapse" data-target="#confirm"></a>
                            </div><!-- End .accordion-header -->






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
                                                    <div class="custom-quantity-input">
                                                        <input type="text" name="quantity" value="1">
                                                        <a href="#" onclick="return false;" class="quantity-btn quantity-input-up"><i class="fa fa-angle-up"></i></a>
                                                        <a href="#" onclick="return false;" class="quantity-btn quantity-input-down"><i class="fa fa-angle-down"></i></a>
                                                    </div>
                                                </td>
                                                <td class="item-total-col"><span class="item-price-special"><?php echo $product['summ']*$curs;?></span>
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














                        </div><!-- End .panel -->

                        <div class="row">

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

                                <input type="submit" class="btn btn-custom" value="ОФОРМИТЬ ЗАКАЗ">

                            </div><!-- End .col-md-4 -->
                        </div><!-- End .row -->


                    </div><!-- End .panel-group #checkout -->
                </form>
                <div class="xlg-margin"></div><!-- space -->
            </div><!-- End .col-md-12 -->
        </div><!-- End .row -->
    </div><!-- End .container -->

</section><!-- End #content -->