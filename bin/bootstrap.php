<?php

$standaloneAutoloader = __DIR__ . '/../vendor/autoload.php';
$packageAutoloader = __DIR__ . '/../../../autoload.php';

if (file_exists($packageAutoloader)) {
    include_once $packageAutoloader;
} else {
    include_once $standaloneAutoloader;
}
