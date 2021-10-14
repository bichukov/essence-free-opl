<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arComponentDescription = array(
	"NAME" => GetMessage("SNL_NAME"),
	"DESCRIPTION" => GetMessage("SNL_DESC"),
	"ICON" => "/images/banner.gif",
	"CACHE_PATH" => "Y",
	"PATH" => array(
		"ID" => "service",
		"CHILD" => array(
			"ID" => "advertising",
			"NAME" => GetMessage("ADVERTISING_SERVICE")
		)
	),
);
?>