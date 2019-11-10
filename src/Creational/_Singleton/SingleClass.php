<?php

namespace App\_Singleton;

class  SingleClass
{
    /**
     * @var SingleClass
     */
    private static $single_class = null;

    public function __construct()
    {
        // Could not be Instantiate with [PRIVATE]
    }

    public static function getInstance()
    {
        if (is_null(self::$single_class))
            self::$single_class = new SingleClass();;

        return self::$single_class;
    }

}