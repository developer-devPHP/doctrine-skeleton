<?php

namespace Db\Entity;

/**
 * Album
 */
class Album
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Db\Entity\Artist
     */
    private $artist;


    /**
     * Set name
     *
     * @param string $name
     *
     * @return Album
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set artist
     *
     * @param \Db\Entity\Artist $artist
     *
     * @return Album
     */
    public function setArtist(\Db\Entity\Artist $artist = null)
    {
        $this->artist = $artist;

        return $this;
    }

    /**
     * Get artist
     *
     * @return \Db\Entity\Artist
     */
    public function getArtist()
    {
        return $this->artist;
    }
}
