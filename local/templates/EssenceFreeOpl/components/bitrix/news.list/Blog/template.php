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

<section id="blog" class="section">

    <div class="container">
        <div class="section-header">

            <?
            $APPLICATION->IncludeFile(
                SITE_DIR . "include/Blog.php",
                array(),
                array(
                    "MODE" => "html"
                )
            ) ?>
        </div>
        <div class="row">


<?foreach($arResult["ITEMS"] as $arItem):?>

    <div class="col-lg-4 col-md-6 col-xs-12 blog-item">
        <!-- Blog Item Starts -->
        <div class="blog-item-wrapper">
            <div class="blog-item-img">
                <a href="single-post.html">
                    <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="">
                </a>
            </div>
            <div class="blog-item-text">
                <div class="date"><i class="<?echo $arItem["PROPERTIES"]["IC"]["VALUE"];?>"></i><?echo $arItem["PROPERTIES"]["DATE"]["VALUE"];?></div>
                <h3><a href="<?echo $arItem["PROPERTIES"]["URL"]["VALUE"];?>"><?echo $arItem["NAME"]?></a></h3>
                <div class="meta-tags">
                    <span><a href="#"><i class="<?echo $arItem["PROPERTIES"]["IC2"]["VALUE"];?>"></i> <?echo $arItem["PROPERTIES"]["PR"]["VALUE"];?></a></span>
                    <span><a href="#"><i class="<?echo $arItem["PROPERTIES"]["IC3"]["VALUE"];?>"></i> <?echo $arItem["PROPERTIES"]["RET"]["VALUE"];?></a></span>
                    <span><a href="#"><i class="<?echo $arItem["PROPERTIES"]["IC4"]["VALUE"];?>"></i> <?echo $arItem["PROPERTIES"]["Comment"]["VALUE"];?></a></span>
                </div>
            </div>
        </div>
        <!-- Blog Item Wrapper Ends-->
    </div>





<?endforeach;?>

        </div>
    </div>
</section>


</div>
<?endif;?>