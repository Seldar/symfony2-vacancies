<?php
/**
 * Created by PhpStorm.
 * User: Ulukut
 * Date: 2.08.2016
 * Time: 12:39
 */

namespace AppBundle\Drivers;

use AppBundle\Entity\Vacancy;

class MySQLDriver extends Driver implements DriverInterface
{
    public $connection;

    public function __construct()
    {
        $this->connect();
    }

    public function connect()
    {
        $this->connection = new \mysqli("localhost", "root", "", "vacancies");
    }

    public function read()
    {
        $data = array();
        $result = $this->connection->query("SELECT * FROM vacancies");
        if($result){
            // Cycle through results
            while ($row = $result->fetch_object()){
                $entity = new Vacancy($row);
                $data[] = $entity;
            }
            // Free result set
            $result->close();
        }
        return $data;
    }
}