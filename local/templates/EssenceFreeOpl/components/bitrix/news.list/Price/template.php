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
<div id="pricing" class="section pricing-section">
    <div class="container">
        <div class="section-header">

            <?
            $APPLICATION->IncludeFile(
                SITE_DIR . "include/Price.php",
                array(),
                array(
                    "MODE" => "html"
                )
            ) ?>

        </div>

        <div class="row pricing-tables">



<?foreach($arResult["ITEMS"] as $cell=> $arItem):?>

    <div class="col-lg-4 col-md-4 col-xs-12">
        <div  class="<?if($cell%2 == 0):?>pricing-table<?else:?>pricing-table pricing-big<?endif;?>">

            <div class="pricing-details">
                <h2><?echo $arItem["NAME"]?></h2>
                <div class="price"><?echo $arItem["PROPERTIES"]["Pr1"]["VALUE"];?><span>/mo</span></div>
                <ul>
                    <li><?echo $arItem["PROPERTIES"]["Te1"]["VALUE"];?></li>
                    <li><?echo $arItem["PROPERTIES"]["Te2"]["VALUE"];?></li>
                    <li><?echo $arItem["PROPERTIES"]["Te3"]["VALUE"];?></li>
                    <li><?echo $arItem["PROPERTIES"]["Te4"]["VALUE"];?></li>
                    <li><?echo $arItem["PROPERTIES"]["Te5"]["VALUE"];?> </li>
                </ul>
            </div>
            <div class="plan-button">
                <a href="#" class="btn btn-common btn-effect">Get Plan</a>
            </div>
        </div>
    </div>



<?endforeach;?>
        </div>
    </div>
</div>
</div>
<?endif;?>