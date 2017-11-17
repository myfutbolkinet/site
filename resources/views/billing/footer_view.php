<footer id="footer">
    <div id="newsletter-container">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 clearfix">
                    <h3>Sing up to receive the latest fashion news</h3>
                    <form id="register-newsletter">
                        <input type="text" name="newsletter" required="" placeholder="Enter your email address">
                        <input type="submit" class="btn btn-custom-3" value="SIGN UP">
                    </form>
                </div><!--End  .col-md-6 -->

            </div><!-- End .row -->
        </div><!-- End .container -->
    </div><!-- End #newsletter-container -->
    <div id="inner-footer">

        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-4 col-xs-12 widget">
                    <h3>MY ACCOUNT</h3>
                    <ul class="links">
                        <li><a href="#">My account</a></li>
                        <li><a href="#">Personal information</a></li>
                        <li><a href="#">Addresses</a></li>
                        <li><a href="#">Discount</a></li>
                        <li><a href="#">Order History</a></li>
                        <li><a href="#">Your Vouchers</a></li>
                    </ul>
                </div><!-- End .widget -->

                <div class="col-md-3 col-sm-4 col-xs-12 widget">
                    <h3>INFORMATION</h3>
                    <ul class="links">
                        <li><a href="#">New products</a></li>
                        <li><a href="#">Top sellers</a></li>
                        <li><a href="#">Specials</a></li>
                        <li><a href="#">Manufacturers</a></li>
                        <li><a href="#">Suppliers</a></li>
                        <li><a href="#">Our stores</a></li>
                    </ul>
                </div><!-- End .widget -->

                <div class="col-md-3 col-sm-4 col-xs-12 widget">
                    <h3>Twıtter Feed</h3>
                    <div class="twitter_feed">
                    </div><!-- End twitter-feed -->
                </div><!-- End .widget -->

                <div class="clearfix visible-sm"></div>

                <div class="col-md-3 col-sm-12 col-xs-12 widget">
                    <h3>FACEBOOK LIKE BOX</h3>

                    <div class="facebook-likebox">
                        <iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fenvato&amp;colorscheme=dark&amp;show_faces=true&amp;header=false&amp;stream=false&amp;show_border=false"></iframe>
                    </div>


                </div><!-- End .widget -->
            </div><!-- End .row -->
        </div><!-- End .container -->

    </div><!-- End #inner-footer -->

    <div id="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-sm-7 col-xs-12 footer-social-links-container">
                    <ul class="social-links clearfix">
                        <li><a href="#" class="social-icon icon-facebook"></a></li>
                        <li><a href="#" class="social-icon icon-twitter"></a></li>
                        <li><a href="#" class="social-icon icon-rss"></a></li>
                        <li><a href="#" class="social-icon icon-delicious"></a></li>
                        <li><a href="#" class="social-icon icon-linkedin"></a></li>
                        <li><a href="#" class="social-icon icon-flickr"></a></li>
                        <li><a href="#" class="social-icon icon-skype"></a></li>
                        <li><a href="#" class="social-icon icon-email"></a></li>
                    </ul>
                </div><!-- End .col-md-7 -->

                <div class="col-md-5 col-sm-5 col-xs-12 footer-text-container">
                    <p>&copy; 2014 Powered by Company&trade;. All Rights Reserved.</p>
                </div><!-- End .col-md-5 -->
            </div><!-- End .row -->
        </div><!-- End .container -->
    </div><!-- End #footer-bottom -->

</footer><!-- End #footer -->
</div><!-- End #wrapper -->
<a href="#" id="scroll-top" title="Scroll to Top"><i class="fa fa-angle-up"></i></a><!-- End #scroll-top -->
<!-- END -->
<script src="/js/bootstrap.min.js"></script>
<script src="/js/smoothscroll.js"></script>
<script src="/js/retina-1.1.0.min.js"></script>
<script src="/js/jquery.placeholder.js"></script>
<script src="/js/jquery.hoverIntent.min.js"></script>
<script src="/js/twitter/jquery.tweet.min.js"></script>
<script src="/js/jquery.flexslider-min.js"></script>
<script src="/js/owl.carousel.min.js"></script>
<script src="/js/jflickrfeed.min.js"></script>
<script src="/js/jquery.prettyPhoto.js"></script>
<script src="/js/jquery.isotope.min.js"></script>
<script src="/js/jquery.fitvids.js"></script>
<script src="/js/colpick.js"></script>
<script src="/js/jquery.elastislide.js"></script>
<script src="/js/jquery.mlens-1.3.min.js"></script>
<script src="/js/main.js"></script>

<script>
    $(function() {

        var carouselContainer = $('#product-carousel'),
            productImg =  $('#product-image');

        carouselContainer.elastislide({
            orientation : 'vertical',
            minItems : 4

        });

        productImg.mlens({
            imgSrc: $("#product-image").attr("data-big"),
            lensShape: "square",
            lensSize: 150,
            borderSize: 4,
            borderColor: "#999",
            borderRadius: 0
        });


        var oldImg = productImg.attr('src');
        carouselContainer.find('li').on('mouseover', function() {

            var newImg = $(this).find('a').attr('href');

            productImg.attr({'src': newImg, 'data-big': newImg}).trigger('imagechanged');

        });

        // triggered with custom event
        productImg.on('imagechanged', function() {
            productImg.mlens("update", 0 ,{
                imgSrc: productImg.attr("data-big"),
                lensShape: "square",
                lensSize: 150,
                borderSize: 4,
                borderColor: "#999"
            });
        });

    });
</script>
</body>
</html>