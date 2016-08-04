<?php
/**
 * Created by PhpStorm.
 * User: Ulukut
 * Date: 4.08.2016
 * Time: 14:24
 */

namespace src\AppBundle\Tests\Entity;

use AppBundle\Entity\Vacancy;

class VacancyTest extends \PHPUnit_Framework_TestCase
{
    public function testCreateFromArray()
    {
        $controller = new Vacancy(array("id" => 1, "title" => "test1","content" => "test2", "description" => "test3"));
        $this->assertEquals(array("id" => 1, "title" => "test1","content" => "test2", "description" => "test3"),$controller->toArray());
    }

    public function testCreateFromObj()
    {
        $controller = new Vacancy((object)array("id" => 1, "title" => "test1","content" => "test2", "description" => "test3"));
        $this->assertEquals(array("id" => 1, "title" => "test1","content" => "test2", "description" => "test3"),$controller->toArray());
    }

    public function testGetters()
    {
        $controller = new Vacancy(array("id" => 1, "title" => "test1","content" => "test2", "description" => "test3"));
        $this->assertEquals(array(1, "test1","test2", "test3"),array($controller->getId(),$controller->getTitle(),$controller->getContent(),$controller->getDescription()));
    }

    public function testSetters()
    {
        $controller = new Vacancy(array("id" => 1, "title" => "test1","content" => "test2", "description" => "test3"));
        $controller->setTitle("test4");
        $controller->setContent("test5");
        $controller->setDescription("test6");
        $this->assertEquals(array("test4","test5", "test6"),array($controller->getTitle(),$controller->getContent(),$controller->getDescription()));
    }

    public function testToString()
    {
        $controller = new Vacancy(array("id" => 1, "title" => "test1","content" => "test2", "description" => "test3"));
        $this->assertEquals("id: 1, title: test1, content: test2, description:test3<br>",$controller->toString());
    }
}
