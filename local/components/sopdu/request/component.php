<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
if(!empty($_POST["be4d1a4a0e7667d8b171d4e5dcc93bb4"])){
    $element = new CIBlockElement;
    if($element->Add([
        "IBLOCK_ID"         =>  10,
        "NAME"              =>  $_POST["be4d1a4a0e7667d8b171d4e5dcc93bb4"]["email"],
        "PREVIEW_TEXT"      =>  $_POST["be4d1a4a0e7667d8b171d4e5dcc93bb4"]["message"],
        "PROPERTY_VALUES"   =>  ["NAME" =>  $_POST["be4d1a4a0e7667d8b171d4e5dcc93bb4"]["name"]]
    ])){
        $arResult = 'Y';
    } else {
        $arResult = 'N';
    }
} else {
    $arResult = 'N';
}
$this->IncludeComponentTemplate();
?>