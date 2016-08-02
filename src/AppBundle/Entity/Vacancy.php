<?php
namespace AppBundle\Entity;

/**
 * A test vacancy model
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

    public function __construct($vacancy = NULL)
    {
        if(is_object($vacancy))
        {
            $this->id = $vacancy->id;
            $this->title = $vacancy->title;
            $this->content = $vacancy->content;
            $this->description = $vacancy->description;
        }
    }
    public function getId()
    {
        return $this->id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function setContent($content)
    {
        $this->content = $content;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function toArray()
    {
        return (array("id" => $this->id,"title" => $this->title,"content" => $this->content,"description" => $this->description));
    }
    public function toString()
    {
        return ("id: " . $this->id . ", title: " . $this->title . ", content: " . $this->content . ", description:" . $this->description . "<br>");
    }
}