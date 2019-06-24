<?php
$icons = array(
    'home_index' => 'fa-bank',
    'credits_index' => 'fa-files-o',
    'credits_create' => 'fa-plus',
    'credits_details' => 'fa-info-circle',
    'credits_edit' => 'fa-edit',
    'credits_upload' => 'fa-upload',
    'partners_add_result' => 'fa-upload',
    'partners_index' => 'fa-group',
    'partners_create' => 'fa-plus',
    'partners_edit' => 'fa-edit',
    'partners_details' => 'fa-user',
    'test_index' => 'fa-check-circle',
    'parameters_index' => 'fa-fw fa-cogs',
    'mail_options_index' => 'fa-fw fa-envelope',
    'admin_profile_index' => 'fa-fw fa-user',
    'archive_exports_index' => 'fa-fw fa-user',
    'archive_imports_index' => 'fa-fw fa-user',
    'archive_answers_index' => 'fa-fw fa-user',
);
$logout='#';
if(Auth::guard('admin')->user()!==null){
    $logout='/admin/logout';
}
else if(Auth::guard('superadmin')->user()!==null){
    $logout='/superadmin/logout';
}
?>


        <!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <!--<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">-->

    <title>CREDICOM</title>
    <meta name="description" content="">
    <meta name="author" content="Lopushansky Andrey">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Basic Styles -->
    <link rel="stylesheet" type="text/css" media="screen" href="<?=asset('/smartAdmin/css/bootstrap.min.css')?>">
    <link rel="stylesheet" type="text/css" media="screen" href="<?=asset('/smartAdmin/css/font-awesome.min.css')?>">

    <!-- SmartAdmin Styles : Caution! DO NOT change the order -->
    <link rel="stylesheet" type="text/css" media="screen"
          href="<?=asset('/smartAdmin/css/smartadmin-production-plugins.min.css')?>">
    <link rel="stylesheet" type="text/css" media="screen" href="<?=asset('/smartAdmin/css/smartadmin-production.min.css')?>">
    <link rel="stylesheet" type="text/css" media="screen" href="<?=asset('/smartAdmin/css/smartadmin-skins.min.css')?>">

    <!-- SmartAdmin RTL Support  -->
    <link rel="stylesheet" type="text/css" media="screen" href="<?=asset('/smartAdmin/css/smartadmin-rtl.min.css')?>">

<!-- We recommend you use "your_style.css" to override SmartAdmin
         specific styles this will also ensure you retrain your customization with each SmartAdmin update.
    <link rel="stylesheet" type="text/css" media="screen" href="<?=asset('/smartAdmin/css/your_style.css')?>"> -->

    <!-- Demo purpose only: goes with demo.js, you can delete this css when designing your own WebApp -->
    <link rel="stylesheet" type="text/css" media="screen" href="<?=asset('/smartAdmin/css/demo.min.css')?>">

@yield('css')



<!-- FAVICONS -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('/smartAdmin/img/favicon/admin/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('/smartAdmin/img/favicon/admin/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('/smartAdmin/img/favicon/admin/favicon-16x16.png')}}">
<!--link rel="manifest" href="{{asset('/smartAdmin/img/favicon/admin/site.webmanifest')}}">
    <link rel="mask-icon" href="{{asset('/smartAdmin/img/favicon/admin/safari-pinned-tab.svg')}}" color="#5bbad5"-->
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <!-- GOOGLE FONT -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,300,400,700">

    <!-- Specifying a Webpage Icon for Web Clip
         Ref: https://developer.apple.com/library/ios/documentation/AppleApplications/Reference/SafariWebContent/ConfiguringWebApplications/ConfiguringWebApplications.html -->
    <link rel="apple-touch-icon" href="/smartAdmin/img/splash/sptouch-icon-iphone.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/smartAdmin/img/splash/touch-icon-ipad.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/smartAdmin/img/splash/touch-icon-iphone-retina.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/smartAdmin/img/splash/touch-icon-ipad-retina.png">
    <!-- Link to Google CDN's jQuery + jQueryUI; fall back to local -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>
<body>

<!-- HEADER -->
<header id="header">
    <div id="logo-group">

        <!-- PLACE YOUR LOGO HERE -->
        <span id="logo"> <img src="<?=asset('img/logo.png')?>" alt="CREDICOM"> </span>
        <!-- END LOGO PLACEHOLDER -->

    </div>

    <!-- pulled right: nav area -->
    <div class="pull-right">

        <!-- collapse menu button -->
        <div id="hide-menu" class="btn-header pull-right">
            <span> <a href="javascript:void(0);" data-action="toggleMenu" title="Collapse Menu"><i
                            class="fa fa-reorder"></i></a> </span>
        </div>
        <!-- end collapse menu -->

        <!-- #MOBILE -->
        <!-- Top menu profile link : this shows only when top menu is active -->
        <ul id="mobile-profile-img" class="header-dropdown-list hidden-xs padding-5">
            <li class="">
                <a href="#" class="dropdown-toggle no-margin userdropdown" data-toggle="dropdown">
                    <img src="<?=asset('img/avatars/sunny.png')?>" alt="" class="online"/>
                </a>
                <ul class="dropdown-menu pull-right">
                    <li>
                        <a href="profile.html" class="padding-10 padding-top-0 padding-bottom-0"> <i
                                    class="fa fa-user"></i> <u>P</u>rofile</a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="javascript:void(0);" class="padding-10 padding-top-0 padding-bottom-0"
                           data-action="launchFullscreen"><i class="fa fa-arrows-alt"></i> Full <u>S</u>creen</a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="{{$logout}}" class="padding-10 padding-top-5 padding-bottom-5" data-action="userLogout"><i
                                    class="fa fa-sign-out fa-lg"></i> <strong><u>L</u>ogout</strong></a>
                    </li>
                </ul>
            </li>
        </ul>

        <!-- logout button -->
        <div id="logout" class="btn-header transparent pull-right">
            <span> <a href="{{$logout}}" title="Sign Out" data-action="userLogout"
                      data-logout-msg="You can improve your security further after logging out by closing this opened browser"><i
                            class="fa fa-sign-out"></i></a> </span>
        </div>
        <!-- end logout button -->

        <!-- fullscreen button -->
        <div id="fullscreen" class="btn-header transparent pull-right">
            <span> <a href="javascript:void(0);" data-action="launchFullscreen" title="Full Screen"><i
                            class="fa fa-arrows-alt"></i></a> </span>
        </div>
        <!-- end fullscreen button -->

    </div>
    <!-- end pulled right: nav area -->

</header>
<!-- END HEADER -->

@include('partials.admin.nav')


<!-- MAIN PANEL -->
<div id="main" role="main">

@include('partials.admin.ribbon')

<!-- MAIN CONTENT -->
    <div id="content">
        @yield('content')
    </div>
    <!-- END MAIN CONTENT -->

</div>
<!-- END MAIN PANEL -->


<!-- PAGE FOOTER -->
<div class="page-footer">
    <div class="row">
        <div class="col-xs-12 col-sm-6">
            <span class="txt-color-white">CREDICOM <span class="hidden-xs"> - &copy; </span><?php echo date('Y'); ?></span>
        </div>

        <div class="col-xs-6 col-sm-6 text-right hidden-xs">
            <div class="txt-color-white inline-block">

            </div>
        </div>
    </div>
</div>
<!-- END PAGE FOOTER -->

<!-- SHORTCUT AREA : With large tiles (activated via clicking user name tag)
Note: These tiles are completely responsive,
you can add as many as you like
-->
<div id="shortcut">
    <ul>
        <li>
            <a href="/personal/admin-profile" class="jarvismetro-tile big-cubes selected bg-color-pinkDark"> <span
                        class="iconbox"> <i
                            class="fa fa-user fa-4x"></i> <span>{{trans('personal_nav.admin_profile')}}</span> </span>
            </a>
        </li>
    </ul>
</div>
<!-- END SHORTCUT AREA -->

<!--================================================== -->

<!-- PACE LOADER - turn this on if you want ajax loading to show (caution: uses lots of memory on iDevices)-->
<script data-pace-options='{ "restartOnRequestAfter": true }' src="/smartAdmin/js/plugin/pace/pace.min.js"></script>


<script>
    if (!window.jQuery) {
        document.write('<script src="js/libs/jquery-3.2.1.min.js"><\/script>');
    }
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script>
    if (!window.jQuery.ui) {
        document.write('<script src="js/libs/jquery-ui.min.js"><\/script>');
    }
</script>

<!-- IMPORTANT: APP CONFIG -->
<script src="/smartAdmin/js/app.config.js"></script>

<!-- JS TOUCH : include this plugin for mobile drag / drop touch events-->
<script src="/smartAdmin/js/plugin/jquery-touch/jquery.ui.touch-punch.min.js"></script>

<!-- BOOTSTRAP JS -->
<script src="/smartAdmin/js/bootstrap/bootstrap.min.js"></script>

<!-- CUSTOM NOTIFICATION -->
<script src="/smartAdmin/js/notification/SmartNotification.min.js"></script>

<!-- JARVIS WIDGETS -->
<script src="/smartAdmin/js/smartwidgets/jarvis.widget.min.js"></script>

<!-- EASY PIE CHARTS -->
<script src="/smartAdmin/js/plugin/easy-pie-chart/jquery.easy-pie-chart.min.js"></script>

<!-- SPARKLINES -->
<script src="/smartAdmin/js/plugin/sparkline/jquery.sparkline.min.js"></script>

<!-- JQUERY VALIDATE -->
<script src="/smartAdmin/js/plugin/jquery-validate/jquery.validate.min.js"></script>

<!-- JQUERY MASKED INPUT -->
<script src="/smartAdmin/js/plugin/masked-input/jquery.maskedinput.min.js"></script>

<!-- JQUERY SELECT2 INPUT -->
<script src="/smartAdmin/js/plugin/select2/select2.min.js"></script>

<!-- JQUERY UI + Bootstrap Slider -->
<script src="/smartAdmin/js/plugin/bootstrap-slider/bootstrap-slider.min.js"></script>

<!-- browser msie issue fix -->
<script src="/smartAdmin/js/plugin/msie-fix/jquery.mb.browser.min.js"></script>

<!-- FastClick: For mobile devices -->
<script src="/smartAdmin/js/plugin/fastclick/fastclick.min.js"></script>

<!--[if IE 8]>

<h1>Your browser is out of date, please update your browser by going to www.microsoft.com/download</h1>

<![endif]-->

<!-- Demo purpose only -->
<script src="/smartAdmin/js/demo.min.js"></script>

<!-- MAIN APP JS FILE -->
<script src="/smartAdmin/js/app.min.js"></script>

<!-- ENHANCEMENT PLUGINS : NOT A REQUIREMENT -->
<!-- Voice command : plugin -->
<script src="/smartAdmin/js/speech/voicecommand.min.js"></script>

<!-- SmartChat UI : plugin -->
<script src="/smartAdmin/js/smart-chat-ui/smart.chat.ui.min.js"></script>
<script src="/smartAdmin/js/smart-chat-ui/smart.chat.manager.min.js"></script>


<script>
    $(document).ready(function() {

        pageSetUp();

        $('#tabs').tabs();


        getSeasons();
        getProducts();
        getFabrics();
        getSizes();
        getDecorations();
        function getSeasons(){
            $('#seasons').empty()

            $.ajax({
                type: "POST",
                dataType: 'json',
                //async: false,
                url: '/admin/get_seasons',
                data: {}, // serializes the form's elements.
                success: function (data) {
                    console.log(data)

                    $.each(data.seasons,(function(index,value){
                        $('#seasons').append(
                            '<tr>'+
                            '<td>'+value.id+'</td>'+
                            '<td>'+value.name+'</td>'+
                            '<td>' +
                            '<input class="season_id" type="hidden" value="'+value.id+'">' +
                            '<input class="season_name" type="hidden" value="'+value.name+'">' +
                            '<a  class="btn btn-danger delete_season" href="javascript:void(0);"><i class="fa fa-remove"></i> Удалить Сезон</a></td>'+

                            '</tr>'


                        )
                    }))
                }

            });
        }


        $( "table" ).delegate( ".delete_season", "click", function() {
            //alert($(this).parent('td').find('input').val())


            var r = confirm("Удалить Сезон '"+$(this).parent('td').find('.season_name').val()+"'?");
            if (r == true) {
                $.ajax({
                    type: "POST",
                    dataType: 'json',
                    //async: false,
                    url: '/admin/delete_season',
                    data: {season:$(this).parent('td').find('.season_id').val()}, // serializes the form's elements.
                    success: function (data) {
                        getSeasons();
                    }

                });
                txt = "Сезон удален!";
            } else {
                txt = "Вы нажали ОТМЕНА!";
            }
            alert(txt)
        });


        $('#seasonForm').click(function(){



            $.ajax({
                type: "POST",
                dataType: 'json',
                //async: false,
                url: '/admin/add_season',
                data: {season_name:$(this).parent().parent().parent().find('input').val()}, // serializes the form's elements.
                success: function (data) {
                    getSeasons();
                    alert('Сезон добавлен!')
                }

            });
        })



        function getProducts(){
            $('#products').empty()

            $.ajax({
                type: "POST",
                dataType: 'json',
                // async: false,
                url: '/admin/get_products',
                data: {}, // serializes the form's elements.
                success: function (data) {
                    console.log(data)

                    $.each(data.products,(function(index,value){
                        $('#products').append(
                            '<tr>'+
                            '<td>'+value.id+'</td>'+
                            '<td>'+value.name+'</td>'+
                            '<td>' +
                            '<input class="product_id" type="hidden" value="'+value.id+'">' +
                            '<input class="product_name" type="hidden" value="'+value.name+'">' +
                            '<a  class="btn btn-danger delete_product" href="javascript:void(0);"><i class="fa fa-remove"></i> Удалить Вид изделия</a></td>'+

                            '</tr>'


                        )
                    }))
                }

            });
        }


        $( "table" ).delegate( ".delete_product", "click", function() {
            //alert($(this).parent('td').find('input').val())


            var r = confirm("Удалить Вид изделия '"+$(this).parent('td').find('.product_name').val()+"'?");
            if (r == true) {
                $.ajax({
                    type: "POST",
                    dataType: 'json',
                    //async: false,
                    url: '/admin/delete_product',
                    data: {product:$(this).parent('td').find('.product_id').val()}, // serializes the form's elements.
                    success: function (data) {
                        getProducts();
                    }

                });
                txt = "Вид изделия удален!";
            } else {
                txt = "Вы нажали ОТМЕНА!";
            }
            alert(txt)
        });


        $('#productForm').click(function(){



            $.ajax({
                type: "POST",
                dataType: 'json',
                //async: false,
                url: '/admin/add_product',
                data: {product_name:$(this).parent().parent().parent().find('input').val()}, // serializes the form's elements.
                success: function (data) {
                    getProducts();
                    alert('Вид изделия добавлен!')
                }

            });
        })







        function getFabrics(){
            $('#fabrics').empty()

            $.ajax({
                type: "POST",
                dataType: 'json',
                // async: false,
                url: '/admin/get_fabrics',
                data: {}, // serializes the form's elements.
                success: function (data) {
                    console.log(data)

                    $.each(data.fabrics,(function(index,value){
                        $('#fabrics').append(
                            '<tr>'+
                            '<td>'+value.id+'</td>'+
                            '<td>'+value.name+'</td>'+
                            '<td>' +
                            '<input class="fabric_id" type="hidden" value="'+value.id+'">' +
                            '<input class="fabric_name" type="hidden" value="'+value.name+'">' +
                            '<a  class="btn btn-danger delete_fabric" href="javascript:void(0);"><i class="fa fa-remove"></i> Удалить Ткань</a></td>'+

                            '</tr>'


                        )
                    }))
                }

            });
        }


        $( "table" ).delegate( ".delete_fabric", "click", function() {
            //alert($(this).parent('td').find('input').val())


            var r = confirm("Удалить Ткань '"+$(this).parent('td').find('.fabric_name').val()+"'?");
            if (r == true) {
                $.ajax({
                    type: "POST",
                    dataType: 'json',
                    //async: false,
                    url: '/admin/delete_fabric',
                    data: {fabric:$(this).parent('td').find('.fabric_id').val()}, // serializes the form's elements.
                    success: function (data) {
                        getFabrics();
                    }

                });
                txt = "Ткань удалена!";
            } else {
                txt = "Вы нажали ОТМЕНА!";
            }
            alert(txt)
        });


        $('#fabricForm').click(function(){



            $.ajax({
                type: "POST",
                dataType: 'json',
                //async: false,
                url: '/admin/add_fabric',
                data: {fabric_name:$(this).parent().parent().parent().find('input').val()}, // serializes the form's elements.
                success: function (data) {
                    getFabrics();
                    alert('Ткань добавлена!')
                }

            });
        })




        function getSizes(){
            $('#sizes').empty()

            $.ajax({
                type: "POST",
                dataType: 'json',
                // async: false,
                url: '/admin/get_sizes',
                data: {}, // serializes the form's elements.
                success: function (data) {
                    console.log(data)

                    $.each(data.sizes,(function(index,value){
                        $('#sizes').append(
                            '<tr>'+
                            '<td>'+value.id+'</td>'+
                            '<td>'+value.name+'</td>'+
                            '<td>' +
                            '<input class="size_id" type="hidden" value="'+value.id+'">' +
                            '<input class="size_name" type="hidden" value="'+value.name+'">' +
                            '<a  class="btn btn-danger delete_size" href="javascript:void(0);"><i class="fa fa-remove"></i> Удалить Размер</a></td>'+

                            '</tr>'


                        )
                    }))
                }

            });
        }


        $( "table" ).delegate( ".delete_size", "click", function() {
            //alert($(this).parent('td').find('input').val())


            var r = confirm("Удалить Размер '"+$(this).parent('td').find('.size_name').val()+"'?");
            if (r == true) {
                $.ajax({
                    type: "POST",
                    dataType: 'json',
                    //async: false,
                    url: '/admin/delete_size',
                    data: {size:$(this).parent('td').find('.size_id').val()}, // serializes the form's elements.
                    success: function (data) {
                        getSizes();
                    }

                });
                txt = "Размер удален!";
            } else {
                txt = "Вы нажали ОТМЕНА!";
            }
            alert(txt)
        });


        $('#sizeForm').click(function(){



            $.ajax({
                type: "POST",
                dataType: 'json',
                //async: false,
                url: '/admin/add_size',
                data: {size_name:$(this).parent().parent().parent().find('input').val()}, // serializes the form's elements.
                success: function (data) {
                    getSizes();
                    alert('Размер добавлен!')
                }

            });
        })






        function getDecorations(){
            $('#decorations').empty()

            $.ajax({
                type: "POST",
                dataType: 'json',
                // async: false,
                url: '/admin/get_decorations',
                data: {}, // serializes the form's elements.
                success: function (data) {
                    console.log(data)

                    $.each(data.decorations,(function(index,value){
                        $('#decorations').append(
                            '<tr>'+
                            '<td>'+value.id+'</td>'+
                            '<td>'+value.name+'</td>'+
                            '<td>' +
                            '<input class="decoration_id" type="hidden" value="'+value.id+'">' +
                            '<input class="decoration_name" type="hidden" value="'+value.name+'">' +
                            '<a  class="btn btn-danger delete_decoration" href="javascript:void(0);"><i class="fa fa-remove"></i> Удалить Отделку</a></td>'+

                            '</tr>'


                        )
                    }))
                }

            });
        }


        $( "table" ).delegate( ".delete_decoration", "click", function() {
            //alert($(this).parent('td').find('input').val())


            var r = confirm("Удалить Отделку '"+$(this).parent('td').find('.decoration_name').val()+"'?");
            if (r == true) {
                $.ajax({
                    type: "POST",
                    dataType: 'json',
                    //async: false,
                    url: '/admin/delete_decoration',
                    data: {decoration:$(this).parent('td').find('.decoration_id').val()}, // serializes the form's elements.
                    success: function (data) {
                        getDecorations();
                    }

                });
                txt = "Отделка удалена!";
            } else {
                txt = "Вы нажали ОТМЕНА!";
            }
            alert(txt)
        });


        $('#decorationForm').click(function(){



            $.ajax({
                type: "POST",
                dataType: 'json',
                //async: false,
                url: '/admin/add_decoration',
                data: {decoration_name:$(this).parent().parent().parent().find('input').val()}, // serializes the form's elements.
                success: function (data) {
                    getDecorations();
                    alert('Отделка добавлена!')
                }

            });
        })








    });
</script>


</body>
</html>
