<?php
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetPageProperty("description", "");
$APPLICATION->SetPageProperty("title", "");
$APPLICATION->SetTitle("Главная");

// $APPLICATION->IncludeComponent("developer:componentName", "", array("PARAMS" => ""), false);

require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
