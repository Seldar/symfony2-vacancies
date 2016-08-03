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
        if(isset($_SERVER['REQUEST_URI'])) {
            $urlPart = explode("/", $_SERVER['REQUEST_URI']);
            array_pop($urlPart);
            $url = 'http://' . $_SERVER['HTTP_HOST'] . implode("/", $urlPart) . "/api.php";
        }
        else
            $url = "http://localhost/symfony2/symfony2-vacancies/api.php";
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
    /*
     * create a new row in external api using vacancy object sent as parameter
     */
    public function create(Vacancy $vacancy)
    {
        curl_setopt($this->connection, CURLOPT_POST, 1);
        curl_setopt($this->connection, CURLOPT_POSTFIELDS,
            http_build_query($vacancy->toArray()));

        // $result contains the output string
        $result = json_decode(curl_exec($this->connection));

        // close curl resource to free up system resources
        curl_close($this->connection);

        return $result;
    }
    /*
     * update a row in external api using vacancy object sent as parameter
     */
    public function update(Vacancy $vacancy)
    {
        return $this->create($vacancy);
    }

    /*
     * delete a row in external api using vacancy object sent as parameter
     */
    public function delete($vacancyId)
    {
        curl_setopt($this->connection, CURLOPT_POST, 1);
        curl_setopt($this->connection, CURLOPT_POSTFIELDS,
            "id=" . $vacancyId);
        curl_setopt($this->connection, CURLOPT_CUSTOMREQUEST, 'DELETE');

        // $result contains the output string
        $result = json_decode(curl_exec($this->connection));

        // close curl resource to free up system resources
        curl_close($this->connection);

        return $result;
    }
    /*
     * Convert to string for comparing purposes
     */
    function __toString()
    {
        return __CLASS__;
    }
}