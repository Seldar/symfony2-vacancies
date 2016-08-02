<?php
/**
 * Created by PhpStorm.
 * User: Ulukut
 * Date: 2.08.2016
 * Time: 13:44
 */

namespace AppBundle\Controller;

use AppBundle\Drivers\MySQLDriver;
use AppBundle\Repository\VacancyRepository;

/**
 * Repository to execute crud operations on vacancies model
 */
class VacancyController
{
    /**
     * return all vacancies
     */
    public function index()
    {
        $driver = new MySQLDriver();
        $repo = new VacancyRepository($driver);
        return $repo->read();
    }
}