<?php
/**
 * Created by PhpStorm.
 * User: Ulukut
 * Date: 22.07.2016
 * Time: 14:24
 */
// AppBundle/Tests/Controller/CommutingControllerTest3.php
namespace AppBundle\Tests\Controller;

use AppBundle\Controller\CommutingController;

class CommutingControllerTest extends \PHPUnit_Framework_TestCase
{
    public function testCalculatePaymentDate()
    {
        $controller = new CommutingController();
        $result = $controller->calculatePaymentDate(6);

        $this->assertEquals('2016-07-04', $result);
    }

    public function testCalculateTraveledDistance()
    {
        $controller = new CommutingController();
        $result = $controller->calculateTraveledDistance(9,22);

        $this->assertEquals(198, $result);
    }

    public function testCalculateCompensation()
    {
        $controller = new CommutingController();
        $result = $controller->calculateCompensation('Bike',11,22);

        $this->assertEquals(242, $result);
    }
}