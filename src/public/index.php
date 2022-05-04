<?php

// require_once '../app/PaymentGateway/Stripe/Transaction.php';
// require_once '../app/Notification/Email.php';
// require_once '../app/PaymentGateway/Paddle/CustomerProfile.php';
// require_once '../app/PaymentGateway/Paddle/Transaction.php';

// use App\PaymentGateway\Paddle\Transaction;

require_once __DIR__ . '/../vendor/autoload.php';

session_start();

define('STORAGE_PATH', __DIR__ . '/../storage');
define('VIEW_PATH', __DIR__ . '/../views');

$router = new App\Router();



echo $router->resolve($_SERVER['REQUEST_URI'], strtolower($_SERVER['REQUEST_METHOD']));