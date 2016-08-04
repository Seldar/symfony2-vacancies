<?php
/**
 * Created by PhpStorm.
 * User: Ulukut
 * Date: 2.08.2016
 * Time: 13:00
 */

namespace AppBundle\Drivers;

use AppBundle\Entity\Vacancy;

/*
 * Class to define common driver properties and methods
 */

abstract class Driver implements IDriver
{
    protected $connection;

    protected function __construct()
    {
        $this->connect();
    }

    /*
     * All Drivers should connect to datasource
     */
    abstract protected function connect();

    public function getConnection()
    {
        return $this->connection;
    }
}