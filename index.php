<?php
/**
 * Created by PhpStorm.
 * User: Ulukut
 * Date: 2.08.2016
 * Time: 14:34
 */
require __DIR__ . '/vendor/autoload.php';

$vc = new AppBundle\Controller\VacancyController();
$result = $vc->index();
foreach($result as $vacancy)
{
    print_r($vacancy);
}