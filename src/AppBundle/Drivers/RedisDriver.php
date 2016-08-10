<?php
/**
 * Created by PhpStorm.
 * User: Ulukut
 * Date: 2.08.2016
 * Time: 16:45
 * @author Volkan Ulukut <arthan@gmail.com>
 */


namespace AppBundle\Drivers;

use AppBundle\Entity\Vacancy;
use Predis\Collection\Iterator;

/**
 * Class RedisDriver.
 * Class to implement redis datasource layer.
 * @package AppBundle\Drivers
 */
class RedisDriver extends Driver
{
    /**
     * RedisDriver constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * connect to redis server.
     */
    protected function connect()
    {
        $this->connection = new \Predis\Client(array(
            "scheme" => "tcp",
            "host" => "localhost",
            "port" => "6379",
            "password" => null));
    }
    /**
     * read data from redis and return the result as an array of vacancy model.
     * @return array An array of vacancy models.
     */
    public function read()
    {
        $data = array();

        foreach (new Iterator\Keyspace($this->connection, 'vacancies*') as $key) {
            $row = $this->connection->hgetall($key);
            $entity = new Vacancy($row);
            $data[] = $entity;
        }

        return $data;
    }

    /**
     * create a new row in redis using vacancy object sent as parameter.
     * @param Vacancy $vacancy Model to be created
     * @return bool true on success
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
    /**
     * create a new row in redis using vacancy object sent as parameter.
     * @param Vacancy $vacancy Model to be updated
     * @return bool True on success
     */
    public function update(Vacancy $vacancy)
    {
        $result = $this->connection->hmset("vacancies:" . $vacancy->getId(),array("id" => $vacancy->getId(),"title" => $vacancy->getTitle(),"content" => $vacancy->getContent(),"description" => $vacancy->getDescription()));
        return (string)$result == "OK";
    }

    /**
     * delete row in redis using vacancy object sent as parameter.
     * @param int $vacancyId Model id to delete
     * @return bool True on success
     */
    public function delete($vacancyId)
    {
        $result =  $this->connection->expire("vacancies:" . $vacancyId,0);
        return (string)$result == "OK";
    }

    /**
     * Convert to string for comparing purposes.
     * @return string The name of the class
     */
    function __toString()
    {
        return __CLASS__;
    }

}