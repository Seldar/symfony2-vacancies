<?php

namespace AppBundle\Repository;

use AppBundle\Drivers\Driver;

class VacancyRepository
{
    public $driver;

    public function __construct(Driver $driver)
    {
        $this->driver = $driver;
    }
    public function read()
    {
        return $this->driver->read();
    }
}