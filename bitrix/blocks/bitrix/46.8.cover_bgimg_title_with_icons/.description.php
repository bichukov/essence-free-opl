<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

use \Bitrix\Main\Localization\Loc;

return array(
	'block' => array(
		'name' => Loc::getMessage('LANDING_BLOCK_46.8.COVER_BGIMG_TITLE_WITH_ICONS_NAME'),
		'section' => array('cover'),
		'dynamic' => false,
	),
	'cards' => array(
		'.landing-block-node-card' => array(
			'name' => Loc::getMessage('LANDING_BLOCK_46.8.COVER_BGIMG_TITLE_WITH_ICONS_CARDS_LANDINGBLOCKNODECARD'),
			'label' => array('.landing-block-node-card-bgimg'),
		),
		'.landing-block-node-card-list-item' => array(
			'name' => Loc::getMessage('LANDING_BLOCK_46.8.COVER_BGIMG_TITLE_WITH_ICONS_CARDS_LANDINGBLOCKNODECARD_LIST_ITEM'),
			'label' => array('.landing-block-node-icon-text'),
		),
	),
	'nodes' => array(
		'.landing-block-node-subtitle' => array(
			'name' => Loc::getMessage('LANDING_BLOCK_46.8.COVER_BGIMG_TITLE_WITH_ICONS_NODES_LANDINGBLOCKNODESUBTITLE'),
			'type' => 'text',
		),
		'.landing-block-node-title' => array(
			'name' => Loc::getMessage('LANDING_BLOCK_46.8.COVER_BGIMG_TITLE_WITH_ICONS_NODES_LANDINGBLOCKNODETITLE'),
			'type' => 'text',
		),
		'.landing-block-node-icon' => array(
			'name' => Loc::getMessage('LANDING_BLOCK_46.8.COVER_BGIMG_TITLE_WITH_ICONS_NODES_LANDINGBLOCKNODEICON'),
			'type' => 'icon',
		),
		'.landing-block-node-icon-text' => array(
			'name' => Loc::getMessage('LANDING_BLOCK_46.8.COVER_BGIMG_TITLE_WITH_ICONS_NODES_LANDINGBLOCKNODEICON_TEXT'),
			'type' => 'text',
		),
		'.landing-block-node-button' => array(
			'name' => Loc::getMessage('LANDING_BLOCK_46.8.COVER_BGIMG_TITLE_WITH_ICONS_NODES_LANDINGBLOCKNODEBUTTON'),
			'type' => 'link',
		),
		'.landing-block-node-card-bgimg' => array(
			'name' => Loc::getMessage('LANDING_BLOCK_46.8.COVER_BGIMG_TITLE_WITH_ICONS_NODES_LANDINGBLOCKNODECARDBGIMG'),
			'type' => 'img',
			'useInDesigner' => false,
			'dimensions' => array('width' => 1920, 'height' => 1440),
		),
	),
	'style' => array(
		'block' => array(
			'type' => array('display'),
		),
		'nodes' => array(
			'.landing-block-node-text-container' => array(
				'name' => Loc::getMessage('LANDING_BLOCK_46.8.COVER_BGIMG_TITLE_WITH_ICONS_NODES_LANDINGBLOCKNODE_TEXT_CONTAINER'),
				'type' => array('animation'),
			),
			'.landing-block-node-subtitle' => array(
				'name' => Loc::getMessage('LANDING_BLOCK_46.8.COVER_BGIMG_TITLE_WITH_ICONS_NODES_LANDINGBLOCKNODESUBTITLE'),
				'type' => ['typo', 'border-color', 'heading'],
			),
			'.landing-block-node-title' => array(
				'name' => Loc::getMessage('LANDING_BLOCK_46.8.COVER_BGIMG_TITLE_WITH_ICONS_NODES_LANDINGBLOCKNODETITLE'),
				'type' => ['typo', 'heading'],
			),
			'.landing-block-node-icon-container' => array(
				'name' => Loc::getMessage('LANDING_BLOCK_46.8.COVER_BGIMG_TITLE_WITH_ICONS_NODES_LANDINGBLOCKNODEICON'),
				'type' => 'color',
			),
			'.landing-block-node-icon-text' => array(
				'name' => Loc::getMessage('LANDING_BLOCK_46.8.COVER_BGIMG_TITLE_WITH_ICONS_NODES_LANDINGBLOCKNODEICON_TEXT'),
				'type' => 'typo',
			),
			'.landing-block-node-button' => array(
				'name' => Loc::getMessage('LANDING_BLOCK_46.8.COVER_BGIMG_TITLE_WITH_ICONS_NODES_LANDINGBLOCKNODEBUTTON'),
				'type' => 'button',
			),
			'.landing-block-node-card-bgimg' => array(
				'name' => Loc::getMessage('LANDING_BLOCK_46.8.COVER_BGIMG_TITLE_WITH_ICONS_CARDS_LANDINGBLOCKNODEBGIMG'),
				'type' => array('background-overlay', 'height-vh'),
			),
			'.landing-block-node-button-container' => array(
				'name' => Loc::getMessage('LANDING_BLOCK_46.8.COVER_BGIMG_TITLE_WITH_ICONS_NODES_LANDINGBLOCKNODEBUTTON'),
				'type' => 'text-align',
			),
		),
	),
	'assets' => array(
		'ext' => array('landing_carousel'),
	),
);