<?php
/**
 * Created by PhpStorm.
 * User: Ulukut
 * Date: 2.08.2016
 * Time: 15:13
 */

require __DIR__ . '/vendor/autoload.php';

$ac = new AppBundle\API\APIController();
echo $ac->call();
