<!-- Footer Start -->
@if(Request::routeIs('index'))

<footer class="footer footer-1 bg--black ptb--40">
    <div class="footer-top pb--40 pb-md--30">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-8 mb-md--30">
                    <div class="footer-widget">
                        <div class="textwidget">
                            <img src="/frontsite/assets/img/logo/logo-white.png" alt="Logo" class="mb--10">
                            <p class="font-size-16 font-2 mb--20">Integer ut ligula quis lectus fringilla elementum porttitor sed est. Duis fringilla efficitur ligula sed lobortis.</p>
                            <!-- Social Icons Start Here -->
                            <ul class="social">
                                <li class="social__item">
                                    <a href="twitter.com" class="social__link color--white">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li class="social__item">
                                    <a href="plus.google.com" class="social__link color--white">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                </li>
                                <li class="social__item">
                                    <a href="facebook.com" class="social__link color--white">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li class="social__item">
                                    <a href="youtube.com" class="social__link color--white">
                                        <i class="fa fa-youtube"></i>
                                    </a>
                                </li>
                                <li class="social__item">
                                    <a href="instagram.com" class="social__link color--white">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                            <!-- Social Icons End Here -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 mb-md--30">
                    <div class="footer-widget">
                        <h3 class="widget-title">Company</h3>
                        <ul class="widget-menu">
                            <li><a href="about-us.html">About Us</a></li>
                            <li><a href="">Our Services</a></li>
                            <li><a href="">Affiliate Program</a></li>
                            <li><a href="">Work for Airi</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 mb-sm--30">
                    <div class="footer-widget">
                        <h3 class="widget-title">USEFUL LINKS</h3>
                        <ul class="widget-menu">
                            <li><a href="shop-collections.html">The Collections</a></li>
                            <li><a href="">Size Guide</a></li>
                            <li><a href="">Return Policiy</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 mb-sm--30">
                    <div class="footer-widget">
                        <h3 class="widget-title">SHOPPING</h3>
                        <ul class="widget-menu">
                            <li><a href="shop-instagram.html">Look Book</a></li>
                            <li><a href="shop-sidebar.html">Shop Sidebar</a></li>
                            <li><a href="shop-fullwidth.html">Shop Fullwidth</a></li>
                            <li><a href="shop-no-gutter.html">Man &amp; Woman</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="footer-widget">
                        <h4 class="widget-title">CONTACT INFO</h4>
                        <ul class="contact-info">
                            <li class="contact-info__item">
                                <i class="fa fa-phone"></i>
                                <span><a href="" class="contact-info__link">(+612) 2531 5600</a></span>
                            </li>
                            <li class="contact-info__item">
                                <i class="fa fa-envelope"></i>
                                <span><a href="" class="contact-info__link">info@la-studioweb.com</a></span>
                            </li>
                            <li class="contact-info__item">
                                <i class="fa fa-map-marker"></i>
                                <span>PO Box 1622 Colins Street West Victoria 8077 Australia</span>
                            </li>
                        </ul>
                        <div class="textwidget">
                            <img src="/frontsite/assets/img/others/payments.png" alt="Payment">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-middle pb--40 pb-md--30">
        <div class="container">
            <div class="row method-box-wrapper">
                <div class="col-lg-3 col-md-6 mb-md--10">
                    <div class="method-box">
                        <h4>FREESHIPPING WORLD WIDE</h4>
                        <p>Freeship over oder $100</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-md--10">
                    <div class="method-box">
                        <h4>30 DAYS MONEY BACK</h4>
                        <p>You can back money any times</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-sm--10">
                    <div class="method-box">
                        <h4>PROFESSIONAL SUPPORT 24/7</h4>
                        <p>info@la-studioweb.com</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="method-box">
                        <h4>100% SECURE CHECKOUT</h4>
                        <p>Protect buyer &amp; clients</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <p class="copyright-text">©2018 AIRI All rights reserved. Designed by HasTech</p>
                </div>
            </div>
        </div>
    </div>
</footer>
@else
<footer class="footer footer-3 bg--white border-top">
    <div class="container">
        <div class="row pt--40 pt-md--30 mb--40 mb-sm--30">
            <div class="col-12 text-md-center">
                <div class="footer-widget">
                    <div class="textwidget">
                        <a href="index.html" class="footer-logo">
                            <img src="{{ asset('frontsite') }}/assets/img/logo/logo.svg" alt="Logo">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb--15 mb-sm--20">
            <div class="col-xl-2 col-md-4 mb-lg--30">
                <div class="footer-widget">
                    <h3 class="widget-title widget-title--2">Company</h3>
                    <ul class="widget-menu widget-menu--2">
                        <li><a href="about-us.html">About Us</a></li>
                        <li><a href="">Our Services</a></li>
                        <li><a href="">Affiliate Program</a></li>
                        <li><a href="">Work for Airi</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-2 col-md-4 mb-lg--30">
                <div class="footer-widget">
                    <h3 class="widget-title widget-title--2">USEFUL LINKS</h3>
                    <ul class="widget-menu widget-menu--2">
                        <li><a href="shop-collections.html">The Collections</a></li>
                        <li><a href="">Size Guide</a></li>
                        <li><a href="">Return Policiy</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-2 col-md-4 mb-lg--30">
                <div class="footer-widget">
                    <h3 class="widget-title widget-title--2">SHOPPING</h3>
                    <ul class="widget-menu widget-menu--2">
                        <li><a href="shop-instagram.html">Look Book</a></li>
                        <li><a href="shop-sidebar.html">Shop Sidebar</a></li>
                        <li><a href="shop-fullwidth.html">Shop Fullwidth</a></li>
                        <li><a href="shop-no-gutter.html">Man & Woman</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-5 offset-xl-1 col-lg-6 offset-lg-3 col-md-8 offset-md-2">
                <div class="footer-widget">
                    <h3 class="widget-title widget-title--2 widget-title--icon">Subscribe now and get 10% off new collection</h3>
                    <form action="https://company.us19.list-manage.com/subscribe/post?u=2f2631cacbe4767192d339ef2&amp;id=24db23e68a" class="newsletter-form newsletter-form--3 mc-form" method="post" target="_blank">
                        <input type="email" name="newsletter-email" id="newsletter-email" class="newsletter-form__input" placeholder="Enter Your Email Address..">
                        <button type="submit" class="newsletter-form__submit">
                            <i class="dl-icon-right"></i>
                        </button>
                    </form>
                    <!-- mailchimp-alerts Start -->
                    <div class="mailchimp-alerts">
                        <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                        <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                        <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                    </div>
                    <!-- mailchimp-alerts end -->
                </div>
            </div>
        </div>
        <div class="row align-items-center pt--10 pb--30">
            <div class="col-md-4">
                <!-- Social Icons Start Here -->
                <ul class="social social-small">
                    <li class="social__item">
                        <a href="twitter.com" class="social__link">
                        <i class="fa fa-twitter"></i>
                        </a>
                    </li>
                    <li class="social__item">
                        <a href="plus.google.com" class="social__link">
                        <i class="fa fa-google-plus"></i>
                        </a>
                    </li>
                    <li class="social__item">
                        <a href="facebook.com" class="social__link">
                        <i class="fa fa-facebook"></i>
                        </a>
                    </li>
                    <li class="social__item">
                        <a href="youtube.com" class="social__link">
                        <i class="fa fa-youtube"></i>
                        </a>
                    </li>
                    <li class="social__item">
                        <a href="instagram.com" class="social__link">
                        <i class="fa fa-instagram"></i>
                        </a>
                    </li>
                </ul>
                <!-- Social Icons End Here -->
            </div>
            <div class="col-md-4 text-md-center">
                <p class="copyright-text">&copy;2018 AIRI. Designed by HasTech</p>
            </div>
            <div class="col-md-4 text-md-right">
                <img src="{{ asset('frontsite') }}/assets/img/others/payments-2.png" alt="Payment">
            </div>
        </div>
    </div>
</footer>
@endif
<!-- Footer End -->

