<?php

declare(strict_types=1);

namespace App\PaymentGateway\Paddle;

class Transaction
{
    public const STATUS_PENDING = 'pending';
    public const STATUS_DECLINED = 'declined';
    public const STATUS_PAID = 'paid';
    
    public const ALL_STATUSES = [
        self::STATUS_PAID     => 'Paid',
        self::STATUS_PENDING  => 'Pending',
        self::STATUS_DECLINED => 'Declined',
    ];
    
    private string $status;
    
    public function __construct()
    {
        var_dump(self::STATUS_PAID);
    }

    public function setStatus(string $status): self
    {
        if (! isset(self::ALL_STATUSES[$status])) {
            throw new \InvalidArgumentException('Invalid status');
        }
        
        $this->status = $status;

        return $this;
    }
}