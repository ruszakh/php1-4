<?php
include __DIR__ . '/functions/readRecords.php';
$records = readRecords();
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Guestbook</title>
</head>
<body>

    <?php

    foreach ($records as $rec) {
        echo $rec; ?> <br> <?php
    }
    ?>

    <form action="/scripts/addMessage.php" method="post">
        <textarea name="message"></textarea>
        <button type="submit">Отправить</button>
    </form>

    <a href="/">На главную</a>

</body>
</html>
