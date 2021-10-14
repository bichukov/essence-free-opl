<?php
class CAbudagovSocnetlinkPublic
{
	public static function OnEpilog()
	{
		global $APPLICATION;

		if (COption::GetOptionString("abudagov.socnetlink", "ACTIVE", 'N', SITE_ID) == 'Y'
			&& !$_REQUEST['ajax']
			&& !defined('PUBLIC_AJAX_MODE')
			&& $APPLICATION->buffer_content
		) {
			$APPLICATION->IncludeComponent(
			    str_replace('.', ':', "abudagov.socnetlink"),
			    "",
			    Array(),
			    false,
			    array("HIDE_ICONS" => "Y")
			);
		}
	}

}
?>