<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Elexer is a stunning photography website template">
        <meta name="author" content="TeamXcel">

        <title>Elexer | Photography Website Template</title>

		<link rel="shortcut icon" type="image/x-icon" href="<?=SITE_TEMPLATE_PATH?>/img/favicon.png">

		<!-- Font Awesome CSS -->
        <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/font-awesome.min.css">
        <!-- Themify Icons CSS -->
        <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/themify-icons.css">
        <!-- Elegant Font Icons CSS -->
        <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/elegant-font-icons.css">
        <!-- Elegant Line Icons CSS -->
        <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/elegant-line-icons.css">
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/bootstrap.min.css">
        <!-- Venobox CSS -->
        <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/venobox/venobox.css">
        <!-- animate CSS -->
        <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/animate.min.css">
		<!-- OWL-Carousel CSS -->
        <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/owl.carousel.css">
		<!-- Main CSS -->
        <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/main.css">
		<!-- Responsive CSS -->
        <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/responsive.css">
        <?$APPLICATION->ShowHead();?>
        <script src="<?=SITE_TEMPLATE_PATH?>/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>

    <body data-spy="scroll" data-target="#navmenu" data-offset="70">
    <?$APPLICATION->ShowPanel();?>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div class="site-preloader-wrap">
            <div class="spinner"></div>
        </div><!-- Preloader -->

        <header id="header" class="header-section">
            <div class="container">
                <div class="branding">
                    <a href="/">
                        <img src="<?=SITE_TEMPLATE_PATH?>/img/logo.png" alt="logo">
                    </a>
                </div>
            </div>
            <div class="button_container" id="toggle">
                <span class="top"></span>
                <span class="middle"></span>
                <span class="bottom"></span>
            </div>
        </header><!-- Header -->

        <div class="overlay" id="overlay">
            <nav class="overlay-menu d-flex align-items-center">
                <ul>
                    <li ><a href="index.html">Главная</a></li>
                    <li><a href="about.html">О компании</a></li>
                    <li><a href="gallery.html">Каталог</a></li>
                    <li><a href="blog.html">Новости</a></li>
                    <li><a href="services.html">Сертификаты</a></li>
                    <li><a href="contact.html">Контакты</a></li>
                </ul>
            </nav>
            <form class="form-search">
                <div class="form-group">
                    <i class="fa fa-search"></i>
                    <input type="search" id="search" name="search" class="form-control" placeholder="Поиск">
                </div>
            </form>
        </div><!-- Header Menu -->

