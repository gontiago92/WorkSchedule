<?php

use WorkSchedule\Controllers\Controller;
use WorkSchedule\Models\User;
use WorkSchedule\Database;

define('ROOT', dirname(__DIR__));

require_once ROOT . '/core/init.php';

$req = Database::getInstance()->query("SELECT * FROM users");

$controller = new Controller();
$user = new User();

$controller->render('Home', [
    'title' => "Homepage", 
    'users' => $user->findAll()
]);
