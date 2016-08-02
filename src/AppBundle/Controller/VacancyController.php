<?php
/**
 * Created by PhpStorm.
 * User: Ulukut
 * Date: 2.08.2016
 * Time: 13:44
 */

namespace AppBundle\Controller;

use AppBundle\Drivers\ExternalAPIDriver;
use AppBundle\Drivers\MySQLDriver;
use AppBundle\Repository\VacancyRepository;

/**
 * Repository to execute crud operations on vacancies model
 */
class VacancyController
{
    /**
     * return all vacancies with a number of datasources
     */
    public function index()
    {
        //Call MySQL datasource
        $response = "";
        $driver = new MySQLDriver();
        $repo = new VacancyRepository($driver);
        $mysql_result = $repo->read();

        $response .= "mysql result: <br>";
        $response .= $this->output($mysql_result);

        //Call External API datasource
        $driver = new ExternalAPIDriver();
        $repo = new VacancyRepository($driver);
        $api_result = $repo->read();

        $response .= "api result: <br>";
        $response .= $this->output($api_result);

        return $response;
    }

    public function output($result)
    {
        $response = "";
        foreach($result as $vacancy)
        {
            $response .= $vacancy->toString();
        }
        return $response;
    }
}