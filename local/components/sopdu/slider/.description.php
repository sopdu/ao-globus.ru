<?php
	if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
	$arComponentDescription = [
		"NAME"          =>  GetMessage("sopduSliderDescriptionName"),
		"DESCRIPTION"   =>  GetMessage("sopduSliderDescriptionDescription"),
		"CACHE_PATH"    =>  'Y',
		"PATH"          =>  [
			"ID"        =>  'sopdu',
			"NAME"      =>  GetMessage("sopduSliderDescriptionDeveloper")
		]
	];
?>