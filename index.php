<?php

require_once __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

error_reporting($_ENV['ENVIRONTMENT'] == 'production' ? 0 : E_ALL);
ini_set('display_errors', $_ENV['ENVIRONTMENT'] == 'production' ? 0 : 1);

require_once __DIR__ . '/configs/database.php';
