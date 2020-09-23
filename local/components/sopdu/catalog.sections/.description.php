<?php
	if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
	$arComponentDescription = [
		"NAME"          =>  GetMessage("sopduCatalogSectionsDescriptionName"),
		"DESCRIPTION"   =>  GetMessage("sopduCatalogSectionsDescriptionDescription"),
		"CACHE_PATH"    =>  'Y',
		"PATH"          =>  [
			"ID"        =>  'sopdu',
			"NAME"      =>  GetMessage("sopduCatalogSectionsDescriptionDeveloper")
		]
	];
?>