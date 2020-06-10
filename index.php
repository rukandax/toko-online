<?php

require_once __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

error_reporting($_ENV['ENVIRONTMENT'] == 'production' ? 0 : E_ALL);
ini_set('display_errors', $_ENV['ENVIRONTMENT'] == 'production' ? 0 : 1);

require_once __DIR__ . '/configs/database.php';

$page = isset($_GET['page']) ? $_GET['page'] : 'landing';
$file = __DIR__ . '/pages/' . $page . '/index.php';

if (file_exists($file)) {
    include_once $file;
} else {
    include_once __DIR__ . '/pages/notfound/index.php';
}