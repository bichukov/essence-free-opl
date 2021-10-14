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
?><?if($arResult["ITEMS"]):?>
<section id="features" class="section">
<div class="container">
    <div class="section-header">
        <div class="section-header">
        <?
        $APPLICATION->IncludeFile(
            SITE_DIR . "include/Why_choose.php",
            array(),
            array(
                "MODE" => "html"
            )
        ) ?>

    </div>

    <div class="row">


<?foreach($arResult["ITEMS"] as $arItem):?>

    <div class="col-lg-4 col-md-6 col-xs-12">
        <div class="featured-box">
            <div class="featured-icon">
                <i class="<?echo $arItem["PROPERTIES"]["Sti"]["VALUE"];?>"></i>
                   </div>
            <div class="featured-content">
                <div class="icon-o"><i class="<?echo $arItem["PROPERTIES"]["Sti"]["VALUE"];?>"></i></div>
                <h4><?echo $arItem["NAME"]?></b></h4>
                <p><?echo $arItem["PREVIEW_TEXT"];?></p>
            </div>
        </div>
    </div>




<?endforeach;?>
    </div>
</div>
</section>
<?endif;?>