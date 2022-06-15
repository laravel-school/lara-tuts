<?php

namespace App;

use Exception;

final class Singleton
{
    private static ?Singleton $instance = null;

    public static function getInstance(): Singleton
    {
        if (static::$instance === null) {
            static::$instance = new static();
        }

        return static::$instance;
    }

    /**
     * No way to instantiate twice
     */
    private function __construct()
    {
    }

    /**
     * Prevent cloning the object
     */
    private function __clone()
    {
    }

    /**
     * prevent from being unserialized
     */
    public function __wakeup()
    {
        throw new Exception('Cannot unserialized singleton');
    }
}
