<?php

namespace Db\Entity;

/**
 * SecondAlbum
 */
class SecondAlbum
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
     * @var \Db\Entity\SecondArtist
     */
    private $secondArtist;


    /**
     * Set name
     *
     * @param string $name
     *
     * @return SecondAlbum
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
     * Set secondArtist
     *
     * @param \Db\Entity\SecondArtist $secondArtist
     *
     * @return SecondAlbum
     */
    public function setSecondArtist(\Db\Entity\SecondArtist $secondArtist = null)
    {
        $this->secondArtist = $secondArtist;

        return $this;
    }

    /**
     * Get secondArtist
     *
     * @return \Db\Entity\SecondArtist
     */
    public function getSecondArtist()
    {
        return $this->secondArtist;
    }
}
