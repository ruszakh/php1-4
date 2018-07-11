<?php

function readRecords() {
    if (file_exists(__DIR__ . '/../records.txt')) {
        return file(__DIR__ . '/../records.txt', FILE_IGNORE_NEW_LINES);
    }
    return null;
}