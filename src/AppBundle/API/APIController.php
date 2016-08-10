<?php
/**
 * Created by PhpStorm.
 * User: Ulukut
 * Date: 2.08.2016
 * Time: 15:07
 * @author Volkan Ulukut <arthan@gmail.com>
 */

namespace AppBundle\API;

use AppBundle\Drivers\MySQLDriver;
use AppBundle\Entity\Vacancy;

/**
 * Class APIController.
 * Class to mock external api.
 * @package AppBundle\API
 */
class APIController
{
    /**
     * Method to respond to api calls
     * @return string json representation of all vacancies
     */
    public function call()
    {
        $driver = new MySQLDriver();
        $result = $driver->read();
        $data = array();
        foreach($result as $vacancy)
        {
            $data[] = $vacancy->toArray();
        }
        return json_encode($data);
    }

    /**
     * We would add logic to save to the API here if this would be a real API
     * @param Vacancy $data Vacancy Model to be saved
     * @return string result of the api call
     */
    public function save(Vacancy $data)
    {
        return "success";
    }

    /**
     * We would add logic to delete from the API here if this would be a real API
     * @param int $vacancyId id of the vacancy model to be deleted
     * @return string result of the api call
     */
    public function delete($vacancyId)
    {
        return "success";
    }

}