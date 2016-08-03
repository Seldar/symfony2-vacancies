<?php
/**
 * Created by PhpStorm.
 * User: seldar
 * Date: 3.8.2016
 * Time: 22:49
 */

namespace AppBundle\Tests\Controller;

use AppBundle\Drivers\MySQLDriver;
use AppBundle\Entity\Vacancy;

class MySQLDriverTest extends \PHPUnit_Extensions_Database_TestCase
{
    public function getConnection()
    {
        $pdo = new \PDO("mysql:host=localhost;dbname=vacancies", 'root', "");
        return $this->createDefaultDBConnection($pdo, "dbname");
    }
    public function getDataSet()
    {
        return $this->createXMLDataSet("vacancies.xml");
    }
    public function testConnection()
    {
        $controller = new MySQLDriver();
        $this->assertEquals("mysqli", get_class($controller->connection));
    }

    public function testRead()
    {
        $controller = new MySQLDriver();
        $result = $controller->read();
        $this->assertContainsOnlyInstancesOf(Vacancy::class,$result);
    }

    public function testRow()
    {
        $controller = new MySQLDriver();
        $result = $controller->read();
        $this->assertEquals(
            array(
                new Vacancy(array("id" => 1, "title" => "test1","content" => "test2", "description" => "test3"))),
            $result);
    }

    public function testSave()
    {
        $controller = new MySQLDriver();
        $controller->create(new Vacancy(array("title" => "test7" ,"content" => "test8" ,"description" => "test9")));
        $result = $controller->read();
        $this->assertEquals(array(
            new Vacancy(array("id" => 1, "title" => "test1","content" => "test2", "description" => "test3")),
            new Vacancy(array("id" => 2, "title" => "test7","content" => "test8", "description" => "test9"))
        ),$result);
        $controller->update(new Vacancy(array("id" => 2, "title" => "test4","content" => "test5","description" => "test6")));
        $result = $controller->read();
        $this->assertEquals(array(
            new Vacancy(array("id" => 1, "title" => "test1","content" => "test2", "description" => "test3")),
            new Vacancy(array("id" => 2, "title" => "test4","content" => "test5", "description" => "test6"))
        ),$result);
    }
    public function testDelete()
    {
        $controller = new MySQLDriver();
        $controller->delete(1);
        $result = $controller->read();
        $this->assertEquals(array(),$result);
    }

    public function testToString()
    {
        $controller = new MySQLDriver();
        $this->assertEquals("AppBundle\Drivers\MySQLDriver",(string)$controller);
    }
}
