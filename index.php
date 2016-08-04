<?php
/**
 * Created by PhpStorm.
 * User: Ulukut
 * Date: 2.08.2016
 * Time: 14:34
 */
require __DIR__ . '/vendor/autoload.php';

$vc = new AppBundle\Controller\VacancyController();
//$vc->delete();
echo $vc->index();
