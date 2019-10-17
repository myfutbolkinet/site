<html>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div style="font-size: 20px;" class="panel-heading">Вы заказали товар</div>
<?php

                    //$n=count($cart);
                    $i=0;

                    ?>
                    <table class="table table-responsive">
                        <tbody>
                        <tr class="mail-unread">

                            <td>Название </td>
                            <td>Цена</td>
                            <td>Количество</td>
                            <td>Сумма</td>
                        </tr>

                    <?php

                    foreach($cart->items as $c){

                        ?>

                    <tr class="mail-unread">

                            <td><?php print($c['item']['name']);?></td>
                            <td><?php print($c['item']['price']);?> грн.</td>
                            <td><?php print($c['qnt']);?></td>
                            <td><?php print($c['qnt']*$c['item']['price']);?>грн.</td>
                    </tr>
                        <?
                    $i++;
                    }

?>
</tbody></table>
<h3>Загальна вартість</h3>
{{$cart_total_price.'грн.'}}
                    <div class="panel-body">

                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>