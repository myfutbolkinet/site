<!--[if lt IE 9]>

<![endif]-->


<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <a><h5>Видеотур о добавлении и управлении ассортиментом </h5></a>
                <div class="groups_or_goods">

                    <h1 style="display:inline-block;">Управление товарами:</h1>
                    <button  style="margin-top:-10px;font-size:14px;display:inline-block;width:170px" class="groups_or active btn btn-success btn-labeled fa fa-shopping-cart">по группам</button>
                    <button style="margin-top:-10px;font-size:14px;display:inline-block;width:200px" class="goods_or btn btn-labeled fa fa-shopping-cart">все товары компании</button>

                </div>
            </div>
            <div class="row goods_btn">

                <div style="position:relative;margin:0 auto;display:inline-block">
                    <button data-href="/goods/show_add_item" style="padding:10px;position:relative;margin:0 auto;"
                            class="btn btn-primary btn-rounded "><i class="fa fa-shopping-cart"></i><img src="/img/Aufgaben.png"><span
                                style="padding-left:10px;">Добавить позицию</span></button>
                </div>

                <div style="position:relative;margin:0 auto;display:inline-block">
                    <button data-href="/goods_and_groups" style="position:relative;margin:0 auto;padding-left:10px;"
                            class="btn btn-default btn-rounded"><img src="/img/Aufgaben.png"><span
                                style="padding-left:10px;">Добавить группу</span></button>
                </div>
            </div>
            <div class="row">
                <div id="result2"></div>

            </div>
            </div>

        </div>
    </div>


</div>

<style>
    #myList .btn-default {
        min-width: 50px;
        min-height: 20px;
        top: -5px;
    }

    #myList .btn-danger {
        min-width: 50px;
        min-height: 20px;
        top: -5px;
    }
</style>



<script>

        $('.groups_or').click(function(){
           $(this).addClass('active')
           $(this).removeClass('btn-mint')
            $(this).addClass('btn-success')
            $('.goods_or').removeClass('active')
            $('.goods_or').removeClass('btn-success')

        })
        $('.goods_or').click(function(){
            $(this).addClass('active')
            $(this).removeClass('btn-mint')
            $(this).addClass('btn-success')
            $('.groups_or').removeClass('active')
            $('.groups_or').removeClass('btn-success')

        })


        $.ajax({
            type: 'POST',
            dataType: 'json',
            url: '/goods_and_groups_table',
            success: function(jsondata){
                $('#result2').html(jsondata.html);


            }
        });


        $('.goods_btn div button').click(function(){
            var href=$(this).attr('data-href')
            location.href = href;


        })



</script>