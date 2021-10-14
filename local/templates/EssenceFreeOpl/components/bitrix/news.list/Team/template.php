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
<section id="team" class="section">
    <div class="container">
        <div class="section-header">

        <?

        $APPLICATION->IncludeFile(
            SITE_DIR . "include/Team.php",
            array(),
            array(
                "MODE" => "html"
            )
        ) ?>
        </div>
        <div class="row">
<?foreach($arResult["ITEMS"] as $arItem):?>
            <div class="col-lg-3 col-md-6 col-xs-12">
                <div class="single-team">
                    <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"

                         alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
                         title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>">
                    <div class="team-details">
                        <div class="team-inner">
                            <h4 class="team-title"><?echo $arItem["NAME"]?></h4>
                            <p><?echo $arItem["PROPERTIES"]["DLS"]["VALUE"];?></p>
                            <ul class="social-list">

                                <?if($arItem["PROPERTIES"]["facebook"]["VALUE"] != ""):?><li class="facebook"><a href="<?echo $arItem["PROPERTIES"]["facebook"]["VALUE"];?>"><i class="lni-facebook-filled"></i></a></li><?endif;?>
                                <?if($arItem["PROPERTIES"]["twitter"]["VALUE"] != ""):?> <li class="twitter"><a href="<?echo $arItem["PROPERTIES"]["twitter"]["VALUE"];?>"><i class="lni-twitter-filled"></i></a></li><?endif;?>
                                <?if($arItem["PROPERTIES"]["googleplus"]["VALUE"] != ""):?><li class="google-plus"><a href="<?echo $arItem["PROPERTIES"]["googleplus"]["VALUE"];?>"><i class="lni-google-plus"></i></a></li><?endif;?>
                                <?if($arItem["PROPERTIES"]["linkedin"]["VALUE"] != ""):?><li class="linkedin"><a href="<?echo $arItem["PROPERTIES"]["linkedin"]["VALUE"];?>""><i class="lni-linkedin-fill"></i></a></li><?endif;?>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>

<?endforeach;?>
        </div>
    </div>
</section>
<?endif;?>