<?php

namespace Db\Entity;

/**
 * SecondArtist
 */
class SecondArtist
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
     * @var \Doctrine\Common\Collections\Collection
     */
    private $secondAlbum;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->secondAlbum = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return SecondArtist
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
     * Add secondAlbum
     *
     * @param \Db\Entity\SecondAlbum $secondAlbum
     *
     * @return SecondArtist
     */
    public function addSecondAlbum(\Db\Entity\SecondAlbum $secondAlbum)
    {
        $this->secondAlbum[] = $secondAlbum;

        return $this;
    }

    /**
     * Remove secondAlbum
     *
     * @param \Db\Entity\SecondAlbum $secondAlbum
     */
    public function removeSecondAlbum(\Db\Entity\SecondAlbum $secondAlbum)
    {
        $this->secondAlbum->removeElement($secondAlbum);
    }

    /**
     * Get secondAlbum
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSecondAlbum()
    {
        return $this->secondAlbum;
    }
}
