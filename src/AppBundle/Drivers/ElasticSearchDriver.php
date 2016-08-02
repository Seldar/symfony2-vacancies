<?php
/**
 * Created by PhpStorm.
 * User: Ulukut
 * Date: 2.08.2016
 * Time: 17:42
 */

namespace AppBundle\Drivers;
use AppBundle\Entity\Vacancy;
use Elasticsearch\ClientBuilder;

/*
 * Class to implement elasticsearch datasource layer
 */
class ElasticSearchDriver extends Driver implements DriverInterface
{

    /*
     * connect to elasticsearch server
     */
    public function connect()
    {
        $this->connection = ClientBuilder::create()->build();
    }
    /*
     * read data from elasticsearch and return the result as an array of vacancy model
     */
    public function read()
    {
        $data = array();

        /*$params = [
            'index' => 'my_index',
            'type' => 'vacancy',
            'id' => '1',
            'body' => ['id' => '1','title' => 'test1','content'=>'test2','description' => 'test3']
        ];
        $response = $this->connection->index($params);

        $params = [
            'index' => 'my_index',
            'type' => 'vacancy',
            'id' => '2',
            'body' => ['id' => '2','title' => 'test4','content'=>'test5','description' => 'test6']
        ];

        $response = $this->connection->index($params);*/

        $params = [
            'index' => 'my_index',
            'type' => 'vacancy',
            'body' => [
                'query' => [
                    'match_all' => []
                ]
            ]
        ];

        $response = $this->connection->search($params);
        foreach($response['hits']['hits'] as $row)
        {
            $entity = new Vacancy($row['_source']);
            $data[] = $entity;
        }

        return $data;
    }

}
