<?php
/**
 * Created by PhpStorm.
 * User: Ulukut
 * Date: 2.08.2016
 * Time: 15:07
 */

namespace AppBundle\API;

use AppBundle\Drivers\MySQLDriver;


class APIController
{
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
}