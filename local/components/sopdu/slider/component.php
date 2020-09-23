<?php
	if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
	$sopduSliderZapros = CIBlockElement::GetList(
		["SORT" => 'asc'],
		[
			"ACTIVE"    =>  'Y',
			"IBLOCK_ID" =>  4,
		],
		false,
		false,
		["ID", "NAME", "PREVIEW_PICTURE", "PREVIEW_TEXT", "PROPERTY_LINK"]
	);
	while ($sopduSliderRow = $sopduSliderZapros->Fetch()){
		$arResult[$sopduSliderRow["ID"]] = [
			"ID"        =>  $sopduSliderRow["ID"],
			"SORT"      =>  $sopduSliderRow["SORT"],
			"NAME"      =>  $sopduSliderRow["NAME"],
			"TEXT"      =>  $sopduSliderRow["PREVIEW_TEXT"],
			"PICTURE"   =>  CFile::GetPath($sopduSliderRow["PREVIEW_PICTURE"]),
			"LINK"      =>  $sopduSliderRow["PROPERTY_LINK_VALUE"]
		];
	}
	$this->IncludeComponentTemplate();
?>