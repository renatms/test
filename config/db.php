<?php

// Инициализация подключения к БД

$dblocation = "127.0.0.1";
$dbname = "testmade";
$dbuser = "root";
$dbpassword = "";

$db = mysql_connect($dblocation, $dbuser, $dbpassword);

if (!$db) {
    echo "Mistake connection to MySql";
    exit();
}

//кодировка по умолчанию
mysql_set_charset('utf-8');

if (!mysql_select_db($dbname, $db)) {
    echo "Mistake access to db: {$dbname}";
    exit();
}