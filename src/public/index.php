<?php

// require_once '../app/PaymentGateway/Stripe/Transaction.php';
// require_once '../app/Notification/Email.php';
// require_once '../app/PaymentGateway/Paddle/CustomerProfile.php';
// require_once '../app/PaymentGateway/Paddle/Transaction.php';

use App\PaymentGateway\Paddle\Transaction;

require_once __DIR__ . '/../vendor/autoload.php';

$transaction = new Transaction();
$transaction->setStatus(Transaction::STATUS_PAID);
var_dump($transaction);

// $id = new \Ramsey\Uuid\UuidFactory();
// echo $id->uuid4();