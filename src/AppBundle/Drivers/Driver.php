<?php
/**
 * Created by PhpStorm.
 * User: Ulukut
 * Date: 2.08.2016
 * Time: 13:00
 */

namespace AppBundle\Drivers;


class Driver implements DriverInterface
{
    public $connection;

    public function __construct()
    {
        $this->connect();
    }

    public function connect()
    {

    }
    public function read()
    {

    }
}