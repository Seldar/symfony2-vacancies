<?php
/**
 * Created by PhpStorm.
 * User: Ulukut
 * Date: 4.08.2016
 * Time: 12:05
 */

namespace src\AppBundle\Tests\Drivers;
use AppBundle\Drivers\RedisDriver;
use AppBundle\Entity\Vacancy;

class RedisDriverTest extends \PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $controller = new RedisDriver();
        $controller->getConnection()->hmset("vacancies:1",array("id" => 1,"title" => "test1","content" => "test2","description" => "test3"));
    }
    public function tearDown()
    {
        $controller = new RedisDriver();
        $controller->getConnection()->expire("vacancies:1",0);

    }

    public function testConnection()
    {
        $controller = new RedisDriver();
        $this->assertEquals("Predis\Client", get_class($controller->getConnection()));
    }

    public function testRead()
    {
        $controller = new RedisDriver();
        $result = $controller->read();
        $this->assertContainsOnlyInstancesOf(Vacancy::class,$result);
    }

    public function testRow()
    {
        $controller = new RedisDriver();
        $result = $controller->read();
        $this->assertEquals(
            array(
                new Vacancy(array("id" => 1, "title" => "test1","content" => "test2", "description" => "test3"))),
            $result);
    }

    public function testCreate()
    {
        $controller = new RedisDriver();
        $controller->create(new Vacancy(array("title" => "test7" ,"content" => "test8" ,"description" => "test9")));
        $result = $controller->read();
        $this->assertEquals(array(
            new Vacancy(array("id" => 1, "title" => "test1","content" => "test2", "description" => "test3")),
            new Vacancy(array("id" => 2, "title" => "test7","content" => "test8", "description" => "test9"))
        ),$result);

    }
    public function testUpdate()
    {
        $controller = new RedisDriver();
        $controller->update(new Vacancy(array("id" => 2, "title" => "test4","content" => "test5","description" => "test6")));
        $result = $controller->read();
        $this->assertEquals(array(
            new Vacancy(array("id" => 1, "title" => "test1","content" => "test2", "description" => "test3")),
            new Vacancy(array("id" => 2, "title" => "test4","content" => "test5", "description" => "test6"))
        ),$result);
    }
    public function testDelete()
    {
        $controller = new RedisDriver();
        $controller->delete(2);
        $result = $controller->read();
        $this->assertEquals(array(new Vacancy(array("id" => 1, "title" => "test1","content" => "test2", "description" => "test3"))),$result);
    }

    public function testToString()
    {
        $controller = new RedisDriver();
        $this->assertEquals("AppBundle\Drivers\RedisDriver",(string)$controller);
    }
}
