<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- TITLE OF SITE -->
        <title>FUSION Responsive</title>

        <!-- Meta -->
        <meta charset="utf-8">
        <meta name="description" content="Free Responsive Animated Portfolio Template" />
        <meta name="keywords" content="portfolio, template, responsive, bootstrap" />
        <meta name="developer" content="TemplateOcean">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="robots" content="noindex">

        <!-- FAV AND TOUCH ICONS   -->
        <link rel="icon" href="images/favicon.ico">
        <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">

        <!-- GOOGLE FONTS -->
        <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,700,900' rel='stylesheet' type='text/css'>
        <!-- font-family: 'Merriweather', serif; -->
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
        <!-- font-family: 'Open Sans', sans-serif; -->

        <!-- BOOTSTRAP CSS -->
        <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

        <!-- Image Slider -->
        <link href="{{ asset('css/custom/owl.carousel.css') }}" rel="stylesheet">

        <!-- FONT ICONS -->
        <link href="{{ asset('icons/rik-icons/styles.css') }}" rel="stylesheet">

        <!--   COUSTOM CSS link  -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">

        <!--[if lt IE 9]>
            <script src="js/plagin-js/html5shiv.js"></script>
            <script src="js/plagin-js/respond.min.js"></script>
        <![endif]-->


                <!-- Start: Navbar  Area
        ============================= -->
        <nav class="navbar navbar-fixed-top main-navbar-top navbar-top-js" id="main-navbar-top" >
            <div class="container relative">
                <div class="navbar-header">

                    <!-- Menu Button show Mobile view -->
                    <button type="button" class="nav-trigger nav-trigger-animate"  data-target="#js-navbar-menu">
                        <span aria-hidden="true" class="icon"></span>
                    </button>

                    <!-- TEMPLATE LOGO LIGHT -->
                    <a class="navbar-brand light-logo btn-scroll" href="#home-section"><img src="images/logo.png" alt="" class="img-responsive"></a>

                </div>

                <!-- Main Menu List -->
                <div class="navbar-collapse" id="js-navbar-menu">
                    <ul class="nav navbar-nav navbar-right" id="navbar-nav">
                        <li><a class="btn-nav" href="#services-section">services</a></li>
                        <li><a class="btn-nav" href="#portfolio-section">portfolio</a></li>
                        <li><a class="btn-nav" href="#testimonial-section">testimonials</a></li>
                        <li><a class="btn-nav" href="#team-section">team</a></li>
                        <li><a class="btn-nav" href="#contact-us-section">Contact Us</a></li>
                    </ul>
                </div>


                <!-- Right Side Navigation Button -->
                <div class="navbar-collapse-right hidden-xs " >
                    <ul class="nav navbar-nav navbar-right btn-scroll">
                        <li><a class="btn-nav" href="#contact-us-section">Get in Teach <i class="icon icon-arrow-right"></i></a></li>
                    </ul>
                </div>

            </div>
        </nav>
        <!-- End: Navbar Area
        ============================= -->




    </head>
    <body class="style-1">

        <!-- Start: Preloader Section
        =================================== -->
        <div id="main-preloader" class="main-preloader semi-dark-background">
            <div class="container full-height">
                <div class="row full-height">
                    <div class="full-height col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12">

                        <div class="main-preloader-inner">

                            <h1 class="preloader-percentage">
                                <span class="preloader-percentage-text">0%</span> <!-- Show Percentage Number -->
                                <!-- <span class="percentage">%</span> -->
                            </h1>
                            <div class="preloader-bar-outer">
                                <div class="preloader-bar"></div> <!-- Percentage Precess Bar -->
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- End: Preloader Section
        =================================== -->

    <div id="app">
        <main class="py-4">
            @yield('content')
        </main>
    </div>
 <!-- SCRIPTS
        ========================================-->
        <script src="{{ asset('js/jquery-1.11.3.js') }}" defer></script>
        <script src="{{ asset('js/preloader.js') }}" defer></script>
        <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}" defer></script>
        <script src="{{ asset('js/plagin.js') }}" defer></script>

        <!-- Custom Script
        ==========================================-->
        <script src="{{ asset('js/custom-scripts.js') }}" defer></script>
    </body>
</html>
