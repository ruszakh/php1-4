<?php

include __DIR__ . '/readRecords.php';

$records = readRecords();

$records[] = $_POST['message'];

$str = implode ("\n", $records);

file_put_contents(__DIR__ . '/../records.txt', $str);

header('Location: /guestbook.php');
exit();