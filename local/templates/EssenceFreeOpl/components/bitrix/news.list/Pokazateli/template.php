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
<div class="counters section bg-defult">
    <div class="container">
        <div class="row">


<?foreach($arResult["ITEMS"] as $arItem):?>


    <div class="col-sm-6 col-md-6 col-lg-3">
        <div class="facts-item">
            <div class="icon">
                <i class="<?echo $arItem["PROPERTIES"]["AM"]["VALUE"];?>"></i>
            </div>
            <div class="fact-count">
                <h3><span class="counter"><?echo $arItem["PROPERTIES"]["SU"]["VALUE"];?></span></h3>
                <h4><?echo $arItem["NAME"]?></h4>
            </div>
        </div>
    </div>


<?endforeach;?>

</div>
    </div>
</div>
</div>
<?endif;?>