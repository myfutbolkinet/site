

    <!--CONTENT CONTAINER-->
    <!--===================================================-->
    <div id="content-container" >

        <!--Page Title-->
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <div class="pageheader">
            <h3><i class="fa fa-home"></i> Tab </h3>
            <div class="breadcrumb-wrapper"> <span class="label">You are here:</span>
                <ol class="breadcrumb">
                    <li> <a href="#"> Home </a> </li>
                    <li class="active"> Tab </li>
                </ol>
            </div>
        </div>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <!--End page title-->

        <!--Page content-->
        <!--===================================================-->
        <div id="page-content" style="border-left:2px dashed #ee1e2d">

            <div class="row">
                <div class="col-sm-12">





                    <!--Default Tabs (Left Aligned)-->
                    <!--===================================================-->
                    <div class="tab-base">

                        <!--Nav Tabs-->
                        <ul class="nav nav-tabs">
                            <?php
                            foreach ($menu as $key=>$m){
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


                                    <a data-toggle="tab" href="<?php echo '#'.$m['href']?>" style="height:40px">
                                        <div  style="top:-10px;position:relative;margin:0 auto;">
                                            <button data-href="<?php echo $m['data_href']?>" style="width:auto;position:relative;margin:0 auto;" class="btn btn-default btn-rounded"><img src="/img/Aufgaben.png"><span style="padding-left:10px;"><?php echo $m['btn_title']?></span></button>
                                        </div>

                                    </a>
                                </li>



                            <?php


                            }
                            ?>


                        </ul>
                        <?php
                        $a=0;
                        $count_m=count($menu);
                        foreach($menu as $key=>$m){
                        if ($a == 0){
                        ?>
                        <div class="tab-content" style="min-height:130px;">

                            <?php

                            }
                            if ($active_menu_item == $key){
                            ?>
                            <div id="<?php echo $m['href'] ?>" class="tab-pane fade active in">
                                <?php

                                }
                                else{
                                ?>
                                <div id="<?php echo $m['href'] ?>" class="tab-pane fade">
                                    <?php

                                    }
                                    if(isset($m['tab'])){
                                    ?>
                                    <h4 class="text-thin"><?php echo (isset($m['tab']['text'])) ? $m['tab']['text'] : "" ?></h4>
                                    <ul class="nav navbar-nav">
                                        <?php
                                        //@TO:DO посчитать числовые ключи в массиве $m['tab']


                                        foreach ($m['tab'] as $k => $m_ul) {
                                            if (is_int($k)) {
                                                //Если есть в массиве числовые ключи то выводить <li><ul>
                                                if (array_key_exists(0, $m_ul)) {
                                                    //посчитать количество числовых $mr
                                                    $count_k = 0;
                                                    foreach ($m_ul as $ks => $ms) {
                                                        if (is_int($ks)) {
                                                            $count_k++;
                                                        }
                                                    }
                                                    $d = 0;
                                                    foreach ($m_ul as $kr => $mr) {
                                                        if (!is_int($kr)) {
                                                            ?>
                                                            <li class="link dropdown">
                                                            <a <?php echo (isset($m_ul['main']) && $m_ul['main'] === true) ? 'data-main="main"' : ""; ?> <?php echo (isset($m_ul['main']) && $m_ul['main'] === true) ? 'data-text="' . $m_ul['data-text'] . '"' : ""; ?>
                                                                    data-toggle="dropdown"
                                                                    class="dropdown-toggle"> <?php echo $m_ul['name'] ?>
                                                                <b class="caret"></b></a>
                                                            <ul class="dropdown-menu" role="menu">

                                                            <?php

                                                        } else {
                                                            ?>
                                                            <li><a class="get_design" href="#"><?php echo $mr['name'] ?></a></li>


                                                            <!--Если последний элемент текущего массива выводить </ul></li>-->
                                                            <?php
                                                            if ($d == $count_k) {
                                                                ?>
                                                                </ul></li>

                                                                <?php

                                                            }
                                                        }


                                                        $d++;
                                                    }
                                                } else {
                                                    ?>
                                                    <li class="link dropdown">
                                                        <a <?php echo (isset($m_ul['main']) && $m_ul['main'] === true) ? 'data-main="main"' : ""; ?> <?php echo (isset($m_ul['main']) && $m_ul['main'] === true) ? 'data-text="' . $m_ul['data-text'] . '"' : ""; ?>
                                                                data-toggle="dropdown"
                                                                class="dropdown-toggle"> <?php echo $m_ul['name'] ?>
                                                        </a></li>

                                                    <?php

                                                }

                                                //Если нету выводит <li>


                                            }

                                            //@TO:DO Если числовой ключ в массива $m['tab'] последий вывести </ul>


                                            //@TO:DO Если числовой ключ в массива $m['tab'] последий вывести </ul>


                                        }

                                        }

                                    ?>

                           </div>
                        <?php

                        $a++;
                        }
                        ?>


                        </div>
                    </div>
                    <!--===================================================-->
                    <!--End Default Tabs (Left Aligned)-->



                </div> <!--tab-base-->
            </div>

        </div>
        <!--===================================================-->
        <!--End page content-->

    <!--===================================================-->
    <!--END CONTENT CONTAINER-->

        <div id="result" style="border-left:2px dashed #ee1e2d" class="col-md-12">
            Dashboard

        </div>


</div>
</div>
<style>
    .nav-tabs li a{
        padding:0px 0px;

    }

    .tab-base{
        -webkit-box-shadow: -4px 10px 5px 0px rgba(184,184,184,1);
        -moz-box-shadow: -4px 10px 5px 0px rgba(184,184,184,1);
        box-shadow: -4px 10px 5px 0px rgba(184,184,184,1);

    }

</style>
<script>
    $( document ).ready(function() {
        $('.nav-tabs').find('.active').find('.btn').removeClass('btn-default')
        $('.nav-tabs').find('.active').find('.btn').addClass('btn-primary')


    })
    $('.nav-tabs li').click(function(){


        $('.nav-tabs li').find('.btn').removeClass('btn-primary')
        $('.nav-tabs li').find('.btn').addClass('btn-default')

        $(this).find('.btn').removeClass('btn-default')
        $(this).find('.btn').addClass('btn-primary');


    })

</script>

<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('.get_design').click(function(){

        $.ajax({
            type: 'POST',
            dataType: 'json',
            url: '/get_designs',
            data:'design=all',
            success: function(jsondata){
                $('.results').html('Name = ' + jsondata.name + ', Nickname = ' + jsondata.nickname);
            }
        });

    })

</script>




























