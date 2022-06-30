<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Food Items || Services || Ghitha</title>
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url(); ?>public_html/front_end/assets/images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url(); ?>public_html/front_end/assets/images/favicon-ghitha-logo.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url(); ?>public_html/front_end/assets/images/favicon-ghitha-logo.png">
    <link rel="manifest" href="<?php echo base_url(); ?>public_html/front_end/assets/images/favicons/site.webmanifest">

    <!-- Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=BenchNine:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=BenchNine:wght@300;400;700&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <!-- Css-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>public_html/front_end/assets/css/animate.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public_html/front_end/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public_html/front_end/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public_html/front_end/assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public_html/front_end/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public_html/front_end/assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public_html/front_end/assets/css/swiper.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public_html/front_end/assets/css/bootstrap-select.min.css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>public_html/front_end/assets/css/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public_html/front_end/assets/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public_html/front_end/assets/css/vegas.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public_html/front_end/assets/css/nouislider.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public_html/front_end/assets/css/nouislider.pips.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public_html/front_end/assets/css/jquery.bxslider.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public_html/front_end/assets/css/agrikol_iconl.css">
    <!-- Template styles -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>public_html/front_end/assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public_html/front_end/assets/css/responsive.css">

</head>

<body>


    <div class="page-wrapper">


        <div class="site-header__header-one-wrap">

            <div class="topbar-one">
                <!-- <div class="topbar_bg" style="background-image: url(assets/images/shapes/header-bg.png)"></div> -->
                <div class="container">
                    <div class="topbar-one__left">
                        <a href="mailto:info@ghitha.com"><span class="icon-message"></span>info@ghitha.com</a>
                        <!-- <a href="tel:666-999-0000"><span class="icon-phone-call"></span>666 888 0000</a> -->
                    </div>
                    <div class="topbar-one__middle">

                    </div>
                    <div class="topbar-one__right">
                        <div class="topbar-one__social">
                            <a href="https://www.facebook.com/"><i class="fab fa-facebook-square"></i></a>
                            <a href="https://twitter.com/?lang=en"><i class="fab fa-twitter"></i></a>
                            <a href="https://www.instagram.com/ghitha.holding/"><i class="fab fa-instagram"></i></a>
                            <a href="https://www.linkedin.com/"><i class="fab fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <header class="main-nav__header-one">
                <nav class="header-navigation stricky">
                    <div class="container clearfix">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="main-nav__left">
                            <a href="#" class="side-menu__toggler">
                                <i class="fa fa-bars"></i>
                            </a>
                            <a href="index.html" class="main-nav__logo">
                                <img src="<?php echo base_url(); ?>public_html/front_end/assets/images/resources/ghitha-logo.png" class="main-logo" alt="Ghitha" />
                            </a>
                        </div>

                        <!-- /.navbar-collapse -->

                        <div class="main-nav__right">
                            <div class="main-nav__main-navigation">
                                <ul class=" main-nav__navigation-box">
                                    <li>
                                        <a href="<?php echo $index_link; ?>">Home</a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="">Who we are</a>
                                        <ul>
                                            <li><a href="<?php echo $about_us_link; ?>">About us</a></li>
                                            <li><a href="<?php echo $chairman_message_link; ?>">Message From The Chairman & CEO</a></li>
                                            <!-- <li><a href="our-team.html">Our Team</a></li> -->
                                        </ul>
                                    </li>
                                    <li class="dropdown current">
                                        <a href="">Our Services</a>
                                        <ul>
                                            <li><a href="<?php echo $food_items_link; ?>">Food Items</a></li>
                                            <li><a href="<?php echo $non_food_items_link; ?>">Non-Food Items</a></li>
                                            <li><a href="<?php echo $importation_and_warehousing_link; ?>">Importation and Warehousing</a></li>
                                            <li><a href="<?php echo $logistics_department_link; ?>">Logistics Department</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="<?php echo $news_and_media_link; ?>">News & Media</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo $contact_us_link; ?>">Contact us</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </header>
        </div>

        <section class="page-header" style="background-image: url(<?php echo base_url(); ?>public_html/front_end/assets/images/backgrounds/page-header-contact.jpg);">
            <div class="container">
                <h2>Food Items</h2>
            </div>
        </section>

        <section class="about_two">
            <div class="container">
                <div class="row"><?php
                                echo $food_item;
                                ?>
                    <!-- <div class="col-xl-6">
                        <div class="company_image wow fadeInUp">
                            <img src="<?php echo base_url(); ?>public_html/front_end/assets/images/service/services-food-items.png" alt="">
                        </div>
                    </div> -->
                    <!-- <div class="col-xl-6">
                        <div class="company_content">
                            <div class="company_content">
                                
                                <div class="block-title text-left">
                                    <p class="wow fadeInUp">Services We Offer</p>
                                    <h3 class="wow fadeInUp">Food Items</h3>
                                    <div class="leaf wow fadeInUp">
                                        <img src="<?php echo base_url(); ?>public_html/front_end/assets/images/resources/leaf.png" alt="">
                                    </div>
                                </div>
                                <p class="wow fadeInUp">
                                    With a perspective of good Health and Hygiene, Ghitha Holding offers its wide range of food items, carefully selected based on the Quality Standards. Our food products are categorized to:
                                </p>
                                <ul class="company_list_box list-unstyled">
                                    <li class="wow fadeInUp" data-wow-delay="100ms"><i class="fa fa-check"></i>Cheese & Dairy Products</li>
                                    <li class="wow fadeInUp" data-wow-delay="120ms"><i class="fa fa-check"></i>Frozen Foods</li>
                                    <li class="wow fadeInUp" data-wow-delay="140ms"><i class="fa fa-check"></i>Poultry Products</li>
                                    <li class="wow fadeInUp" data-wow-delay="160ms"><i class="fa fa-check"></i>Fresh and Frozen</li>
                                    <li class="wow fadeInUp" data-wow-delay="180ms"><i class="fa fa-check"></i>Fresh & Frozen Meat</li>
                                    <li class="wow fadeInUp" data-wow-delay="200ms"><i class="fa fa-check"></i>Water & Beverage Items</li>
                                    <li class="wow fadeInUp" data-wow-delay="220ms"><i class="fa fa-check"></i>Rice & Pastas</li>
                                    <li class="wow fadeInUp" data-wow-delay="240ms"><i class="fa fa-check"></i>Oils</li>
                                    <li class="wow fadeInUp" data-wow-delay="260ms"><i class="fa fa-check"></i>Canned Foods</li>
                                    <li class="wow fadeInUp" data-wow-delay="280ms"><i class="fa fa-check"></i>Grains & Spices</li>
                                    <li class="wow fadeInUp" data-wow-delay="300ms"><i class="fa fa-check"></i>Dry Fruits</li>
                                    <li class="wow fadeInUp" data-wow-delay="320ms"><i class="fa fa-check"></i>Vegetables & Fruits- Fresh and Frozen</li>
                                    <li class="wow fadeInUp" data-wow-delay="340ms"><i class="fa fa-check"></i>Organic Foods</li>
                                    <li class="wow fadeInUp" data-wow-delay="360ms"><i class="fa fa-check"></i>Confectionery</li>
                                </ul>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </section>




        <footer class="site-footer">
            <div class="site-footer_farm_image"><img class="img-fluid" src="<?php echo base_url(); ?>public_html/front_end/assets/images/resources/site-footer-farm.png" alt="Farm Image"></div>
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="footer-widget__column footer-widget__about wow fadeInUp" data-wow-delay="100ms">
                            <div class="footer-widget__title">
                                <h3>About</h3>
                            </div>
                            <div class="footer-widget_about_text">
                                <p>Ghitha Holding is an eminent trading and distribution firm operating as a retail subsidiary under IHC Abu Dhabi.</p>
                            </div>
                            <form>
                                <div class="footer_input-box">
                                    <input type="Email" placeholder="Email Address">
                                    <button type="submit" class="button"><i class="fa fa-check"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-6">
                        <div class="footer-widget__column footer-widget__link wow fadeInUp" data-wow-delay="200ms">
                            <div class="footer-widget__title">
                                <h3>Explore</h3>
                            </div>
                            <ul class="footer-widget__links-list list-unstyled">
                                <li><a href="about.html">About Us</a></li>
                                <li><a href="message-from-the-chairman-and-ceo.html">Chairman & CEO</a></li>
                                <!-- <li><a href="our-team.html">Our Team</a></li> -->
                                <li><a href="news.html">News & Media</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="footer-widget__column footer-widget__news wow fadeInUp" data-wow-delay="300ms">
                            <div class="footer-widget__title">
                                <h3>News</h3>
                            </div>
                            <ul class="footer-widget__news list-unstyled">
                                <li>
                                    <div class="footer-widget__news_image">
                                        <img src="<?php echo base_url(); ?>public_html/front_end/assets/images/resources/footer-1-img-1.jpg" alt="">
                                    </div>
                                    <div class="footer-widget__news_text">
                                        <p><a href="abu-dhabis-ihc-invests-51m-in-uks-oxford-nanopore-technologies.html"> Abu Dhabi's IHC invests $51m in UK's Oxford Nanopore Technologies</a></p>
                                    </div>
                                    <div class="footer-widget__news_date_box">
                                        <p>Nov 9, 2020</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="footer-widget__news_image">
                                        <img src="<?php echo base_url(); ?>public_html/front_end/assets/images/resources/footer-1-img-2.jpg" alt="">
                                    </div>
                                    <div class="footer-widget__news_text">
                                        <p><a href="earnings-release-1h-2020.html">Earnings Releases 1H 2020</a></p>
                                    </div>
                                    <div class="footer-widget__news_date_box">
                                        <p>Nov 9, 2020</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="footer-widget__column footer-widget__contact wow fadeInUp" data-wow-delay="400ms">
                            <div class="footer-widget__title">
                                <h3>Contact</h3>
                            </div>
                            <div class="footer-widget_contact">
                                <p>CI Tower <br> Unit 401, 4th Floor,<br>Al Bateen Street,<br> Po Box 53314, Abu Dhabi, UAE</p>
                                <a href="mailto:info@ghitha.com">info@ghitha.com</a><br>
                                <div class="site-footer__social">
                                    <a href="https://www.facebook.com/"><i class="fab fa-facebook-square"></i></a>
                                    <a href="https://twitter.com/?lang=en"><i class="fab fa-twitter"></i></a>
                                    <a href="https://www.instagram.com/ghitha.holding/"><i class="fab fa-instagram"></i></a>
                                    <a href="https://www.linkedin.com/"><i class="fab fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <div class="site-footer_bottom">
            <div class="container">
                <div class="site-footer_bottom_copyright">
                    <p>Copyright @ 2022 Ghitha Holding - All rights reserved |
                        <small>Developed by
                            <a href="https://www.huckstergroup.com/">HucksterMENA</a></small>
                    </p>
                </div>
                <div class="site-footer_bottom_menu">
                    <ul class="list-unstyled">
                        <li><a href="privacy-policy.html">Privacy Policy</a></li>
                        <li><a href="terms-of-use.html">Terms of Use</a></li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
    <!-- /.page-wrapper -->


    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>


    <div class="side-menu__block">
        <div class="side-menu__block-overlay custom-cursor__overlay">
            <div class="cursor"></div>
            <div class="cursor-follower"></div>
        </div>
        <!-- /.side-menu__block-overlay -->
        <div class="side-menu__block-inner ">
            <div class="side-menu__top justify-content-end">
                <a href="#" class="side-menu__toggler side-menu__close-btn"><img src="<?php echo base_url(); ?>public_html/front_end/assets/images/shapes/close-1-1.png" alt=""></a>
            </div>
            <!-- /.side-menu__top -->

            <nav class="mobile-nav__container">
                <!-- content is loading via js -->
            </nav>

            <div class="side-menu__sep"></div>
            <!-- /.side-menu__sep -->

            <div class="side-menu__content">
                <p>
                    <a href="mailto:info@ghitha.com">info@ghitha.com</a> <br>
                </p>
                <div class="side-menu__social">
                    <a href="https://www.facebook.com/"><i class="fab fa-facebook-square"></i></a>
                    <a href="https://twitter.com/?lang=en"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.instagram.com/ghitha.holding/"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.linkedin.com/"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
        </div>
    </div>


    <script src="<?php echo base_url(); ?>public_html/front_end/assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>public_html/front_end/assets/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url(); ?>public_html/front_end/assets/js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url(); ?>public_html/front_end/assets/js/waypoints.min.js"></script>
    <script src="<?php echo base_url(); ?>public_html/front_end/assets/js/jquery.counterup.min.js"></script>
    <script src="<?php echo base_url(); ?>public_html/front_end/assets/js/TweenMax.min.js"></script>
    <script src="<?php echo base_url(); ?>public_html/front_end/assets/js/wow.js"></script>
    <script src="<?php echo base_url(); ?>public_html/front_end/assets/js/jquery.magnific-popup.min.js"></script>
    <script src="<?php echo base_url(); ?>public_html/front_end/assets/js/jquery.ajaxchimp.min.js"></script>
    <script src="<?php echo base_url(); ?>public_html/front_end/assets/js/swiper.min.js"></script>
    <script src="<?php echo base_url(); ?>public_html/front_end/assets/js/typed-2.0.11.js"></script>
    <script src="<?php echo base_url(); ?>public_html/front_end/assets/js/vegas.min.js"></script>
    <script src="<?php echo base_url(); ?>public_html/front_end/assets/js/jquery.validate.min.js"></script>
    <script src="<?php echo base_url(); ?>public_html/front_end/assets/js/bootstrap-select.min.js"></script>
    <script src="<?php echo base_url(); ?>public_html/front_end/assets/js/countdown.min.js"></script>
    <script src="<?php echo base_url(); ?>public_html/front_end/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="<?php echo base_url(); ?>public_html/front_end/assets/js/bootstrap-datepicker.min.js"></script>
    <script src="<?php echo base_url(); ?>public_html/front_end/assets/js/nouislider.min.js"></script>
    <script src="<?php echo base_url(); ?>public_html/front_end/assets/js/isotope.js"></script>
    <script src="<?php echo base_url(); ?>public_html/front_end/assets/js/jquery.bxslider.min.js"></script>
    <script src="<?php echo base_url(); ?>public_html/front_end/assets/js/appear.js"></script>

    <!-- template scripts -->
    <script src="<?php echo base_url(); ?>public_html/front_end/assets/js/theme.js"></script>
</body>


</html>