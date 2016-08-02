<?php
/**
 * Created by PhpStorm.
 * User: Ulukut
 * Date: 2.08.2016
 * Time: 15:21
 */

namespace AppBundle\Drivers;
use AppBundle\Entity\Vacancy;

class ExternalAPIDriver extends Driver implements DriverInterface
{
    public $connection;

    public function connect()
    {
        $url = "http://localhost/symfony2/symfony2-vacancies/api.php";
        // create curl resource
        $this->connection = curl_init();

        // set url
        curl_setopt($this->connection, CURLOPT_URL, $url);

        //return the transfer as a string
        curl_setopt($this->connection, CURLOPT_RETURNTRANSFER, 1);

    }

    public function read()
    {
        $data = array();
        // $output contains the output string
        $result = json_decode(curl_exec($this->connection));

        // close curl resource to free up system resources
        curl_close($this->connection);
        if($result){
            // Cycle through results
            foreach ($result as $row){
                $entity = new Vacancy($row);
                $data[] = $entity;
            }
        }
        return $data;
    }
}