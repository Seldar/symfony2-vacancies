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
}