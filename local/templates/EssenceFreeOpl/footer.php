<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
    die();
/** @global CMain $APPLICATION */
$asset = \Bitrix\Main\Page\Asset::getInstance();
?>



<!-- Footer Section Start -->
<footer>
    <!-- Footer Area Start -->
    <section class="footer-Content">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-mb-12">
                    <div class="textwidget">
                        <?
                        $APPLICATION->IncludeFile(
                            SITE_DIR . "include/Essence.php",
                            array(),
                            array(
                                "MODE" => "text"
                            )
                        ) ?>



                    </div>
                </div><div ></div>
                <?$APPLICATION->IncludeComponent(
                    "bitrix:menu",
                    "foot1",
                    array(
                        "ALLOW_MULTI_SELECT" => "N",
                        "CHILD_MENU_TYPE" => "left",
                        "DELAY" => "N",
                        "MAX_LEVEL" => "1",
                        "MENU_CACHE_GET_VARS" => array(
                        ),
                        "MENU_CACHE_TIME" => "3600",
                        "MENU_CACHE_TYPE" => "N",
                        "MENU_CACHE_USE_GROUPS" => "Y",
                        "ROOT_MENU_TYPE" => "bottom",
                        "USE_EXT" => "N",
                        "COMPONENT_TEMPLATE" => "foot1"
                    ),
                    false
                );?>

                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-mb-12">
                    <div class="widget">
                        <?
                        $APPLICATION->IncludeFile(
                            SITE_DIR . "include/Contact.php",
                            array(),
                            array(
                                "MODE" => "html"
                            )
                        ) ?>


                    </div>
                </div>
                <?$APPLICATION->IncludeComponent(
                    "bitrix:news.list",
                    "Instagram_down",
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
                        "IBLOCK_ID" => "2",
                        "IBLOCK_TYPE" => "fotogal",
                        "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
                        "INCLUDE_SUBSECTIONS" => "Y",
                        "MESSAGE_404" => "",
                        "NEWS_COUNT" => "12",
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
                            1 => "",
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
                        "COMPONENT_TEMPLATE" => "Instagram_down"
                    ),
                    false
                );?>


    </section>
    <!-- Footer area End -->

    <!-- Copyright Start  -->
    <?$APPLICATION->IncludeComponent("bitrix:menu", "foot2", Array(
        "ALLOW_MULTI_SELECT" => "N",   // Разрешить несколько активных пунктов одновременно
        "CHILD_MENU_TYPE" => "left",   // Тип меню для остальных уровней
        "COMPONENT_TEMPLATE" => ".default",
        "DELAY" => "N",    // Откладывать выполнение шаблона меню
        "MAX_LEVEL" => "1",    // Уровень вложенности меню
        "MENU_CACHE_GET_VARS" => "",   // Значимые переменные запроса
        "MENU_CACHE_TIME" => "3600",   // Время кеширования (сек.)
        "MENU_CACHE_TYPE" => "N",  // Тип кеширования
        "MENU_CACHE_USE_GROUPS" => "Y",    // Учитывать права доступа
        "ROOT_MENU_TYPE" => "bottom2", // Тип меню для первого уровня
        "USE_EXT" => "N",  // Подключать файлы с именами вида .тип_меню.menu_ext.php
    ),
        false
    );?>
    <!-- Copyright End -->

</footer>
<!-- Footer Section End -->

<!-- Go To Top Link -->

<?
$APPLICATION->IncludeFile(
    SITE_DIR . "include/Back-to-top.php",
    array(),
    array(
        "MODE" => "html"
    )
) ?>


<!-- jQuery first, then Tether, then Bootstrap JS. -->

<?
$asset->addJs(SITE_TEMPLATE_PATH.'/js/jquery-min.js');
$asset->addJs(SITE_TEMPLATE_PATH.'/js/popper.min.js');

$asset->addJs(SITE_TEMPLATE_PATH.'/js/bootstrap.min.js');
$asset->addJs(SITE_TEMPLATE_PATH.'/js/classie.js');

$asset->addJs(SITE_TEMPLATE_PATH.'/js/color-switcher.js');
$asset->addJs(SITE_TEMPLATE_PATH.'/js/jquery.mixitup.js');

$asset->addJs(SITE_TEMPLATE_PATH.'/js/nivo-lightbox.js');
$asset->addJs(SITE_TEMPLATE_PATH.'/js/owl.carousel.js');

$asset->addJs(SITE_TEMPLATE_PATH.'/js/jquery.stellar.min.js');
$asset->addJs(SITE_TEMPLATE_PATH.'/js/jquery.nav.js');

$asset->addJs(SITE_TEMPLATE_PATH.'/js/scrolling-nav.js');
$asset->addJs(SITE_TEMPLATE_PATH.'/js/jquery.easing.min.js');
$asset->addJs(SITE_TEMPLATE_PATH.'/js/wow.js');
$asset->addJs(SITE_TEMPLATE_PATH.'/js/jquery.vide.js');
$asset->addJs(SITE_TEMPLATE_PATH.'/js/jquery.counterup.min.js');
$asset->addJs(SITE_TEMPLATE_PATH.'/js/jquery.magnific-popup.min.js');
$asset->addJs(SITE_TEMPLATE_PATH.'/js/waypoints.min.js');
$asset->addJs(SITE_TEMPLATE_PATH.'/js/form-validator.min.js');
$asset->addJs(SITE_TEMPLATE_PATH.'/js/contact-form-script.js');
$asset->addJs(SITE_TEMPLATE_PATH.'/js/main.js');
?>
</body>
</html>

