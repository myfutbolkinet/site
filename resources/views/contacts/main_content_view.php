<section id="content">
    <div id="breadcrumb-container">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="index-2.html">Home</a></li>
                <li class="active">Contact Us</li>
            </ul>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <header class="content-title">
                    <h1 class="title">Написать нам</h1>
                    <p class="title-desc">Мы рады вашему письму.</p>
                </header>
                <div class="xs-margin"></div><!-- space -->
                <div class="row">

                    <div class="col-md-12">
                        <div id="map">
                            <!-- Google - Map - Api -->
                        </div><!-- End #map -->
                    </div><!-- End .col-md-12 -->

                    <div class="col-md-8 col-sm-8 col-xs-12">
                        <h2 class="sub-title">Отправить комментарий </h2>
                        <div class="row">
                            <form action="/send_mail" method="post" id="contact-form">
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="input-icon input-icon-user"></span><span class="input-text">Name&#42;</span></span>
                                        <input type="text" name="contact-name" id="contact-name" required class="form-control input-lg" placeholder="Your Name">
                                    </div><!-- End .input-group -->
                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="input-icon input-icon-email"></span><span class="input-text">Email&#42;</span></span>
                                        <input type="email" name="contact-email" id="contact-email" required class="form-control input-lg" placeholder="Your Email">
                                    </div><!-- End .input-group -->
                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="input-icon input-icon-subject"></span><span class="input-text">Subject&#42;</span></span>
                                        <input type="text" name="contact-subject" id="contact-subject" required class="form-control input-lg" placeholder="Subject">
                                    </div><!-- End .input-group -->
                                    <p class="item-desc">Ваше письмо не будет отправлено если не будут заполнены обязательные поля *</p>
                                </div><!-- End .col-md-6 -->

                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <div class="input-group textarea-container">
                                        <span class="input-group-addon"><span class="input-icon input-icon-message"></span><span class="input-text">Your Comment</span></span>
                                        <textarea name="contact-message" id="contact-message" class="form-control" cols="30" rows="6" placeholder="Your Message"></textarea>
                                    </div><!-- End .input-group -->
                                    <input type="submit" value="Отправить" class="btn btn-custom-2 md-margin">
                                </div><!-- End .col-md-6 -->
                            </form>
                        </div><!-- End .row -->

                    </div><!-- End .col-md-8 -->

                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <h2 class="sub-title">КОНТАКТНАЯ ИНФОРМАЦИЯ</h2>
                        <ul class="contact-details-list">
                            
                            <li>
                                <span class="contact-icon contact-icon-mobile"></span>
                                <ul>
                                    <li>067-486-72-40</li>
                                    <li>093-145-15-51</li>
                                </ul>
                            </li>
                            <li>
                                <span class="contact-icon contact-icon-email"></span>
                                <ul>
                                    <li>Venedor@gmail.com</li>
                                    <li>Venedor@aol.com</li>
                                </ul>
                            </li>
                            <li>
                                <span class="contact-icon contact-icon-skype"></span>
                                <ul>
                                    <li>Venedor_store</li>
                                    <li>Venedor_support</li>
                                </ul>
                            </li>
                        </ul>
                    </div><!-- End .col-md-4 -->
                </div><!-- End .row -->

            </div><!-- End .col-md-12 -->
        </div><!-- End .row -->
    </div><!-- End .container -->

</section><!-- End #content -->