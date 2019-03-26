<?php

namespace Test2\Php;

require_once '../../vendor/autoload.php';

use Test2;
use Test2\Php\Classes\Short;

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