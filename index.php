<?php
session_start(); //Возобновление сессии на текущей странице
?>
<!DOCTYPE html>
    <html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>URL to Short</title>
    </head>
    <body>
    <h1>Сократи меня</h1>

    <?php
    /*Отображение ответа(ссылки) на текущей странице*/
    if(isset($_SESSION['feedback'])) {
        echo "<p>{$_SESSION['feedback']}</p>";
        unset($_SESSION['feedback']);
    }
    ?>

    <form action="shorten.php" method="post">
        <input type="url" name="url" required placeholder="Введите ссылку..." autocomplete="off">
        <input type="submit" name="submit" value="Сократить">
    </form>

    </body>
    </html>