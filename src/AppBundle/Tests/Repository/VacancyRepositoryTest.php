<?php
/**
 * Created by PhpStorm.
 * User: Ulukut
 * Date: 4.08.2016
 * Time: 14:36
 */

namespace src\AppBundle\Tests\Repository;

use AppBundle\Drivers\ElasticSearchDriver;
use AppBundle\Drivers\ExternalAPIDriver;
use AppBundle\Drivers\RedisDriver;
use AppBundle\Repository\VacancyRepository;
use AppBundle\Drivers\MySQLDriver;
use AppBundle\Entity\Vacancy;

class VacancyRepositoryTest extends \PHPUnit_Framework_TestCase
{
    public function testRead()
    {
        $controller = new VacancyRepository(new MySQLDriver());
        $result = $controller->read();
        $this->assertContainsOnlyInstancesOf(Vacancy::class,$result);

        $controller->changeReadDriver(new ExternalAPIDriver());
        $result = $controller->read();
        $this->assertContainsOnlyInstancesOf(Vacancy::class,$result);

        $controller->changeReadDriver(new RedisDriver());
        $result = $controller->read();
        $this->assertContainsOnlyInstancesOf(Vacancy::class,$result);

        $controller->changeReadDriver(new ElasticSearchDriver());
        $result = $controller->read();
        $this->assertContainsOnlyInstancesOf(Vacancy::class,$result);
    }
}
