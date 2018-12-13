<?php

if (empty($_FILES['picture']) || (0 != $_FILES['picture']['error'])) {
    ?>Некорректный запрос<br>
    <a href="/gallery.php">Назад</a>
    <?php die;
}

if (
    'image/jpg' != $_FILES['picture']['type'] &&
    'image/jpeg' != $_FILES['picture']['type'] &&
    'image/png' != $_FILES['picture']['type']
) {
    ?>Некорректный формат файла<br>
    <a href="/gallery.php">Назад</a>
    <?php die;
}

move_uploaded_file(
    $_FILES['picture']['tmp_name'],
    __DIR__ . '/../images/' . $_FILES['picture']['name']
);

header('Location: /gallery.php');
exit();