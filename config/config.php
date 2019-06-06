<?php

//Контсанты для обращения к контроллерам
define('PathPrefix', '../controllers/');
define('PathPostfix', 'Controller.php');

//используемый шаблое
$template = 'default';

//путь к файлам шаблонов (*.tpl)
define('TemplatePrefix', "../views/{$template}/"); //папка где находится шаблон
define('TemplatePostfix', '.tpl');

//путь к файлам шаблонов в вебпространстве
define('TemplateWebPath', "../www/templates/{$template}/"); //часть шаблонов в папке www

// Инициализвация шаблонизатора Smarty
require('../library/Smarty/libs/Smarty.class.php');
$smarty = new Smarty();

$smarty->setTemplateDir(TemplatePrefix);
$smarty->setCompileDir('../tmp/smarty/templates_c');
$smarty->setCacheDir('../tmp/smarty/cache');
$smarty->setConfigDir('../library/Smarty/configs');

$smarty->assign('templateWebPath', TemplateWebPath);