<?php
/**
 * Created by PhpStorm.
 * User: Ulukut
 * Date: 2.08.2016
 * Time: 13:00
 * @author Volkan Ulukut <arthan@gmail.com>
 */

namespace AppBundle\Drivers;

/**
 * Class Driver.
 * Class to define common driver properties and methods
 * @package AppBundle\Drivers
 */
abstract class Driver implements IDriver
{
    /**
     * @var resource
     */
    protected $connection;

    /**
     * Driver constructor.
     */
    protected function __construct()
    {
        $this->connect();
    }

    /**
     * All Drivers should connect to datasource
     * @return mixed
     */
    abstract protected function connect();

    /**
     * Get connection resource of the driver
     * @return mixed
     */
    public function getConnection()
    {
        return $this->connection;
    }
}