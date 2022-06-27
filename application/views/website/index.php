<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home || Ghitha</title>
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url(); ?>public_html/front_end/assets/images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url(); ?>public_html/front_end/assets/images/favicon-ghitha-logo.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url(); ?>public_html/front_end/assets/images/favicon-ghitha-logo.png">
    <link rel="manifest" href="<?php echo base_url(); ?>public_html/front_end/assets/images/favicons/site.webmanifest">

    <!-- Fonts-->
    <!-- <link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&amp;display=swap" rel="stylesheet"> -->

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
    <link rel="stylesheet" href="<?php echo base_url(); ?>public_html/front_end/assets/css/agrikol_iconl.css">
    <!-- Template styles -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>public_html/front_end/assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public_html/front_end/assets/css/responsive.css">

</head>

<body>

    <!-- <div class="preloader">
        <img src="assets/images/loader.png" class="preloader__image" alt="">
    </div> -->
    <!-- /.preloader -->

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

            <div class="topbar-two">
                <div class="">
                    <marquee behavior="" direction="left">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                         Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a 
                         galley of type and scrambled it to make a type specimen book.</marquee>
                </div>
            </div>

            <header class="main-nav__header-one">
                <!-- <div class="topbar_bg" style="background-image: url(assets/images/shapes/header-bg.png)"></div> -->
                <nav class="header-navigation stricky">
                    <div class="container clearfix">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="main-nav__left">
                            <a href="#" class="side-menu__toggler">
                                <i class="fa fa-bars"></i>
                            </a>
                            <a href="<?php echo base_url(); ?>public_html/front_end/index.html" class="main-nav__logo">
                                <img src="<?php echo base_url(); ?>public_html/front_end/assets/images/resources/ghitha-logo.png" class="main-logo" alt="Ghitha" />
                            </a>
                        </div>

                        <!-- /.navbar-collapse -->

                        <div class="main-nav__right">
                            <div class="main-nav__main-navigation">
                                <ul class=" main-nav__navigation-box">
                                    <li class="current">
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
                                    <li class="dropdown">
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

        <!-- Banner Section -->
        <section class="banner-section banner-one">
            <div class="image-layer">
                <video class="bg-video" preload="auto" autoplay loop muted playsinline data-object-fit="cover">
                    <source src="<?php echo $banner_file_url; ?>" type="video/mp4">
                   <!--  <source src="<?php echo base_url(); ?>public_html/front_end/assets/video/video.webm" type="video/webm">     -->                                
                </video>
            </div>
            <!-- <div class="banner-carousel owl-theme owl-carousel"> -->
                <!-- Slide Item -->
                <!-- <div class="slide-item"> -->
                    <!--<div class="image-layer" style="background-image: url(assets/images/highness-sheikh-khalifa-bin-zayed-al-nahayan-1.jpg);"></div>-->
                    <!-- <div class="auto-container">
                        <div class="content-box">
                            <div class="content">
                                <div class="inner">
                                    <div class="sub-title">Empowering valuable contributions</div>
                                    <h1>LEADERS IN<br> TRADING & DISTRIBUTION</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!-- Slide Item -->
                <!-- <div class="slide-item"> -->
                    <!--<div class="image-layer" style="background-image: url(assets/images/highness-sheikh-khalifa-bin-zayed-al-nahayan-1.jpg);"></div>-->
                    <!-- <div class="auto-container">
                        <div class="content-box">
                            <div class="content">
                                <div class="inner">
                                    <div class="sub-title">Empowering valuable contributions</div>
                                    <h1>An established<br> quality standards</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                 <!--Slide Item -->
                <!-- <div class="slide-item"> -->
                    <!--<div class="image-layer" style="background-image: url(assets/images/highness-sheikh-khalifa-bin-zayed-al-nahayan-1.jpg);"></div>-->
                    <!-- <div class="auto-container">
                        <div class="content-box">
                            <div class="content">
                                <div class="inner">
                                    <div class="sub-title">Empowering valuable contributions</div>
                                    <h1>sustainability, innovation, <br>and economic diversification</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
        </section>
        <!--End Banner Section -->



        <section class="about_one">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="about1_img">
                            <div class="about1_shape_1"></div>
                            <img class="wow fadeInUp" src="<?php echo base_url(); ?>public_html/front_end/assets/images/about/about-1-img-1.jpg" alt="About-Img">

                            <div class="about_img_2 wow fadeInUp">
                                <img src="<?php echo base_url(); ?>public_html/front_end/assets/images/about/about-1-img-2.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="block-title text-left wow fadeInUp">
                            <p>About Ghitha</p>
                            <h3>Eminent Trading and Distribution</h3>
                            <div class="leaf">
                                <img src="<?php echo base_url(); ?>public_html/front_end/assets/images/resources/leaf.png" alt="">
                            </div>
                        </div>
                        <div class="about_content">
                            <div class="text wow fadeInUp">
                                <p>Ghitha Holding is an eminent trading and distribution firm operating as a retail subsidiary under IHC Abu Dhabi. Our specialization ranges from food to non-food produce and provides boundless services including importing,
                                    trading, wrapping, storage, and more.</p>
                            </div>
                            <div class="about1_icon_wrap">
                                <div class="about1_icon_single wow fadeInUp">
                                    <div class="about1_icon">
                                        <span class="icon-harvest"></span>
                                    </div>
                                    <p>Importing, Trading, Storage</p>
                                </div>
                                <div class="about1_icon_single wow fadeInUp" data-wow-delay="200ms">
                                    <div class="about1_icon">
                                        <span class="icon-temperature"></span>
                                    </div>
                                    <p>Food safety and hygiene</p>
                                </div>
                            </div>
                            <div class="bottom_text wow fadeInUp" data-wow-delay="250ms">
                                <p> We prioritize time and quality every step of the way, to assure our customers of the best products.</p>
                            </div>
                            <div class="about1__button-block wow fadeInUp" data-wow-delay="300ms">
                                <a href="<?php echo base_url(); ?>public_html/front_end/about.html" class="thm-btn about_one__btn">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="service_one">
            <div class="container">
                <div class="block-title text-center">
                    <p class="wow fadeInUp">What we do</p>
                    <h3 class="wow fadeInUp" data-wow-delay="100ms">Services We Offer</h3>
                    <div class="leaf wow fadeInUp" data-wow-delay="150ms">
                        <img src="<?php echo base_url(); ?>public_html/front_end/assets/images/resources/leaf.png" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="service_1_single wow fadeInUp">
                            <div class="content">
                                <h3>Food<br>Items</h3>
                                <p>With a perspective of good Health and Hygiene, Ghitha offers..</p>
                            </div>
                            <div class="service_1_img">
                                <img src="<?php echo base_url(); ?>public_html/front_end/assets/images/service/service-1-img-2.jpg" alt="Service Image">
                                <div class="hover_box">
                                    <a href="<?php echo base_url(); ?>public_html/front_end/food-items.html"><span class="icon-left-arrow"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="service_1_single wow fadeInUp" data-wow-delay="300ms">
                            <div class="content">
                                <h3>Non-Food<br>Items</h3>
                                <p>Ghitha aims to make your lives more comfortable and...</p>
                            </div>
                            <div class="service_1_img">
                                <img src="<?php echo base_url(); ?>public_html/front_end/assets/images/service/non-food-items.png" alt="Service Image">
                                <div class="hover_box">
                                    <a href="<?php echo base_url(); ?>public_html/front_end/non-food-items.html"><span class="icon-left-arrow"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="service_1_single wow fadeInUp" data-wow-delay="600ms">
                            <div class="content">
                                <h3>Importation &amp; <br>Warehousing</h3>
                                <p>Our Warehouses comply with all safety, health and...</p>
                            </div>
                            <div class="service_1_img">
                                <img src="assets/images/service/logistics.jpg" alt="Service Image">
                                <div class="hover_box">
                                    <a href="<?php echo base_url(); ?>public_html/front_end/importation-and-warehousing.html"><span class="icon-left-arrow"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="service_1_single wow fadeInUp" data-wow-delay="900ms">
                            <div class="content">
                                <h3>Logistics<br>Department</h3>
                                <p>Being committed to the Quality Services, our logistics...</p>
                            </div>
                            <div class="service_1_img">
                                <img src="assets/images/service/logistics1.jpg" alt="Service Image">
                                <div class="hover_box">
                                    <a href="<?php echo base_url(); ?>public_html/front_end/logistics.html"><span class="icon-left-arrow"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="featured-one">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 wow slideInLeft" data-wow-delay="100ms">
                        <div class="single_featured_box">
                            <img src="assets/images/resources/featured-leaf.png" alt=""><span>We Source Best
                                Products</span><img src="assets/images/resources/featured-leaf.png" alt="">
                        </div>
                    </div>
                    <div class="col-xl-6 wow slideInRight" data-wow-delay="100ms">
                        <div class="single_featured_box">
                            <img src="assets/images/resources/featured-leaf.png" alt=""><span>Listed on the ADX second market</span><img src="assets/images/resources/featured-leaf.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="video-one" style="background-image:url(assets/images/resources/video-bg-1.jpg);">
            <div class="container text-center">
                <!-- <a href="https://www.youtube.com/watch?v=Vagc5qqm1_o" class="video-one__btn video-popup"><i class="fa fa-play"></i></a> -->
                <!--  -->
                <p>The new strategic direction</p>
                <h3>Largest in the regional<br>food trading sector</h3>

            </div>
        </section>

        <section class="blog-one">
            <div class="container">
                <div class="block-title text-center">
                    <p>from the blog</p>
                    <h3>News & Articles</h3>
                    <div class="leaf">
                        <img src="assets/images/resources/leaf.png" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-4">
                        <div class="blog_one_single wow fadeInUp" data-wow-delay="300ms">
                            <div class="blog_one_image">
                                <div class="blog_image">
                                    <img src="assets/images/blog/6.jpg" alt="Blog One Image">
                                    <div class="blog_one_date_box">
                                        <p>Mar 21, 2021</p>
                                    </div>
                                </div>
                                <div class="blog-one__content">
                                    <!-- <ul class="list-unstyled blog-one__meta">
                                        <li><a href=""><i class="far fa-user-circle"></i> Admin</a></li>
                                        <li><a href=""><i class="far fa-comments"></i> 2 Comments</a>
                                        </li>
                                    </ul> -->
                                    <h3><a href="<?php echo base_url(); ?>public_html/front_end/investors-need-to-keep-an-eye-on-abu-dhabis-international-holding-co-and-its-subsidiaries.html">Investors need to keep an eye on Abu Dhabi's International Holding Co. and its subsidiaries</a></h3>
                                    <div class="blog_one_text">
                                        <p>Its Zee Stores has picked up a good buy and that should rub off on numbers The UAE market experienced much turbulence in 2020… and</p>
                                    </div>
                                    <div class="read_more_btn">
                                        <a href="<?php echo base_url(); ?>public_html/front_end/investors-need-to-keep-an-eye-on-abu-dhabis-international-holding-co-and-its-subsidiaries.html"><i class="fa fa-angle-right"></i>Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <div class="blog_one_single wow fadeInUp" data-wow-delay="600ms">
                            <div class="blog_one_image">
                                <div class="blog_image">
                                    <img src="assets/images/blog/oxford-nanopore-300x217.jpg" alt="Blog One Image">
                                    <div class="blog_one_date_box">
                                        <p>Nov 9, 2020</p>
                                    </div>
                                </div>
                                <div class="blog-one__content">
                                    <!-- <ul class="list-unstyled blog-one__meta">
                                        <li><a href=""><i class="far fa-user-circle"></i> Admin</a></li>
                                        <li><a href=""><i class="far fa-comments"></i> 2 Comments</a>
                                        </li>
                                    </ul> -->
                                    <h3><a href="<?php echo base_url(); ?>public_html/front_end/abu-dhabis-ihc-invests-51m-in-uks-oxford-nanopore-technologies.html">Abu Dhabi's IHC invests $51m in UK's Oxford Nanopore Technologies</a></h3>
                                    <div class="blog_one_text">
                                        <p>Abu Dhabi's International Holdings Company invested £39 million ($51m) in Oxford Nanopore Technologies, a UK based firm that specialises in DNA sequencing technology. The latest</p>
                                    </div>
                                    <div class="read_more_btn">
                                        <a href="<?php echo base_url(); ?>public_html/front_end/abu-dhabis-ihc-invests-51m-in-uks-oxford-nanopore-technologies.html"><i class="fa fa-angle-right"></i>Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <div class="blog_one_single wow fadeInUp" data-wow-delay="900ms">
                            <div class="blog_one_image">
                                <div class="blog_image">
                                    <img src="assets/images/blog/businessman-analyzing-company-financial-report-balance-with-digital-augmented-reality-graphics_34141-379-300x169.jpg" alt="Blog One Image">
                                    <div class="blog_one_date_box">
                                        <p>Nov 9, 2020</p>
                                    </div>
                                </div>
                                <div class="blog-one__content">
                                    <!-- <ul class="list-unstyled blog-one__meta">
                                        <li><a href=""><i class="far fa-user-circle"></i> Admin</a></li>
                                        <li><a href=""><i class="far fa-comments"></i> 2 Comments</a>
                                        </li>
                                    </ul> -->
                                    <h3><a href="<?php echo base_url(); ?>public_html/front_end/earnings-release-1h-2020.html">Earnings Releases 1H 2020</a></h3>
                                    <div class="blog_one_text">
                                        <p>International Holding Company (IHC) reports strong growth in net profit to AED 814 million for the first half of 2020 • Total assets grew AED</p>
                                    </div>
                                    <div class="read_more_btn">
                                        <a href="<?php echo base_url(); ?>public_html/front_end/abu-dhabis-ihc-invests-51m-in-uks-oxford-nanopore-technologies.html"><i class="fa fa-angle-right"></i>Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="cta-one" style="background-image: url(assets/images/resources/cta_one_bg-1.jpg)">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="cta_one_content">
                            <h1>Provide you the Highest Quality products<br>that Meets your Expectation</h1>
                            <p>HACCP and international standards of excellence</p>
                            <div class="cta_one__button-block">
                                <a href="<?php echo base_url(); ?>public_html/front_end/food-items.html" class="thm-btn cta_one__btn">Discover More</a>
                            </div>
                        </div>
                    </div>
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
                                <div class="footer-widget__title">
                                    <br>
                                    <h3>subscribe our newsletter</h3>
                                </div>
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
                                <li><a href="<?php echo base_url(); ?>public_html/front_end/about.html">About Us</a></li>
                                <li><a href="<?php echo base_url(); ?>public_html/front_end/message-from-the-chairman-and-ceo.html">Chairman & CEO</a></li>
                                <!-- <li><a href="our-team.html">Our Team</a></li> -->
                                <li><a href="<?php echo base_url(); ?>public_html/front_end/news.html">News & Media</a></li>
                                <li><a href="<?php echo base_url(); ?>public_html/front_end/contact.html">Contact</a></li>
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
                                        <img src="assets/images/resources/footer-1-img-1.jpg" alt="">
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
                                        <img src="assets/images/resources/footer-1-img-2.jpg" alt="">
                                    </div>
                                    <div class="footer-widget__news_text">
                                        <p><a href="<?php echo base_url(); ?>public_html/front_end/earnings-release-1h-2020.html">Earnings Releases 1H 2020</a></p>
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
                                <!-- <a href="tel:666-888-0000">666 888 0000</a> -->
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
                        <li><a href="<?php echo base_url(); ?>public_html/front_end/privacy-policy.html">Privacy Policy</a></li>
                        <li><a href="<?php echo base_url(); ?>public_html/front_end/terms-of-use.html">Terms of Use</a></li>
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
                <a href="#" class="side-menu__toggler side-menu__close-btn"><img src="assets/images/shapes/close-1-1.png" alt=""></a>
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
    <script src="<?php echo base_url(); ?>public_html/front_end/assets/js/appear.js"></script>


    <!-- template scripts -->
    <script src="<?php echo base_url(); ?>public_html/front_end/assets/js/theme.js"></script>


</body>

</html>
