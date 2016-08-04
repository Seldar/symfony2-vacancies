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

    public function testAddMngDrivers()
    {
        $controller = new VacancyRepository(new MySQLDriver());
        $result = $controller->addMngDriver(array(new MySQLDriver(),new ElasticSearchDriver(), new RedisDriver(), new ExternalAPIDriver()));
        $this->assertEquals(4,$result);
    }

    public function testRemoveMngDrivers()
    {
        $controller = new VacancyRepository(new MySQLDriver());
        $controller->addMngDriver(array(new MySQLDriver(),new ElasticSearchDriver(), new RedisDriver(), new ExternalAPIDriver()));
        $result = $controller->removeMngDriver(array(new MySQLDriver(),new ElasticSearchDriver()));
        $this->assertEquals(2,$result);

        $result = $controller->removeMngDriver(array(new MySQLDriver(),new RedisDriver()));
        $this->assertEquals(1,$result);
    }

    public function testCreate()
    {
        $repository = new VacancyRepository(new MySQLDriver());
        $repository->addMngDriver(array(new MySQLDriver(),new RedisDriver(),new ElasticSearchDriver(),new ExternalAPIDriver()));
        $result =  $repository->create(new Vacancy(array("title" => "test" . rand(1,100),"content" => "test" . rand(1,100),"description" => "test" . rand(1,100))));
        $this->assertEquals(array(0,0,0,0),$result);
    }

    public function testUpdate()
    {
        $repository = new VacancyRepository(new MySQLDriver());
        $repository->addMngDriver(array(new MySQLDriver(),new RedisDriver(),new ElasticSearchDriver(),new ExternalAPIDriver()));
        $result =  $repository->update(new Vacancy(array("id" => 1,"title" => "test" . rand(1,100),"content" => "test" . rand(1,100),"description" => "test" . rand(1,100))));
        $this->assertEquals(array(0,0,0,0),$result);
    }

    public function testDelete()
    {
        $repository = new VacancyRepository(new MySQLDriver());
        $repository->addMngDriver(array(new MySQLDriver(),new RedisDriver(),new ElasticSearchDriver(),new ExternalAPIDriver()));
        $result =  $repository->delete(1);
        $this->assertEquals(array(0,0,0,0),$result);
    }
}
