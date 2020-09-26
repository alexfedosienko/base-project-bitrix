<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?=LANGUAGE_ID?>" lang="<?=LANGUAGE_ID?>">
<head>
  <meta charset="utf-8">
  <title><?$APPLICATION->ShowTitle();?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="format-detection" content="telephone=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta http-equiv="Cache-Control" content="max-age=3600, must-revalidate" />

	<link rel="apple-touch-icon" sizes="180x180" href="<?=SITE_TEMPLATE_PATH;?>/img/favicons/apple-touch-icon.png">
	<link rel="icon" type="image/png" href="<?=SITE_TEMPLATE_PATH;?>/img/favicon-32x32.ico" sizes="32x32">
	<link rel="icon" type="image/png" href="<?=SITE_TEMPLATE_PATH;?>/img/favicon-16x16.ico" sizes="16x16">
	<link rel="shortcut icon" href="<?=SITE_TEMPLATE_PATH;?>/img/favicons/favicon-32x32.png" type="image/png">
	<link rel="mask-icon" href="<?=SITE_TEMPLATE_PATH;?>/img/favicons/safari-pinned-tab.svg" color="#5bbad5">
	<link rel="manifest" href="<?=SITE_TEMPLATE_PATH;?>/img/favicons/manifest.json">
	<meta name="msapplication-config" content="<?=SITE_TEMPLATE_PATH;?>/img/favicons/browserconfig.xml" />
	<meta name="theme-color" content="#ffffff">
  <?php
    // use Bitrix\Main\Page\Asset;
    // Подключаем CSS
    //Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/style.css");
    // Подключаем JS
    //Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/global.js");
    // Подключаем что-то ещё
    //Asset::getInstance()->addString("");

    // Cсобираем head
    // $APPLICATION->ShowHead();  //заменим строками ниже, чтобы убрать keywords
    // // Или
    // $APPLICATION->ShowCSS(true, true);
		// $APPLICATION->ShowHeadStrings();
    // $APPLICATION->ShowCSS();
    // $APPLICATION->ShowHeadScripts();
    // $APPLICATION->ShowMeta("keywords");
    // $APPLICATION->ShowMeta("description");
	?>
</head>
<body>
  <?php if($USER->isAdmin()) $APPLICATION->ShowPanel();?>
