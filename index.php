<?php
/**
 * Created by PhpStorm.
 * User: Ulukut
 * Date: 2.08.2016
 * Time: 14:34
 */
require __DIR__ . '/vendor/autoload.php';

$vc = new AppBundle\Controller\VacancyController();
echo $vc->index();

$redis = new Predis\Client(array(
    "scheme" => "tcp",
    "host" => "localhost",
    "port" => "6379",
    "password" => null));
echo "Connected to Redis";
$redis->set("foo", "bar");
$value = $redis->get("foo");
var_dump($value);