<?php
/**
 * Created by PhpStorm.
 * User: Ulukut
 * Date: 2.08.2016
 * Time: 12:38
 */

namespace AppBundle\Drivers;


interface DriverInterface
{
    public function connect();
    public function read();
}