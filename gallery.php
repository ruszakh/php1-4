<?php
include __DIR__ . '/functions/readImages.php';
$images = readImages();
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gallery</title>
    <style>
        img { width: 300px; }
    </style>
</head>
<body>

    <?php

    foreach ($images as $img) { ?>
        <img src="/images/<?php echo $img; ?>" alt="Wind Instrument">
    <?php } ?>

    <form action="/scripts/addImage.php" method="post" enctype="multipart/form-data">
        <input type="file" name="picture">
        <button type="submit">Отправить</button>
    </form>

    <a href="/">На главную</a>

</body>
</html>
