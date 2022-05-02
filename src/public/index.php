<?php

// require_once '../app/PaymentGateway/Stripe/Transaction.php';
// require_once '../app/Notification/Email.php';
// require_once '../app/PaymentGateway/Paddle/CustomerProfile.php';
// require_once '../app/PaymentGateway/Paddle/Transaction.php';

use App\PaymentGateway\Paddle\Transaction;

require_once __DIR__ . '/../vendor/autoload.php';

// $transaction = new Transaction(25);
// $transaction->process();

$dateTime = new DateTime();
echo $dateTime->getTimezone()->getName() . ' - ' . $dateTime->format('m/d/Y g:i A'). PHP_EOL;

$dateTime->setTimezone(new DateTimeZone('Europe/London'));
echo $dateTime->getTimezone()->getName() . ' - ' . $dateTime->format('m/d/Y g:i A'). PHP_EOL;