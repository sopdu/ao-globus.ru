<?php
    AddEventHandler("main", "OnBeforeUserRegister", "OnBeforeUserUpdateHandler");
    AddEventHandler("main", "OnBeforeUserUpdate", "OnBeforeUserUpdateHandler");
    function OnBeforeUserUpdateHandler(&$arFields){
        $arFields["LOGIN"] = $arFields["EMAIL"];
        return $arFields;
    }
    if(!empty($_GET["drop_item"])){
        require_once ($_SERVER["DOCUMENT_ROOT"].'/bitrix/modules/main/include.php');
        CModule::IncludeModule("iblock");
        CModule::IncludeModule('catalog');
        CModule::IncludeModule('sale');
        CSaleBasket::Delete($_GET["drop_item"]);
    }
	require_once ($_SERVER["DOCUMENT_ROOT"].'/local/class/sopdu.php');
    $sopdu = new sopdu();
?>