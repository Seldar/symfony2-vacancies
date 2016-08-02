<?php
/**
 * Created by PhpStorm.
 * User: Ulukut
 * Date: 2.08.2016
 * Time: 15:07
 */

namespace AppBundle\API;

use AppBundle\Drivers\MySQLDriver;


class APIController
{
    public function index()
    {
        $driver = new MySQLDriver();
        return $driver->read();
    }
}