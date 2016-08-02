<?php

namespace AppBundle\Repository;

use AppBundle\Drivers\Driver;

/*
 * Class to talk with different datasources using its driver as parameter
 */
class VacancyRepository
{
    public $driver;

    /*
     * Create an instance using a specific driver
     */
    public function __construct(Driver $driver)
    {
        $this->driver = $driver;
    }

    /*
     * Method to change the driver and also datasource on the fly
     */
    public function changeDriver(Driver $driver)
    {
        $this->driver = $driver;
    }
    /*
     * Method to get all vacancies
     */
    public function read()
    {
        return $this->driver->read();
    }
}