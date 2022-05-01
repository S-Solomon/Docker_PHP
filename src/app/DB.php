<?php

namespace App;

class DB {
    public static ?DB $instance = null;

    private function __construct(public array $config)
    {
        
    }

    public static function getInstance(array $config): DB
    {
        if (self::$instance === null) {
            self::$instance = new DB($config);
        }
        
        return self::$instance;
    }
}