<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arComponentParameters = array(
    "PARAMETERS" => array(
        "MEDIA_COUNT" => array(
            "PARENT" => "BASE",
            "NAME" => GetMessage("MEDIA_COUNT"),
            "TYPE" => "TEXT",
            "DEFAULT" => "7",
        ),
        "BACKGROUND_COLOR" => array(
            "PARENT" => "BASE",
            "NAME" => GetMessage("BACKGROUND_COLOR"),
            "TYPE" => "TEXT",
            "DEFAULT" => "6639b6",
        ),
        "ICON_COLOR" => array(
            "PARENT" => "BASE",
            "NAME" => GetMessage("ICON_COLOR"),
            "TYPE" => "TEXT",
            "DEFAULT" => "ffffff",
        ),
        "CACHE_TIME"  => array(
            "DEFAULT" => 36000000
        )
    )
	
);
?>
