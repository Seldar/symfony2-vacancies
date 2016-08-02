<?php
/**
 * Created by PhpStorm.
 * User: Ulukut
 * Date: 2.08.2016
 * Time: 15:21
 */

namespace AppBundle\Drivers;
use AppBundle\Entity\Vacancy;
/*
 * Class to implement external api datasource layer
 */
class ExternalAPIDriver extends Driver implements DriverInterface
{
    /*
     * connect to api url with curl
     */

    public function connect()
    {
        $url = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] . "api.php";
        // create curl resource
        $this->connection = curl_init();

        // set url
        curl_setopt($this->connection, CURLOPT_URL, $url);

        //return the transfer as a string
        curl_setopt($this->connection, CURLOPT_RETURNTRANSFER, 1);

    }
    /*
     * read data from curl response and return the result as an array of vacancy model
     */

    public function read()
    {
        $data = array();
        // $result contains the output string
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