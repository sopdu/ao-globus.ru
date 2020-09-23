<?php
	if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
	$arResult = [
		"instagram" =>  $arParams["instagram"],
		"youtube"   =>  $arParams["youtube"],
		"vk"        =>  $arParams["vk"],
		"facebook"  =>  $arParams["facebook"],
		"whatapp"   =>  $arParams["whatapp"]
	];
	$this->IncludeComponentTemplate();
?>