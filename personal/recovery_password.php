<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Восстановление пароля");
global $USER;
if ($USER->IsAuthorized()){
    header("HTTP/1.1 301 Moved Permanently");
    header("Location: /");
    exit();
}
?>
<?$APPLICATION->IncludeComponent(
    "bitrix:main.auth.forgotpasswd",
    "",
    Array()
);?>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>