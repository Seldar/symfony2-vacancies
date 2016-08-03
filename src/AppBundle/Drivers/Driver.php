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

class Driver implements DriverInterface
{
    public $connection;

    public function __construct()
    {
        $this->connect();
    }

    /*
     * All Drivers should connect to datasource
     */
    public function connect()
    {

    }
    /*
     * All Drivers should implement reading from the datasource
     */
    public function read()
    {
        return "Placeholder";
    }

    /*
     * All Drivers should implement creating from the datasource
     */
    public function create(Vacancy $vacancy)
    {

    }

    /*
    * All Drivers should implement update from the datasource
    */
    public function update(Vacancy $vacancy)
    {

    }
    /*
    * All Drivers should implement delete from the datasource
    */
    public function delete($vacancyId)
    {

    }
}