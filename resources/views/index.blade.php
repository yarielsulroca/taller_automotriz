<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->
<html xmlns="http://www.w3.org/1999/html"> <!--<![endif]-->
<head>
    <meta charset="utf-8" />
    <title>
        Sitema_Control_Vehiculos
    </title>
    <meta name="keywords" content="HTML5,CSS3,Template" />
    <meta name="description" content="" />
    <meta name="Author" content="Yariel Sulroca" />
    <meta name="Email" content="sulroca@gmail.com" />

    <!-- mobile settings -->
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

    <!-- WEB FONTS : use %7C instead of | (pipe)  -->
    <!--link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400%7CRaleway:300,400,500,600,700%7CLato:300,400,400italic,600,700" rel="stylesheet" type="text/css" /-->

    <link href="{{asset('font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />

    <!-- CORE CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />

    <!-- THEME CSS -->
    <link href="{{asset('css/essentials.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/layout.css')}}" rel="stylesheet" type="text/css" />

    <!-- PAGE LEVEL SCRIPTS -->
    <link href="{{asset('css/header-1.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/blue.css')}}" rel="stylesheet" type="text/css" id="color_scheme" />

    <!-- REVOLUTION SLIDER -->
    <link href="{{asset('css/extralayers.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/settings.css')}}" rel="stylesheet" type="text/css" />
</head>

<!--
    AVAILABLE BODY CLASSES:

    smoothscroll 			= create a browser smooth scroll
    enable-animation		= enable WOW animations

    bg-grey					= grey background
    grain-grey				= grey grain background
    grain-blue				= blue grain background
    grain-green				= green grain background
    grain-blue				= blue grain background
    grain-orange			= orange grain background
    grain-yellow			= yellow grain background

    boxed 					= boxed layout
    pattern1 ... patern11	= pattern background
    menu-vertical-hide		= hidden, open on click

    BACKGROUND IMAGE [together with .boxed class]
    data-background="assets/images/boxed_background/1.jpg"
-->
<body class="smoothscroll enable-animation">

    <div id="wrapper">

        <div id="header" class="sticky transparent clearfix">

            <!-- TOP NAV -->
            <header id="topNav">
                <div class="container">

                    <!-- Mobile Menu Button -->
                    <button class="btn btn-mobile" data-toggle="collapse" data-target=".nav-main-collapse">
                        <i class="fa fa-bars"></i>
                    </button>



                    <!-- Logo -->
                    <a class="logo pull-left" href="index.html">
                        <img src="assets/images/logo_light.png" alt="" /> <!-- light logo -->
                        <img src="assets/images/logo_dark.png" alt="" /> <!-- dark logo -->
                    </a>

                    <!--
                        Top Nav

                        AVAILABLE CLASSES:
                        submenu-dark = dark sub menu
                    -->
                    <div class="navbar-collapse pull-right nav-main-collapse collapse submenu-dark">
                        <nav class="nav-main">

                            <!--
                                NOTE

                                For a regular link, remove "dropdown" class from LI tag and "dropdown-toggle" class from the href.
                                Direct Link Example:

                                <li>
                                    <a href="#">HOME</a>
                                </li>
                            -->
                            <ul id="topMain" class="nav nav-pills nav-main">
                                <li class="dropdown active"><!-- HOME -->
                                    <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">
                                        Inicio
                                    </a>
                                </li>

                                    @if (Route::has('login'))
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                        </li>
                                    @endif

                                <li class="dropdown"><!-- HOME -->
                                    <a class="" href="#">
                                        Seguimiento_Vehículo
                                    </a>
                                </li>

                            </ul>

                        </nav>
                    </div>

                </div>
            </header>
            <!-- /Top Nav -->

        </div>

        <!-- REVOLUTION SLIDER -->
        <section id="slider" class="fullwidthbanner-container roundedcorners">
            <!--
                Navigation Styles:

                    data-navigationStyle="" theme default navigation

                    data-navigationStyle="preview1"
                    data-navigationStyle="preview2"
                    data-navigationStyle="preview3"
                    data-navigationStyle="preview4"

                Bottom Shadows
                    data-shadow="1"
                    data-shadow="2"
                    data-shadow="3"

                Slider Height (do not use on fullscreen mode)
                    data-height="300"
                    data-height="350"
                    data-height="400"
                    data-height="450"
                    data-height="500"
                    data-height="550"
                    data-height="600"
                    data-height="650"
                    data-height="700"
                    data-height="750"
                    data-height="800"
            -->
            <div class="fullscreenbanner" data-navigationStyle="preview4">
                <ul class="hide">

                    <!-- SLIDE   MECANICA GENERAL 1 -->
                    <li data-transition="random" data-slotamount="1" data-masterspeed="1000" data-saveperformance="off" data-title="Slide title 1" data-thumb="{{asset('images/taller_mecanica.jpg')}}">

                        <img src="{{asset('images/taller_mecanica.jpg')}}" data-lazyload="{{asset('images/taller_mecanica.jpg')}}" alt="" data-bgfit="cover" data-bgposition="center bottom" data-bgrepeat="no-repeat" />

                        <div class="overlay dark-7"><!-- dark overlay [1 to 9 opacity] --></div>

                        <div class="tp-caption customin ltl tp-resizeme text_white"
                             data-x="center"
                             data-y="180"
                             data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                             data-speed="800"
                             data-start="1000"
                             data-easing="easeOutQuad"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.01"
                             data-endelementdelay="0.1"
                             data-endspeed="1000"
                             data-endeasing="Power4.easeIn" style="z-index: 10;">
                            <span class="weight-300">Mecánica General / Pintura y Chapiesteía / Electrónica Avanzada  / Tienda Especialicada </span>
                        </div>

                        <div class="tp-caption customin ltl tp-resizeme large_bold_white"
                             data-x="center"
                             data-y="230"
                             data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                             data-speed="800"
                             data-start="1200"
                             data-easing="easeOutQuad"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.01"
                             data-endelementdelay="0.1"
                             data-endspeed="1000"
                             data-endeasing="Power4.easeIn" style="z-index: 20;">
                            Nuestro Taller Automotriz cuenta con:
                        </div>

                        <div class="tp-caption customin ltl tp-resizeme small_light_white"
                             data-x="center"
                             data-y="350"
                             data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                             data-speed="800"
                             data-start="1400"
                             data-easing="easeOutQuad"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.01"
                             data-endelementdelay="0.1"
                             data-endspeed="1000"
                             data-endeasing="Power4.easeIn" style="z-index: 10; width: 750px; max-width: 750px; white-space: normal; text-align:center;">
                            Excelente atención , Riguroso Cuidado del Vehículo, Lugar de Primera,
                        </div>

                        <!--div class="tp-caption customin ltl tp-resizeme"
                             data-x="center"
                             data-y="438"
                             data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                             data-speed="800"
                             data-start="1550"
                             data-easing="easeOutQuad"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.01"
                             data-endelementdelay="0.1"
                             data-endspeed="1000"
                             data-endeasing="Power4.easeIn" style="z-index: 10;">
                            <a href="#purchase" class="btn btn-default btn-lg">
                                <span>Purchase Smarty Now</span>
                            </a>
                        </div-->

                    </li>

                    <!-- SLIDE MECANICA GENERAL 2 -->
                    <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-saveperformance="off" data-title="Slide title 2" data-thumb="{{asset('images/taller_general2.jpg')}}">

                        <img src="{{asset('images/taller_general.jpg')}}" data-lazyload="{{asset('images/taller_mecanica3.jpg')}}" alt="video" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">

                        <div class="tp-caption tp-fade fadeout fullscreenvideo"
                             data-x="0"
                             data-y="0"
                             data-speed="1000"
                             data-start="1100"
                             data-easing="Power4.easeOut"
                             data-elementdelay="0.01"
                             data-endelementdelay="0.1"
                             data-endspeed="1500"
                             data-endeasing="Power4.easeIn"
                             data-autoplay="true"
                             data-autoplayonlyfirsttime="false"
                             data-nextslideatend="true"
                             data-volume="mute"
                             data-forceCover="1"
                             data-aspectratio="16:9"
                             data-forcerewind="on" style="z-index: 2;">

                            <div class="overlay dark-4"><!-- dark overlay [1 to 9 opacity] --></div>



                        </div>

                        <div class="tp-caption customin ltl tp-resizeme text_white"
                             data-x="center"
                             data-y="180"
                             data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                             data-speed="800"
                             data-start="1000"
                             data-easing="easeOutQuad"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.01"
                             data-endelementdelay="0.1"
                             data-endspeed="1000"
                             data-endeasing="Power4.easeIn" style="z-index: 3;">
                            <span class="weight-300">Increibles Mecanicos</span>
                        </div>

                        <div class="tp-caption customin ltl tp-resizeme large_bold_white"
                             data-x="center"
                             data-y="230"
                             data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                             data-speed="800"
                             data-start="1200"
                             data-easing="easeOutQuad"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.01"
                             data-endelementdelay="0.1"
                             data-endspeed="1000"
                             data-endeasing="Power4.easeIn" style="z-index: 3;">
                            Majestuosidad y Calidad en Cada Trabajo Realizado
                        </div>

                        <div class="tp-caption customin ltl tp-resizeme small_light_white"
                             data-x="center"
                             data-y="350"
                             data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                             data-speed="800"
                             data-start="1400"
                             data-easing="easeOutQuad"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.01"
                             data-endelementdelay="0.1"
                             data-endspeed="1000"
                             data-endeasing="Power4.easeIn" style="z-index: 3; width: 750px; max-width: 750px; white-space: normal; text-align:center;">
                           Mejores Electronicos Para vehículos Modernos
                        </div>

                        <!--div class="tp-caption customin ltl tp-resizeme"
                             data-x="center"
                             data-y="438"
                             data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                             data-speed="800"
                             data-start="1550"
                             data-easing="easeOutQuad"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.01"
                             data-endelementdelay="0.1"
                             data-endspeed="1000"
                             data-endeasing="Power4.easeIn" style="z-index: 3;">
                            <a href="#purchase" class="btn btn-default btn-lg">
                                <span>Purchase Smarty Now</span>
                            </a>
                        </div-->

                    </li>

                    <!-- SLIDE Pintura 1  -->
                    <li data-transition="random" data-slotamount="1" data-masterspeed="1000" data-saveperformance="off" data-title="Slide title 3" data-thumb="{{asset('images/taller_pintura1.jpg')}}">

                        <img src="{{asset('images/taller_pintura1.jpg')}}" data-lazyload="{{asset('images/taller_pintura1.jpg')}}" alt="" data-bgfit="cover" data-bgposition="center bottom" data-bgrepeat="no-repeat" />

                        <div class="overlay dark-4"><!-- dark overlay [1 to 9 opacity] --></div>

                        <div class="tp-caption very_large_text lfb ltt tp-resizeme"
                             data-x="right" data-hoffset="-50"
                             data-y="center" data-voffset="-50"
                             data-speed="600"
                             data-start="800"
                             data-easing="Power4.easeOut"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.01"
                             data-endelementdelay="0.1"
                             data-endspeed="500"
                             data-endeasing="Power4.easeIn">
                            Capillas Para Pintura de su Vehículo
                        </div>

                        <div class="tp-caption medium_light_white lfb ltt tp-resizeme"
                             data-x="right" data-hoffset="-100"
                             data-y="center" data-voffset="10"
                             data-speed="600"
                             data-start="900"
                             data-easing="Power4.easeOut"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.01"
                             data-endelementdelay="0.1"
                             data-endspeed="500"
                             data-endeasing="Power4.easeIn">
                            Calidad Esepcional, Lo mejor en Pintura,<br/>


                        </div>

                    </li>

                    <!-- SLIDE Pintura 2  -->
                    <li data-transition="random" data-slotamount="1" data-masterspeed="1000" data-saveperformance="off" data-title="Slide title 3" data-thumb="{{asset('images/taller_pintura3.jpg')}}">

                        <img src="{{asset('images/taller_pintura2.jpg')}}" data-lazyload="{{asset('images/taller_pintura2.jpg')}}" alt="" data-bgfit="cover" data-bgposition="center bottom" data-bgrepeat="no-repeat" />

                        <div class="overlay dark-4"><!-- dark overlay [1 to 9 opacity] --></div>

                        <div class="tp-caption very_large_text lfb ltt tp-resizeme"
                             data-x="right" data-hoffset="-50"
                             data-y="center" data-voffset="-50"
                             data-speed="600"
                             data-start="800"
                             data-easing="Power4.easeOut"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.01"
                             data-endelementdelay="0.1"
                             data-endspeed="500"
                             data-endeasing="Power4.easeIn">
                            Pintura Y Chapistería
                        </div>

                        <div class="tp-caption medium_light_white lfb ltt tp-resizeme"
                             data-x="right" data-hoffset="-100"
                             data-y="center" data-voffset="10"
                             data-speed="600"
                             data-start="900"
                             data-easing="Power4.easeOut"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.01"
                             data-endelementdelay="0.1"
                             data-endspeed="500"
                             data-endeasing="Power4.easeIn">
                            Calidad Esepcional, Lo mejor en Pintura,<br/>
                            No podras Olvidarnos <br/>

                        </div>

                    </li>
                    <!-- SLIDE Pintura 3  -->
                    <li data-transition="random" data-slotamount="1" data-masterspeed="1000" data-saveperformance="off" data-title="Slide title 3" data-thumb="{{asset('images/taller_pintura3.jpg')}}">

                        <img src="{{asset('images/taller_pintura3.jpg')}}" data-lazyload="{{asset('images/taller_pintura3.jpg')}}" alt="" data-bgfit="cover" data-bgposition="center bottom" data-bgrepeat="no-repeat" />

                        <div class="overlay dark-4"><!-- dark overlay [1 to 9 opacity] --></div>

                        <div class="tp-caption very_large_text lfb ltt tp-resizeme"
                             data-x="right" data-hoffset="-50"
                             data-y="center" data-voffset="-50"
                             data-speed="600"
                             data-start="800"
                             data-easing="Power4.easeOut"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.01"
                             data-endelementdelay="0.1"
                             data-endspeed="500"
                             data-endeasing="Power4.easeIn">
                            Técnica y Equipamiento
                        </div>

                        <div class="tp-caption medium_light_white lfb ltt tp-resizeme"
                             data-x="right" data-hoffset="-100"
                             data-y="center" data-voffset="10"
                             data-speed="600"
                             data-start="900"
                             data-easing="Power4.easeOut"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.01"
                             data-endelementdelay="0.1"
                             data-endspeed="500"
                             data-endeasing="Power4.easeIn">
                            Herramientas nuevas Importadas, Con la mejor calidad,<br/>
                            Solo para satisfaces sus necesidades <br/>

                        </div>

                    </li>

                </ul>
            </div>
        </section>
        <!-- /REVOLUTION SLIDER -->

    </div>

    <!-- SCROLL TO TOP -->
    <a href="#" id="toTop"></a>
    <!-- /SCROLL TO TOP -->

    <!-- PRELOADER -->
    <div id="preloader">
        <div class="inner">
            <span class="loader"></span>
        </div>
    </div>
    <!-- /PRELOADER -->

    <!-- FOOTER -->
    <footer id="footer">
        <div class="container">

            <div class="row">

                <div class="col-md-3">
                    <!-- Footer Logo -->
                    <img class="footer-logo" src="" alt="" />

                    <!-- Small Description -->
                    <p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>

                    <!-- Contact Address -->
                    <address>
                        <ul class="list-unstyled">
                            <li class="footer-sprite address">
                                PO Box 21132<br>
                                Here Weare St, Melbourne<br>
                                Vivas 2355 Australia<br>
                            </li>
                            <li class="footer-sprite phone">
                                Telefono: 1-800-565-2390
                            </li>
                            <li class="footer-sprite email">
                                <a href="mailto:oeberroa86@gmail.com">oeberroa86@gmail.com</a>
                            </li>
                        </ul>
                    </address>
                    <!-- /Contact Address -->

                </div>

                <div class="col-md-3">

                    <!-- Latest Blog Post -->
                    <h4 class="letter-spacing-1">Ultimas Noticias</h4>
                    <ul class="footer-posts list-unstyled">
                        <li>
                            <a href="#">Donec sed odio dui. Nulla vitae elit libero, a pharetra augue</a>
                            <small>29 June 2015</small>
                        </li>
                        <li>
                            <a href="#">Nullam id dolor id nibh ultricies</a>
                            <small>29 June 2015</small>
                        </li>
                        <li>
                            <a href="#">Duis mollis, est non commodo luctus</a>
                            <small>29 June 2015</small>
                        </li>
                    </ul>
                    <!-- /Latest Blog Post -->

                </div>

                <div class="col-md-2">


                </div>

                <div class="col-md-4">

                    <!-- Newsletter Form -->
                    <h4 class="letter-spacing-1">Mantenga el contacto</h4>
                    <p>Suscribete para estar al tanto de los eventos nuevos</p>

                    <form class="validate" action="php/newsletter.php" method="post" data-success="Subscribed! Thank you!" data-toastr-position="bottom-right">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                            <input type="email" id="email" name="email" class="form-control required" placeholder="Enter your Email">
									<span class="input-group-btn">
										<button class="btn btn-success" type="submit">Subscribe</button>
									</span>
                        </div>
                    </form>
                    <!-- /Newsletter Form -->

                    <!-- Social Icons -->
                    <div class="margin-top-20">
                        <a href="#" class="social-icon social-icon-border social-facebook pull-left" data-toggle="tooltip" data-placement="top" title="Facebook">

                            <i class="fa fa-facebook"></i>
                            <i class="fa fa-facebook"></i>
                        </a>

                        <a href="#" class="social-icon social-icon-border social-twitter pull-left" data-toggle="tooltip" data-placement="top" title="Twitter">
                            <i class="fa fa-twitter"></i>
                            <i class="fa fa-twitter"></i>
                        </a>

                        <a href="#" class="social-icon social-icon-border social-gplus pull-left" data-toggle="tooltip" data-placement="top" title="Google plus">
                            <i class="fa fa-google"></i>
                            <i class="fa fa-google"></i>
                        </a>

                        <a href="#" class="social-icon social-icon-border social-linkedin pull-left" data-toggle="tooltip" data-placement="top" title="Linkedin">
                            <i class="fa fa-linkedin"></i>
                            <i class="fa fa-linkedin"></i>
                        </a>

                        <a href="#" class="social-icon social-icon-border social-rss pull-left" data-toggle="tooltip" data-placement="top" title="Rss">
                            <i class="fa fa-rss"></i>
                            <i class="fa fa-rss"></i>
                        </a>

                    </div>
                    <!-- /Social Icons -->

                </div>

            </div>

        </div>

        <div class="copyright">
            <div class="container">
                <ul class="pull-right nomargin list-inline mobile-block">
                    <li><a href="#">Terminos &amp; Condiciones</a></li>
                    <li>&bull;</li>
                    <li><a href="#">Privacidad</a></li>
                </ul>
                &copy; Todos los derechos reservados, Eventos en Cuba
            </div>
        </div>
    </footer>
    <!-- /FOOTER -->

    <!-- JAVASCRIPT FILES -->
    <script type="text/javascript">var plugin_path = '{{asset('js/plugins')}}/';</script>
    <script type="text/javascript" src="{{asset('js/jquery-2.1.4.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/scripts.js')}}"></script>

    <!-- REVOLUTION SLIDER -->
    <script type="text/javascript" src="{{asset('js/jquery.themepunch.tools.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.themepunch.revolution.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/demo.revolution_slider.js')}}"></script>
</body>
</html>