<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true) { die(); }
if(!empty($_POST["99b02f1b87d20f2eda501b23f559159e"])){
    $user = new CUser;
    if($user->Add([
        "ACTIVE"            =>  'N',
        "GROUP_ID"          =>  [6],
        "LOGIN"             =>  $_POST["99b02f1b87d20f2eda501b23f559159e"]["email"],
        "EMAIL"             =>  $_POST["99b02f1b87d20f2eda501b23f559159e"]["email"],
        "PASSWORD"          =>  $_POST["99b02f1b87d20f2eda501b23f559159e"]["password"],
        "CONFIRM_PASSWORD"  =>  $_POST["99b02f1b87d20f2eda501b23f559159e"]["password"],
        "NAME"              =>  $_POST["99b02f1b87d20f2eda501b23f559159e"]["nameManager"],
        "WORK_COMPANY"      =>  $_POST["99b02f1b87d20f2eda501b23f559159e"]["organizationName"],
        "UF_INN"            =>  $_POST["99b02f1b87d20f2eda501b23f559159e"]["tin"]
    ])){
        $message = '
            <p>E-Mail нового пользователя: '.$_POST["99b02f1b87d20f2eda501b23f559159e"]["email"].'</p>
            <p>Имя зарегистрировавшегося: '.$_POST["99b02f1b87d20f2eda501b23f559159e"]["nameManager"].'</p>
            <p>Название организации: '.$_POST["99b02f1b87d20f2eda501b23f559159e"]["organizationName"].'</p>
            <p>ИНН: '.$_POST["99b02f1b87d20f2eda501b23f559159e"]["tin"].'</p>
        ';
        $headers = "Content-Type: text/html; charset=utf-8";
        $subject = iconv("cp1251",  "utf-8", "Зарегистрировалась новая организация");
        mail(
            COption::GetOptionString("main", "email_from"),
            $subject,
            $message,
            $headers
        );
        header("HTTP/1.1 301 Moved Permanently");
        header("Location: /");
        exit();
    }
}
$this->IncludeComponentTemplate();
?>