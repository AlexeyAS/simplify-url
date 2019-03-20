<?php
require_once 'classes/Short.php';

if (isset($_GET['code'])) {
    $s = new Short;
    $code = $_GET['code'];

    if($url = $s->getUrl($code)) {
        header("Location: {$url}");
        die();
    }
}

header('Locate: index.php');