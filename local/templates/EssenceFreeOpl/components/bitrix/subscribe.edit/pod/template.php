<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>



<div id="subscribe" class="section">
    <div class="container">
        <div class="row justify-content-between">



    <div class="col-lg-5 col-md-12 col-xs-12">
    <div class="subscribe-form">
    <div class="form-wrapper">
    <div class="sub-title text-center">
        <h3>Subscribe to Newsletter</h3>
        <p>Weekly Freebies and More!</p>
    </div>
        <form action="<?=$arResult["FORM_ACTION"]?>" method="post">
            <?echo bitrix_sessid_post();?>
            <input type="hidden" name="PostAction" value="<?echo ($arResult["ID"]>0? "Update":"Add")?>" />
            <input type="hidden" name="ID" value="<?echo $arResult["SUBSCRIPTION"]["ID"];?>" />
            <input type="hidden" name="RUB_ID[]" value="0" />
    <div class="row">
                    <div class="col-12 form-line">
                    <div class="form-group">
					<div class="subscription-format"></div>
                        <input type="text" class="form-control" name="NAME" placeholder="Name" class="subscription-name">
                    </div>
                    </div>
                    <div class="col-md-12 form-line">
                        <div class="form-group">
                          <input type="text" class="form-control" name="PHONE" placeholder="Phone" class="subscription-phone">
                        </div>
                    </div>
                    <div class="col-12 form-line">
                        <div class="form-group">
                           <input type="email" class="form-control" name="EMAIL" placeholder="Email"class="subscription-email">
                        </div>
                    </div>
         <div class="col-12">
                        <div class="form-submit">
                            <button type="submit" class="btn btn-common btn-effect">Subscribe Now</button>
                            <?
                            foreach($arResult["MESSAGE"] as $itemID=>$itemValue)
                                echo ShowMessage(array("MESSAGE"=>$itemValue, "TYPE"=>"OK"));
                            foreach($arResult["ERROR"] as $itemID=>$itemValue)
                                echo ShowMessage(array("MESSAGE"=>$itemValue, "TYPE"=>"ERROR"));

                            ?>
                        </div>
                    </div>


    </div>
        </form>
                </div>
                    </div>








