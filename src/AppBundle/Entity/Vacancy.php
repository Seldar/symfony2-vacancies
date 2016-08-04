<?php
namespace AppBundle\Entity;

/**
 * A vacancy model
 */
class Vacancy
{
    /**
     * The id of the vacancy
     *
     * @var integer
     */
    private $id;

    /**
     * The vacancy title
     *
     * @var string
     */
    private $title;

    /**
     * The vacancy content/description
     *
     * @var string
     */
    private $content;

    /**
     * The vacancy description
     *
     * @var string
     */
    private $description;

    /*
     * When model is initiated, it can be filled with object or array data
     */
    public function __construct($vacancy = NULL)
    {
        if(is_object($vacancy))
        {
            $this->initObj($vacancy);
        }
        else if(is_array($vacancy))
        {
            $this->initArr($vacancy);
        }
    }

    /*
     * initilize with an object
     */
    private function initObj($vacancy)
    {
        $this->id = isset($vacancy->id) ? $vacancy->id : null;
        $this->title = $vacancy->title;
        $this->content = $vacancy->content;
        $this->description = $vacancy->description;
    }
    /*
     * initilize with an array
     */
    private function initArr($vacancy)
    {
        $this->id = isset($vacancy['id']) ? $vacancy['id'] : null;
        $this->title = $vacancy['title'];
        $this->content = $vacancy['content'];
        $this->description = $vacancy['description'];
    }
    /*
     * method to get id
     */
    public function getId()
    {
        return $this->id;
    }
    /*
     * method to get title
     */
    public function getTitle()
    {
        return $this->title;
    }
    /*
     * method to set title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }
    /*
     * method to get content
     */
    public function getContent()
    {
        return $this->content;
    }
    /*
     * method to set content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }
    /*
     * method to get description
     */
    public function getDescription()
    {
        return $this->description;
    }
    /*
     * method to set description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }
    /*
     * method to convert model data to array
     */
    public function toArray()
    {
        return (array("id" => $this->id,"title" => $this->title,"content" => $this->content,"description" => $this->description));
    }
    /*
     * method to convert model data to string
     */
    public function toString()
    {
        return ("id: " . $this->id . ", title: " . $this->title . ", content: " . $this->content . ", description:" . $this->description . "<br>");
    }
}