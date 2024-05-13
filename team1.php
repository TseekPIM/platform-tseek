<?php
// include('protect.php');
//  echo $_SESSION['nome'];
//  echo $_GET['id'];
// print_r($_SESSION);
require_once('class/Classes.php');
//  $objHelper = new Helper();
//  $objHelper->logado();
 

 
 $objEquipe = new Equipe();
//  $id_equipe = $_SESSION['id'];
//  $Equipe = $Equipe->Mostrar($_SESSION['id']);

 
?>
<!doctype html>
<html class="no-js" lang="pt-br">

<head>
    <title>TSeeK - E-Sports</title>
    <meta name="author" content="TSeeK">
    <meta name="description" content="TSeeK - eSports">
    <meta name="keywords" content="TSeeK - eSports " />


    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--==============================
	   Google Web Fonts
	============================== -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&family=Montserrat:wght@700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    <!-- logo aba -->
    <link rel="apple-touch-icon" sizes="57x57" href="assets/img/logo1.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/img/logo1.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/img/logo1.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/logo1.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/img/logo1.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/img/logo1.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/img/logo1.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/img/logo1.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/logo1.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/img/logo1.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/logo1.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/logo1.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/logo1.png">
    <link rel="manifest" href="assets/img/favicons/manifest.json">

    <!--==============================
	    All CSS File
	============================== -->
    <!-- menu lateral -->
    <link rel="stylesheet" href="sidebar/css/style.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Fontawesome Icon -->
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <!-- Layer Slider -->
    <link rel="stylesheet" href="assets/css/layerslider.min.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="assets/css/magnific-popup.min.css">
    <!-- Slick Slider -->
    <link rel="stylesheet" href="assets/css/slick.min.css">
    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Theme Color CSS -->
    <link rel="stylesheet" href="assets/css/theme-color1.css">


</head>

<body>

    <!--********************************
   		Codigo começa aqui
	******************************** -->


    <!--==============================
     Preloader
  ==============================-->
  <div class="preloader  ">
    <!-- <button class="vs-btn preloaderCls">Cancel Preloader </button> -->
    <div class="preloader-inner">
        <div class="loader-logo">
            <!-- <img src="assets/img/logoo.png" alt="Loader Image"> -->
        </div>
        <div class="loader-wrap pt-4">
            <span class="loader"></span>
        </div>
    </div>
</div>
    <!--========================
    Icons ao lado superior direito
========================-->
<div class="sticky-header-wrap sticky-header bg-light-dark py-1 py-sm-2 py-lg-1">
    <div class="container position-relative">
        <div class="row align-items-center">
            <div class="col-5 col-md-3">
                <div class="logo">
                    <a href="index.php"><img src="assets/img/logo-2.png" alt="TSeeK"></a>
                </div>
            </div>
            <div class="col-7 col-md-9 text-end position-static">
                <nav class="main-menu menu-sticky1 d-none d-lg-block link-inherit">
                    <ul>
                        <li class="menu-item-has-children">
                            <a href="vagas1.php">Vagas</a>
                            <!-- <ul class="sub-menu">
                                <li><a href="#">Ação</a></li>
                                <li><a href="#">Aventura</a></li>
                                <li><a href="#">Battle Royale</a></li>
                                <li><a href="#">Esportes</a></li>
                                <li><a href="#">Estratégias</a></li>
                                <li><a href="#">FPS</a></li>
                                <li><a href="#">Luta</a></li>
                                <li><a href="#">MOBA</a></li>
                                <li><a href="#">RPG</a></li>
                                <li><a href="#">Tiro</a></li>
                            </ul> -->
                        </li>
                        <li class="mega-menu-wrap menu-item-has-children">
                            <a href="player1.php">Jogadores</a>
                            <!-- <ul class="mega-menu">
                                <li><a href="#">RANK</a>
                                    <ul>
                                        <li><a href="#"></a>
                                        <li><a href="#"></a>
                                        <li><a href="#"></a>
                                        <li><a href="#"></a>
                                        <li><a href="#"></a>
                                        <li><a href="#"></a>
                                        <li><a href="#"></a>
                                        <li><a href="#"></a>
                                    </ul>
                                </li>
                                <li><a href="#">Modalidade</a>
                                    <ul>
                                        <li><a href="#"></a>
                                        <li><a href="#"></a>
                                        <li><a href="#"></a>
                                        <li><a href="#"></a>
                                    </ul>
                            </ul> -->
                        </li>
                        <li class="mega-menu-wrap menu-item-has-children">
                            <a href="team1.php">Times</a>
                            <!-- <ul class="mega-menu">
                                <li><a href="#">RANK</a>
                                    <ul>
                                        <li><a href="#"></a>
                                        <li><a href="#"></a>
                                        <li><a href="#"></a>
                                        <li><a href="#"></a>
                                        <li><a href="#"></a>
                                        <li><a href="#"></a>
                                        <li><a href="#"></a>
                                        <li><a href="#"></a>
                                    </ul>
                                </li>
                                <li><a href="#">Modalidade</a>
                                    <ul>
                                        <li><a href="#"></a>
                                        <li><a href="#"></a>
                                        <li><a href="#"></a>
                                        <li><a href="#"></a>
                                    </ul>
                            </ul> -->
                        </li>
                        <li class="menu-item-has-children">
                            <a href="#">Planos</a>
                        </li>
                    </ul>
            </div>
        </div>
    </div>
</div>
<!--==============================
    Sidemenu
============================== -->
<div class="sidemenu-wrapper d-none d-lg-block  ">
        <div class="sidemenu-content bg-light-dark">
            <button class="closeButton border-theme text-theme bg-theme-hover sideMenuCls"><i
                    class="far fa-times"></i></button>

            <nav id="sidebar">
                <div class="img bg-wrap text-center py-4" style="background-color: transparent;">
                    <div class="user-logo">
                        <div class="img" style="background-image: url(assets/img/team/team-1-1.png);"></div>
                        <h3><?php echo $_SESSION['nome']; ?></h3>
                    </div>
                </div>
                <ul class="list-unstyled components mb-5">
                    <li class="active">
                        <a href="index-att.php"><span class="fa fa-home mr-3"></span> Inicio</a>
                    </li>
                    <li class="active">
                        <a href="player-details1.php?id=<?php echo $_SESSION['id']; ?>"><span class="fa fa-user mr-3"></span> Perfil</a>
                    </li>
                    <li>
                        <a href="#"><span class="fa fa-trophy mr-3"></span> Melhores Jogadas</a>
                    </li>
                    <li>
                        <a href="#"><span class="fa fa-cog mr-3"></span> Configurações</a>
                    </li>
                    <li>
                        <a href="index.php"><span class="fa fa-sign-out mr-3"></span> Desconectar</a>
                    </li>
                </ul>
<!-- <?php //} ?> -->
            </nav>
        </div>
    </div>
    </div>
<!--==============================
Busca
============================== -->
<div class="popup-search-box d-none d-lg-block  ">
    <button class="searchClose border-theme text-theme"><i class="fal fa-times"></i></button>
    <form action="#">
        <input type="text" class="border-theme" placeholder="Buscar">
        <button type="submit"><i class="fal fa-search"></i></button>
    </form>
</div>
<!--==============================
Mobile Menu
============================== -->
<div class="vs-menu-wrapper">
    <div class="vs-menu-area bg-dark">
        <button class="vs-menu-toggle"><i class="fal fa-times"></i></button>
        <div class="mobile-logo">
            <a href="index.php"><img src="assets/img/logo1.png" alt="TSeeK"></a>
        </div>
        <div class="vs-mobile-menu link-inherit"></div><!-- Menu Will Append With Javascript -->
    </div>
</div>
<!--==============================
  (menu principal)
==============================-->
<header class="header-wrapper header-layout1 position-absolute top-0 start-0 w-100 z-index-step1">
    <div class="header-top">
        <div class="container">
            <div class="row py-md-2">
                <div class="col-sm-6 d-none d-md-block">
                    <!-- <p class="mb-0 fs-xs text-white">Bem vindo a sua <a class="text-inherit" href="team.html"><u class=" fw-bold">Esports team</u></a></p> -->
                </div>
                <div class="col-sm-6 text-end d-none d-md-block">
                    <ul class="social-links fs-xs text-white">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitch"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="header-main">
        <div class="container position-relative">
            <div class="bg-dark px-50">
                <div class="row align-items-center">
                    <div class="col-6 col-lg-4 d-block d-xl-none py-3 py-xl-0">
                        <div class="header-logo">
                            <a href="index-att.php"><img src="assets/img/logo1.png" alt="TSeeK"></a>
                        </div>
                    </div>
                    <div class="col-6 col-lg-8 col-xl-5 text-end text-xl-start">
                        <nav class="main-menu menu-style1 mobile-menu-active" data-expand="992">
                            <ul>
                                <li class="menu-item-has-children">
                                    <a href="vagas1.php">Vagas</a>
                                    <!-- <ul class="sub-menu">
                                        <li><a href="#">Ação</a></li>
                                        <li><a href="#">Aventura</a></li>
                                        <li><a href="#">Battle Royale</a></li>
                                        <li><a href="#">Esportes</a></li>
                                        <li><a href="#">Estratégias</a></li>
                                        <li><a href="#">FPS</a></li>
                                        <li><a href="#">Luta</a></li>
                                        <li><a href="#">MOBA</a></li>
                                        <li><a href="#">RPG</a></li>
                                        <li><a href="#">Tiro</a></li>
                                    </ul> -->
                                </li>
                                <li class="mega-menu-wrap menu-item-has-children">
                                    <a href="player1.php">Jogadores</a>
                                    <!-- <ul class="mega-menu">
                                        <li><a href="#">RANK</a>
                                            <ul>
                                                <li><a href="#"></a>
                                                <li><a href="#"></a>
                                                <li><a href="#"></a>
                                                <li><a href="#"></a>
                                                <li><a href="#"></a>
                                                <li><a href="#"></a>
                                                <li><a href="#"></a>
                                                <li><a href="#"></a>
                                            </ul>
                                        </li>
                                        <li><a href="#">Modalidade</a>
                                            <ul>
                                                <li><a href="#"></a>
                                                <li><a href="#"></a>
                                                <li><a href="#"></a>
                                                <li><a href="#"></a>
                                            </ul>
                                    </ul> -->
                                </li>
                                <li class="mega-menu-wrap menu-item-has-children">
                                    <a href="team1.php">Times</a>
                                    <!-- <ul class="mega-menu">
                                        <li><a href="#">RANK</a>
                                            <ul>
                                                <li><a href="#"></a>
                                                <li><a href="#"></a>
                                                <li><a href="#"></a>
                                                <li><a href="#"></a>
                                                <li><a href="#"></a>
                                                <li><a href="#"></a>
                                                <li><a href="#"></a>
                                                <li><a href="#"></a>
                                            </ul>
                                        </li>
                                        <li><a href="#">Modalidade</a>
                                            <ul>
                                                <li><a href="#"></a>
                                                <li><a href="#"></a>
                                                <li><a href="#"></a>
                                                <li><a href="#"></a>
                                            </ul>
                                    </ul> -->
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="planos.html">Planos</a>
                                </li>
                            </ul>
                    </div>
                    <div class="col-md-4 col-lg-2 text-center d-none d-xl-block">
                        <div class="header-logo1">
                            <a href="index.php"><img src="assets/img/logo1.png" alt="TSeeK"></a>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-5 d-none d-xl-block">
                        <div class="header-right d-flex align-items-center justify-content-end">
                            <a href="https://www.twitch.tv/directory" class="vs-btn outline1 d-none d-xl-inline-block"><i
                                    class="fab fa-twitch"></i><strong>Live Streaming</strong></a>
                            <ul class="header-list1 list-style-none ml-30">
                                <li>
                                    <button class="dropdown-toggle" type="button" title="Login">
                                        <a href="login2.php"><img src="assets/img/flag/flag-1.png"
                                                alt="Country Flag" class="flag radius-circle"> </a>
                                    </button>
                                </li>
                                <li>
                                        <button class="searchBoxTggler"><i class="far fa-search"></i></button>
                                </li>
                                <!-- <li>
                                <button class="sideMenuToggler"><i
                                                class="fal fa-grip-horizontal fs-2"></i></button>
                                </li> -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
    <!--==============================
    Fundo titulo
============================== -->
    <div class="breadcumb-wrapper breadcumb-layout1 pt-200 pb-50" data-bg-src="assets/img/breadcumb/breadcumb-1.jpg" data-overlay>
        <div class="container z-index-common">
            <div class="breadcumb-content text-center">
                <h1 class="breadcumb-title h1 text-white my-0">Times</h1>
                <h2 class="breadcumb-bg-title">Teams</h2>
                <ul class="breadcumb-menu-style1 text-white mx-auto fs-xs">
                    <li><a href="index.php"><i class="fal fa-home"></i>Home</a></li>
                    <li class="active">Times</li>
                </ul>
            </div>
        </div>
    </div>
    <!--==============================
    teams Area
    ============================== -->
    <section class="vs-member-area vs-member-layout2 space-top newsletter-pb">
    <div class="container">
            <div class="row justify-content-center">
            <?php
        $equipes = $objEquipe->listar();
        foreach ($equipes as $equipe){
    ?>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="vs-member image-scale-hover">
                        <div class="member-img">
                            <a href="team-details.php?id=<?php echo $equipe->id_equipe; ?>"><img src="assets/img/logos/logo-1-3.png" class="w-100" alt="Member Image"></a>
                        </div>
                        <div class="member-content">
                            <div class="links-wrap text-start position-relative mb-30">
                                <span class="icon-btn3 style-white plus-icon"><i class="far fa-plus text-white"></i></span>
                                <div class="member-links">
                                    <a href="https://web.facebook.com/?locale=pt_BR&_rdc=1&_rdr" class="icon-btn3"><i class="fab fa-facebook"></i></a>
                                    <a href="https://www.twitch.tv/directory" class="icon-btn3"><i class="fab fa-twitch"></i></a>
                                    <a href="https://twitter.com/i/flow/login?input_flow_data=%7B%22requested_variant%22%3A%22eyJsYW5nIjoicHQifQ%3D%3D%22%7D" class="icon-btn3"><i class="fab fa-twitter"></i></a>
                                </div>
                            </div>
                            <h3 class="member-name h5 mb-0 text-white"><a href="team-details.php?id=<?php echo $equipe->id_equipe; ?>"><?php echo $equipe->nome; ?></a></h3>
                            <span class="degi text-white">Mobile Legends</span>
                        </div>
                    </div>
                </div>
                <?php
                    }
               ?>
            </div>
            <div class="pagination-wrapper pagination-layout1 mt-lg-30 mb-30">
                <ul>
                    <li><a href="#" class="active"><span class="text">1</span></a></li>
                    <li><a href="#"><span class='text'>2</span></a></li>
                    <li><a href="#"><span class='text'>3</span></a></li>
                    <li><a href="#"><span class='text'>4</span></a></li>
                </ul>
            </div>
        </div>
    </section>

    <!--==============================
			Footer Area
	==============================-->
    <footer class="footer-wrapper footer-layout1 bg-fluid bg-major-black position-relative">
        <div class="bg-fluid d-none d-none d-xl-block position-absolute start-0 top-0 w-100 h-100"
            data-bg-src="assets/img/bg/footer-bg-1-1.jpg"></div>
        <div class="footer-widget-wrapper  dark-style1 z-index-common">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-md-6 col-lg-3 col-xl-4">
                        <div class="widget footer-widget pt-0">
                            <h3 class="widget_title">Sobre Nós</h3>
                            <div class="vs-widget-about">
                                <p class="about-text text-footer1 pe-xl-5">The League of Legends offseason is in full
                                    effect and teams are looking to sign new players to strengthen their roster or to
                                    re-sign their current players.</p>
                                <div class="d-flex gap-2 text-white mt-45">
                                    <a class="icon-btn1 skew-right" href="https://google.com"><i
                                            class="fab fa-facebook-f"></i></a>
                                    <a class="icon-btn1 skew-right" href="https://google.com"><i
                                            class="fab fa-twitter"></i></a>
                                    <a class="icon-btn1 skew-right" href="https://google.com"><i
                                            class="fab fa-linkedin-in"></i></a>
                                    <a class="icon-btn1 skew-right" href="https://google.com"><i
                                            class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3 col-xl-2">
                        <div class="widget widget_categories footer-widget   ">
                            <h3 class="widget_title">Categorias</h3>
                            <ul>
                                <li><a href="#">Mooba</a></li>
                                <li><a href="#">Fantasia</a></li>
                                <li><a href="#">Terror</a></li>
                                <li><a href="#">Tiro</a></li>
                                <li><a href="#">RPG</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3 col-xl-2">
                        <div class="widget widget_nav_menu footer-widget  ">
                            <h3 class="widget_title">Precisa de Ajuda?</h3>
                            <div class="menu-all-pages-container">
                                <ul class="menu">
                                    <li><a href="#">Companhia</a></li>
                                    <li><a href="#">Privacidade</a></li>
                                    <li><a href="#">Politica</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 col-xl-3">
                        <div class="widget footer-widget  ">
                            <h3 class="widget_title">Contate-nos</h3>
                            <div class="vs-widget-about">
                                <p class="contact-info"><i class="fal fa-map-marker-alt text-white"></i>R. Conceição,
                                    321 - Santo Antônio, São Caetano do Sul - SP, 09530-060</p>
                                <p class="contact-info"><i class="fal fa-phone text-white"></i><a
                                        href="#">(11) 7070 - 7070</a></p>
                                <p class="contact-info"><i class="fal fa-fax text-white"></i><a
                                        href="#">(11) 1234 - 5678</a></p>
                                <p class="contact-info"><i class="fal fa-envelope text-white"></i><a
                                        href="#">Tseek@gmail.com</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright bg-black z-index-step1">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 d-none d-xl-block">
                        <!-- <div class="footer-menu">
                            <ul>
                                <li><a href="#">Features</a></li>
                                <li><a href="#">Request</a></li>
                                <li><a href="#">Imprint</a></li>
                                <li><a href="#">Privacy</a></li>
                                <li><a href="#">Policy</a></li>
                                <li><a href="#">Cookie</a></li>
                                <li><a href="#">Content</a></li>
                            </ul>
                        </div> -->
                    </div>
                    <div class="col-xl-4 align-self-center text-center py-3 py-xl-0 text-xl-end">
                        <p class="text-light fw-bold text-bold mb-0">&copy; 2024 <a class="text-white"
                                href="index.php">TSeeK</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>




    <!--********************************
			Codigo termina aqui
	******************************** -->

    <!-- Scroll Top Top Button -->
    <a href="#" class="scrollToTop icon-btn3"><i class="far fa-angle-up"></i></a>




    <!-- <div class="vs-cursor"></div>
    <div class="vs-cursor2"></div> -->




    <!--==============================
        All Js File
    ============================== -->
    <!-- Jquery -->
    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
    <!-- Slick Slider -->
    <script src="assets/js/slick.min.js"></script>
    <!-- Bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Layer Slider including GSAP -->
    <script src="assets/js/layerslider.utils.js"></script>
    <script src="assets/js/layerslider.transitions.js"></script>
    <script src="assets/js/layerslider.kreaturamedia.jquery.js"></script>
    <!-- Magnific Popup -->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <!-- Isotop -->
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <!-- jQuery UI -->
    <script src="assets/js/jquery-ui.min.js"></script>
    <!-- Custom Carousel -->
    <script src="assets/js/vscustom-carousel.min.js"></script>
    <!-- Mouse Cursor -->
    <script src="assets/js/vs-cursor.min.js"></script>
    <!-- Mobile Menu -->
    <script src="assets/js/vsmenu.min.js"></script>
    <!-- Map Js -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDC3Ip9iVC0nIxC6V14CKLQ1HZNF_65qEQ "></script>
    <script src="assets/js/map.js"></script>
    <!-- Form Js -->
    <script src="assets/js/ajax-mail.js"></script>
    <!-- Main Js File -->
    <script src="assets/js/main.js"></script>

</body>

</html>