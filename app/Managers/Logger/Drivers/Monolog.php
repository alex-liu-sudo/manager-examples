<?php

namespace App\Managers\Logger\Drivers;

use App\Managers\Logger\Contracts\Driver;

class Monolog implements Driver {

    protected $config;

    public function __construct(array $config)
    {
        $this->config = $config;
    }

    public function doAnything()
    {
        echo 'i do anything from the monolog driver';
    }
}
