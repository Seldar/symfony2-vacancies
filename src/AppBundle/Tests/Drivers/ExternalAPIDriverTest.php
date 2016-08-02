<?php
/**
 * Created by PhpStorm.
 * User: Ulukut
 * Date: 22.07.2016
 * Time: 14:24
 */

namespace AppBundle\Tests\Controller;

use AppBundle\Drivers\ExternalAPIDriver;

class ExternalAPIDriverTest extends \PHPUnit_Framework_TestCase
{
    public function testCalculatePaymentDate()
    {
        $controller = new ExternalAPIDriver();
        $result = $controller->read(6);

        $this->assertEquals(2, count($result));
        //$this->assertEquals(array(array()), $result[0]);
    }
}