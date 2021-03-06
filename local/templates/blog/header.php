<?php
use Bitrix\Main\Page\Asset;

if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();


?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php $APPLICATION->ShowTitle() ?></title>

    <?php
    Asset::getInstance()->addString('<meta charset="utf-8">');
    Asset::getInstance()->addString('<meta http-equiv="x-ua-compatible" content="ie=edge">');

    Asset::getInstance()->addString('<meta name="description" content="">');
    Asset::getInstance()->addString('<meta name="viewport" content="width=device-width, initial-scale=1">');
    ?>
    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <?php
    Asset::getInstance()->addString('<link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">');
    ?>
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <?php
    Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH."/css/owl.carousel.min.css");
    Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH."/css/magnific-popup.css");
    Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH."/css/font-awesome.min.css");
    Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH."/css/themify-icons.css");
    Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH."/css/nice-select.css");
    Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH."/css/flaticon.css");
    Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH."/css/gijgo.css");
    Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH."/css/animate.min.css");
    Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH."/css/slicknav.css");
    Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH."/css/bootstrap.min.css");
    
    Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH."/css/style.css");
    Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH."css/responsive.css");

    $APPLICATION->ShowHead()
    ?>
   <!--  <link rel="stylesheet" href="css/responsive.css"> -->
    
</head>

<body>
    <div id="panel"><?php $APPLICATION->ShowPanel() ?> </div>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid ">
                    <div class="header_bottom_border">
                        <div class="row align-items-center">
                            <div class="col-xl-3 col-lg-2">
                                <div class="logo">
                                    <a href="/">
                                        <img src="<?=DEFAULT_TEMPLATE_PATH?>/img/logo.png" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-7">

                             <?$APPLICATION->IncludeComponent("bitrix:menu", "header", Array(
	    "ALLOW_MULTI_SELECT" => "N",	// ?????????????????? ?????????????????? ???????????????? ?????????????? ????????????????????????
		"CHILD_MENU_TYPE" => "left",	// ?????? ???????? ?????? ?????????????????? ??????????????
		"DELAY" => "N",	// ?????????????????????? ???????????????????? ?????????????? ????????
		"MAX_LEVEL" => "2",	// ?????????????? ?????????????????????? ????????
		"MENU_CACHE_GET_VARS" => array(	// ???????????????? ???????????????????? ??????????????
			0 => "",
		),
		"MENU_CACHE_TIME" => "3600",	// ?????????? ?????????????????????? (??????.)
		"MENU_CACHE_TYPE" => "N",	// ?????? ??????????????????????
		"MENU_CACHE_USE_GROUPS" => "Y",	// ?????????????????? ?????????? ??????????????
		"ROOT_MENU_TYPE" => "top",	// ?????? ???????? ?????? ?????????????? ????????????
		"USE_EXT" => "N",	// ???????????????????? ?????????? ?? ?????????????? ???????? .??????_????????.menu_ext.php
	),
	false
);?>
                             
                            </div>
                            <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                                <div class="Appointment">
                                    <div class="phone_num d-none d-xl-block">
                                    <?$APPLICATION->IncludeComponent(
	"bitrix:sale.basket.basket.line",
	"",
	Array(
		"HIDE_ON_BASKET_PAGES" => "Y",
		"PATH_TO_AUTHORIZE" => "/auth/personal.php",
		"PATH_TO_BASKET" => SITE_DIR."personal/cart/",
		"PATH_TO_ORDER" => SITE_DIR."personal/order/make/",
		"PATH_TO_PERSONAL" => SITE_DIR."personal/",
		"PATH_TO_PROFILE" => "/auth/personal.php",
		"PATH_TO_REGISTER" => "/auth/registration.php",
		"POSITION_FIXED" => "N",
		"SHOW_AUTHOR" => "Y",
		"SHOW_EMPTY_VALUES" => "Y",
		"SHOW_NUM_PRODUCTS" => "Y",
		"SHOW_PERSONAL_LINK" => "Y",
		"SHOW_PRODUCTS" => "N",
		"SHOW_REGISTRATION" => "Y",
		"SHOW_TOTAL_PRICE" => "Y"
	)
);?>
                                        <a href="#"></a>
                                    </div>
                                    <div class="d-none d-lg-block">
                                        <a class="boxed-btn3" href="#">Post a Job</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->

     <!-- bradcam_area  -->
     <?php if($_SERVER['REQUEST_URI'] != "/"): ?>
     <div class="bradcam_area bradcam_bg_1">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text">
                        <h3><?php $APPLICATION->ShowTitle(false) ?></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endif ?>
    <!--/ bradcam_area  -->