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
<div class="col-lg-6 col-md-12 col-xs-12">

<?foreach($arResult["ITEMS"] as $arItem):?>


    <div class="sub-item-box">
        <div class="icon-box">
            <i class="<?echo $arItem["PROPERTIES"]["ZN1"]["VALUE"];?>"></i>
        </div>
        <div class="text-box">
            <h4><?echo $arItem["NAME"]?></h4>
            <p><?echo $arItem["PREVIEW_TEXT"];?></p>
        </div>
    </div>


<?endforeach;?>

</div>

</div>
</div>

</div>
</div>


<?endif;?>