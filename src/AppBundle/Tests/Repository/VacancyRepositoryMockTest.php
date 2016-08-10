<?php
/**
 * Created by PhpStorm.
 * User: Ulukut
 * Date: 10.08.2016
 * Time: 15:37
 * @author Volkan Ulukut <arthan@gmail.com>
 */

namespace src\AppBundle\Tests\Repository;

use AppBundle\Drivers\ElasticSearchDriver;
use AppBundle\Drivers\ExternalAPIDriver;
use AppBundle\Drivers\RedisDriver;
use AppBundle\Repository\VacancyRepository;
use AppBundle\Drivers\MySQLDriver;
use AppBundle\Entity\Vacancy;

class VacancyRepositoryMockTest extends \PHPUnit_Framework_TestCase
{
    public function testMySQLDriver()
    {
        $vacancy = $this->createMock('AppBundle\Entity\Vacancy');
        $driver = $this->createMock('AppBundle\Drivers\MySQLDriver');
        $driver
            ->expects($this->once())
            ->method('read')
            ->will($this->returnValue(array($vacancy)));
        $driver
            ->expects($this->once())
            ->method('create')
            ->with($vacancy)
            ->will($this->returnValue(1));
        $driver
            ->expects($this->once())
            ->method('update')
            ->with($vacancy)
            ->will($this->returnValue(1));
        $driver
            ->expects($this->once())
            ->method('delete')
            ->with(1)
            ->will($this->returnValue(1));

        $controller = new VacancyRepository($driver);
        $result = $controller->read();
        $this->assertContainsOnlyInstancesOf(Vacancy::class,$result);

        $result = $controller->addMngDriver(array($driver));
        $this->assertEquals(1,$result);

        $result = $controller->create($vacancy);
        $this->assertEquals(array(1),$result);

        $result = $controller->update($vacancy);
        $this->assertEquals(array(1),$result);

        $result = $controller->delete(1);
        $this->assertEquals(array(1),$result);
    }

    public function testExternalAPIDriver()
    {
        $vacancy = $this->createMock('AppBundle\Entity\Vacancy');
        $driver = $this->createMock('AppBundle\Drivers\ExternalAPIDriver');
        $driver
            ->expects($this->once())
            ->method('read')
            ->will($this->returnValue(array($vacancy)));
        $driver
            ->expects($this->once())
            ->method('create')
            ->with($vacancy)
            ->will($this->returnValue(1));
        $driver
            ->expects($this->once())
            ->method('update')
            ->with($vacancy)
            ->will($this->returnValue(1));
        $driver
            ->expects($this->once())
            ->method('delete')
            ->with(1)
            ->will($this->returnValue(1));

        $controller = new VacancyRepository($driver);
        $result = $controller->read();
        $this->assertContainsOnlyInstancesOf(Vacancy::class,$result);

        $result = $controller->addMngDriver(array($driver));
        $this->assertEquals(1,$result);

        $result = $controller->create($vacancy);
        $this->assertEquals(array(1),$result);

        $result = $controller->update($vacancy);
        $this->assertEquals(array(1),$result);

        $result = $controller->delete(1);
        $this->assertEquals(array(1),$result);
    }

    public function testElasticSearchDriver()
    {
        $vacancy = $this->createMock('AppBundle\Entity\Vacancy');
        $driver = $this->createMock('AppBundle\Drivers\ElasticSearchDriver');
        $driver
            ->expects($this->once())
            ->method('read')
            ->will($this->returnValue(array($vacancy)));
        $driver
            ->expects($this->once())
            ->method('create')
            ->with($vacancy)
            ->will($this->returnValue(1));
        $driver
            ->expects($this->once())
            ->method('update')
            ->with($vacancy)
            ->will($this->returnValue(1));
        $driver
            ->expects($this->once())
            ->method('delete')
            ->with(1)
            ->will($this->returnValue(1));

        $controller = new VacancyRepository($driver);
        $result = $controller->read();
        $this->assertContainsOnlyInstancesOf(Vacancy::class,$result);

        $result = $controller->addMngDriver(array($driver));
        $this->assertEquals(1,$result);

        $result = $controller->create($vacancy);
        $this->assertEquals(array(1),$result);

        $result = $controller->update($vacancy);
        $this->assertEquals(array(1),$result);

        $result = $controller->delete(1);
        $this->assertEquals(array(1),$result);
    }
    public function testRedisDriver()
    {
        $vacancy = $this->createMock('AppBundle\Entity\Vacancy');
        $driver = $this->createMock('AppBundle\Drivers\RedisDriver');
        $driver
            ->expects($this->once())
            ->method('read')
            ->will($this->returnValue(array($vacancy)));
        $driver
            ->expects($this->once())
            ->method('create')
            ->with($vacancy)
            ->will($this->returnValue(1));
        $driver
            ->expects($this->once())
            ->method('update')
            ->with($vacancy)
            ->will($this->returnValue(1));
        $driver
            ->expects($this->once())
            ->method('delete')
            ->with(1)
            ->will($this->returnValue(1));

        $controller = new VacancyRepository($driver);
        $result = $controller->read();
        $this->assertContainsOnlyInstancesOf(Vacancy::class,$result);

        $result = $controller->addMngDriver(array($driver));
        $this->assertEquals(1,$result);

        $result = $controller->create($vacancy);
        $this->assertEquals(array(1),$result);

        $result = $controller->update($vacancy);
        $this->assertEquals(array(1),$result);

        $result = $controller->delete(1);
        $this->assertEquals(array(1),$result);


    }
}
