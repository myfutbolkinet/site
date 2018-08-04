<!-- FOOTER -->
<!--===================================================-->


<footer id="footer">

    <!-- Visible when footer positions are fixed -->
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <div class="show-fixed pull-right">
        <ul class="footer-list list-inline">
            <li>
                <p class="text-sm">SEO Proggres</p>
                <div class="progress progress-sm progress-light-base">
                    <div style="width: 80%" class="progress-bar progress-bar-danger"></div>
                </div>
            </li>

            <li>
                <p class="text-sm">Online Tutorial</p>
                <div class="progress progress-sm progress-light-base">
                    <div style="width: 80%" class="progress-bar progress-bar-primary"></div>
                </div>
            </li>
            <li>
                <button class="btn btn-sm btn-dark btn-active-success">Checkout</button>
            </li>
        </ul>
    </div>

    <!-- Visible when footer positions are static -->
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <div class="hide-fixed pull-right pad-rgt">Currently v2.2</div>

    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <!-- Remove the class name "show-fixed" and "hide-fixed" to make the content always appears. -->
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

    <p class="pad-lft">&#0169; 2015 Your Company</p>

</footer>
<!--===================================================-->
<!-- END FOOTER -->


<!-- SCROLL TOP BUTTON -->
<!--===================================================-->
<button id="scroll-top" class="btn"><i class="fa fa-chevron-up"></i></button>
<!--===================================================-->

</div>
<!--===================================================-->
<!-- END OF CONTAINER -->

<!--JAVASCRIPT-->
<!--=================================================-->





<!--jQuery Ui [ REQUIRED ]-->
<script src="/jasmine/js/jquery-ui.min.js"></script>
<!--BootstrapJS [ RECOMMENDED ]-->
<script src="/jasmine/js/bootstrap.min.js"></script>
<!--Fast Click [ OPTIONAL ]-->
-<script src="/jasmine/plugins/fast-click/fastclick.min.js"></script>




<!--Jasmine Admin [ RECOMMENDED ]-->
<script src="/jasmine/js/scripts.js"></script>


<!--SELECT Bootstrap Tags Input [ OPTIONAL ]-->
<!--<script src="/jasmine/plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>-->

<!--SELECT Bootstrap Tags Input [ OPTIONAL ]-->
<!--<script src="/jasmine/plugins/tag-it/tag-it.min.js"></script>-->

<!--SELECT Chosen [ OPTIONAL ]-->
<script src="/jasmine/plugins/chosen/chosen.jquery.min.js"></script>

<!--Jquery Steps [ OPTIONAL ]<script src="/jasmine/plugins/parsley/parsley.min.js"></script>-->


<!--Jquery Steps [ OPTIONAL ]<script src="/jasmine/plugins/jquery-steps/jquery-steps.min.js"></script>-->



<!--Bootstrap Wizard [ OPTIONAL ]<script src="/jasmine/plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>-->


<!--Masked Input [ OPTIONAL ]<script src="/jasmine/plugins/masked-input/bootstrap-inputmask.min.js"></script>-->


<!--Bootstrap Validator [ OPTIONAL ]<script src="/jasmine/plugins/bootstrap-validator/bootstrapValidator.min.js"></script>-->


<!--Form Wizard [ SAMPLE ]<script src="/jasmine/js/demo/wizard.js"></script>-->


<!--Demo script [ DEMONSTRATION ]<script src="/jasmine/js/demo/jasmine.js"></script>-->


<!--Form Wizard [ SAMPLE ]<script src="/jasmine/js/demo/form-wizard.js"></script>-->

<!--Bootstrap Select [ OPTIONAL ]-->
<script src="/jasmine/plugins/bootstrap-select/bootstrap-select.min.js"></script>

<!--Bootstrap Tags Input [ OPTIONAL ]-->
<script src="/jasmine/plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>

<!--Bootstrap Tags Input [ OPTIONAL ]-->
<script src="/jasmine/plugins/tag-it/tag-it.min.js"></script>

<script src="/jasmine/js/demo/form-component.js"></script>
<script src="/jasmine/plugins/dropzone/dropzone.min.js"></script>
<!--Summernote [ OPTIONAL ]-->
<script src="/jasmine/plugins/summernote/summernote.min.js"></script>

<script>
    //Get content
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $(document).ready(function(){

        var a_href= $('.nav-tabs li.active a').attr('href');

        var main =$(a_href).find('ul li').find('a')

        jQuery.each( main, function(i,val ) {

            if($(val).data('main')=='main'){
              var href=$(val).attr('data-text')

                $.ajax({
                    type: 'POST',
                    dataType: 'json',
                    url: href,
                    success: function(jsondata){
                        $('#result').html(jsondata.html)
                    }
                });
            }
        });




    })


    $('.link a').click(function(){
        var href= $(this).attr('data-text');

        $.ajax({
            type: 'POST',
            dataType: 'json',
            url: href,
            success: function(jsondata){
                $('#result').html(jsondata.html)
            }
        });

    })

    $('.nav-tabs li a div button').click(function(){
        var href=$(this).attr('data-href')
        $.ajax({
            type: 'POST',
            dataType: 'json',
            url: href,
            success: function(jsondata){
                $('#result').html(jsondata.html)
            }
        });

    })



</script>




</body>
</html>