<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true) { die(); }
$getManagerID = CUser::GetByID($USER->GetID())->Fetch()["UF_MANAGER"];
$getManager = CUser::GetByID($getManagerID)->Fetch();
$arResult = [
    "photo"         =>  CFile::GetPath($getManager["PERSONAL_PHOTO"]),
    "phone"         =>  $getManager["WORK_PHONE"],
    "email"         =>  $getManager["EMAIL"],
    "lastName"      =>  $getManager["LAST_NAME"],
    "name"          =>  $getManager["NAME"],
    "secondName"    =>  $getManager["SECOND_NAME"]
];
if($USER->IsAuthorized()) {
    $this->IncludeComponentTemplate();
}
?>