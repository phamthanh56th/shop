<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title(); ?></title>
    <link href="<?php echo bloginfo('template_directory');?>/css/font-awesome.css" rel="stylesheet">
    <link href="<?php echo bloginfo('template_directory');?>/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo bloginfo('template_directory');?>/css/jquery.smartmenus.bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_directory');?>/css/jquery.simpleLens.css">
    <link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_directory');?>/css/slick.css">
    <link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_directory');?>/css/nouislider.css">
    <link id="switcher" href="<?php echo bloginfo('template_directory');?>/css/theme-color/default-theme.css" rel="stylesheet">
    <link href="<?php echo bloginfo('template_directory');?>/css/sequence-theme.modern-slide-in.css" rel="stylesheet" media="all">
    <link href="<?php echo bloginfo('template_directory');?>/css/style.css" rel="stylesheet">
    <link href="<?php echo bloginfo('template_directory');?>/css/customsize.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<?php wp_head(); ?>
<body <?php echo body_class(''); ?>>
    <!-- wpf loader Two -->
   <!--  <div id="wpf-loader-two">
        <div class="wpf-loader-two-inner">
            <span>Loading</span>
        </div>
    </div> -->
    <!-- / wpf loader Two -->
    <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a>
    <!-- END SCROLL TOP BUTTON -->
    <!-- Start header section -->
    <header id="aa-header">
        <!-- start header top  -->
        <!-- <div class="aa-header-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="aa-header-top-area">
                            <div class="aa-header-top-left">
                                <div class="aa-language">
                                    <div class="dropdown">
                                        <a class="btn dropdown-toggle" href="#" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                            <img src="img/flag/english.jpg" alt="english flag">ENGLISH
                                            <span class="caret"></span>
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                            <li><a href="#"><img src="img/flag/french.jpg" alt="">FRENCH</a></li>
                                            <li><a href="#"><img src="img/flag/english.jpg" alt="">ENGLISH</a></li>
                                        </ul>
                                    </div>
                                </div>                                
                                <div class="aa-currency">
                                    <div class="dropdown">
                                        <a class="btn dropdown-toggle" href="#" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                            <i class="fa fa-usd"></i>USD
                                            <span class="caret"></span>
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                            <li><a href="#"><i class="fa fa-euro"></i>EURO</a></li>
                                            <li><a href="#"><i class="fa fa-jpy"></i>YEN</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="cellphone hidden-xs">
                                    <p><span class="fa fa-phone"></span>00-62-658-658</p>
                                </div>
                            </div>
                            <div class="aa-header-top-right">
                                <ul class="aa-head-top-nav-right">
                                    <li><a href="account.html">My Account</a></li>
                                    <li class="hidden-xs"><a href="wishlist.html">Wishlist</a></li>
                                    <li class="hidden-xs"><a href="cart.html">My Cart</a></li>
                                    <li class="hidden-xs"><a href="checkout.html">Checkout</a></li>
                                    <li><a href="" data-toggle="modal" data-target="#login-modal">Login</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- / header top  -->
        <!-- start header bottom  -->
        <div class="aa-header-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="aa-header-bottom-area">
                            <!-- logo  -->
                            <div class="aa-logo">
                                <!-- Text based logo -->
                                <a href="<?php echo esc_url(home_url('')); ?>">
                                    <span class="fa fa-shopping-cart"></span>
                                    <p>daily<strong>Shop</strong> <span>Your Shopping Partner</span></p>
                                </a>
                                <!-- img based logo -->
                                <!-- <a href="index.html"><img src="img/logo.jpg" alt="logo img"></a> -->
                            </div>
                            <!-- / logo  -->
                            <!-- cart box -->
                            <div class="aa-cartbox">
                                <a class="aa-cart-link" href="<?php echo WC_Cart::get_cart_url(); ?>">
                                    <span class="fa fa-shopping-basket"></span>
                                    <span class="aa-cart-title">SHOPPING CART</span>
                                    <span class="aa-cart-notify"></span>
                                </a>
                                <div class="aa-cartbox-summary">
                                    <ul>                                       
                                    </ul>
                                </div>
                            </div>
                            <!-- / cart box -->
                            <!-- search box -->
                            <div class="aa-search-box">
                                <form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url(home_url('')); ?>">
                                    <input type="text" name="s" id="s" placeholder="Search here ex. 'man' ">
                                    <button type="submit" id="searchsubmit"><span class="fa fa-search"></span></button>
                                </form>
                                <!-- <?php get_search_form(); ?> -->
                            </div>
                            <!-- / search box -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- / header bottom  -->
    </header>
    <div class="clear"></div>
    <!-- / header section -->
    <!-- menu -->
    <section id="menu">
        <div class="container">
            <div class="menu-area">
                <!-- Navbar -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="navbar-collapse collapse">
                        <!-- Left nav -->
                        <?php
							$args = array(
								'theme_location' => 'main-menu',
								'container' => '',
								'menu_id' => '',
								'menu_class' => 'nav navbar-nav',
							);
							wp_nav_menu( $args );
						?>
                    </div>
                    <!--/.nav-collapse -->
                </div>
            </div>
        </div>
    </section>
    <div class="clear"></div>
    <!-- / menu -->