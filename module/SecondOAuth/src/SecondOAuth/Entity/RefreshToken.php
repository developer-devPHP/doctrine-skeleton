<?php

namespace SecondOAuth\Entity;

/**
 * RefreshToken
 */
class RefreshToken
{
    /**
     * @var string
     */
    private $refreshToken;

    /**
     * @var \DateTime
     */
    private $expires;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \SecondOAuth\Entity\Client
     */
    private $client;

    /**
     * @var \Db\Entity\SecondUser
     */
    private $user;


    /**
     * Set refreshToken
     *
     * @param string $refreshToken
     *
     * @return RefreshToken
     */
    public function setRefreshToken($refreshToken)
    {
        $this->refreshToken = $refreshToken;

        return $this;
    }

    /**
     * Get refreshToken
     *
     * @return string
     */
    public function getRefreshToken()
    {
        return $this->refreshToken;
    }

    /**
     * Set expires
     *
     * @param \DateTime $expires
     *
     * @return RefreshToken
     */
    public function setExpires($expires)
    {
        $this->expires = $expires;

        return $this;
    }

    /**
     * Get expires
     *
     * @return \DateTime
     */
    public function getExpires()
    {
        return $this->expires;
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
     * Set client
     *
     * @param \SecondOAuth\Entity\Client $client
     *
     * @return RefreshToken
     */
    public function setClient(\SecondOAuth\Entity\Client $client)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get client
     *
     * @return \SecondOAuth\Entity\Client
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Set user
     *
     * @param \Db\Entity\SecondUser $user
     *
     * @return RefreshToken
     */
    public function setUser(\Db\Entity\SecondUser $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \Db\Entity\SecondUser
     */
    public function getUser()
    {
        return $this->user;
    }
}

