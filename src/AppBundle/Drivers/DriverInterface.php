<?php
/**
 * Created by PhpStorm.
 * User: Ulukut
 * Date: 2.08.2016
 * Time: 12:38
 */

namespace AppBundle\Drivers;

/*
 * Interface to define a template for datasource drivers
 */
interface DriverInterface
{
    /*
     * All Drivers should connect to datasource
     */
    public function connect();
    /*
     * All Drivers should implement reading from the datasource
     */
    public function read();
}