<?php

namespace AppBundle\Repository;

use AppBundle\Drivers\Driver;
use AppBundle\Entity\Vacancy;

/*
 * Class to talk with different datasources using its driver as parameter
 */
class VacancyRepository
{
    //Datasource to read from
    public $readDriver;
    //Datasources to write to
    public $mngDrivers = array();

    /*
     * Create an instance using a specific read driver
     */
    public function __construct(Driver $driver)
    {
        $this->readDriver = $driver;
    }

    /*
     * Method to change the read driver and also datasource on the fly
     */
    public function changeReadDriver(Driver $driver)
    {
        $this->readDriver = $driver;
    }
    /*
     * Method to get all vacancies
     */
    public function read()
    {
        return $this->readDriver->read();
    }
    /*
     * Method to add drivers to synch with
     */

    public function addMngDriver($drivers)
    {
        $this->mngDrivers = array_unique(array_merge($drivers, $this->mngDrivers),SORT_REGULAR);
    }
    /*
     * Method to remove drivers to synch with
     */

    public function removeMngDriver($drivers)
    {
        $this->mngDrivers = array_diff($this->mngDrivers,$drivers);
    }

    /*
     * Method to create new vacancies
     */
    public function create(Vacancy $vacancy)
    {
        $result = array();
        foreach($this->mngDrivers as $mngDriver)
        {
            $result[] = $mngDriver->create($vacancy);
        }
        return $result;
    }

    /*
     * Method to update vacancies
     */
    public function update(Vacancy $vacancy)
    {
        $result = array();
        foreach($this->mngDrivers as $mngDriver)
        {
            $result[] = $mngDriver->update($vacancy);
        }
        return $result;
    }
    /*
     * Method to delete vacancies
     */
    public function delete($vacancyId)
    {
        $result = array();
        foreach($this->mngDrivers as $mngDriver)
        {
            $result[] = $mngDriver->delete($vacancyId);
        }
        return $result;
    }

}