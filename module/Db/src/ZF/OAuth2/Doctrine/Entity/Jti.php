<?php

namespace ZF\OAuth2\Doctrine\Entity;

/**
 * Jti
 */
class Jti
{
    /**
     * @var string
     */
    private $subject;

    /**
     * @var string
     */
    private $audience;

    /**
     * @var \DateTime
     */
    private $expires;

    /**
     * @var string
     */
    private $jti;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \ZF\OAuth2\Doctrine\Entity\Client
     */
    private $client;


    /**
     * Set subject
     *
     * @param string $subject
     *
     * @return Jti
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;

        return $this;
    }

    /**
     * Get subject
     *
     * @return string
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Set audience
     *
     * @param string $audience
     *
     * @return Jti
     */
    public function setAudience($audience)
    {
        $this->audience = $audience;

        return $this;
    }

    /**
     * Get audience
     *
     * @return string
     */
    public function getAudience()
    {
        return $this->audience;
    }

    /**
     * Set expires
     *
     * @param \DateTime $expires
     *
     * @return Jti
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
     * Set jti
     *
     * @param string $jti
     *
     * @return Jti
     */
    public function setJti($jti)
    {
        $this->jti = $jti;

        return $this;
    }

    /**
     * Get jti
     *
     * @return string
     */
    public function getJti()
    {
        return $this->jti;
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
     * @param \ZF\OAuth2\Doctrine\Entity\Client $client
     *
     * @return Jti
     */
    public function setClient(\ZF\OAuth2\Doctrine\Entity\Client $client)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get client
     *
     * @return \ZF\OAuth2\Doctrine\Entity\Client
     */
    public function getClient()
    {
        return $this->client;
    }
}

