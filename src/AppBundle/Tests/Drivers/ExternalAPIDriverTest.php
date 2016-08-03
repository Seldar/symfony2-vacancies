<?php
/**
 * Created by PhpStorm.
 * User: Ulukut
 * Date: 22.07.2016
 * Time: 14:24
 */

namespace AppBundle\Tests\Controller;

use AppBundle\Drivers\ExternalAPIDriver;
use AppBundle\Entity\Vacancy;

class ExternalAPIDriverTest extends \PHPUnit_Framework_TestCase
{
    public function testConnection()
    {
        $controller = new ExternalAPIDriver();
        $this->assertEquals("curl", get_resource_type($controller->connection));
    }

    public function testRead()
    {
        $controller = new ExternalAPIDriver();
        $result = $controller->read();
        $this->assertContainsOnlyInstancesOf(Vacancy::class,$result);
    }

    public function testSave()
    {
        $controller = new ExternalAPIDriver();
        $result = $controller->create(new Vacancy(array("title" => "test" . rand(1,100),"content" => "test" . rand(1,100),"description" => "test" . rand(1,100))));
        $this->assertEquals("success",$result);
        $result = $controller->update(new Vacancy(array("id" => 1, "title" => "test" . rand(1,100),"content" => "test" . rand(1,100),"description" => "test" . rand(1,100))));
        $this->assertEquals("success",$result);
    }
    public function testDelete()
    {
        $controller = new ExternalAPIDriver();
        $result = $controller->delete(1);
        $this->assertEquals("success",$result);
    }

    public function testToString()
    {
        $controller = new ExternalAPIDriver();
        $this->assertEquals("AppBundle\Drivers\ExternalAPIDriver",(string)$controller);
    }
}