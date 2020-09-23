<?php
	if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true)die();
	$arComponentParameters = [
		"GROUPS"    =>  [
			"sopduSolocalLinks" =>  [
				"NAME"  =>  GetMessage('sopduSolocalLinksSetting')
			]
		],
		"PARAMETERS" => [
			"instagram" => [
				"PARENT"    =>  'sopduSolocalLinks',
				"NAME"      =>  'Instagram',
				"REFRESH"   =>  'N',
				"TYPE"      =>  'STRING'
			],
			"youtube"   => [
				"PARENT"    =>  'sopduSolocalLinks',
				"NAME"      =>  'YouTube',
				"REFRESH"   =>  'N',
				"TYPE"      =>  'STRING'
			],
			"vk"        => [
				"PARENT"    =>  'sopduSolocalLinks',
				"NAME"      =>  'VK',
				"REFRESH"   =>  'N',
				"TYPE"      =>  'STRING'
			],
			"facebook"  => [
				"PARENT"    =>  'sopduSolocalLinks',
				"NAME"      =>  'facebook',
				"REFRESH"   =>  'N',
				"TYPE"      =>  'STRING'
			],
			"whatapp"   => [
				"PARENT"    =>  'sopduSolocalLinks',
				"NAME"      =>  'WhatsApp',
				"REFRESH"   =>  'N',
				"TYPE"      =>  'STRING'
			],
		]
	];
?>