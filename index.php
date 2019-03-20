<?php
session_start();
?>

<!DOCTYPE html>
    <html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Сокращатель ссылок</title>
    </head>
    <body>

    <!-- Отображение ссылки на текущей странице -->
    <?php
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