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
<section class="call-action section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10">



<?foreach($arResult["ITEMS"] as $arItem):?>

    <div class="cta-trial text-center">
        <h3><?echo $arItem["NAME"]?></h3>
        <p><?echo $arItem["PREVIEW_TEXT"];?></p>
        <a href="#" class="btn btn-common btn-effect">Purchase Now!</a>
    </div>




<?endforeach;?>
            </div>
        </div>
    </div>
</section>
<?endif;?>