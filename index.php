<?php
require __DIR__.'/vendor/autoload.php';
$config = require dirname(__FILE__)."/Configuration/Main.php";
X\Core\X::start($config)->run();
