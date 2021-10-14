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


<div id="clients" class="section">
    <!-- Container Ends -->

        <!-- Row and Scroller Wrapper Starts -->
    <div class="container">
        <div class="row" id="clients-scroller">

<?foreach($arResult["ITEMS"] as $arItem):?>


            <div class="client-item-wrapper">
                <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
                     alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
                     title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>">

            </div>


<?endforeach;?>


        </div>


    </div>

</div>
