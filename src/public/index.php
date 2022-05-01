<?php

declare(strict_types=1);

require_once '../Transactions.php';

use PaymentGateway\Stripe\Transaction;

// CLASSES AND OBJECTS
$amount = (new Transaction(100, 'Transaction 1'))
    ->addTax(8)
    ->applyDiscount(10)
    ->getAmount();
    



    
var_dump($amount);