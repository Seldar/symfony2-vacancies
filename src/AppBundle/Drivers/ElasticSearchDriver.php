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

/**
 * Class ElasticSearchDriver.
 * Class to implement elasticsearch datasource layer.
 * @package AppBundle\Drivers
 */
class ElasticSearchDriver extends Driver
{
    /**
     * ElasticSearchDriver constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * connect to elasticsearch server.
     */
    protected function connect()
    {
        $this->connection = ClientBuilder::create()->build();
    }

    /**
     * read data from elasticsearch and return the result as an array of vacancy model.
     * @return array An array of vacancy models
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

    /**
     * create a new row in elasticsearch using vacancy object sent as parameter.
     * @param Vacancy $vacancy Model to be created
     * @return bool true on success
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
        return $response['created'];
    }

    /**
     * update a row in elasticsearch using vacancy object sent as parameter.
     * @param Vacancy $vacancy Model to be updated
     * @return bool True on success
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
        return $response['created'];
    }

    /**
     * delete a row in elasticsearch using vacancy object sent as parameter.
     * @param int $vacancyId Model id to delete
     * @return bool True on success
     */
    public function delete($vacancyId)
    {

        $params = [
            'index' => 'my_index',
            'type' => 'vacancy',
            'id' => $vacancyId
        ];
        $response = $this->connection->delete($params);
        return $response['found'];
    }

    /**
     * Convert to string for comparing purposes.
     * @return string The name of the class
     */
    function __toString()
    {
        return __CLASS__;
    }

}
