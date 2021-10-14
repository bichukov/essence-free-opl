<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();

/** @global CMain $APPLICATION */
$bIsMainPage = $APPLICATION->GetCurPage(false) == SITE_DIR;
use Bitrix\Main\Page\Asset;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?$APPLICATION->ShowHead(); ?>
	<!-- Required meta tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" >
    <meta name="keywords" content="Bootstrap, Landing page, Template, Registration, Landing" >
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" >
    <meta name="author" content="Grayrids" >




    <title>Essence - Bootstrap 4 Template</title>


	<!-- Bootstrap CSS -->


	<?	Asset::getInstance()->addCss("/local/templates/EssenceFreeOpl/css/bootstrap.min.css"); ?>
	<?  Asset::getInstance()->addCss('/local/templates/EssenceFreeOpl/css/line-icons.css'); ?>
	<?  Asset::getInstance()->addCss('/local/templates/EssenceFreeOpl/css/owl.carousel.css'); ?>
	<?  Asset::getInstance()->addCss('/local/templates/EssenceFreeOpl/css/owl.theme.css'); ?>
	<?  Asset::getInstance()->addCss( '/local/templates/EssenceFreeOpl/css/nivo-lightbox.css'); ?>
	<? Asset::getInstance()->addCss('/local/templates/EssenceFreeOpl/css/magnific-popup.css'); ?>
	<? Asset::getInstance()->addCss('/local/templates/EssenceFreeOpl/css/animate.css'); ?>
	<?  Asset::getInstance()->addCss('/local/templates/EssenceFreeOpl/css/color-switcher.css'); ?>
	<?  Asset::getInstance()->addCss('/local/templates/EssenceFreeOpl/css/menu_sideslide.css'); ?>
	<?	Asset::getInstance()->addCss('/local/templates/EssenceFreeOpl/css/main.css'); ?>
	<?	Asset::getInstance()->addCss('/local/templates/EssenceFreeOpl/css/responsive.css'); ?>
    <link rel="icon" base href="<?= SITE_TEMPLATE_PATH ?>/picture.png">

</head>

<body>

<div><?$APPLICATION->ShowPanel();?></div>

<!-- Header Section Start -->
<header id="slider-area">
    <?$APPLICATION->IncludeComponent("bitrix:menu", "menu", Array(
        "ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
        "CHILD_MENU_TYPE" => "top",	// Тип меню для остальных уровней
        "DELAY" => "N",	// Откладывать выполнение шаблона меню
        "MAX_LEVEL" => "1",	// Уровень вложенности меню
        "MENU_CACHE_GET_VARS" => array(	// Значимые переменные запроса
            0 => "",
        ),
        "MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
        "MENU_CACHE_TYPE" => "N",	// Тип кеширования
        "MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
        "ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
        "USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
    ),
        false
    );?>
<!--	<nav class="navbar navbar-expand-md fixed-top scrolling-navbar bg-white">-->
<!--		<div class="container">-->
<!---->
<!--			<a class="navbar-brand" href="index.html"><span class="lni-bulb"></span>ESSENCE</a>-->
<!--			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">-->
<!--				<i class="lni-menu"></i>-->
<!--			</button>-->
<!--			<div class="collapse navbar-collapse" id="navbarCollapse">-->
<!--				<ul class="navbar-nav mr-auto w-100 justify-content-end">-->
<!--					<li class="nav-item">-->
<!--						<a class="nav-link page-scroll" href="#slider-area">Home</a>-->
<!--					</li>-->
<!--					<li class="nav-item">-->
<!--						<a class="nav-link page-scroll" href="#services">Services</a>-->
<!--					</li>-->
<!--					<li class="nav-item">-->
<!--						<a class="nav-link page-scroll" href="#features">Features</a>-->
<!--					</li>-->
<!--					<li class="nav-item">-->
<!--						<a class="nav-link page-scroll" href="#portfolios">Works</a>-->
<!--					</li>-->
<!--					<li class="nav-item">-->
<!--						<a class="nav-link page-scroll" href="#pricing">Pricing</a>-->
<!--					</li>-->
<!--					<li class="nav-item">-->
<!--						<a class="nav-link page-scroll" href="#team">Team</a>-->
<!--					</li>-->
<!--					<li class="nav-item">-->
<!--						<a class="nav-link page-scroll" href="#subscribe">Subscribe</a>-->
<!--					</li>-->
<!--					<li class="nav-item">-->
<!--						<a class="nav-link page-scroll" href="#blog">Blog</a>-->
<!--					</li>-->
<!--					<li class="nav-item">-->
<!--						<a class="nav-link page-scroll" href="#contact">Contact</a>-->
<!--					</li>-->
<!--				</ul>-->
<!--			</div>-->
<!--		</div>-->
<!--	</nav>-->
<?if($bIsMainPage):?>

    <?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"Slider_top",
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "1",
		"IBLOCK_TYPE" => "index",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "3",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "URL",
			1 => "gl",
			2 => "VC",
			3 => "NB1",
			4 => "NB2",
			5 => "",
		),
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"COMPONENT_TEMPLATE" => "Slider_top"
	),
	false
);?> <?endif;?>
	<!-- Main Carousel Section -->


</header>
<!-- Header Section End -->