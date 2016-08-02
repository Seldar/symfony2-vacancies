<?php
/**
 * Created by PhpStorm.
 * User: Ulukut
 * Date: 2.08.2016
 * Time: 16:45
 */


namespace AppBundle\Drivers;

use AppBundle\Entity\Vacancy;
use Predis\Collection\Iterator;

/*
 * Class to implement redis datasource layer
 */
class RedisDriver extends Driver implements DriverInterface
{
    /*
     * connect to redis server
     */
    public function connect()
    {
        $this->connection = new \Predis\Client(array(
            "scheme" => "tcp",
            "host" => "localhost",
            "port" => "6379",
            "password" => null));
    }
    /*
     * read data from redis and return the result as an array of vacancy model
     */
    public function read()
    {
        $data = array();
        /*
        $this->connection->hmset("vacancies:1",array("id" => "1","title" => "test1","content" => "test2","description" => "test3"));
        $this->connection->hmset("vacancies:2",array("id" => "2","title" => "test4","content" => "test5","description" => "test6"));
        */

        foreach (new Iterator\Keyspace($this->connection, 'vacancies*') as $key) {
            $row = $this->connection->hgetall($key);
            $entity = new Vacancy($row);
            $data[] = $entity;
        }

        return $data;
    }

}