<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arComponentDescription = array(
	"NAME" => GetMessage("NSM_NAME"),
	"DESCRIPTION" => GetMessage("NSM_DESC"),
	"CACHE_PATH" => "Y",
	"PATH" => array(
		"ID" => "service",
		"NAME" => GetMessage("NSM_DESC"),
		"CHILD" => array(
			"ID" => "niges.socmenu",
			"NAME" => GetMessage("NSM_DESC")
		)
	) 
);
?>