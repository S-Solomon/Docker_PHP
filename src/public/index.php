<?php

// require_once '../app/PaymentGateway/Stripe/Transaction.php';
// require_once '../app/Notification/Email.php';
// require_once '../app/PaymentGateway/Paddle/CustomerProfile.php';
// require_once '../app/PaymentGateway/Paddle/Transaction.php';

require __DIR__ . '/../vendor/autoload.php';

use App\PaymentGateway\Paddle\Transaction;

$paddleTransaction = new Transaction();

$id = new \Ramsey\Uuid\UuidFactory();

echo $id->uuid4();

var_dump($paddleTransaction);