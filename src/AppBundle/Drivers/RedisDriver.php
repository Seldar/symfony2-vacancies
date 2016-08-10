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
class RedisDriver extends Driver
{
    public function __construct()
    {
        parent::__construct();
    }
    /*
     * connect to redis server
     */
    protected function connect()
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
    /*
     * create a new row in redis using vacancy object sent as parameter
     * return true on success
     */
    public function create(Vacancy $vacancy)
    {
        $lastId = 0;
        foreach (new Iterator\Keyspace($this->connection, 'vacancies*') as $key) {
            $id = $this->connection->hget($key,"id");
            if($id > $lastId)
                $lastId = $id;
        }
        $newId = $lastId + 1;
        $result = $this->connection->hmset("vacancies:" . $newId,array("id" => $newId,"title" => $vacancy->getTitle(),"content" => $vacancy->getContent(),"description" => $vacancy->getDescription()));
        return (string)$result == "OK";
    }
    /*
     * create a new row in redis using vacancy object sent as parameter
     * return true on success
     */
    public function update(Vacancy $vacancy)
    {
        $result = $this->connection->hmset("vacancies:" . $vacancy->getId(),array("id" => $vacancy->getId(),"title" => $vacancy->getTitle(),"content" => $vacancy->getContent(),"description" => $vacancy->getDescription()));
        return (string)$result == "OK";
    }
    /*
     * delete row in redis using vacancy object sent as parameter
     * return true on success
     */
    public function delete($vacancyId)
    {
        $result =  $this->connection->expire("vacancies:" . $vacancyId,0);
        return (string)$result == "OK";
    }

    /*
     * Convert to string for comparing purposes
     */
    function __toString()
    {
        return __CLASS__;
    }

}