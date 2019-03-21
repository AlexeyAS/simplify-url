<?php
namespace test2\php;
use test2;
use test2\php\classes\Short;
require_once 'Short.php';
//include '../../vendor/autoload.php';
//Перенаправление по коду-ссылке
if (isset($_GET['code'])) {
    $shorten = new Short;
    $code = $_GET['code'];
//Получение URL адреса
    if ($url = $shorten->getUrl($code)) {
        header("Location: {$url}");
        die();
    }
}

header('Locate: ../../index.php'); //Перенаправление браузера