<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Home | Tshirts Ecommerce</title>

    <!-- Google Font (Nunito)-->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,400,700" rel="stylesheet">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="/Site_template/css/bootstrap.min.css">
    <!-- Main template styles -->
    <link rel="stylesheet" href="/Site_template/css/main.css">
    <!-- Responsive styles for mobile devices -->
    <link rel="stylesheet" href="/Site_template/css/responsive.css">
    <!-- Your custom styles -->
    <link rel="stylesheet" href="/Site_template/css/custom.css">

    <!-- Font Awesome CDN -->
    <script src="https://use.fontawesome.com/302c3108d6.js"></script>
    <!-- jQuery -->
    <script src="/Site_template/js/jquery-3.1.1.min.js"></script>
    <!-- Bootsrap plugin -->
    <script src="/Site_template/js/bootstrap.min.js"></script>

    <!-- favicon -->
    <link rel="icon" href="favicon.png" type="image/png">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>
        .thumbpost {
            object-position: center;
            object-fit: cover;
            width: 147%;
            max-height: 50px;
        }
    </style>
</head>
<body>
<!-- page content -->
<div id="page-content">
    <!-- overlay -->
    <div class="overlay">
        <div class="ov-content text-center">
            <div class="spiners">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="logo"></div>
        </div>
    </div>

@include('main_site.layouts.navigation')

@yield('content')

    <!-- footer -->
    <footer>
        <div class="container text-center text-uppercase">
            <!-- footer-menu -->
            <div class="row">
                <div class="col-lg-offset-4 col-lg-4 col-md-offset-4 col-md-4 col-sm-12">
                    <ul class="list-unstyled footer-menu">
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="contact.html">Contact</a></li>
                        <li><a href="#">Catalog</a></li>
                    </ul>
                </div>
            </div>

            <!-- copyright -->
            <div class="row">
                <div class="col-lg-offset-3 col-lg-6 col-md-offset-3 col-md-6 col-sm-12">
                    <div class="copyright">
                        <p>PRIVACY POLICY / TERMS &amp; CONDITIONS / LEGAL NOTICE</p>
                        <p>PROWDLY POWERED BY <a href="http://wordpress.org" target="_blank">WORDPRESS</a> &amp; CUSTOMIZED BY HAND IN <a href="http://themesdojo.com" target="_blank">THEMES DOJO STUDIO</a></p>
                    </div>
                </div>
            </div>

            <!-- footer-socials -->
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <ul class="list-inline footer-socials">
                        <li>
                            <a href="#" class="social-lnk"><i class="fa fa-instagram"></i></a>
                        </li>
                        <li>
                            <a href="#" class="social-lnk"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href="#" class="social-lnk"><i class="fa fa-twitter"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

</div>


<!-- isotope -->
<script src="/Site_template/js/isotope.min.js"></script>
<!-- mgnific popup -->
<script src="/Site_template/js/jquery.magnific-popup.min.js"></script>
<!-- owl carousel -->
<script src="/Site_template/js/owl.carousel.min.js"></script>
<!-- jquery-ui for price range -->
<script src="/Site_template/js/jquery-ui.min.js"></script>
<!-- Main javascript funcitons-->
<script src="/Site_template/js/main.js"></script>


<script>

    $('.add_to_cart').click(function(){
        var summ = $('.summ_total').val();
        var price = $(this).parent().find('.price_value').val()
        console.log(summ,price)
        $('.summ').text(parseInt(summ)+parseInt(price))
        $(this).parent().find('.price_value').val(parseInt(summ)+parseInt(price))
        $('.total_in_right').text(parseInt(summ)+parseInt(price))
        $('.summ_total').val(parseInt(summ)+parseInt(price));
        alert('товар добавлен в корзину')
        $(this).text('Товар в корзине')
    })
</script>
</body>
</html>