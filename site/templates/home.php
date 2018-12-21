<!DOCTYPE html>
<html lang="zxx">

<head>

    <!-- metas -->
    <meta charset="utf-8">
    <meta name="author" content="ChitrakootWeb" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="keywords" content="HTML5 Template Fabrex" />
    <meta name="description" content="Fabrex - Business Multipurpose and Corporate Template" />

    <!-- title  -->
    <title>Fabrex - Business Multipurpose and Corporate Template</title>

    <!-- favicon -->
    <link rel="shortcut icon" href="<?=$config->urls->templates;?>img/logos/favicon.png">
    <link rel="apple-touch-icon" href="<?=$config->urls->templates;?>img/logos/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?=$config->urls->templates;?>img/logos/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?=$config->urls->templates;?>img/logos/apple-touch-icon-114x114.png">

    <!-- plugins -->
    <link rel="stylesheet" href="<?=$config->urls->templates;?>css/plugins.css" />

    <!-- revolution slider css -->
    <link rel="stylesheet" href="<?=$config->urls->templates;?>css/rev_slider/settings.css">
    <link rel="stylesheet" href="<?=$config->urls->templates;?>css/rev_slider/layers.css">
    <link rel="stylesheet" href="<?=$config->urls->templates;?>css/rev_slider/navigation.css">

    <!-- search css -->
    <link rel="stylesheet" href="<?=$config->urls->templates;?>search/search.css" />

    <!-- custom css -->
    <link href="<?=$config->urls->templates;?>css/styles-4.css" rel="stylesheet" id="colors">

</head>

<body>

    <!-- start page loading -->
    <div id="preloader">
        <div class="row loader">
            <div class="loader-icon"></div>
        </div>
    </div>
    <!-- end page loading -->

    <!-- start main-wrapper section -->
    <div class="main-wrapper">

        <!-- start header section -->
        <header>

            <div id="top-bar" class="top-bar-style2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9 col-xs-12">
                            <div class="top-bar-info">
                                <ul>
                                    <li><i class="fas fa-mobile-alt"></i>(+123) 456 7890</li>
                                    <li><i class="fas fa-envelope"></i>addyour@emailhere</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-3 xs-display-none">
                            <ul class="top-social-icon">
                                <li><a href="javascript:void(0)"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="fab fa-google-plus-g"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="navbar-default">

                <!-- Start Top Search -->
                <div class="top-search bg-black">
                    <div class="container">
                        <form class="search-form" action="search.html" method="GET" accept-charset="utf-8">
                            <div class="input-group">
                                <span class="input-group-addon cursor-pointer">
                                    <button class="search-form_submit fas fa-search font-size18 text-white" type="submit"></button>
                                </span>
                                <input type="text" class="search-form_input form-control" name="s" autocomplete="off" placeholder="Type & hit enter...">
                                <span class="input-group-addon close-search"><i class="fas fa-times font-size18 line-height-28 margin-5px-top"></i></span>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- End Top Search -->
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12 col-lg-12">
                            <div class="menu_area alt-font">
                                <nav class="navbar navbar-expand-lg navbar-light no-padding">

                                    <div class="navbar-header navbar-header-custom">
                                        <!-- Start Logo -->
                                        <a href="index.html" class="navbar-brand logo4"><img id="logo" src="<?=$config->urls->templates;?>img/logos/Logo-StudioPhi.png" alt="logo"></a>
                                        <!-- End Logo -->
                                    </div>

                                    <div class="navbar-toggler"></div>

                                    <!-- Menu Area -->
                                    <ul class="navbar-nav ml-auto" id="nav" style="display: none;">
                                        <li><a href="javascript:void(0)">Home</a></li>
                                        <li><a href="javascript:void(0)">Pages</a></li>
                                    </ul>
                                    <!-- End Menu Area -->

                                    <!-- Start Atribute Navigation -->
                                    <div class="attr-nav sm-no-margin sm-margin-70px-right xs-margin-65px-right">
                                        <ul>
                                            <li class="dropdown sm-margin-20px-right xs-margin-15px-right">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                    <i class="fas fa-shopping-cart"></i>
                                                    <span class="badge bg-theme">3</span>
                                                </a>
                                                <ul class="dropdown-menu cart-list">
                                                    <li>
                                                        <a href="#" class="photo"><img src="<?=$config->urls->templates;?>img/shop/cart-thumb01.jpg" class="cart-thumb" alt="" /></a>
                                                        <h6><a href="#">Delica omtantur </a></h6>
                                                        <p>2x - <span class="price">$99.99</span></p>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="photo"><img src="<?=$config->urls->templates;?>img/shop/cart-thumb02.jpg" class="cart-thumb" alt="" /></a>
                                                        <h6><a href="#">Omnes ocurreret</a></h6>
                                                        <p>1x - <span class="price">$33.33</span></p>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="photo"><img src="<?=$config->urls->templates;?>img/shop/cart-thumb03.jpg" class="cart-thumb" alt="" /></a>
                                                        <h6><a href="#">Agam facilisis</a></h6>
                                                        <p>2x - <span class="price">$99.99</span></p>
                                                    </li>
                                                    <li class="total bg-theme">
                                                        <span class="pull-left"><strong>Total</strong>: $233.31</span>
                                                        <a href="#" class="butn small btn-cart white"><span>View Cart</span></a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="search"><a href="javascript:void(0)"><i class="fas fa-search"></i></a></li>
                                        </ul>
                                    </div>
                                    <!-- End Atribute Navigation -->

                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </header>
        <!-- end header section -->

        <!-- Start banner Section -->
        <section class="parallax screen-height" data-overlay-dark="7" data-background="<?=$config->urls->templates;?>img/slider/slide24.jpg">
            <div class="absolute-middle-center z-index-1 width-100">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="text-center center-col width-80 xs-width-100">
                                <h1 class="text-white font-size50 md-font-size42 sm-font-size28 font-weight-700">We Provide Best Solution For Your Business</h1>
                                <p class="text-white width-80 xs-width-100 center-col font-size16 line-height-30 xs-font-size14 xs-line-height-26">Exhaustive technology of implementing multi purpose projects is putting your project successful. Exhaustive technology of implementing multi purpose projects is putting.</p>
                                <div class="margin-30px-top sm-margin-25px-top"><a href="javascript:void(0)" class="butn theme"><span>Lean More</span></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end banner Section -->

        <!-- start we work section -->
        <section>
            <div class="container">
                <div class="section-heading">
                  <?php $Sez = $pages->get("name=aree-di-attivita");?>
                    <h3><?=$Sez->title;?></h3><span><?=$Sez->SezioneSpan;?></span>
                    <p class="width-55 sm-width-75 xs-width-95"><?=$Sez->SezioneDescrizione;?></p>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-12 sm-margin-20px-bottom">
                      <?php foreach($Sez->children() as $Ser): ;?>
                        <div class="feature-box-01">
                            <i class="icon-<?=$Ser->ServizioIcona;?> font-size36 margin-20px-bottom"></i>
                            <h4 class="font-size18 margin-10px-bottom"><?=$Ser->title;?></h4>
                            <p class="font-size15 line-height-24"><?=$Ser->ServizioDescrizione;?></p></div>
                      <?php endforeach;?>
                    </div>

                </div>
            </div>
        </section>
        <!-- end we work section -->

        <!-- start feature section -->
        <section class="bg-very-light-gray">
            <div class="container">
                <div class="row margin-50px-bottom sm-margin-30px-bottom">

                    <div class="col-lg-6 col-md-12 sm-margin-30px-bottom">
                        <img src="<?=$config->urls->templates;?>img/content/feature-02.jpg" alt="" class="border-radius-5 box-shadow-primary" />
                    </div>

                    <div class="col-lg-6 col-md-12">

                        <div class="section-heading half left">
                            <h4>Analysis and Consulting</h4>
                        </div>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standardLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit.</p>

                        <a class="butn medium theme" href="javascript:void(0)"><span>Read more</span></a>

                    </div>
                </div>
                <div class="row">

                    <div class="col-lg-6 col-md-12 order-2 order-lg-1">

                        <div class="section-heading half left">
                            <h4>Technology and consultants</h4>
                        </div>

                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard</p>

                        <ul class="list-style-5 margin-20px-bottom">
                            <li>24 -Hours Emergency Services</li>
                            <li>No Travel Charges</li>
                            <li>Free Estimates</li>
                            <li>Quick Support</li>
                        </ul>
                        <a class="butn medium theme" href="javascript:void(0)"><span>Read more</span></a>

                    </div>
                    <div class="col-lg-6 col-md-12 order-1 order-lg-2 sm-margin-30px-bottom">
                        <img src="<?=$config->urls->templates;?>img/content/feature-03.jpg" alt="" class="border-radius-5 box-shadow-primary" />
                    </div>
                </div>
            </div>
        </section>
        <!-- end feature section -->

        <!-- start counter section -->
        <section class="parallax" data-overlay-dark="7" data-background="img/bg/bg5.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-6 col-lg-3 col-md-6 sm-margin-30px-bottom">
                        <div class="counter-box">
                            <h4 class="countup text-white display-block xs-text-center">1826</h4>
                            <div class="separator-line-horrizontal-medium-light3 bg-white margin-15px-tb xs-margin-10px-tb opacity5 center-col"></div>
                            <p class="font-size24 sm-font-size20 xs-font-size18 font-weight-600 text-white no-margin text-center">Satisfied Visitors</p>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 col-md-6 sm-margin-30px-bottom">
                        <div class="counter-box">
                            <h4 class="countup text-white display-block xs-text-center">875</h4>
                            <div class="separator-line-horrizontal-medium-light3 bg-white margin-15px-tb xs-margin-10px-tb opacity5 center-col"></div>
                            <p class="font-size24 sm-font-size20 xs-font-size18 font-weight-600 text-white no-margin text-center">Destinations</p>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="counter-box">
                            <h4 class="countup text-white display-block xs-text-center">1412</h4>
                            <div class="separator-line-horrizontal-medium-light3 bg-white margin-15px-tb xs-margin-10px-tb opacity5 center-col"></div>
                            <p class="font-size24 sm-font-size20 xs-font-size18 font-weight-600 text-white no-margin text-center">Tours</p>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="counter-box">
                            <h4 class="countup text-white display-block xs-text-center">100</h4>
                            <div class="separator-line-horrizontal-medium-light3 bg-white margin-15px-tb xs-margin-10px-tb opacity5 center-col"></div>
                            <p class="font-size24 sm-font-size20 xs-font-size18 font-weight-600 text-white no-margin text-center">Tour Types</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end counter section -->

        <!-- start we offer section -->
        <section>
            <div class="container">
                <div class="section-heading"><span>What We Offer</span>
                    <h3>We Provide Faster Service</h3>
                    <p class="width-55 sm-width-75 xs-width-95">Business consulting excepteur sint occaecat cupidatat consulting non proident, sunt in culpa qui officia deserunt laborum Market.</p>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-12 sm-margin-20px-bottom">
                        <div class="service-simple">
                            <div class="overflow-hidden">
                                <img alt="img" src="<?=$config->urls->templates;?>img/content/services/s-1.jpg" />
                            </div>
                            <div class="service-simple-inner">
                                <h4>Business Growth</h4>
                                <div class="separator-line-horrizontal-full bg-medium-gray margin-10px-top margin-20px-bottom"></div>
                                <p>Voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt reprehenderit.</p>
                                <a href="javascript:void(0)" class="butn theme small"><span>Learn More</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 sm-margin-20px-bottom">
                        <div class="service-simple">
                            <div class="overflow-hidden">
                                <img alt="img" src="<?=$config->urls->templates;?>img/content/services/s-2.jpg" />
                            </div>
                            <div class="service-simple-inner">
                                <h4>Financial Analysis</h4>
                                <div class="separator-line-horrizontal-full bg-medium-gray margin-10px-top margin-20px-bottom"></div>
                                <p>Voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt reprehenderit.</p>
                                <a href="javascript:void(0)" class="butn theme small"><span>Learn More</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="service-simple">
                            <div class="overflow-hidden">
                                <img alt="img" src="<?=$config->urls->templates;?>img/content/services/s-3.jpg" />
                            </div>
                            <div class="service-simple-inner">
                                <h4>Success Report</h4>
                                <div class="separator-line-horrizontal-full bg-medium-gray margin-10px-top margin-20px-bottom"></div>
                                <p>Voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt reprehenderit.</p>
                                <a href="javascript:void(0)" class="butn theme small"><span>Learn More</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- start we offer section -->

        <!-- start our mission section -->
        <section class="bg-very-light-gray">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12 sm-margin-30px-bottom">
                        <div class="section-heading half left">
                            <h4>Our Mission is to deliver true results for your Businesses.</h4></div>
                        <p class="line-height-26">Nemo enim enim voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dol quia dolor consectetur.</p>
                        <a href="javascript:void(0)" class="butn theme medium"><span>Read more</span></a>
                    </div>
                    <div class="col-lg-5 col-md-12 offset-lg-1 offset-md-0">

                        <div class="margin-70px-top sm-no-margin">
                            <div class="progress-text">
                                <div class="row">
                                    <div class="col-6">Business Strategy</div>
                                    <div class="col-6 text-right">18%</div>
                                </div>
                            </div>
                            <div class="custom-progress progress">
                                <div role="progressbar" aria-valuenow="18" aria-valuemin="0" aria-valuemax="100" style="width:18%" class="animated custom-bar progress-bar slideInLeft"></div>
                            </div>
                            <div class="progress-text">
                                <div class="row">
                                    <div class="col-6">Finance Consultancy</div>
                                    <div class="col-6 text-right">30%</div>
                                </div>
                            </div>
                            <div class="custom-progress progress">
                                <div role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:30%" class="animated custom-bar progress-bar slideInLeft"></div>
                            </div>
                            <div class="progress-text">
                                <div class="row">
                                    <div class="col-6">Investment Plan</div>
                                    <div class="col-6 text-right">50%</div>
                                </div>
                            </div>
                            <div class="custom-progress progress">
                                <div role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:50%" class="animated custom-bar progress-bar slideInLeft"></div>
                            </div>
                            <div class="progress-text">
                                <div class="row">
                                    <div class="col-6">Investment Banking</div>
                                    <div class="col-6 text-right">80%</div>
                                </div>
                            </div>
                            <div class="custom-progress progress sm-no-margin-bottom">
                                <div role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:80%" class="animated custom-bar progress-bar slideInLeft"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end our mission section -->

        <!-- start team section -->
        <section>
            <div class="container">
                <div class="section-heading">
                    <span>Team</span>
                    <h3>Meet Our Team</h3>
                </div>
                <div class="row">

                    <div class="col-lg-3 col-md-6 col-xs-12 sm-margin-20px-bottom text-center">
                        <div class="team-style3">
                            <div class="team-member-img">
                                <img class="img-responsive" src="<?=$config->urls->templates;?>img/team/teammember-01.jpg" alt="">
                                <div class="team-description">
                                    <div class="team-description-wrapper">

                                        <div class="team-description-content">
                                            <p class="about-me margin-10px-bottom font-size-12">Duis aute irure dolor in reprehenderit in voluptate velit esse</p>
                                            <div class="social-links">
                                                <a class="d-inline-block margin-10px-right" href="#"><i class="fab fa-facebook-f text-white font-size-16"></i></a>
                                                <a class="d-inline-block margin-10px-right" href="#"><i class="fab fa-twitter text-white font-size-16"></i></a>
                                                <a class="d-inline-block border-radius-100" href="#"><i class="fab fa-instagram text-white font-size-16"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-cover"></div>
                            </div>
                            <div class="text-center margin-20px-top xs-margin-15px-top">
                                <div class="text-extra-gray font-weight-600 font-size-12 alt-font">Jama Karle</div>
                                <div class="font-size14">Co-Founder / Design</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-xs-12 sm-margin-20px-bottom text-center">
                        <div class="team-style3">
                            <div class="team-member-img">
                                <img class="img-responsive" src="<?=$config->urls->templates;?>img/team/teammember-02.jpg" alt="">
                                <div class="team-description">
                                    <div class="team-description-wrapper">

                                        <div class="team-description-content">
                                            <p class="about-me margin-10px-bottom font-size-12">Duis aute irure dolor in reprehenderit in voluptate velit esse</p>
                                            <div class="social-links">
                                                <a class="d-inline-block margin-10px-right" href="#"><i class="fab fa-facebook-f text-white font-size-16"></i></a>
                                                <a class="d-inline-block margin-10px-right" href="#"><i class="fab fa-twitter text-white font-size-16"></i></a>
                                                <a class="d-inline-block border-radius-100" href="#"><i class="fab fa-instagram text-white font-size-16"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-cover"></div>
                            </div>
                            <div class="text-center margin-20px-top xs-margin-15px-top">
                                <div class="text-extra-gray font-weight-600 font-size-12 alt-font">Jama Karle</div>
                                <div class="font-size14">Co-Founder / Design</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-xs-12 xs-margin-20px-bottom text-center">
                        <div class="team-style3">
                            <div class="team-member-img">
                                <img class="img-responsive" src="<?=$config->urls->templates;?>img/team/teammember-03.jpg" alt="">
                                <div class="team-description">
                                    <div class="team-description-wrapper">

                                        <div class="team-description-content">
                                            <p class="about-me margin-10px-bottom font-size-12">Duis aute irure dolor in reprehenderit in voluptate velit esse</p>
                                            <div class="social-links">
                                                <a class="d-inline-block margin-10px-right" href="#"><i class="fab fa-facebook-f text-white font-size-16"></i></a>
                                                <a class="d-inline-block margin-10px-right" href="#"><i class="fab fa-twitter text-white font-size-16"></i></a>
                                                <a class="d-inline-block border-radius-100" href="#"><i class="fab fa-instagram text-white font-size-16"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-cover"></div>
                            </div>
                            <div class="text-center margin-20px-top xs-margin-15px-top">
                                <div class="text-extra-gray font-weight-600 font-size-12 alt-font">Jama Karle</div>
                                <div class="font-size14">Co-Founder / Design</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-xs-12 text-center">
                        <div class="team-style3">
                            <div class="team-member-img">
                                <img class="img-responsive" src="<?=$config->urls->templates;?>img/team/teammember-04.jpg" alt="">
                                <div class="team-description">
                                    <div class="team-description-wrapper">

                                        <div class="team-description-content">
                                            <p class="about-me margin-10px-bottom font-size-12">Duis aute irure dolor in reprehenderit in voluptate velit esse</p>
                                            <div class="social-links">
                                                <a class="d-inline-block margin-10px-right" href="#"><i class="fab fa-facebook-f text-white font-size-16"></i></a>
                                                <a class="d-inline-block margin-10px-right" href="#"><i class="fab fa-twitter text-white font-size-16"></i></a>
                                                <a class="d-inline-block border-radius-100" href="#"><i class="fab fa-instagram text-white font-size-16"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-cover"></div>
                            </div>
                            <div class="text-center margin-20px-top xs-margin-15px-top">
                                <div class="text-extra-gray font-weight-600 font-size-12 alt-font">Jama Karle</div>
                                <div class="font-size14">Co-Founder / Design</div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- end team section -->

        <!-- start subscribe section -->
        <section class="parallax" data-overlay-dark="6" data-background="img/bg/bg2.jpg">
            <div class="container">
                <div class="section-heading white">
                    <span>News Letter</span>
                    <h3>Stay informed</h3>
                    <p class="width-55 sm-width-75 xs-width-95">Business consulting excepteur sint occaecat cupidatat consulting non proident, sunt in culpa qui officia deserunt laborum Market.</p>
                </div>
                <div class="text-center">
                    <form action="#" class="newsletter-form method=post">
                        <input name="email" placeholder="Enter Your Email adress" type="email">
                        <button type="submit">Subscribe</button>
                    </form>
                </div>
            </div>
        </section>
        <!-- end subscribe section -->

        <!-- start blog section -->
        <section>
            <div class="container">
                <div class="section-heading">
                    <span>News</span>
                    <h3>Latest Consulting News</h3>
                </div>
                <div class="row">
                    <div class="owl-carousel owl-theme" id="blog-grid">
                        <div class="blog-grid-simple">
                            <h4><a href="javascript:void(0)">Marketing High Quality Services</a></h4>
                            <p>abore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            <div class="blog-grid-simple-content">
                                <div class="row">
                                    <div class="blog-grid-simple-date">
                                        <div class="width-50 float-left"><i class="fas fa-calendar-alt"></i>
                                            <h5>June 11, 2018</h5></div>
                                        <div class="width-50 float-right text-right"><a href="javascript:void(0)">Read Article</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="blog-grid-simple">
                            <h4><a href="javascript:void(0)">Investment High Quality Services</a></h4>
                            <p>abore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            <div class="blog-grid-simple-content">
                                <div class="row">
                                    <div class="blog-grid-simple-date">
                                        <div class="width-50 float-left"><i class="fas fa-calendar-alt"></i>
                                            <h5>May 10, 2018</h5></div>
                                        <div class="width-50 float-right text-right"><a href="javascript:void(0)">Read Article</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="blog-grid-simple">
                            <h4><a href="javascript:void(0)">Financial High Quality Services</a></h4>
                            <p>abore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            <div class="blog-grid-simple-content">
                                <div class="row">
                                    <div class="blog-grid-simple-date">
                                        <div class="width-50 float-left"><i class="fas fa-calendar-alt"></i>
                                            <h5>Feb 20, 2018</h5></div>
                                        <div class="width-50 float-right text-right"><a href="javascript:void(0)">Read Article</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="blog-grid-simple">
                            <h4><a href="javascript:void(0)">Business High Quality Services</a></h4>
                            <p>abore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            <div class="blog-grid-simple-content">
                                <div class="row">
                                    <div class="blog-grid-simple-date">
                                        <div class="width-50 float-left"><i class="fas fa-calendar-alt"></i>
                                            <h5>Jan 24, 2018</h5></div>
                                        <div class="width-50 float-right text-right"><a href="javascript:void(0)">Read Article</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end blog section -->

        <!-- start clients section -->
        <div class="section-clients bg-light-gray">
            <div class="container">
                <div class="owl-carousel owl-theme clients" id="clients">
                    <div class="item"><img alt="partner-image" src="<?=$config->urls->templates;?>img/partners/client-01.png"></div>
                    <div class="item"><img alt="partner-image" src="<?=$config->urls->templates;?>img/partners/client-02.png"></div>
                    <div class="item"><img alt="partner-image" src="<?=$config->urls->templates;?>img/partners/client-03.png"></div>
                    <div class="item"><img alt="partner-image" src="<?=$config->urls->templates;?>img/partners/client-04.png"></div>
                    <div class="item"><img alt="partner-image" src="<?=$config->urls->templates;?>img/partners/client-05.png"></div>
                    <div class="item"><img alt="partner-image" src="<?=$config->urls->templates;?>img/partners/client-06.png"></div>
                </div>
            </div>
        </div>
        <!-- end clients section -->

        <!-- start footer section -->
        <footer class="border-top border-color-light-black bg-light-gray">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 col-md-6 sm-margin-30px-bottom">

                        <img alt="footer-logo" src="<?=$config->urls->templates;?>img/logos/Logo-StudioPhi.png">
                        <p class="margin-20px-top text-default-color">Nemo enim enim voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequ magni dolores eos qui ratione voluptatem.</p>
                        <div class="margin-25px-top footer-social-icons2">
                            <ul>
                                <li><a href="javascript:void(0)"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="fab fa-google-plus-g"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>

                    </div>

                    <div class="col-lg-4 col-md-6 sm-margin-30px-bottom">
                        <h3 class="footer-title-style6">Quick Links</h3>
                        <div class="row">
                            <div class="col-md-6 no-padding-right xs-padding-15px-right">
                                <ul class="footer-list-style3 xs-margin-5px-bottom">
                                    <li><a href="javascript:void(0)">Financial Planning</a></li>
                                    <li><a href="javascript:void(0)">Software &amp; Research</a></li>
                                    <li><a href="javascript:void(0)">Market Research</a></li>
                                    <li><a href="javascript:void(0)">Sales Services</a></li>
                                    <li><a href="javascript:void(0)">Market Analysis</a></li>
                                </ul>
                            </div>
                            <div class="col-md-6 no-padding-right xs-padding-15px-right">
                                <ul class="footer-list-style3">
                                    <li><a href="javascript:void(0)">Financial Planning</a></li>
                                    <li><a href="javascript:void(0)">Software &amp; Research</a></li>
                                    <li><a href="javascript:void(0)">Market Research</a></li>
                                    <li><a href="javascript:void(0)">Sales Services</a></li>
                                    <li><a href="javascript:void(0)">Market Analysis</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 offset-lg-1">
                        <h3 class="footer-title-style6">Get in Touch</h3>
                        <ul class="footer-list-style3">
                            <li>
                                <span class="d-inline-block vertical-align-top font-size18"><i class="fas fa-map-marker-alt"></i></span>
                                <span class="d-inline-block width-85 vertical-align-top padding-10px-left">74 Guild Street 542B, Great North Town 51 MT.</span>
                            </li>
                            <li>
                                <span class="d-inline-block vertical-align-top font-size18"><i class="fas fa-mobile-alt"></i></span>
                                <span class="d-inline-block width-85 vertical-align-top padding-10px-left">(+44) 123 456 789</span>
                            </li>
                            <li>
                                <span class="d-inline-block vertical-align-top font-size18"><i class="far fa-envelope"></i></span>
                                <span class="d-inline-block width-85 vertical-align-top padding-10px-left">addyour@emailhere</span>
                            </li>
                            <li>
                                <span class="d-inline-block vertical-align-top font-size18"><i class="fas fa-globe"></i></span>
                                <span class="d-inline-block width-85 vertical-align-top padding-10px-left">www.yourwebsitehere.com</span>
                            </li>
                        </ul>
                    </div>

                </div>

            </div>
            <div class="footer-bar xs-font-size13">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 text-left xs-text-center xs-margin-5px-bottom">
                            <p>&copy; Copyright fabrex 2018. All Rights Reserved.</p>
                        </div>
                        <div class="col-md-6 text-right xs-text-center">
                            Design and Developed by: Chitrakootweb
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end footer section -->

    </div>
    <!-- end main-wrapper section -->

    <!-- start scroll to top -->
    <a href="javascript:void(0)" class="scroll-to-top"><i class="fas fa-angle-up" aria-hidden="true"></i></a>
    <!-- end scroll to top -->

    <!-- all js include start -->

    <!-- jQuery -->
    <script src="<?=$config->urls->templates;?>js/jquery.min.js"></script>

    <!-- modernizr js -->
    <script src="<?=$config->urls->templates;?>js/modernizr.js"></script>

    <!-- bootstrap -->
    <script src="<?=$config->urls->templates;?>js/bootstrap.min.js"></script>

    <!-- navigation -->
    <script src="<?=$config->urls->templates;?>js/nav-menu.js"></script>

    <!-- serch -->
    <script src="<?=$config->urls->templates;?>search/search.js"></script>

    <!-- owl carousel -->
    <script src="<?=$config->urls->templates;?>js/owl.carousel.js"></script>

    <!-- jquery.counterup.min -->
    <script src="<?=$config->urls->templates;?>js/jquery.counterup.min.js"></script>

    <!-- stellar js -->
    <script src="<?=$config->urls->templates;?>js/jquery.stellar.min.js"></script>

    <!-- waypoints js -->
    <script src="<?=$config->urls->templates;?>js/waypoints.min.js"></script>

    <!-- tab js -->
    <script src="<?=$config->urls->templates;?>js/tabs.min.js"></script>

    <!-- jquery.magnific-popup js -->
    <script src="<?=$config->urls->templates;?>js/jquery.magnific-popup.min.js"></script>

    <!-- isotope.pkgd.min js -->
    <script src="<?=$config->urls->templates;?>js/isotope.pkgd.min.js"></script>

    <!-- revolution slider js files start -->
    <script src="<?=$config->urls->templates;?>js/rev_slider/jquery.themepunch.tools.min.js"></script>
    <script src="<?=$config->urls->templates;?>js/rev_slider/jquery.themepunch.revolution.min.js"></script>
    <script src="<?=$config->urls->templates;?>js/rev_slider/extensions/revolution.extension.actions.min.js"></script>
    <script src="<?=$config->urls->templates;?>js/rev_slider/extensions/revolution.extension.carousel.min.js"></script>
    <script src="<?=$config->urls->templates;?>js/rev_slider/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="<?=$config->urls->templates;?>js/rev_slider/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="<?=$config->urls->templates;?>js/rev_slider/extensions/revolution.extension.migration.min.js"></script>
    <script src="<?=$config->urls->templates;?>js/rev_slider/extensions/revolution.extension.navigation.min.js"></script>
    <script src="<?=$config->urls->templates;?>js/rev_slider/extensions/revolution.extension.parallax.min.js"></script>
    <script src="<?=$config->urls->templates;?>js/rev_slider/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="<?=$config->urls->templates;?>js/rev_slider/extensions/revolution.extension.video.min.js"></script>
    <!-- revolution slider js files end -->

    <!-- map js -->
    <script src="<?=$config->urls->templates;?>js/map.js"></script>

    <!-- custom scripts -->
    <script src="<?=$config->urls->templates;?>js/main.js"></script>

    <!-- contact form scripts -->
    <script src="js/mailform/jquery.form.min.js"></script>
    <script src="js/mailform/jquery.rd-mailform.min.c.js"></script>

    <!-- all js include end -->

</body>

</html>
