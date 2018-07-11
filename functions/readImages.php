<?php

function readImages() {
    return array_diff(scandir(__DIR__ . '/../images'), ['..', '.']);
}