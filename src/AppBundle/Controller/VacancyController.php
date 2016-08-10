<?php
/**
 * Created by PhpStorm.
 * User: Ulukut
 * Date: 2.08.2016
 * Time: 13:44
 * @author Volkan Ulukut <arthan@gmail.com>
 */

namespace AppBundle\Controller;

use AppBundle\Drivers\ElasticSearchDriver;
use AppBundle\Drivers\ExternalAPIDriver;
use AppBundle\Drivers\MySQLDriver;
use AppBundle\Drivers\RedisDriver;
use AppBundle\Entity\Vacancy;
use AppBundle\Repository\VacancyRepository;

/**
 * Class VacancyController.
 * Repository to execute crud operations on vacancies model.
 * @package AppBundle\Controller
 */
class VacancyController
{
    /**
     * return all vacancies with a number of datasources.
     * @return string Output containing all the vacancies from all the datasources
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
        $repository->changeReadDriver(new ExternalAPIDriver());
        $api_result = $repository->read();

        $response .= "API result: <br>";
        $response .= $this->output($api_result);

        //Call Redis datasource

        $repository->changeReadDriver(new RedisDriver());
        $redis_result = $repository->read();

        $response .= "Redis result: <br>";
        $response .= $this->output($redis_result);

        //Call ElasticSearch datasource

        $repository->changeReadDriver(new ElasticSearchDriver());
        $es_result = $repository->read();

        $response .= "ElasticSearch result: <br>";
        $response .= $this->output($es_result);

        return $response;
    }

    /**
     * create vacancy with a number of datasources at the same time.
     * @return array results of each datasource call
     */
    public function create()
    {
        $repository = new VacancyRepository(new MySQLDriver());
        $repository->addMngDriver(array(new MySQLDriver(),new RedisDriver(),new ElasticSearchDriver(),new ExternalAPIDriver()));
        return $repository->create(new Vacancy(array("title" => "test" . rand(1,100),"content" => "test" . rand(1,100),"description" => "test" . rand(1,100))));
    }

    /**
     * update a vacancy with a number of datasources at the same time.
     * @return array results of each datasource call
     */
    public function update()
    {
        $repository = new VacancyRepository(new MySQLDriver());
        $repository->addMngDriver(array(new MySQLDriver(),new RedisDriver(),new ElasticSearchDriver(),new ExternalAPIDriver()));
        return $repository->update(new Vacancy(array("id"=> 1,"title" => "test" . rand(1,100),"content" => "test" . rand(1,100),"description" => "test" . rand(1,100))));
    }

    /**
     * update a vacancy with a number of datasources at the same time
     * @return array results of each datasource call
     */
    public function delete()
    {
        $repository = new VacancyRepository(new MySQLDriver());
        $repository->addMngDriver(array(new MySQLDriver(),new RedisDriver(),new ElasticSearchDriver(),new ExternalAPIDriver()));
        return $repository->delete(6);
    }

    /**
     * Method to convert array of vacancies to string.
     * @param array $result Array of Vacancy Models
     * @return string String represenatation of vacancy models
     */
    private function output($result)
    {
        $response = "";
        foreach($result as $vacancy)
        {
            $response .= $vacancy->toString();
        }
        return $response;
    }
}