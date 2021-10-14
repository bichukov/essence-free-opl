<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
?>
<?if ($arResult["isFormErrors"] == "Y"):?><?=$arResult["FORM_ERRORS_TEXT"];?><?endif;?>

<?=$arResult["FORM_NOTE"]?>

<?if ($arResult["isFormNote"] != "Y")
{
?>
<?=$arResult["FORM_HEADER"]?>

<table>
    <?
    if ($arResult["isFormDescription"] == "Y" || $arResult["isFormTitle"] == "Y" || $arResult["isFormImage"] == "Y")
    {
        ?>

        <?
    } // endif
    ?>
</table>
<br />
<?
/***********************************************************************************
form questions
 ***********************************************************************************/
?><section id="contact" class="section">
    <div class="contact-form">
    <div class="container">
    <div class="section-header">
        <h2 class="section-title">Get In Touch</h2>
        <span>Contact</span>
        <p class="section-subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos debitis.</p>
    </div>
    <div class="row">
    <div class="col-lg-9 col-md-9 col-xs-12">
    <div class="contact-block">
    <form id="contactForm">
    <div class="row">

    <!--<table class="form-table data-table">-->


    <?

	?>


<!--				--><?//if (is_array($arResult["FORM_ERRORS"]) && array_key_exists($FIELD_SID, $arResult['FORM_ERRORS'])):?>
<!--				<span class="error-fld" title="--><?//=htmlspecialcharsbx($arResult["FORM_ERRORS"][$FIELD_SID])?><!--"></span>-->
<!--				--><?//endif;?>
<!--				--><?//=$arQuestion["CAPTION"]?><!----><?//if ($arQuestion["REQUIRED"] == "Y"):?><!----><?//=$arResult["REQUIRED_SIGN"];?><!----><?//endif;?>
<!--				--><?//=$arQuestion["IS_INPUT_CAPTION_IMAGE"] == "Y" ? "<br />".$arQuestion["IMAGE"]["HTML_CODE"] : ""?>


                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" id="name" placeholder="Your Name" required="" data-error="Please enter your name" name="form_text_9" value="">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" placeholder="Your Email" id="email" class="form-control" required="" data-error="Please enter your email" name="form_text_10" value="">
                    </div>
                </div>
                  <div class="col-md-12">
                      <div class="form-group">

        <input type="text" placeholder="Subject" id="msg_subject" class="form-control" required="" data-error="Please enter your subject" name="form_text_11" value="">
               `           <div class="help-block with-errors"></div>
                      </div>
                  </div>
        <div class="col-md-12">
                    <div class="form-group">
                        <textarea name="form_textarea_12" cols="40" rows="7" class="form-control" id="message" placeholder="Your Message" data-error="Write your message" required=""></textarea>
                        <div class="help-block with-errors"></div>
            </div>

        <div class="submit-button">
            <input class="btn btn-common btn-effect" id="submit" type="submit" name="web_form_submit" value="Send Message" />
            <div id="msgSubmit" class="h3 hidden"></div>
            <div class="clearfix"></div>
        </div>
    </div>
    </div>
    </form>
    </div>
    </div>
        <div class="col-lg-3 col-md-3 col-xs-12">
            <div class="contact-deatils">
                <!-- Content Info -->
                <div class="contact-info_area">


                    <?
                    $APPLICATION->IncludeFile(
                        SITE_DIR . "include/inc_Obratnay_sv_podp.php",
                        array(),
                        array(
                            "MODE" => "text"
                        )
                    ) ?>

                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </section>
	<?


	?>

<?

{
?>

<?
} // isUseCaptcha
?>



<p>

</p>
<?//=$arResult["FORM_FOOTER"]?>
<?
} //endif (isFormNote)
?>

