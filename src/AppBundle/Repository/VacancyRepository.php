<?php
/**
 * @author Volkan Ulukut <arthan@gmail.com>
 */
namespace AppBundle\Repository;

use AppBundle\Drivers\IDriver;
use AppBundle\Entity\Vacancy;


/**
 * Class VacancyRepository.
 * Class to talk with different datasources using its driver as parameter.
 * @package AppBundle\Repository
 */
class VacancyRepository
{
    /**
     * @var IDriver $_readDriver Datasource to read from
     */
    private $_readDriver;
    /**
     * @var array $_mngDrivers Datasources to write to
     */
    private $_mngDrivers = array();

    /**
     * VacancyRepository constructor.
     * Create an instance using a specific read driver.
     * @param IDriver $readDriver Driver to read from
     */
    public function __construct(IDriver $readDriver)
    {
        $this->_readDriver = $readDriver;
    }

    /**
     * Method to change the read driver and also datasource on the fly.
     * @param IDriver $readDriver Driver to read from
     */
    public function changeReadDriver(IDriver $readDriver)
    {
        $this->_readDriver = $readDriver;
    }
    /**
     * Method to get all vacancies.
     * @return array An array of vacancy models
     */
    public function read()
    {
        return $this->_readDriver->read();
    }

    /**
     * Method to add managing drivers to synch with.
     * @param array $mngDrivers array of Drivers to synch with
     * @return int Current managing driver count
     */
    public function addMngDriver($mngDrivers)
    {
        $this->_mngDrivers = array_unique(array_merge($mngDrivers, $this->_mngDrivers),SORT_REGULAR);
        return count($this->_mngDrivers);
    }

    /**
     * Method to remove drivers to synch with.
     * @param array $mngDrivers array of Drivers to remove from synched drivers
     * @return int Current managing driver count
     */
    public function removeMngDriver($mngDrivers)
    {
        $this->_mngDrivers = array_diff($this->_mngDrivers,$mngDrivers);
        return count($this->_mngDrivers);
    }

    /**
     * Method to create new vacancies.
     * @param Vacancy $vacancy Model to be created
     * @return array Array of operation results
     */
    public function create(Vacancy $vacancy)
    {
        $result = array();
        foreach($this->_mngDrivers as $mngDriver)
        {
            $result[] = $mngDriver->create($vacancy);
        }
        return $result;
    }

    /**
     * Method to update vacancies
     * @param Vacancy $vacancy Model to be created
     * @return array Array of operation results
     */
    public function update(Vacancy $vacancy)
    {
        $result = array();
        foreach($this->_mngDrivers as $mngDriver)
        {
            $result[] = $mngDriver->update($vacancy);
        }
        return $result;
    }

    /**
     * Method to delete vacancies
     * @param Vacancy $vacancy Model to be created
     * @return array Array of operation results
     */
    public function delete($vacancyId)
    {
        $result = array();
        foreach($this->_mngDrivers as $mngDriver)
        {
            $result[] = $mngDriver->delete($vacancyId);
        }
        return $result;
    }

}