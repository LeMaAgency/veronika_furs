<? use Bitrix\Main\Page\Asset; ?>
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

        <?
        $site_name = \Bitrix\Main\Config\Option::get('main', 'site_name');
        ?>
        <title><?php echo ($curPage == SITE_DIR.'index.php')?$site_name:$APPLICATION->ShowTitle()?></title>

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
        <? Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/css/main.css")?>
<!--        <link rel="stylesheet" href="--><?//=SITE_TEMPLATE_PATH?><!--/css/main.css">-->
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
                    <?php $APPLICATION->IncludeComponent("bitrix:menu", "top",
                        Array(
                            "ROOT_MENU_TYPE" => "top",
                            "MAX_LEVEL" => "1",
                            "CHILD_MENU_TYPE" => "left",
                            "USE_EXT" => "N",
                            "MENU_CACHE_TYPE" => "A",
                            "MENU_CACHE_TIME" => "3600",
                            "MENU_CACHE_USE_GROUPS" => "Y",
                            "MENU_CACHE_GET_VARS" => "",
                            "DELAY" => "N",
                            "ALLOW_MULTI_SELECT" => "N",
                        ),
                        false
                    ); ?>
                </ul>
            </nav>
            <?php $APPLICATION->IncludeComponent(
                "bitrix:search.title",
                "search",
                array(
                    "NUM_CATEGORIES" => "1",
                    "TOP_COUNT" => "5",
                    "ORDER" => "date",
                    "USE_LANGUAGE_GUESS" => "N",
                    "CHECK_DATES" => "N",
                    "SHOW_OTHERS" => "N",
                    "PAGE" => SITE_DIR."catalog/",
                    "CATEGORY_0_TITLE" => "",
                    "CATEGORY_0" => array(
                        0 => "iblock_catalog",
                    ),
                    "SHOW_INPUT" => "Y",
                    "INPUT_ID" => "title-search-input",
                    "CONTAINER_ID" => "title-search",
                    "PRICE_CODE" => array(
                        0 => "BASE",
                    ),
                    "PRICE_VAT_INCLUDE" => "N",
                    "PREVIEW_TRUNCATE_LEN" => "",
                    "SHOW_PREVIEW" => "Y",
                    "PREVIEW_WIDTH" => "75",
                    "PREVIEW_HEIGHT" => "75",
                    "CONVERT_CURRENCY" => "N",
                    "COMPONENT_TEMPLATE" => "search",
                    "CATEGORY_0_iblock_catalog" => array(
                        0 => "all",
                    )
                ),
                false
            ); ?>
        </div><!-- Header Menu -->

