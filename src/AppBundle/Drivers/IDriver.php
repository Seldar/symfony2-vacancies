<?php
/**
 * Created by PhpStorm.
 * User: Ulukut
 * Date: 2.08.2016
 * Time: 12:38
 */

namespace AppBundle\Drivers;
use AppBundle\Entity\Vacancy;

/*
 * Interface to define a template for datasource drivers
 */
interface IDriver
{
    /*
     * All Drivers should implement reading from the datasource
     */
    public function read();
    /*
    * All Drivers should implement creating from the datasource
    */
    public function create(Vacancy $vacancy);
    /*
    * All Drivers should implement update from the datasource
    */
    public function update(Vacancy $vacancy);
    /*
    * All Drivers should implement delete from the datasource
    */
    public function delete($vacancyId);
}