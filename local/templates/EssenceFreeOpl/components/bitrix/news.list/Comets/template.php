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


//echo '<pre>';
//print_r($arResult);
//echo '</pre>';

if($arResult["ITEMS"]):?>
<section class="testimonial section">
    <div class="container">
        <div class="row">

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                <div id="testimonials" class="touch-slider owl-carousel">

<?foreach($arResult["ITEMS"] as $arItem):?>


                    <div class="item">
                        <div class="testimonial-item">
                            <div class="author">
                                <div class="img-thumb">
                                    <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"*/

                                         alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"*/
                                         title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>">*/
                                </div>
                                <div class="author-info">
                                    <h2><a href="#"><?echo $arItem["NAME"]?></a></h2>*/
                                    <span><?echo $arItem["PROPERTIES"]["DL"]["VALUE"];?></span>*/
                                </div>
                            </div>
                            <div class="content-inner">
                                <p class="description">	<?echo $arItem["PREVIEW_TEXT"];?></p>*/
                                <span><i class="<?echo $arItem["PROPERTIES"]["Z1"]["VALUE"];?>"></i></span>*/
                                <span><i class="<?echo $arItem["PROPERTIES"]["Z2"]["VALUE"];?>"></i></span>*/
                                <span><i class="<?echo $arItem["PROPERTIES"]["Z3"]["VALUE"];?>"></i></span>*/
                                <span><i class="<?echo $arItem["PROPERTIES"]["Z4"]["VALUE"];?>"></i></span>*/
                                <span><i class="<?echo $arItem["PROPERTIES"]["Z5"]["VALUE"];?>"></i></span>*/







                           </div>
                       </div>
                   </div>

<?endforeach;?>
                </div>
       </div>

        </div>
   </div>

</section>

<?endif;?>

<!-- Testimonial Section Start -->
<!--<section class="testimonial section">-->
<!--    <div class="container">-->
<!--        <div class="row">-->
<!--            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">-->
<!--                <div id="testimonials" class="touch-slider owl-carousel">-->
<!--                    <div class="item">-->
<!--                        <div class="testimonial-item">-->
<!--                            <div class="author">-->
<!--                                <div class="img-thumb">-->
<!--                                    <img src="local/templates/EssenceFreeOpl/img/testimonial/img1.jpg" alt="">-->
<!--                                </div>-->
<!--                                <div class="author-info">-->
<!--                                    <h2><a href="#">Johnathan Doe</a></h2>-->
<!--                                    <span>Marketing Head Matrix media</span>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="content-inner">-->
<!--                                <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo quidem, excepturi facere magnam illum, at accusantium doloremque odio.</p>-->
<!--                                <span><i class="lni-star-filled"></i></span>-->
<!--                                <span><i class="lni-star-filled"></i></span>-->
<!--                                <span><i class="lni-star-filled"></i></span>-->
<!--                                <span><i class="lni-star"></i></span>-->
<!--                                <span><i class="lni-star"></i></span>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="item">-->
<!--                        <div class="testimonial-item">-->
<!--                            <div class="author">-->
<!--                                <div class="img-thumb">-->
<!--                                    <img src="local/templates/EssenceFreeOpl/img/testimonial/img2.jpg" alt="">-->
<!--                                </div>-->
<!--                                <div class="author-info">-->
<!--                                    <h2><a href="#">Oidila Matik</a></h2>-->
<!--                                    <span>President Lexo Inc</span>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="content-inner">-->
<!--                                <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo quidem, excepturi facere magnam illum, at accusantium doloremque odio.</p>-->
<!--                                <span><i class="lni-star-filled"></i></span>-->
<!--                                <span><i class="lni-star-filled"></i></span>-->
<!--                                <span><i class="lni-star-filled"></i></span>-->
<!--                                <span><i class="lni-star-filled"></i></span>-->
<!--                                <span><i class="lni-star-filled"></i></span>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="item">-->
<!--                        <div class="testimonial-item">-->
<!--                            <div class="author">-->
<!--                                <div class="img-thumb">-->
<!--                                    <img src="local/templates/EssenceFreeOpl/img/testimonial/img3.jpg" alt="">-->
<!--                                </div>-->
<!--                                <div class="author-info">-->
<!--                                    <h2><a href="#">- Alex Dattilo</a></h2>-->
<!--                                    <span>CEO Optima Inc</span>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="content-inner">-->
<!--                                <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo quidem, excepturi facere magnam illum, at accusantium doloremque odio.</p>-->
<!--                                <span><i class="lni-star-filled"></i></span>-->
<!--                                <span><i class="lni-star-filled"></i></span>-->
<!--                                <span><i class="lni-star-filled"></i></span>-->
<!--                                <span><i class="lni-star-filled"></i></span>-->
<!--                                <span><i class="lni-star"></i></span>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="item">-->
<!--                        <div class="testimonial-item">-->
<!--                            <div class="author">-->
<!--                                <div class="img-thumb">-->
<!--                                    <img src="local/templates/EssenceFreeOpl/img/testimonial/img2.jpg" alt="">-->
<!--                                </div>-->
<!--                                <div class="author-info">-->
<!--                                    <h2><a href="#">Oidila Matik</a></h2>-->
<!--                                    <span>President Lexo Inc</span>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="content-inner">-->
<!--                                <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo quidem, excepturi facere magnam illum, at accusantium doloremque odio.</p>-->
<!--                                <span><i class="lni-star-filled"></i></span>-->
<!--                                <span><i class="lni-star-filled"></i></span>-->
<!--                                <span><i class="lni-star-filled"></i></span>-->
<!--                                <span><i class="lni-star-filled"></i></span>-->
<!--                                <span><i class="lni-star-filled"></i></span>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="item">-->
<!--                        <div class="testimonial-item">-->
<!--                            <div class="author">-->
<!--                                <div class="img-thumb">-->
<!--                                    <img src="local/templates/EssenceFreeOpl/img/testimonial/img1.jpg" alt="">-->
<!--                                </div>-->
<!--                                <div class="author-info">-->
<!--                                    <h2><a href="#">- Alex Dattilo</a></h2>-->
<!--                                    <span>CEO Optima Inc</span>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="content-inner">-->
<!--                                <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo quidem, excepturi facere magnam illum, at accusantium doloremque odio.</p>-->
<!--                                <span><i class="lni-star-filled"></i></span>-->
<!--                                <span><i class="lni-star-filled"></i></span>-->
<!--                                <span><i class="lni-star"></i></span>-->
<!--                                <span><i class="lni-star"></i></span>-->
<!--                                <span><i class="lni-star"></i></span>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->
<!-- Testimonial Section End -->

