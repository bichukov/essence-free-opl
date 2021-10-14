<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
/** @global array $v1 */
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
<section id="portfolios" class="section">
    <!-- Container Starts -->
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Our Works</h2>
            <span>Works</span>
            <p class="section-subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos debitis.</p>
        </div>
        <div class="row">
            <div class="col-md-12">
                <!-- Portfolio Controller/Buttons -->
                <div class="controls text-center">
                    <a class="filter active btn btn-common btn-effect" data-filter="all">
                        All
                    </a>
                    <?
                    foreach ($arResult["V1"] as $I=>$v1) { ?>
                        <a class="filter btn btn-common btn-effect" data-filter=".<?= $v1['XML_ID'] ?>">
                            <?= $v1['VALUE'] ?>
                        </a>
                        <?
                    }
                    ?>
                </div>
            </div>
        </div>

        <div id="portfolio" class="row">
            <?foreach ($arResult["ITEMS"] as $arItem):
            ?>
            <div class="col-lg-4 col-md-6 col-xs-12 mix  <?=implode(" ", $arItem['PROPERTIES']['HHH']['VALUE_XML_ID'])?>">
                <div class="col-lg-4 col-md-6 col-xs-12 mix  <?=implode(" ", $arItem['PROPERTIES']['HHH']['VALUE_XML_ID'])?>">


                    <div class="portfolio-item">
                        <div class="shot-item">
                            <img src="<?=$arItem["PREVIEW_PICTURE"]['SRC']?>"  alt="" />
                            <div class="single-content">
                                <div class="fancy-table">
                                    <div class="table-cell">
                                        <div class="zoom-icon">
                                            <a class="lightbox" base  href="="<?=$arItem["PREVIEW_PICTURE"]['SRC']?>" "><i class="lni-zoom-in item-icon"></i></a>
                                        </div>
                                        <a href="#">View Project</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?endforeach; ?>
            </div>
        </div>
        <!-- Container Ends -->
</section>