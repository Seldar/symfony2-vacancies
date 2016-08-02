<?php
/**
 * Created by PhpStorm.
 * User: Ulukut
 * Date: 2.08.2016
 * Time: 13:44
 */

namespace AppBundle\Controller;

use AppBundle\Drivers\ElasticSearchDriver;
use AppBundle\Drivers\ExternalAPIDriver;
use AppBundle\Drivers\MySQLDriver;
use AppBundle\Drivers\RedisDriver;
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
        $repository = new VacancyRepository(new MySQLDriver());
        $mysql_result = $repository->read();

        $response .= "MySQL result: <br>";
        $response .= $this->output($mysql_result);

        //Call External API datasource
        $repository->changeDriver(new ExternalAPIDriver());
        $api_result = $repository->read();

        $response .= "API result: <br>";
        $response .= $this->output($api_result);

        //Call Redis datasource

        $repository->changeDriver(new RedisDriver());
        $redis_result = $repository->read();

        $response .= "Redis result: <br>";
        $response .= $this->output($redis_result);

        //Call ElasticSearch datasource

        $repository->changeDriver(new ElasticSearchDriver());
        $es_result = $repository->read();

        $response .= "ElasticSearch result: <br>";
        $response .= $this->output($es_result);

        return $response;
    }

    /*
     * Method to convert array of vacancies to string
     */

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