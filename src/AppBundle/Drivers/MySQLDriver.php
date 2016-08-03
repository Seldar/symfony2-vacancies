<?php
/**
 * Created by PhpStorm.
 * User: Ulukut
 * Date: 2.08.2016
 * Time: 12:39
 */

namespace AppBundle\Drivers;

use AppBundle\Entity\Vacancy;

/*
 * Class to implement mysql datasource layer
 */
class MySQLDriver extends Driver implements DriverInterface
{

    /*
     * connect to mysql server
     */
    public function connect()
    {
        $this->connection = new \mysqli("localhost", "root", "", "vacancies");
    }
    /*
     * read data from mysql and return the result as an array of vacancy model
     */
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
    /*
     * create a new row in mysql using vacancy object sent as parameter
     */
    public function create(Vacancy $vacancy)
    {
        $stmt = $this->connection->prepare("INSERT INTO vacancies SET title = ?, content = ?, description=?");
        $title = $vacancy->getTitle();
        $content = $vacancy->getContent();
        $description = $vacancy->getDescription();
        $stmt->bind_param("sss",$title,$content,$description);
        $stmt->execute();
        $error = $stmt->error;
        $stmt->close();
        return $error;
    }

    /*
     * update row in mysql using vacancy object sent as parameter
     */
    public function update(Vacancy $vacancy)
    {
        $stmt = $this->connection->prepare("UPDATE vacancies SET title = ?, content = ?, description=? WHERE id = ?");
        $title = $vacancy->getTitle();
        $content = $vacancy->getContent();
        $description = $vacancy->getDescription();
        $id = $vacancy->getId();
        $stmt->bind_param("sssi",$title,$content,$description,$id);
        $stmt->execute();
        $error = $stmt->error;
        $stmt->close();
        return $error;
    }
    /*
     * delete row in mysql using vacancy object sent as parameter
     */
    public function delete($vacancyId)
    {
        $stmt = $this->connection->prepare("DELETE FROM vacancies WHERE id = ?");
        $stmt->bind_param("i",$vacancyId);
        $stmt->execute();
        $error = $stmt->error;
        $stmt->close();
        return $error;
    }

    /*
     * Convert to string for comparing purposes
     */
    function __toString()
    {
        return __CLASS__;
    }
}