<div class="row border-bottom">
    <!--Nav Tabs-->
    <ul class="nav nav-tabs">
        <?php
        foreach ($sub_menu as $key=>$m){
        if($active_menu_item==$key){
        ?>
        <li class="active" style="height:40px">
        <?php
        }
        else{
        ?>
        <li style="height:40px">
            <?php
            }
            ?>


            <a href="<?php echo $m['href']?>" style="height:40px">
                <div  style="top:-10px;position:relative;margin:0 auto;">
                    <div style="width:auto;position:relative;margin:0 auto;" class="btn btn-default btn-rounded btn_aditional"><img src="/img/Aufgaben.png"><span style="padding-left:10px;"><?php echo $m['btn_title']?></span></div>
                </div>

            </a>
        </li>



        <?php


        }
        ?>


    </ul>
</div>
<style>
    .btn_aditional {
    color: #2d85d2;
    background-color: #fff;
    border: 2px solid #2d85d2;
    border-radius: 5px;
    min-width: 137px;
    min-height: 40px;
    font-size: 13px;}


    .btn_aditional:hover {
        background-color: #3b8dd5;
        border-color: #4291d7;
        color: #fff;
    }
    .active .btn_aditional{
        background-color: #1AB394;
        border-color: #4291d7;
        color: #fff;
    }
</style>