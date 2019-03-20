<?php
require_once 'classes/Short.php';

//Перенаправление по коду-ссылке
if (isset($_GET['code'])) {
    $sh = new Short;
    $code = $_GET['code'];
//Получение URL адреса
    if ($url = $sh->getUrl($code)) {
        header("Location: {$url}");
        die();
    }
}

header('Locate: index.php'); //Перенаправление браузера