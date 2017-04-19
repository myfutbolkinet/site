<footer id="footer">
    <div id="newsletter-container">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 clearfix">
                    <h3>Мы рады каждому клиенту и окажем вам внимание - звоните     067-486-72-40, 093-145-15-51

                    </h3>

                </div><!--End  .col-md-6 -->

            </div><!-- End .row -->
        </div><!-- End .container -->
    </div><!-- End #newsletter-container -->
    <div id="inner-footer">

        <div class="container">

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
                    <p>&copy; 2017 imedia&trade;. All Rights Reserved.</p>
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