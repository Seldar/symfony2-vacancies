<?php
/**
 * Created by PhpStorm.
 * User: seldar
 * Date: 4.8.2016
 * Time: 00:12
 */

namespace AppBundle\Tests\Controller;
use AppBundle\Drivers\ElasticSearchDriver;
use AppBundle\Entity\Vacancy;

class ElasticSearchDriverTest extends \PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $controller = new ElasticSearchDriver();
        $params = [
            'index' => 'my_index',
            'body' => [
                'settings' => [
                    'number_of_replicas' => 0,
                    'refresh_interval' => -1
                ]
            ]
        ];

        $controller->connection->indices()->putSettings($params);
        $params = [
            'index' => 'my_index',
            'type' => 'vacancy',
            'id' => 1,
            'body' => ['id' => 1,'title' => "test1",'content'=>"test2",'description' => "test3"]
        ];
        $controller->connection->index($params);
        sleep(1);
    }
    public function tearDown()
    {
        $controller = new ElasticSearchDriver();
        $params = [
            'index' => 'my_index',
            'type' => 'vacancy',
            'id' => 1
        ];
       $controller->connection->delete($params);

    }

    public function testConnection()
    {
        $controller = new ElasticSearchDriver();
        $this->assertEquals("Elasticsearch\Client", get_class($controller->connection));
    }

    public function testRead()
    {
        $controller = new ElasticSearchDriver();
        $result = $controller->read();
        $this->assertContainsOnlyInstancesOf(Vacancy::class,$result);
    }

    public function testRow()
    {
        $controller = new ElasticSearchDriver();
        $result = $controller->read();
        $this->assertEquals(
            array(
                new Vacancy(array("id" => 1, "title" => "test1","content" => "test2", "description" => "test3"))),
            $result);
    }

    public function testCreate()
    {
        $controller = new ElasticSearchDriver();
        $controller->create(new Vacancy(array("title" => "test7" ,"content" => "test8" ,"description" => "test9")));
        sleep(1);
        $result = $controller->read();
        $this->assertEquals(array(
            new Vacancy(array("id" => 2, "title" => "test7","content" => "test8", "description" => "test9")),
            new Vacancy(array("id" => 1, "title" => "test1","content" => "test2", "description" => "test3"))
        ),$result);

    }
    public function testUpdate()
    {
        $controller = new ElasticSearchDriver();
        $controller->update(new Vacancy(array("id" => 2, "title" => "test4","content" => "test5","description" => "test6")));
        sleep(1);
        $result = $controller->read();
        $this->assertEquals(array(
            new Vacancy(array("id" => 2, "title" => "test4","content" => "test5", "description" => "test6")),
            new Vacancy(array("id" => 1, "title" => "test1","content" => "test2", "description" => "test3"))
        ),$result);
    }
    public function testDelete()
    {
        $controller = new ElasticSearchDriver();
        $controller->delete(2);
        sleep(1);
        $result = $controller->read();
        $this->assertEquals(array(new Vacancy(array("id" => 1, "title" => "test1","content" => "test2", "description" => "test3"))),$result);
    }

    public function testToString()
    {
        $controller = new ElasticSearchDriver();
        $this->assertEquals("AppBundle\Drivers\ElasticSearchDriver",(string)$controller);
    }
}
