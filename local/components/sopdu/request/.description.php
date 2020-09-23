<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
$arComponentDescription = [
    "NAME"          =>  GetMessage("sopduRequestDescriptionName"),
    "DESCRIPTION"   =>  GetMessage("sopduRequestDescriptionDescription"),
    "CACHE_PATH"    =>  'Y',
    "PATH"          =>  [
        "ID"        =>  'sopdu',
        "NAME"      =>  GetMessage("sopduRequestDescriptionDeveloper")
    ]
];
?>