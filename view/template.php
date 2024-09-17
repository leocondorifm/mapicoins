<?php 
    session_start();
   
    $rutas = array();
    if(isset($_GET["ruta"])){
        $rutas = explode("/", $_GET["ruta"]);
        $ruta = $rutas[0];
    }else{
        $ruta = "start";
    }
    $data = parse_ini_file('./config.ini');

    if($_SERVER['HTTP_HOST']=="localhost"){
        $ruta_api = $data["routedev"];
    }else{
        $ruta_api = $data["route"];
    }
?>

<!DOCTYPE html>
<html lang="zxx">
    <head>
        <!-- meta tag -->
        <meta charset="utf-8" />
        <title>MapiCoins - Home</title>
        <meta name="description" content="" />
        <!-- responsive tag -->
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!-- favicon -->
        <link rel="apple-touch-icon" href="view/assets/images/fav.png" />
        <link rel="shortcut icon" type="image/x-icon" href="view/assets/images/fav.png" />
        <!-- Bootstrap v5.2.0-beta1 css -->
        <link rel="stylesheet" type="text/css" href="view/assets/css/bootstrap.min.css" />
        <!-- animate css -->
        <link rel="stylesheet" type="text/css" href="view/assets/css/animate.css" />
        <!-- magnific css -->
        <link rel="stylesheet" type="text/css" href="view/assets/css/magnific-popup.css" />
        <!-- owl.carousel css -->
        <link rel="stylesheet" type="text/css" href="view/assets/css/owl.carousel.css" />
        <!-- off canvas css -->
        <link rel="stylesheet" type="text/css" href="view/assets/css/off-canvas.css" />
        <!-- flaticon css  -->
        <link rel="stylesheet" type="text/css" href="view/assets/css/ico-moon-fonts.css" />
        <!-- font awesome icon css -->
        <link rel="stylesheet" type="text/css" href="view/assets/css/all.min.css">
        <!-- spacing css -->
        <link rel="stylesheet" type="text/css" href="view/assets/css/sc-spacing.css" />
        <!-- style css -->
        <link rel="stylesheet" type="text/css" href="view/assets/css/style.css" />
        <!-- responsive css -->
        <link rel="stylesheet" type="text/css" href="view/assets/css/responsive.css" />
    </head>
    <body>
        <!--Preloader area start here-->
        <div class="loader_first">
            <div class="circular-spinner"></div>
        </div>
        <!--Preloader area End here-->

        <!--Header Start-->
        <header id="gamfi-header" class="gamfi-header-section transparent-header">
            <div class="menu-area menu-sticky">
                <div class="container">
                    <div class="heaader-inner-area d-flex justify-content-between align-items-center">
                        <div class="gamfi-logo-area d-flex justify-content-between align-items-center">
                            <div class="logo">
                                <a href="index.html"><img src="view/assets/images/home/mapicoins-bc.png" width="159px" height="30px" alt="logo" /></a>
                            </div>
                            <div class="header-menu">
                                <ul class="nav-menu">
                                <li><a href="index.html">Home</a>
                                    <ul class="sub-menu">
                                        <li><a href="index.html">Home 1</a></li>
                                        <li><a href="index2.html">Home 2</a></li>
                                        <li><a href="index3.html">Home 3</a></li>
                                        <li><a href="index4.html">Home 4</a></li>
                                    </ul>
                                </li>
                                <li><a href="project.html">Projects</a>
                                    <ul class="sub-menu">
                                        <li><a href="project-clasic.html">Projects Clasic 1</a></li>
                                        <li><a href="project-clasic-2.html">Projects Clasic 2</a></li>
                                        <li><a href="project.html">Projects List</a></li>
                                        <li><a href="explore.html">Projects Grid</a></li>
                                        <li><a href="calendar.html">Project Calendar</a></li>
                                        <li><a href="project-details.html">Project Details 1</a></li>
                                        <li><a href="project_details2.html">Project Details 2</a></li>
                                    </ul>
                                </li>
                                <li><a href="staking.html">Staking</a>
                                    <ul class="sub-menu">
                                        <li><a href="staking.html">Staking 1</a></li>
                                        <li><a href="staking-2.html">Staking 2</a></li>
                                        <li><a href="staking-3.html">Staking 3</a></li>
                                        <li><a href="staking-4.html">Staking 4</a></li>
                                        <li><a href="staking-5-lp.html">Staking 5 LP</a></li>
                                    </ul>
                                </li>
                                <li class="mega_menu_hov"><a href="index.html#">Pages +</a>
                                    <!-- Mega Menu Start -->
                                    <div class="gamfi_mega_menu_sect">
                                        <div class="gamfi_mega_menu">
                                            <div class="container">
                                                <div class="mega_menu_content">
                                                    <div class="mega_menu_left_sect">
                                                        <div class="mega_menu_left_bg_sect">
                                                            <div class="mega_menu_left_bg">
                                                                <div class="mega_menu_left_bg_color">

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="home_menu_list">
                                                            <div class="home_menu_list_headings">
                                                                <h2>Home Pages</h2>
                                                                <span><img src="view/assets/images/megaMenu/border-buttomShape.png" alt="" class="img-fluid" /></span>
                                                            </div>
                                                            <ul>
                                                                <li>
                                                                    <a href="index.html">01 <span><img src="view/assets/images/megaMenu/index-V1.png" alt="Index V1" class="img-fluid" /></span></a>
                                                                </li>
                                                                <li>
                                                                    <a href="index2.html">02 <span><img src="view/assets/images/megaMenu/index-V2.png" alt="Index V2" class="img-fluid" /></span></a>
                                                                </li>
                                                                <li>
                                                                    <a href="index3.html">03 <span><img src="view/assets/images/megaMenu/index-V3.png" alt="Index V3" class="img-fluid" /></span></a>
                                                                </li>
                                                                <li>
                                                                    <a href="index4.html">04 <span><img src="view/assets/images/megaMenu/index-V4.png" alt="Index V3" class="img-fluid" /></span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                    <div class="home_menu_right_sect">
                                                        <div class="">

                                                        </div>
                                                        <div class="menu_column project_column">
                                                            <div class="menu_headings">
                                                                <h2>PROJECT PAGES</h2>
                                                                <span><img src="view/assets/images/megaMenu/border-buttomShape.png" alt="" class="img-fluid" /></span>
                                                            </div>
                                                            <ul>
                                                                <li><a href="project-clasic.html">Projects Clasic 1</a> <span class="hot">HOT</span></li>
                                                                <li><a href="project-clasic-2.html">Projects Clasic 2</a> <span class="new">NEW</span></li>
                                                                <li><a href="project.html">Projects List</a></li>
                                                                <li><a href="explore.html">Project Grid</a></li>
                                                                <li><a href="calendar.html">Project Calendar</a></li>
                                                                <li><a href="project-details.html">Project Details 1</a></li>
                                                                <li><a href="project_details2.html">Project Details 2</a> <span class="hot">HOT</span></li>
                                                                <li><a href="igo-ranking.html">Project Ranking</a></li>
                                                            </ul>
                                                        </div>

                                                        <div class="two_menu_column">
                                                            <div class="menu_column project_column">
                                                                <div class="menu_headings">
                                                                    <h2>STAKE & Farm</h2>
                                                                    <span><img src="view/assets/images/megaMenu/border-buttomShape.png" alt="" class="img-fluid" /></span>
                                                                </div>
                                                                <ul>
                                                                    <li><a href="staking.html">Staking One</a></li>
                                                                    <li><a href="staking-2.html">Staking Two</a></li>
                                                                    <li><a href="staking-3.html">Staking Three</a> <span class="new">NEW</span></li>
                                                                    <li><a href="staking-4.html">Staking Four</a> <span class="new">NEW</span> <span class="hot">HOT</span></li>
                                                                    <li><a href="staking-5-lp.html">Staking Five LP</a> <span class="new">NEW</span></li>
                                                                    <li><a href="farm.html">Farming</a></li>
                                                                    <li><a href="leaderboard.html">Leaderboard</a></li>
                                                                </ul>
                                                            </div>
                                                            
                                                            <div class="menu_column project_column">
                                                                <div class="menu_headings">
                                                                    <h2>BLOG PAGES</h2>
                                                                    <span><img src="view/assets/images/megaMenu/border-buttomShape.png" alt="" class="img-fluid" /></span>
                                                                </div>
                                                                <ul>
                                                                    <li><a href="blog-grid.html">Blog Grid</a></li>
                                                                    <li><a href="blog-clasic.html">Blog Classic</a></li>
                                                                    <li><a href="blog-details.html">Artcles Details</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <div class="two_menu_column">
                                                            <div class="menu_column project_column">
                                                                <div class="menu_headings">
                                                                    <h2>TOKENOMIC & TIER</h2>
                                                                    <span><img src="view/assets/images/megaMenu/border-buttomShape.png" alt="" class="img-fluid" /></span>
                                                                </div>
                                                                <ul>
                                                                    <li><a href="tier.html">Tier System 1</a></li>
                                                                    <li><a href="tier-2.html">Tier System 2</a><span class="hot">HOT</span></li>
                                                                    <li><a href="tier-3.html">Tier System 3</a></li>
                                                                    <li><a href="tokenomics.html">Tokenomics</a></li>
                                                                </ul>
                                                            </div>

                                                            <div class="menu_column project_column">
                                                                <div class="menu_headings">
                                                                    <h2>other Pages</h2>
                                                                    <span><img src="view/assets/images/megaMenu/border-buttomShape.png" alt="" class="img-fluid" /></span>
                                                                </div>
                                                                <ul>
                                                                    <li><a href="governance.html">Governance</a> <span class="new">NEW</span> <span class="hot">HOT</span></li>
                                                                    <li><a href="governance-details.html">Voting Details</a> <span class="new">NEW</span></li>
                                                                    <li><a href="get-in-touch.html">Contact Us</a></li>
                                                                    <li><a href="roadmap.html">Roadmap</a></li>
                                                                    <li><a href="faq.html">FAQs</a></li>
                                                                    <li><a href="igo-apply.html">Apply For Project</a></li>
                                                                    <li><a href="teamdetails.html">Team Details</a></li>
                                                                </ul>
                                                            </div>
                                                            
                                                        </div>

                                                        <div class="menu_column project_column">
                                                            <div class="menu_headings">
                                                                <h2>AUth Pages</h2>
                                                                <span><img src="view/assets/images/megaMenu/border-buttomShape.png" alt="" class="img-fluid" /></span>
                                                            </div>
                                                            <ul>
                                                                <li><a href="kyc-process.html">KYC Step 01</a> <span class="hot">HOT</span></li>
                                                                <li><a href="kyc-process-step2.html">KYC Step 02</a></li>
                                                                <li><a href="kyc-process-step3.html">KYC Step 03</a></li>
                                                                <li><a href="connect-wallet.html">Connect Wallet</a></li>
                                                                <li><a href="index.html#" data-bs-toggle="modal" data-bs-target="#exampleModal">Wallet Module</a></li>
                                                                <li><a href="signup.html">Register</a></li>
                                                                <li><a href="signin.html">Login</a></li>
                                                                <li><a href="forget-password.html">Forget Password</a></li>
                                                            </ul>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Mega Menu End -->
                                </li>
                            </ul>
                            </div>
                        </div>
                        <div class="gamfi-btn-area">
                            <ul>
                                <li>
                                    <a id="nav-expander" class="nav-expander bar" href="index.html#">
                                        <div class="bar">
                                            <span class="dot1"></span>
                                            <span class="dot2"></span>
                                            <span class="dot3"></span>
                                        </div>
                                    </a>
                                </li>
                                <li class="buy-token">
                                    <a class="readon black-shape" href="index.html#">
                                        <span class="btn-text">Buy Token </span>
                                        <i class="icon-arrow_down"></i>
                                        <span class="hover-shape1"></span>
                                        <span class="hover-shape2"></span>
                                        <span class="hover-shape3"></span>
                                    </a>
                                    <ul>
                                        <li><a href="index.html#"><img src="view/assets/images/icons/pancake.png" alt="pancake"> PancakeSwap</a></li>
                                        <li><a href="index.html#"><img src="view/assets/images/icons/uniswap.png" alt="uniswap"> UniSwap</a></li>
                                        <li><a href="index.html#"><img src="view/assets/images/icons/market.png" alt="market"> CoinMarketCap</a></li>
                                        <li><a href="index.html#"><img src="view/assets/images/icons/gate.png" alt="gate"> Gate.io</a></li>
                                    </ul>
                                </li>
                                <li class="connect-btn-wrapper">
                                    <button type="button" class="connect-btn readon white-btn hover-shape" data-bs-toggle="modal" data-bs-target="#exampleModal"><img src="view/assets/images/icons/connect.png" alt="Icon"> 
                                        <span class="btn-text">Connect </span>
                                        <span class="hover-shape1"></span>
                                        <span class="hover-shape2"></span>
                                        <span class="hover-shape3"></span>
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Canvas Mobile Menu start -->
            <nav class="right_menu_togle mobile-navbar-menu" id="mobile-navbar-menu">
                <div class="close-btn">
                    <a id="nav-close2" class="nav-close">
                        <div class="line">
                            <span class="line1"></span>
                            <span class="line2"></span>
                        </div>
                    </a>
                </div>
                <div class="sidebar-logo mb-30">
                    <a href="index.html"><img src="view/assets/images/logo-dark.png" alt=""></a>
                </div>
                <ul class="nav-menu">
                <li class="current-menu-item"><a href="index.html">Home</a>
                    <ul class="sub-menu">
                        <li><a href="index.html">Home 1</a></li>
                        <li><a href="index2.html">Home 2</a></li>
                        <li><a href="index3.html">Home 3</a></li>
                        <li><a href="index4.html">Home 4</a></li>
                    </ul>
                </li>
                <li><a href="project.html">Projects</a>
                    <ul class="sub-menu">
                        <li><a href="project-clasic.html">Projects Clasic 1</a></li>
                        <li><a href="project-clasic-2.html">Projects Clasic 2</a></li>
                        <li><a href="project.html">Projects List</a></li>
                        <li><a href="explore.html">Project Grid</a></li>
                        <li><a href="calendar.html">Project Calendar</a></li>
                        <li><a href="project-details.html">Project Details 1</a></li>
                        <li><a href="project_details2.html">Project Details 2</a></li>
                        <li><a href="igo-ranking.html">Project Ranking</a></li>
                    </ul>
                </li>
                <li><a href="staking.html">Staking</a>
                    <ul class="sub-menu">
                        <li><a href="staking.html">Staking 1</a></li>
                        <li><a href="staking-2.html">Staking 2</a></li>
                        <li><a href="staking-3.html">Staking 3</a></li>
                        <li><a href="staking-4.html">Staking 4</a></li>
                        <li><a href="staking-5-lp.html">Staking 5 LP</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children">
                    <a href="index.html#">Pages</a>
                    <ul class="sub-menu">
                        <li class="menu-item-has-children"><a href="project.html">Projects Pages</a>
                            <ul class="sub-menu">
                                <li><a href="project-clasic.html">Projects Clasic 1</a></li>
                                <li><a href="project-clasic-2.html">Projects Clasic 2</a></li>
                                <li><a href="project.html">Projects List</a></li>
                                <li><a href="explore.html">Project Grid</a></li>
                                <li><a href="calendar.html">Project Calendar</a></li>
                                <li><a href="project-details.html">Project Details 1</a></li>
                                <li><a href="project_details2.html">Project Details 2</a></li>
                                <li><a href="igo-ranking.html">Project Ranking</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children"><a href="index.html#">Stake & Farm</a>
                            <ul class="sub-menu">
                                <li><a href="staking.html">Staking 1</a></li>
                                <li><a href="staking-2.html">Staking 2</a></li>
                                <li><a href="staking-3.html">Staking 3</a></li>
                                <li><a href="staking-4.html">Staking 4</a></li>
                                <li><a href="staking-5-lp.html">Staking 5 LP</a></li>
                                <li><a href="farm.html">Farming</a></li>
                                <li><a href="leaderboard.html">Leaderboard</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children"><a href="index.html#">Other Pages</a>
                            <ul class="sub-menu">
                                <li><a href="get-in-touch.html">Contact Us</a></li>
                                <li><a href="roadmap.html">Roadmap</a></li>
                                <li><a href="faq.html">FAQs</a></li>
                                <li><a href="igo-apply.html">Apply For Project</a></li>
                                <li><a href="teamdetails.html">Team Details</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children"><a href="index.html#">Tokenomics & Tier</a>
                            <ul class="sub-menu">
                                <li><a href="tier.html">Tier System 1</a></li>
                                <li><a href="tier-2.html">Tier System 2</a></li>
                                <li><a href="tier-3.html">Tier System 3</a></li>
                                <li><a href="tokenomics.html">Tokenomics</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children"><a href="index.html#">Blog & Pages</a>
                            <ul class="sub-menu">
                                <li><a href="blog-grid.html">Blog Grid</a></li>
                                <li><a href="blog-clasic.html">Blog Classic</a></li>
                                <li><a href="blog-details.html">Artcles Details</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children"><a href="signin.html">Auth Pages</a>
                            <ul class="sub-menu">
                                <li><a href="kyc-process.html">KYC Step 01</a></li>
                                <li><a href="kyc-process-step2.html">KYC Step 02</a></li>
                                <li><a href="kyc-process-step3.html">KYC Step 03</a></li>
                                <li><a href="connect-wallet.html">Connect Wallet</a></li>
                                <li><a href="index.html#" data-bs-toggle="modal" data-bs-target="#exampleModal">Wallet Module</a></li>
                                <li><a href="signup.html">Register</a></li>
                                <li><a href="signin.html">Login</a></li>
                                <li><a href="forget-password.html">Forgot Password</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="menu-item-has-children">
                    <a href="index.html#">Buy Token</a>
                    <ul class="sub-menu">
                        <li><a href="index.html#">PancakeSwap</a></li>
                        <li><a href="index.html#">UniSwap</a></li>
                        <li><a href="index.html#">CoinMarketCap</a></li>
                        <li><a href="index.html#">Gate.io</a></li>
                    </ul>
                </li>
                <li class="connect-btn-wrapper">
                    <button type="button" class="readon black-shape-big connect-wallet-btn-for-mobile" data-bs-toggle="modal" data-bs-target="#exampleModal"><img src="view/assets/images/icons/connect_white.png" alt="Icon">
                        <span class="btn-text">Connect </span>
                        <span class="hover-shape1"></span>
                        <span class="hover-shape2"></span>
                        <span class="hover-shape3"></span>
                    </button>
                </li>
            </ul>
            </nav>
            <!-- Canvas Menu end -->
        </header>
        <!--Header End-->

        <!-- Banner Section Start -->
        <div id="sc-banner" class="sc_banner_v3 sc_banner_v4 banner-bg position-relative">
                <div class="container">
                    <div class="banner-content v3_banner_content">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="sc_banner_v3_left mt-10">
                                    <h2 class="wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="0.6s">Primera moneda virtual para la familia y amigos</h2>
                                    <p class="wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="0.7s">Armá tu equipo, premiá y da recompensas por cumplir misiones. Transferí créditos.</p>
                                    <div class="gamfi_v2_hero_btns wow fadeInUp" data-wow-delay="0.6s" data-wow-duration="0.8s">
                                        <a href="project.html" class="readon white-btn hover-shape view-project-btn">
                                            <span class="btn-text">VER monedas</span>
                                            <span class="hover-shape1"></span>
                                            <span class="hover-shape2"></span>
                                            <span class="hover-shape3"></span>
                                        </a>
                                        <a class="readon black-shape apply-project-btn" href="igo-apply.html">
                                            <span class="btn-text">CREAR equipo</span>
                                            <span class="hover-shape1"></span>
                                            <span class="hover-shape2"></span>
                                            <span class="hover-shape3"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="sc_banner_v3_right sc_banner_v4_right mt-70">
                                    <div class="animetion_avater">
                                        <img src="view/assets/images/icons/banner-4.png" alt="img" class="img-fluid" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- Banner Section End -->

        <!-- Project Section Start -->
        <div class="gamfi-project-section main-project-area">
            <div class="container">
                <div class="sec-inner align-items-center d-flex justify-content-between">
                    <div class="sec-heading">
                        <div class="sub-inner mb-15">
                            <span class="sub-title">Equipos</span>
                            <img class="heading-left-image" src="view/assets/images/icons/steps.png" alt="Steps-Image" />
                        </div>
                        <h2 class="title">Monedas creadas</h2>
                    </div>
                    <div class="gamfi-btn-area">
                        <ul>
                            <li>
                                <a class="readon2 black-shape" href="calendar.html">
                                    <i class="icon-calendar"></i> 
                                    <span class="btn-text">Calendar</span>
                                    <span class="hover-shape1"></span>
                                    <span class="hover-shape2"></span>
                                    <span class="hover-shape3"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="project-item hover-shape-border">
                            <div class="project-info d-flex">
                                <a href="project-details.html">
                                    <img src="view/assets/images/project/home/avatar.png" width="70px" height="70px" alt="Project-Image"/>
                                </a>
                                <div class="project-auother">
                                    <h4 class="mb-10"><a href="project-details.html">BrunCoins</a></h4>
                                    <div class="dsc">PRECIO (ARG) = 1.00 PESO</div>
                                </div>
                            </div>
                            <div class="project-content">
                                <div class="project-header d-flex justify-content-between">
                                    <div class="heading-title">
                                        <h4>Hace 08 Días</h4>
                                    </div>
                                    <div class="project-icon">
                                        <img src="view/assets/images/project/project-single-image.png" alt="Project-Image" />
                                    </div>
                                </div>
                                <div class="project-media">
                                    <ul class="project-listing">
                                        <li>Min por transacción <span>1.000 BTC</span></li>
                                        <li>Máx por transacción <span>10.000 BTC</span></li>
                                        <li>Tipo de acceso <span>Público</span></li>
                                    </ul>
                                </div>
                            </div>
                            <span class="border-shadow shadow-1"></span>
                            <span class="border-shadow shadow-2"></span>
                            <span class="border-shadow shadow-3"></span>
                            <span class="border-shadow shadow-4"></span>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="project-item hover-shape-border">
                            <div class="project-info d-flex">
                                <a href="project-details.html">
                                    <img src="view/assets/images/project/home/avatar.png" width="70px" height="70px" alt="Project-Image"/>
                                </a>
                                <div class="project-auother">
                                    <h4 class="mb-10"><a href="project-details.html">MatuCoins</a></h4>
                                    <div class="dsc">PRECIO (ARG) = 1.00 PESO</div>
                                </div>
                            </div>
                            <div class="project-content">
                                <div class="project-header d-flex justify-content-between">
                                    <div class="heading-title">
                                        <h4>Hace 08 Días</h4>
                                    </div>
                                    <div class="project-icon">
                                        <img src="view/assets/images/project/project-single-image.png" alt="Project-Image" />
                                    </div>
                                </div>
                                <div class="project-media">
                                    <ul class="project-listing">
                                        <li>Min por transacción <span>1.000 BTC</span></li>
                                        <li>Máx por transacción <span>10.000 BTC</span></li>
                                        <li>Tipo de acceso <span>Público</span></li>
                                    </ul>
                                </div>
                            </div>
                            <span class="border-shadow shadow-1"></span>
                            <span class="border-shadow shadow-2"></span>
                            <span class="border-shadow shadow-3"></span>
                            <span class="border-shadow shadow-4"></span>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="project-item hover-shape-border">
                            <div class="project-info d-flex">
                                <a href="project-details.html">
                                    <img src="view/assets/images/project/home/avatar.png" width="70px" height="70px" alt="Project-Image"/>
                                </a>
                                <div class="project-auother">
                                    <h4 class="mb-10"><a href="project-details.html">FleCoins</a></h4>
                                    <div class="dsc">PRECIO (ARG) = 1.00 PESO</div>
                                </div>
                            </div>
                            <div class="project-content">
                                <div class="project-header d-flex justify-content-between">
                                    <div class="heading-title">
                                        <h4>Hace 08 Días</h4>
                                    </div>
                                    <div class="project-icon">
                                        <img src="view/assets/images/project/project-single-image.png" alt="Project-Image" />
                                    </div>
                                </div>
                                <div class="project-media">
                                    <ul class="project-listing">
                                        <li>Min por transacción <span>1.000 BTC</span></li>
                                        <li>Máx por transacción <span>10.000 BTC</span></li>
                                        <li>Tipo de acceso <span>Público</span></li>
                                    </ul>
                                </div>
                            </div>
                            <span class="border-shadow shadow-1"></span>
                            <span class="border-shadow shadow-2"></span>
                            <span class="border-shadow shadow-3"></span>
                            <span class="border-shadow shadow-4"></span>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="project-item hover-shape-border">
                            <div class="project-info d-flex">
                                <a href="project-details.html">
                                    <img src="view/assets/images/project/home/avatar.png" width="70px" height="70px" alt="Project-Image"/>
                                </a>
                                <div class="project-auother">
                                    <h4 class="mb-10"><a href="project-details.html">GorCoins</a></h4>
                                    <div class="dsc">PRECIO (ARG) = 1.00 PESO</div>
                                </div>
                            </div>
                            <div class="project-content">
                                <div class="project-header d-flex justify-content-between">
                                    <div class="heading-title">
                                        <h4>Hace 08 Días</h4>
                                    </div>
                                    <div class="project-icon">
                                        <img src="view/assets/images/project/project-single-image.png" alt="Project-Image" />
                                    </div>
                                </div>
                                <div class="project-media">
                                    <ul class="project-listing">
                                        <li>Min por transacción <span>1.000 BTC</span></li>
                                        <li>Máx por transacción <span>10.000 BTC</span></li>
                                        <li>Tipo de acceso <span>Público</span></li>
                                    </ul>
                                </div>
                            </div>
                            <span class="border-shadow shadow-1"></span>
                            <span class="border-shadow shadow-2"></span>
                            <span class="border-shadow shadow-3"></span>
                            <span class="border-shadow shadow-4"></span>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="project-item hover-shape-border">
                            <div class="project-info d-flex">
                                <a href="project-details.html">
                                    <img src="view/assets/images/project/home/avatar.png" width="70px" height="70px" alt="Project-Image"/>
                                </a>
                                <div class="project-auother">
                                    <h4 class="mb-10"><a href="project-details.html">PipeCoins</a></h4>
                                    <div class="dsc">PRECIO (ARG) = 1.00 PESO</div>
                                </div>
                            </div>
                            <div class="project-content">
                                <div class="project-header d-flex justify-content-between">
                                    <div class="heading-title">
                                        <h4>Hace 08 Días</h4>
                                    </div>
                                    <div class="project-icon">
                                        <img src="view/assets/images/project/project-single-image.png" alt="Project-Image" />
                                    </div>
                                </div>
                                <div class="project-media">
                                    <ul class="project-listing">
                                        <li>Min por transacción <span>1.000 BTC</span></li>
                                        <li>Máx por transacción <span>10.000 BTC</span></li>
                                        <li>Tipo de acceso <span>Público</span></li>
                                    </ul>
                                </div>
                            </div>
                            <span class="border-shadow shadow-1"></span>
                            <span class="border-shadow shadow-2"></span>
                            <span class="border-shadow shadow-3"></span>
                            <span class="border-shadow shadow-4"></span>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="project-item hover-shape-border">
                            <div class="project-info d-flex">
                                <a href="project-details.html">
                                    <img src="view/assets/images/project/home/avatar.png" width="70px" height="70px" alt="Project-Image"/>
                                </a>
                                <div class="project-auother">
                                    <h4 class="mb-10"><a href="project-details.html">BrunCoins</a></h4>
                                    <div class="dsc">PRECIO (ARG) = 1.00 PESO</div>
                                </div>
                            </div>
                            <div class="project-content">
                                <div class="project-header d-flex justify-content-between">
                                    <div class="heading-title">
                                        <h4>Hace 08 Días</h4>
                                    </div>
                                    <div class="project-icon">
                                        <img src="view/assets/images/project/project-single-image.png" alt="Project-Image" />
                                    </div>
                                </div>
                                <div class="project-media">
                                    <ul class="project-listing">
                                        <li>Min por transacción <span>1.000 BTC</span></li>
                                        <li>Máx por transacción <span>10.000 BTC</span></li>
                                        <li>Tipo de acceso <span>Público</span></li>
                                    </ul>
                                </div>
                            </div>
                            <span class="border-shadow shadow-1"></span>
                            <span class="border-shadow shadow-2"></span>
                            <span class="border-shadow shadow-3"></span>
                            <span class="border-shadow shadow-4"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Project Section End -->

        <!-- Previous Section Start -->
        <div class="gamfi-previous-section pb-90 md-pb-50">
            <div class="container">
                <div class="sec-inner align-items-center d-flex justify-content-between wow fadeInUp mb-50" data-wow-delay="0.2s" data-wow-duration="0.4s">
                    <div class="sec-heading">
                        <div class="sub-inner mb-15">
                            <span class="sub-title">Complete Projects</span>
                            <img class="heading-left-image" src="view/assets/images/icons/steps.png" alt="Steps-Image" />
                        </div>
                        <h2 class="title mb-0 xs-pb-20">Previous IGO</h2>
                    </div>
                    <div class="gamfi-btn-area">
                        <ul>
                            <li>
                                <a class="view-more black-shape" href="project.html">
                                    <span class="btn-text">View More</span>
                                    <i class="icon-arrow_right"></i>
                                    <span class="hover-shape1"></span>
                                    <span class="hover-shape2"></span>
                                    <span class="hover-shape3"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row align-items-center" data-wow-delay="0.2s" data-wow-duration="0.4s">
                    <div class="col-md-12 wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="0.5s">
                        <div class="previous-mainmenu mb-15">
                            <ul class="menu-list">
                                <li class="list1">Project name</li>
                                <li class="list2">Chain</li>
                                <li class="list3">Launched</li>
                                <li class="list4">Total Raise</li>
                                <li class="list5">Progress</li>
                            </ul>
                        </div>
                        <a href="project-details.html">
                            <div class="previous-item hover-shape-border hover-shape-inner">
                                <div class="previous-gaming">
                                    <div class="previous-image">
                                        <img src="view/assets/images/project/privius-image.png" alt="Previous-Image" />
                                    </div>
                                    <div class="previous-price">
                                        <h4 class="mb-10">KyberDyne</h4>
                                        <div class="dsc">PRICE (GAC) = 0.59 BUSD</div>
                                    </div>
                                </div>
                                <div class="previous-chaining">
                                    <img src="view/assets/images/project/previous-image.png" alt="Chain-Image" />
                                    <span>5 Hours ago</span>
                                </div>
                                <div class="previous-raise">
                                    <span>100,000 BUSD (100%)</span>
                                    <div class="progress-inner">
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-striped" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
                                        </div>
                                    </div>
                                </div>
                                <span class="border-shadow shadow-1"></span>
                                <span class="border-shadow shadow-2"></span>
                                <span class="border-shadow shadow-3"></span>
                                <span class="border-shadow shadow-4"></span>
                                <span class="hover-shape-bg hover_shape1"></span>
                                <span class="hover-shape-bg hover_shape2"></span>
                                <span class="hover-shape-bg hover_shape3"></span>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-12 wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="0.6s">
                        <a href="project-details.html">
                            <div class="previous-item hover-shape-border hover-shape-inner">
                                <div class="previous-gaming">
                                    <div class="previous-image">
                                        <img src="view/assets/images/project/privius-image2.png" alt="Previous-Image" />
                                    </div>
                                    <div class="previous-price">
                                        <h4 class="mb-10">Thetan Arena</h4>
                                        <div class="dsc">PRICE (FSC) = 0.89 BUSD</div>
                                    </div>
                                </div>
                                <div class="previous-chaining">
                                    <img src="view/assets/images/project/previous-image2.png" alt="Chain-Image" />
                                    <span>1 days ago</span>
                                </div>
                                <div class="previous-raise">
                                    <span>265,000 BUSD (73%)</span>
                                      <div class="progress-inner">
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-striped" role="progressbar" aria-valuenow="73" aria-valuemin="0" aria-valuemax="100" style="width: 73%"></div>
                                        </div>
                                    </div>
                                </div>
                                <span class="border-shadow shadow-1"></span>
                                <span class="border-shadow shadow-2"></span>
                                <span class="border-shadow shadow-3"></span>
                                <span class="border-shadow shadow-4"></span>
                                <span class="hover-shape-bg hover_shape1"></span>
                                <span class="hover-shape-bg hover_shape2"></span>
                                <span class="hover-shape-bg hover_shape3"></span>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-12 wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="0.7s">
                        <a href="project-details.html">
                            <div class="previous-item hover-shape-border hover-shape-inner">
                                <div class="previous-gaming">
                                    <div class="previous-image">
                                        <img src="view/assets/images/project/privius-image3.png" alt="Previous-Image" />
                                    </div>
                                    <div class="previous-price">
                                        <h4 class="mb-10">Galaxy War</h4>
                                        <div class="dsc">PRICE (MTS) = 0.33 BUSD</div>
                                    </div>
                                </div>
                                <div class="previous-chaining">
                                    <img src="view/assets/images/project/previous-image3.png" alt="Chain-Image" />
                                    <span>3 Day Ago</span>
                                </div>
                                <div class="previous-raise">
                                    <span>510,000 BUSD (98%)</span>
                                      <div class="progress-inner">
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-striped" role="progressbar" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100" style="width: 98%"></div>
                                        </div>
                                    </div>
                                </div>
                                <span class="border-shadow shadow-1"></span>
                                <span class="border-shadow shadow-2"></span>
                                <span class="border-shadow shadow-3"></span>
                                <span class="border-shadow shadow-4"></span>
                                <span class="hover-shape-bg hover_shape1"></span>
                                <span class="hover-shape-bg hover_shape2"></span>
                                <span class="hover-shape-bg hover_shape3"></span>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-12 wow fadeInUp" data-wow-delay="0.6s" data-wow-duration="0.8s">
                        <a href="project-details.html">
                            <div class="previous-item hover-shape-border hover-shape-inner">
                                <div class="previous-gaming">
                                    <div class="previous-image">
                                        <img src="view/assets/images/project/privius-image4.png" alt="Previous-Image" />
                                    </div>
                                    <div class="previous-price">
                                        <h4 class="mb-10">KingdomX</h4>
                                        <div class="dsc">PRICE (CTC) = 0.45 BUSD</div>
                                    </div>
                                </div>
                                <div class="previous-chaining">
                                    <img src="view/assets/images/project/previous-image4.png" alt="Chain-Image" />
                                    <span>5 Days Ago</span>
                                </div>
                                <div class="previous-raise">
                                    <span>100,000 BUSD (100%)</span>
                                      <div class="progress-inner">
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-striped" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
                                        </div>
                                    </div>
                                </div>
                                <span class="border-shadow shadow-1"></span>
                                <span class="border-shadow shadow-2"></span>
                                <span class="border-shadow shadow-3"></span>
                                <span class="border-shadow shadow-4"></span>
                                <span class="hover-shape-bg hover_shape1"></span>
                                <span class="hover-shape-bg hover_shape2"></span>
                                <span class="hover-shape-bg hover_shape3"></span>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-12 wow fadeInUp" data-wow-delay="0.7s" data-wow-duration="0.9s">
                        <a href="project-details.html">
                            <div class="previous-item hover-shape-border hover-shape-inner">
                                <div class="previous-gaming">
                                    <div class="previous-image">
                                        <img src="view/assets/images/project/privius-image5.png" alt="Previous-Image" />
                                    </div>
                                    <div class="previous-price">
                                        <h4 class="mb-10">Cyber City</h4>
                                        <div class="dsc">PRICE (GAC) = 0.59 BUSD</div>
                                    </div>
                                </div>
                                <div class="previous-chaining">
                                    <img src="view/assets/images/project/previous-image5.png" alt="Chain-Image" />
                                    <span>5 Day Agos</span>
                                </div>
                                <div class="previous-raise">
                                    <span>500,000 BUSD (86%)</span>
                                      <div class="progress-inner">
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-striped" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100" style="width: 86%"></div>
                                        </div>
                                    </div>
                                </div>
                                <span class="border-shadow shadow-1"></span>
                                <span class="border-shadow shadow-2"></span>
                                <span class="border-shadow shadow-3"></span>
                                <span class="border-shadow shadow-4"></span>
                                <span class="hover-shape-bg hover_shape1"></span>
                                <span class="hover-shape-bg hover_shape2"></span>
                                <span class="hover-shape-bg hover_shape3"></span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Previous Section End -->

        <!-- Tokenomics Section Start -->
        <div class="gamfi-tokenomics-section tokenomics-left-right-shape pb-115 pt-115 md-pt-75 md-pb-45">
            <div class="container">
                <div class="sec-heading wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="0.4s">
                    <div class="sub-inner mb-15">
                        <span class="sub-title">statistics</span>
                        <img class="heading-left-image" src="view/assets/images/icons/steps.png" alt="Steps-Image" />
                    </div>
                    <h2 class="title">Tokenomics</h2>
                </div>

                <div class="v1_tokenomics_content_sect wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="0.4s">
                    <div class="v1_tokenomics_content_list_sect">
                        <div class="v1_tokenomics_content_list v1_tokenomics_content_list_1">
                            <div class="v1_tokenomics_content_list_text">
                                <h4>Team</h4>
                                <h5><span class="counter">7.5</span>%</h5>
                            </div>
                            <div class="v1_tokenomics_content_list_progress v1_tokenomics_content_list_progress1">
                                
                            </div>
                        </div>
                        
                        <div class="v1_tokenomics_content_list v1_tokenomics_content_list_2">
                            <div class="v1_tokenomics_content_list_text">
                                <h4>Staking</h4>
                                <h5><span class="counter">9.50</span>%</h5>
                            </div>
                            <div class="v1_tokenomics_content_list_progress v1_tokenomics_content_list_progress2">
                                
                            </div>
                        </div>
                        
                        <div class="v1_tokenomics_content_list v1_tokenomics_content_list_3">
                            <div class="v1_tokenomics_content_list_text">
                                <h4>Advisors</h4>
                                <h5><span class="counter">10.00</span>%</h5>
                            </div>
                            <div class="v1_tokenomics_content_list_progress v1_tokenomics_content_list_progress3">
                                
                            </div>
                        </div>
                        
                        <div class="v1_tokenomics_content_list v1_tokenomics_content_list_4">
                            <div class="v1_tokenomics_content_list_text">
                                <h4>Liquidity</h4>
                                <h5><span class="counter">12.00</span>%</h5>
                            </div>
                            <div class="v1_tokenomics_content_list_progress v1_tokenomics_content_list_progress4">
                                
                            </div>
                        </div>
                        
                        <div class="v1_tokenomics_content_list v1_tokenomics_content_list_5">
                            <div class="v1_tokenomics_content_list_text">
                                <h4>Ecosystem</h4>
                                <h5><span class="counter">16.33</span>%</h5>
                            </div>
                            <div class="v1_tokenomics_content_list_progress v1_tokenomics_content_list_progress5">
                                
                            </div>
                        </div>
                        
                        <div class="v1_tokenomics_content_list v1_tokenomics_content_list_6">
                            <div class="v1_tokenomics_content_list_text">
                                <h4>Marketing</h4>
                                <h5><span class="counter">18.00</span>%</h5>
                            </div>
                            <div class="v1_tokenomics_content_list_progress v1_tokenomics_content_list_progress6">
                                
                            </div>
                        </div>
                        
                        <div class="v1_tokenomics_content_list v1_tokenomics_content_list_7">
                            <div class="v1_tokenomics_content_list_text">
                                <h4>Private Sale</h4>
                                <h5><span class="counter">30.00</span>%</h5>
                            </div>
                            <div class="v1_tokenomics_content_list_progress v1_tokenomics_content_list_progress7">
                                
                            </div>
                        </div>
                    </div>
                </div>
    
                <div class="tokenomics-counter wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="0.5s">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 mb-30">
                            <div class="counter-info">
                                <h4 class="counter-number mb-6"><span class="counter">386</span></h4>
                                <h5>Funded Projects</h5>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 mb-30">
                            <div class="counter-info">
                                <h4 class="counter-number mb-6"><span class="counter">486</span></h4>
                                <h5>Unique Participants</h5>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 mb-30">
                            <div class="counter-info">
                                <h4 class="counter-number mb-6">$<span class="counter">9</span>M+</h4>
                                <h5>Raised Capital</h5>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 mb-30">
                            <div class="counter-info">
                                <h4 class="counter-number mb-6">$<span class="counter">18</span>M+</h4>
                                <h5>Initial Market Cap</h5>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="gamfi_tokenomics_corner_imgs">
                    <span class="gamfi_tokenomics_corner_img1">
                        <img src="view/assets/images/bg/RoadMapV2Fram.png" alt="" class="img-fluid" />
                    </span>
                    <span class="gamfi_tokenomics_corner_img2">
                        <img src="view/assets/images/bg/RoadMapV2Frame2.png" alt="" class="img-fluid" />
                    </span>
                </div>
            </div>
        </div>
        <!-- Tokenomics Section End -->

        <!-- Team Section Start -->
        <div class="gamfi-team-section pt-115 pb-85 md-pt-75 md-pb-42">
            <div class="container">
                <div class="sec-heading text-center mb-55">
                    <div class="sub-inner  mb-15">
                        <img class="heading-left-image" src="view/assets/images/icons/steps2.png" alt="Steps-Image" />
                        <span class="ml-10 mr-10 sub-title">Team Members</span>
                        <img class="heading-right-image" src="view/assets/images/icons/steps.png" alt="Steps-Image" />
                    </div>
                    <h2 class="title">Meet The Crew</h2>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="team-item text-center active-shape">
                            <img src="view/assets/images/team/team-image.png" alt="Team-image" />
                            <h4 class="team-title mb-8"><a href="teamdetails.html">Berneice Tran</a></h4>
                            <div class="dsc">Director</div>
                            <ul class="team-icon-list">
                                <li>
                                    <a href="index.html#">
                                        <i class="icon-linkedin"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="index.html#">
                                        <i class="icon-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="index.html#">
                                        <i class="icon-facebook"></i>
                                    </a>
                                </li>
                            </ul>
                            <span class="border-shadow shadow-1"></span>
                            <span class="border-shadow shadow-2"></span>
                            <span class="border-shadow shadow-3"></span>
                            <span class="border-shadow shadow-4"></span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="team-item text-center active-shape">
                            <img src="view/assets/images/team/team-image2.png" alt="Team-image" />
                            <h4 class="team-title mb-8"><a href="teamdetails.html">Genaro Nadel</a></h4>
                            <div class="dsc">VP of Engineering</div>
                            <ul class="team-icon-list">
                                <li>
                                    <a href="index.html#">
                                        <i class="icon-linkedin"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="index.html#">
                                        <i class="icon-twitter"></i>
                                    </a>
                                </li>
                            </ul>
                            <span class="border-shadow shadow-1"></span>
                            <span class="border-shadow shadow-2"></span>
                            <span class="border-shadow shadow-3"></span>
                            <span class="border-shadow shadow-4"></span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="team-item text-center active-shape">
                            <img src="view/assets/images/team/team-image3.png" alt="Team-image"/>
                            <h4 class="team-title mb-8"><a href="teamdetails.html">Lynnette Wilkes</a></h4>
                            <div class="dsc">Fullstack Developer</div>
                            <ul class="team-icon-list">
                                <li>
                                    <a href="index.html#">
                                        <i class="icon-linkedin"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="index.html#">
                                        <i class="icon-twitter"></i>
                                    </a>
                                </li>
                            </ul>
                            <span class="border-shadow shadow-1"></span>
                            <span class="border-shadow shadow-2"></span>
                            <span class="border-shadow shadow-3"></span>
                            <span class="border-shadow shadow-4"></span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="team-item text-center active-shape">
                            <img src="view/assets/images/team/team-image4.png" alt="Team-image"/>
                            <h4 class="team-title mb-8"><a href="teamdetails.html">Claudia Hicks</a></h4>
                            <div class="dsc">Sr. Developer</div>
                            <ul class="team-icon-list">
                                <li>
                                    <a href="index.html#">
                                        <i class="icon-linkedin"></i>
                                    </a>
                                </li>
                            </ul>
                            <span class="border-shadow shadow-1"></span>
                            <span class="border-shadow shadow-2"></span>
                            <span class="border-shadow shadow-3"></span>
                            <span class="border-shadow shadow-4"></span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="team-item text-center active-shape">
                            <img src="view/assets/images/team/team-image5.png" alt="Team-image"/>
                            <h4 class="team-title mb-8"><a href="teamdetails.html">Louis Baker</a></h4>
                            <div class="dsc">Software Engineer</div>
                            <ul class="team-icon-list">
                                <li>
                                    <a href="index.html#">
                                        <i class="icon-linkedin"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="index.html#">
                                        <i class="icon-twitter"></i>
                                    </a>
                                </li>
                            </ul>
                            <span class="border-shadow shadow-1"></span>
                            <span class="border-shadow shadow-2"></span>
                            <span class="border-shadow shadow-3"></span>
                            <span class="border-shadow shadow-4"></span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="team-item text-center active-shape">
                            <img src="view/assets/images/team/team-image6.png" alt="Team-image"/>
                            <h4 class="team-title mb-8"><a href="teamdetails.html">Nathan Bean</a></h4>
                            <div class="dsc">Sr. UI Designer</div>
                            <ul class="team-icon-list">
                                <li>
                                    <a href="index.html#">
                                        <i class="icon-linkedin"></i>
                                    </a>
                                </li>
                            </ul>
                            <span class="border-shadow shadow-1"></span>
                            <span class="border-shadow shadow-2"></span>
                            <span class="border-shadow shadow-3"></span>
                            <span class="border-shadow shadow-4"></span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="team-item text-center active-shape">
                            <img src="view/assets/images/team/team-image7.png" alt="Team-image"/>
                            <h4 class="team-title mb-8"><a href="teamdetails.html">R. Hawley</a></h4>
                            <div class="dsc">Jr. UI/UX Designer</div>
                            <ul class="team-icon-list">
                                <li>
                                    <a href="index.html#">
                                        <i class="icon-linkedin"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="index.html#">
                                        <i class="icon-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="index.html#">
                                        <i class="icon-facebook"></i>
                                    </a>
                                </li>
                            </ul>
                            <span class="border-shadow shadow-1"></span>
                            <span class="border-shadow shadow-2"></span>
                            <span class="border-shadow shadow-3"></span>
                            <span class="border-shadow shadow-4"></span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="team-item text-center active-shape">
                            <img src="view/assets/images/team/team-image8.png" alt="Team-image"/>
                            <h4 class="team-title mb-8"><a href="teamdetails.html">Pedro Carrera</a></h4>
                            <div class="dsc">Graphic Designer</div>
                            <ul class="team-icon-list">
                                <li>
                                    <a href="index.html#">
                                        <i class="icon-linkedin"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="index.html#">
                                        <i class="icon-twitter"></i>
                                    </a>
                                </li>
                            </ul>
                            <span class="border-shadow shadow-1"></span>
                            <span class="border-shadow shadow-2"></span>
                            <span class="border-shadow shadow-3"></span>
                            <span class="border-shadow shadow-4"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team Section End -->

        <!-- Partner Section Start -->
        <div class="gamfi-partner-section pb-110 md-pb-80">
            <div class="container">
                <div class="sec-heading text-center wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="0.4s">
                    <div class="sub-inner mb-55">
                        <img class="heading-right-image" src="view/assets/images/icons/steps2.png" alt="Steps-Image" />
                        <span class="sub-title white-color">Our partners</span>
                        <img class="heading-left-image" src="view/assets/images/icons/steps.png" alt="Steps-Image" />
                    </div>
                </div>
                <div class="gamfi-partner-inner wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="0.4s">
                    <div class="partner-image">
                        <a href="index.html#">
                            <img src="view/assets/images/partner/partner-image.png" alt="Partner-Image" />
                        </a>
                        <a href="index.html#">
                            <img src="view/assets/images/partner/partner-image2.png" alt="Partner-Image" />
                        </a>
                        <a href="index.html#">
                            <img src="view/assets/images/partner/partner-image3.png" alt="Partner-Image" />
                        </a>
                        <a href="index.html#">
                            <img src="view/assets/images/partner/partner-image4.png" alt="Partner-Image" />
                        </a>
                        <a href="index.html#">
                            <img src="view/assets/images/partner/partner-image5.png" alt="Partner-Image" />
                        </a>
                        <a href="index.html#">
                            <img src="view/assets/images/partner/partner-image6.png" alt="Partner-Image" />
                        </a>
                    </div>
                    <div class="partner-image">
                        <a href="index.html#">
                            <img src="view/assets/images/partner/partner-image.png" alt="Partner-Image" />
                        </a>
                        <a href="index.html#">
                            <img src="view/assets/images/partner/partner-image2.png" alt="Partner-Image" />
                        </a>
                        <a href="index.html#">
                            <img src="view/assets/images/partner/partner-image3.png" alt="Partner-Image" />
                        </a>
                        <a href="index.html#">
                            <img src="view/assets/images/partner/partner-image4.png" alt="Partner-Image" />
                        </a>
                        <a href="index.html#">
                            <img src="view/assets/images/partner/partner-image5.png" alt="Partner-Image" />
                        </a>
                        <a href="index.html#">
                            <img src="view/assets/images/partner/partner-image6.png" alt="Partner-Image" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Partner Section End -->

        <!-- Footer Section Start -->
        <div class="gamfi-footer-section">
            <div class="container">
                <div class="footer-cta-area text-center active-shape hover-shape-inner">
                    <h2 class="title mb-15">
                        Apply for project<br />
                        incubation
                    </h2>
                    <p class="dsc mb-40">
                        If you want to lanuch an IGO/IDO, It will be your perfect choice
                    </p>
                    <a class="theme-btn d-inline-block wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2500ms" href="igo-apply.html">
                        <span>Apply For IGO</span>
                        <div class="hover-shape1"></div>
                        <div class="hover-shape2"></div>
                        <div class="hover-shape3"></div>
                    </a>
                    <span class="border-shadow shadow-1"></span>
                    <span class="border-shadow shadow-2"></span>
                    <span class="border-shadow shadow-3"></span>
                    <span class="border-shadow shadow-4"></span>
                    <span class="hover-shape-bg hover_shape1"></span>
                    <span class="hover-shape-bg hover_shape2"></span>
                    <span class="hover-shape-bg hover_shape3"></span>
                </div>
            </div>
            <div class="footer-area">
                <div class="container">
                    <div class="sec-heading text-center">
                        <div class="sub-inner mb-52">
                            <img class="heading-right-image" src="view/assets/images/icons/steps2.png" alt="Steps-Image"/>
                            <span class="sub-title white-color">Find us on Social</span>
                            <img class="heading-left-image" src="view/assets/images/icons/steps.png" alt="Steps-Image"/>
                        </div>
                    </div>
                    <div class="footer-listing text-center mb-100 md-mb-70">
                        <ul class="footer-icon-list">
                            <li>
                                <a href="index.html#">
                                    <i class="icon-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <i class="icon-telegram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <i class="icon-medium"></i>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <i class="icon-discord"></i>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <i class="icon-linkedin"></i>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <i class="icon-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <i class="icon-facebook"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-logo text-center mb-45">
                       <a href="index.html">
                            <img src="view/assets/images/home/mapicoins-bc.png" alt="Footer-logo" />
                       </a>
                    </div>
                    <div class="footer-mainmenu text-center mb-20">
                        <ul>
                            <li>
                                <a href="index.html#">Features</a>
                            </li>
                            <li>
                                <a href="index.html#">How it works</a>
                            </li>
                            <li>
                                <a href="index.html#">Token info</a>
                            </li>
                            <li>
                                <a href="index.html#">About us</a>
                            </li>
                            <li>
                                <a href="index.html#">Social media</a>
                            </li>
                            <li>
                                <a href="index.html#">Terms of Service</a>
                            </li>
                            <li>
                                <a href="index.html#">Privacy Policy</a>
                            </li>
                        </ul>
                    </div>
                    <div class="copyright-area text-center mb-0">
                        <p class="dsc mb-37">
                            Copyright © 2022. All Rights Reserved by 
                            <a target="_blank" class="gafi" href="index.html#">GaFi</a>
                        </p>
                    </div>
                    <div class="scrollup text-center">
                        <a href="index.html#">
                            <i class="icon-arrow_up"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Section End -->

        <!-- Modal Section Start-->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modals-title  mb-0" id="exampleModalLabel">Connect Wallet</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <i class="icon-x"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p class="mb-20">Please select a wallet to connect to this marketplace</p>
                        <div class="connect-section">
                            <ul class="heading-list">
                                <li>
                                    <a href="index.html#" class="connect-meta">
                                        <span>
                                            <img src="view/assets/images/icons/meta-mask.png" alt="Meta-mask-Image">
                                        </span>
                                        MetaMask
                                    </a>
                                </li>
                                <li>
                                    <a href="index.html#">
                                        <span>
                                            <img src="view/assets/images/icons/coinbase.png" alt="Coinbase-Image">
                                        </span>
                                        Coinbase
                                    </a>
                                </li>
                                <li>
                                    <a href="index.html#">
                                        <span>
                                            <img src="view/assets/images/icons/trust.png" alt="Trust-Image">
                                        </span>
                                        Trust Wallet
                                    </a>
                                </li>
                                <li>
                                    <a href="index.html#">
                                        <span>
                                            <img src="view/assets/images/icons/wallet.png" alt="Wallet-Image">
                                        </span>
                                        WalletConnect
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <p>
                            By connecting your wallet, you agree to our 
                            <a href="index.html#">
                                <span class="modal-title">Terms of Service </span>
                            </a>
                            and our 
                            <a href="index.html#">
                                <span class="modal-title"> Privacy Policy</span>
                            </a>.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Section End-->

        <!-- Modal Section Start-->
        <div class="modal fade" id="download-metamask" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modals-title  mb-0" id="exampleModalLabel">Connect Wallet</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <i class="icon-x"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p class="mb-20">Please download & install metamask extension!</p>
                        <div class="connect-section">
                            <ul class="heading-list">
                                <li>
                                    <a target="_blank" href="https://metamask.io/download/">
                                        <span>
                                            <img src="view/assets/images/icons/meta-mask.png" alt="Meta-mask-Image">
                                        </span>
                                        MetaMask
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Section End-->
        <!-- Meta Mask Connect -->
        <script src="view/assets/js/web3.min.js"></script>
        <script src="view/assets/js/metamask.js"></script>
        <!-- modernizr js -->
        <script src="view/assets/js/modernizr-2.8.3.min.js"></script>
        <!-- jquery latest version -->
        <script src="view/assets/js/jquery.min.js"></script>
        <!-- Bootstrap v5.2.0-beta1 js -->
        <!-- <script src="view/assets/js/bootstrap.popper.min.js"></script> -->
        <!-- <script src="view/assets/js/bootstrap.min.js"></script> -->
        <script src="view/assets/js/bootstrap.bundle.min.js"></script>
        
        <!-- popup.min js -->
        <script src="view/assets/js/jquery.magnific-popup.min.js"></script>
        <!-- imagesloaded.pkgd.min js -->
        <script src="view/assets/js/imagesloaded.pkgd.min.js"></script>
        <!-- wow js -->
        <script src="view/assets/js/wow.min.js"></script>
        <!-- jquery counterup js -->
        <script src="view/assets/js/jquery.counterup.min.js"></script>
        <!-- counter top js -->
        <script src="view/assets/js/waypoints.min.js"></script>
        <!-- owl.carousel js -->
        <script src="view/assets/js/owl.carousel.min.js"></script>
        <!-- plugins js -->
        <script src="view/assets/js/plugins.js"></script>
        <!-- Time Counter js -->
        <script src="view/assets/js/time-counter.js"></script>

        <script src="view/assets/js/metamaskhandler.js"></script>
        <!-- main js -->
        <script src="view/assets/js/main.js"></script>
    </body>
</html>