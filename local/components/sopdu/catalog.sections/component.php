<?php
	if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
	$zapros = CIBlockSection::GetList(
		["SORT"=>"ASC"],
		[
			"ACTIVE"        =>  'Y',
			"IBLOCK_ID"     =>  2,
			"SECTION_ID"    =>  false
		],
		false,
		["ID", "NAME", "CODE", "IBLOCK_CODE", "PICTURE"]
	);
	while ($row = $zapros->Fetch()){
		$arResult[$row["ID"]] = $row;
	}
	$this->IncludeComponentTemplate();
?>