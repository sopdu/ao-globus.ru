<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true) { die(); }
if (!function_exists('getSectionFil')) {
    function getSectionFil($parent = false){
        $zaprosSection = CIBlockSection::GetList(
            [],
            [
                "ACTIVE"        =>  'Y',
                "IBLOCK_ID"     =>  2,
                "SECTION_ID"    =>  $parent
            ],
            false,
            ["ID", "NAME", "CODE"]
        );
        while ($rowSection = $zaprosSection->Fetch()){
            $result[$rowSection["ID"]] = $rowSection;
        }
        return $result;
    }
}
foreach (getSectionFil() as $getSectionParent){
    $arResult[$getSectionParent["ID"]] = $getSectionParent;
    $arResult[$getSectionParent["ID"]]["LINK"] = '/catalog/'.$getSectionParent["CODE"].'/';
    foreach (getSectionFil($getSectionParent["ID"]) as $getSection){
        $arResult[$getSectionParent["ID"]]["ITEM"][$getSection["ID"]] = $getSection;
        #$arResult[$getSectionParent["ID"]]["ITEM"][$getSection["ID"]]["LINK"] = '/catalog/'.$getSectionParent["CODE"].'/'.$getSection["CODE"].'/';
        $arResult[$getSectionParent["ID"]]["ITEM"][$getSection["ID"]]["LINK"] = '/catalog/'.$getSection["CODE"].'/';

    }
}
$this->IncludeComponentTemplate();
?>