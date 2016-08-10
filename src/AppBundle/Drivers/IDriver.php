<?php
/**
 * Created by PhpStorm.
 * User: Ulukut
 * Date: 2.08.2016
 * Time: 12:38
 * @author Volkan Ulukut <arthan@gmail.com>
 */

namespace AppBundle\Drivers;
use AppBundle\Entity\Vacancy;


/**
 * Interface IDriver.
 * Interface to define a template for datasource drivers
 * @package AppBundle\Drivers
 */
interface IDriver
{
    /**
     * All Drivers should implement reading from the datasource.
     * @return mixed
     */
    public function read();

    /**
     * All Drivers should implement creating from the datasource.
     * @param Vacancy $vacancy
     * @return mixed
     */
    public function create(Vacancy $vacancy);

    /**
     * All Drivers should implement update from the datasource.
     * @param Vacancy $vacancy
     * @return mixed
     */
    public function update(Vacancy $vacancy);

    /**
     * All Drivers should implement delete from the datasource.
     * @param int $vacancyId
     * @return mixed
     */
    public function delete($vacancyId);
}