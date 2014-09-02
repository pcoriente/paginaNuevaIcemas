<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Boomerang - Multipurpose Template: Welcome</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Required -->
        <link href="css/global-style.css" rel="stylesheet" type="text/css" media="screen">
        <link rel="icon" href="images/favicon.png" type="image/png"><!-- LayerSlider stylesheet -->
        <link rel="stylesheet" href="assets/layerslider/css/layerslider.css" type="text/css">
    </head>
    <body>

        <div class="wrapper">
            <!-- This section is only for demonstration purpose only. Just remove the div "divStyleSwitcher" -->
            <!-- Top Header -->
            <div class="top-header">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <span class="aux-text hidden-xs">
                                Bienvenido a ice-mas: icemas@icemas.com.mx or +40 724 123 456
                            </span>
                            <nav class="top-header-menu">
                                <ul class="menu">
                                    <li><a href="sign-in.html">Login</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Header: Logo and Main Nav -->
            <header>    
                <div id="navOne" class="navbar navbar-wp" role="navigation">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle navbar-toggle-aside-menu">
                                <i class="fa fa-outdent icon-custom"></i>
                            </button>
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="index.html" title="Boomerang | One template. Infinite solutions">
                                <img src="images/boomerang-logo-dark.png" alt="Boomerang | One template. Infinite solutions">
                            </a>
                        </div>
                        <div class="navbar-collapse collapse">
                            <ul class="nav navbar-nav navbar-right">
                                <li class="active">
                                    <a href="index.html" 
                                       >Inicio</a>
                                </li>
                                <li class="dropdown">
                                    <a href="services.html">Servicios</a>
                                </li>
                                <li class="dropdown">
                                    <a href="contact.html">Contactanos</a>
                                </li>
                            </ul>
                        </div><!--/.nav-collapse -->
                    </div>
                </div>
            </header>   
            <!-- SECCION DEL SLAYER -->
            <section id="slider-wrapper" class="layer-slider-wrapper">
                <?php
                include './dameSlider.php';
                ?>
            </section>    
            <!-- FIN DEL SLAYER -->
            <!-- SECCION DE EN MEDIO -->
            <section class="slice bg-2 p-15">
                <div class="cta-wr">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8">
                                <h1>
                                    <strong>Boomerang Bootstrap Template</strong> delivers content beyond the desktop. Make it yours!
                                </h1>
                            </div>
                            <div class="col-md-4">
                                <a class="btn btn-one btn-lg pull-right" title="" href="" target="blank">
                                    <i class="fa fa-bolt"></i> Get started now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- fin de la seción de enemdio -->

            <section class="slice bg-3">
                <div class="w-section inverse">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="w-box inverse">
                                    <div class="figure">
                                        <img alt="" src="images/prv/wk-big-img-7.jpg" class="img-responsive">
                                    </div>
                                    <h2>Lovely template design</h2>
                                    <p>
                                        Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.
                                    </p>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="w-box inverse">
                                    <div class="figure">
                                        <img alt="" src="images/prv/wk-big-img-8.jpg" class="img-responsive">
                                    </div>
                                    <h2>Awesome features</h2>
                                    <p>
                                        Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="slice relative animate-hover-slide bg-3 no-padding">
                <div class="w-section inverse">
                    <div class="container">
                        <h3 class="section-title">NUESTROS SERVICIOS</h3>
                        <div id="carouselWork" class="carousel-3 slide animate-hover-slide">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <div class="row">
                                        <?php
                                        include './servicios.php';
                                        ?>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- seccion de mi companania -->
            <section class="slice bg-3 no-padding">
                <div class="w-section inverse">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7">
                                <?php include './compania.php'; ?>
                            </div>
                            <div class="col-md-5">
                                <h3 class="section-title">NUESTRAS EXPERIENCIAS</h3>
                                <div class="widget">
                                    <div class="panel-group" id="accordion">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" class="collapsed">
                                                        Web design
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseOne" class="panel-collapse collapse" style="height: 0px;">
                                                <div class="panel-body">
                                                    <p>
                                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" class="collapsed">
                                                        Software development
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseTwo" class="panel-collapse collapse" style="height: 0px;">
                                                <div class="panel-body">
                                                    <p>
                                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" class="">
                                                        Search engine optimization
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseThree" class="panel-collapse in" style="height: auto;">
                                                <div class="panel-body">
                                                    <p>
                                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>    
            </section>
            <!-- fin de mi compania -->

            <section class="slice bg-3">
                <div class="w-section inverse">
                    <div class="container">
                        <h3 class="section-title">NUESTROS CLIENTES</h3>
                        <div class="row">
                            <?php include './clientes.php'; ?>
                        </div>
                    </div>
                </div>
            </section>    <footer class="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="col">
                                <h4>Contact us</h4>
                                <ul>
                                    <li>5th Avenue, New York - United States</li>
                                    <li>Phone: +10 724 1234 567 | Fax: +10 724 1234 567 </li>
                                    <li>Email: <a href="mailto:hello@example.com" title="Email Us">hello@example.com</a></li>
                                    <li>Skype: <a href="skype:my.business?call" title="Skype us">my-business</a></li>
                                    <li>Creating great templates is our passion</li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="col">
                                <h4>Mailing list</h4>
                                <p>Sign up if you would like to receive occasional treats from us.</p>
                                <form class="form-inline">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Your email address...">
                                        <span class="input-group-btn">
                                            <button class="btn btn-two" type="button">Go!</button>
                                        </span>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="col col-social-icons">
                                <h4>Follow us</h4>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-skype"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                                <a href="#"><i class="fa fa-youtube-play"></i></a>
                                <a href="#"><i class="fa fa-flickr"></i></a>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="col">
                                <h4>About us</h4>
                                <p>
                                    Boomerang Bootstrap Template is made with love and passion for your own business.
                                    <br><br>
                                    <a href="#" class="btn btn-two">Try it now!</a>
                                </p>
                            </div>
                        </div>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-lg-9 copyright">
                            2013 © Web Pixels. All rights reserverd. 
                            <a href="#">Terms of use</a> | 
                            <a href="#">Privacy policy</a>
                        </div>
                        <div class="col-lg-3 footer-logo">

                        </div>
                    </div>
                </div>
            </footer>
        </div>

        <!-- JavaScript -->
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/modernizr.custom.js"></script>
        <script type="text/javascript" src="js/jquery.mousewheel-3.0.6.pack.js"></script>
        <script type="text/javascript" src="js/jquery.cookie.js"></script>
        <script type="text/javascript" src="js/jquery.easing.js"></script>

        <!--[if lt IE 9]>
            <script src="js/html5shiv.js"></script>
            <script src="js/respond.min.js"></script>
        <![endif]-->

        <!-- Plugins -->
        <script type="text/javascript" src="assets/hover-dropdown/bootstrap-hover-dropdown.min.js"></script>
        <script type="text/javascript" src="assets/masonry/masonry.js"></script>
        <script type="text/javascript" src="assets/page-scroller/jquery.ui.totop.min.js"></script>
        <script type="text/javascript" src="assets/mixitup/jquery.mixitup.js"></script>
        <script type="text/javascript" src="assets/mixitup/jquery.mixitup.init.js"></script>
        <script type="text/javascript" src="assets/fancybox/jquery.fancybox.pack.js?v=2.1.5"></script>
        <script type="text/javascript" src="assets/easy-pie-chart/jquery.easypiechart.js"></script>
        <script type="text/javascript" src="assets/waypoints/waypoints.min.js"></script>
        <script type="text/javascript" src="assets/sticky/jquery.sticky.js"></script>
        <script type="text/javascript" src="js/jquery.wp.custom.js"></script>
        <script type="text/javascript" src="js/jquery.wp.switcher.js"></script><script src="assets/layerslider/js/greensock.js" type="text/javascript"></script>

        <!-- LayerSlider script files -->
        <script src="assets/layerslider/js/layerslider.transitions.js" type="text/javascript"></script>
        <script src="assets/layerslider/js/layerslider.kreaturamedia.jquery.js" type="text/javascript"></script>
        <script src="JsPrincipal/index.js" type="text/javascript"></script>
        <!-- Initializing the slider -->
        <script>
            jQuery("#layerslider").layerSlider({
                pauseOnHover: true,
                autoPlayVideos: false,
                skinsPath: 'assets/layerslider/skins/',
                responsive: false,
                responsiveUnder: 1280,
                layersContainer: 1280,
                skin: 'borderlessdark3d',
                hoverPrevNext: true,
            });
        </script>

    </body>
</html>