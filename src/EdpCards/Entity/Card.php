<?php
namespace EdpCards\Entity;

class Card
{
    protected $id;

    protected $text;

    /**
     * @param int $id
     * @return Card
     */
    public function setId($id)
    {
        $this->id = (int) $id;
        return $this;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param string $text
     * @return Card
     */
    public function setText($text)
    {
        $this->text = $text;
        return $this;
    }
}