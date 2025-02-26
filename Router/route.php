<?php
require_once "Router.php";
require_once "Controllers/BaseController.php";
require_once "Database/Database.php";
require_once "Controllers/WelcomeController.php";
require_once "Controllers/IconsController.php";
require_once "Controllers/NfController.php";
require_once "Controllers/TableController.php";


$route = new Router();
$route->get("/", [WelcomeController::class, 'welcome']);
$route->get("/notifications", [NotificationsController::class, 'index']);

// table list 

$route->get("/tables", [TableController::class, 'index']);


$route->get("/icons", [IconsController::class, 'icon']);

$route->route();