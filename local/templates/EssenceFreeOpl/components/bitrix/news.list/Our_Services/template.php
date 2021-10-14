<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<?if($arResult["ITEMS"]):?>
<section id="services" class="section">
<div class="container">
    <div class="section-header">

        <?
        $APPLICATION->IncludeFile(
            SITE_DIR . "include/Services.php",
            array(),
            array(
                "MODE" => "Text"
            )
        ) ?>



    </div>
    <div class="row">

<?foreach($arResult["ITEMS"] as $arItem):?>
    <div class="col-lg-4 col-md-6 col-xs-12">
        <div class="item-boxes services-item wow fadeInDown" data-wow-delay="0.8s">
            <div class="<?echo $arItem["PROPERTIES"]["CVET"]["VALUE"];?>">
                <i class="<?echo $arItem["PROPERTIES"]["Our"]["VALUE"];?>"></i>
            </div>
            <h4><?echo $arItem["NAME"];?></h4>
            <p><?echo $arItem["DETAIL_TEXT"];?></p>
        </div>
    </div>

<?endforeach;?>


</div>
    </div>

    </section>
<?endif;?>
