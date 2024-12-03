<?php
require_once __DIR__ . '/../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

require_once "core/App.php";
require_once "core/Controller.php";
require_once "core/Database.php";
require_once "config/config.php";
