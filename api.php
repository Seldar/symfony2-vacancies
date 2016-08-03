<?php
/**
 * Created by PhpStorm.
 * User: Ulukut
 * Date: 2.08.2016
 * Time: 15:13
 */

require __DIR__ . '/vendor/autoload.php';

$ac = new AppBundle\API\APIController();
if($_SERVER['REQUEST_METHOD'] == "GET")
    echo $ac->call();
if($_SERVER['REQUEST_METHOD'] == "POST")
    echo $ac->save($_POST);
if($_SERVER['REQUEST_METHOD'] == "DELETE")
    echo $ac->delete($_POST['id']);