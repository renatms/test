<?php

include_once '../config/config.php';  //Инициализация настроек
include_once '../config/db.php';  //Инициализация БД
include_once '../library/mainFunctions.php';  //Основные функции

//Определяем имя контроллера
//ucfirst() - переведет первую букву значени в верхний регистр
$controllerName = isset($_GET['controller']) ? ucfirst($_GET['controller']):'Index';

//Определяем имя Экшена
$actionName = isset($_GET['action']) ? $_GET['action']:'index';

session_start();

loadPage($smarty, $controllerName, $actionName);




