<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
$arComponentDescription = [
    "NAME"          =>  GetMessage("sopduYourManagerDescriptionName"),
    "DESCRIPTION"   =>  GetMessage("sopduYourManagerDescriptionDescription"),
    "CACHE_PATH"    =>  'Y',
    "PATH"          =>  [
        "ID"        =>  'sopdu',
        "NAME"      =>  GetMessage("sopduYourManagerDescriptionDeveloper")
    ]
];
?>