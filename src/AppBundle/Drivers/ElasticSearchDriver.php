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

    /*
     * create a new row in elasticsearch using vacancy object sent as parameter
     */
    public function create(Vacancy $vacancy)
    {
        $lastId = 0;
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
            $id = $row['_source']["id"];
            if($id > $lastId)
                $lastId = $id;
        }
        $newId = $lastId + 1;
        $params = [
            'index' => 'my_index',
            'type' => 'vacancy',
            'id' => $newId,
            'body' => ['id' => $newId,'title' => $vacancy->getTitle(),'content'=>$vacancy->getContent(),'description' => $vacancy->getDescription()]
        ];
        $response = $this->connection->index($params);
        return $response;
    }

    /*
     * update a row in elasticsearch using vacancy object sent as parameter
     */
    public function update(Vacancy $vacancy)
    {

        $params = [
            'index' => 'my_index',
            'type' => 'vacancy',
            'id' => $vacancy->getId(),
            'body' => ['id' => $vacancy->getId(),'title' => $vacancy->getTitle(),'content'=>$vacancy->getContent(),'description' => $vacancy->getDescription()]
        ];
        $response = $this->connection->index($params);
        return $response;
    }

    /*
     * delete a row in elasticsearch using vacancy object sent as parameter
     */
    public function delete($vacancyId)
    {

        $params = [
            'index' => 'my_index',
            'type' => 'vacancy',
            'id' => $vacancyId
        ];
        $response = $this->connection->delete($params);
        return $response;
    }

    /*
     * Convert to string for comparing purposes
     */
    function __toString()
    {
        return __CLASS__;
    }

}
