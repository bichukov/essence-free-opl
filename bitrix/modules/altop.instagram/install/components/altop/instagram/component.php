<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

    use Bitrix\Main\Config\Option;

    $moduleClass = "Instagram";
    global $USER;

    if (!isset($arParams["CACHE_TIME"])) {
        $arParams["CACHE_TIME"] = 36000000;
    }

    if (CModule::IncludeModule("altop.instagram")) {

        $arParams["INSTAGRAM_ACCESS_TOKEN"] = Option::get('altop.instagram', "USER_INSTAGRAM_TOKEN", false);
        $arParams["INSTAGRAM_USE_GALLERY"] = Option::get('altop.instagram', "USER_INSTAGRAM_USE_GALLERY", false);

        if (!$arParams["INSTAGRAM_ACCESS_TOKEN"] || '' == trim($arParams["INSTAGRAM_ACCESS_TOKEN"])) {
            $arResult["ERRORS"][] = GetMessage("ERROR_INSTAGRAM_ACCESS_TOKEN");
        } else {
            $arResult["INSTAGRAM_ACCESS_TOKEN"] = $arParams["INSTAGRAM_ACCESS_TOKEN"];
        }


        $tokenExpires = Option::get('altop.instagram', "USER_INSTAGRAM_TOKEN_EXPIRES", false);

        if (!$tokenExpires && $arResult["INSTAGRAM_ACCESS_TOKEN"]) {
            Option::set('altop.instagram', "USER_INSTAGRAM_TOKEN_EXPIRES", time() + 60 * 60 * 24 * 2);
        } else {
            if (time() > $tokenExpires) {
                try {
                    $instagram = new $moduleClass();
                    $arResult["INSTAGRAM_ACCESS_TOKEN"] = $instagram->refreshToken($arParams["INSTAGRAM_ACCESS_TOKEN"]);
                  
                    if ($arResult["INSTAGRAM_ACCESS_TOKEN"]) {
                        Option::set('altop.instagram', "USER_INSTAGRAM_TOKEN", $arResult["INSTAGRAM_ACCESS_TOKEN"]);
                        Option::set('altop.instagram', "USER_INSTAGRAM_TOKEN_EXPIRES", time() + 60 * 60 * 24 * 2, SITE_ID);
                    }
                } catch (\Exception $e) {
                    if ($USER->IsAdmin()) {
                        echo '<span style="color:red">' . $e->getMessage() . '</span>';
                    }
                }
            }
            
        }


        if (!$arParams["MEDIA_COUNT"]) {
            $arResult["ERRORS"][] = GetMessage("ERROR_MEDIA_COUNT");
        } else {
            $arResult["COUNT_ITEM"] = $arParams["MEDIA_COUNT"];
        }

        if (isset($arParams["BACKGROUND_COLOR"])) {
            $arResult["BACKGROUND_COLOR"] = $arParams["BACKGROUND_COLOR"];
        } else {
            $arResult["BACKGROUND_COLOR"] = "ffffff";
        }
        if (isset($arParams["ICON_COLOR"])) {
            $arResult["ICON_COLOR"] = $arParams["ICON_COLOR"];
        } else {
            $arResult["ICON_COLOR"] = "ffffff";
        }


        if (count($arResult["ERRORS"]) == 0) {
            if ($this->StartResultCache()) {
                try {
                    $instagram = new $moduleClass();
                    $arrItem = $instagram->getItemInstagram($arResult["INSTAGRAM_ACCESS_TOKEN"], $arResult["COUNT_ITEM"]);


                    if(isset($arrItem->error)){
                        echo $arrItem->error->message;
                        $this->abortResultCache();
                        return;
                    }

                    foreach ($arrItem->data as $mediaObj) {
                        if (!empty($mediaObj->children->data) && !$arParams["INSTAGRAM_USE_GALLERY"]) {
                            foreach ($mediaObj->children->data as $children) {

                                $arResult["INSTAGRAM"][$children->id]['IMAGE'] = $children->thumbnail_url ?: $children->media_url;
                                $arResult["INSTAGRAM"][$children->id]['LINK'] = $children->permalink;
                            }
                        } else {
                            $arResult["INSTAGRAM"][$mediaObj->id]['IMAGE'] = $mediaObj->thumbnail_url ?: $mediaObj->media_url;
                            $arResult["INSTAGRAM"][$mediaObj->id]['LINK'] = $mediaObj->permalink;
                        }
                    }
                    $arResult["INSTAGRAM"]=array_slice($arResult["INSTAGRAM"],0,$arResult["COUNT_ITEM"]);
                    $this->IncludeComponentTemplate();

                } catch (\Exception $e) {
                    if ($USER->IsAdmin()) {
                        echo '<span style="color:red">' . $e->getMessage() . '</span>';
                        $this->AbortResultCache();
                    }
                }
            }
        } else {
            foreach ($arResult["ERRORS"] as $error) {
                echo $error . "<br>";
            }
        }

    }

?>
