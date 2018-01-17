<?php

include_once __DIR__ . '/../vendor/autoload.php';

$loader = new Composer\Autoload\ClassLoader();
$loader->addPsr4('Legacy\\Sohot\\Test\\', __DIR__, true);
$loader->register();
