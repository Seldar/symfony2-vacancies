<?php
namespace AppBundle\Entity;

/**
 * Class Vacancy.
 * A vacancy model.
 * @package AppBundle\Entity
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

    /**
     * Vacancy constructor.
     * When model is initiated, it can be filled with object or array data.
     * @param array|object $vacancy
     */
    public function __construct($vacancy)
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

    /**
     * initilize with an object.
     * @param object $vacancy Object to initiate entity with
     */
    private function initObj($vacancy)
    {
        $this->id = isset($vacancy->id) ? $vacancy->id : null;
        $this->title = $vacancy->title;
        $this->content = $vacancy->content;
        $this->description = $vacancy->description;
    }

    /**
     * initilize with an array.
     * @param $vacancy $vacancy Object to initiate model with
     */
    private function initArr($vacancy)
    {
        $this->id = isset($vacancy['id']) ? $vacancy['id'] : null;
        $this->title = $vacancy['title'];
        $this->content = $vacancy['content'];
        $this->description = $vacancy['description'];
    }

    /**
     * method to get id.
     * @return int id of the model
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * method to get title.
     * @return string title of the model
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * method to set title.
     * @param string $title title of the model
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * method to get content.
     * @return string content of the model
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * method to set content.
     * @param string $content content of the model
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

    /**
     * method to get description.
     * @return string description of the model
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * method to set description.
     * @param string $description description of the model
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * method to convert model data to array.
     * @return array Array represenation of the model
     */
    public function toArray()
    {
        return (array("id" => $this->id,"title" => $this->title,"content" => $this->content,"description" => $this->description));
    }

    /**
     * method to convert model data to string.
     * @return string String representation of the model
     */
    public function toString()
    {
        return ("id: " . $this->id . ", title: " . $this->title . ", content: " . $this->content . ", description:" . $this->description . "<br>");
    }
}