<?php

namespace SecondOAuth\Entity;

/**
 * Jwt
 */
class Jwt
{
    /**
     * @var string
     */
    private $subject;

    /**
     * @var string
     */
    private $publicKey;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \SecondOAuth\Entity\Client
     */
    private $client;


    /**
     * Set subject
     *
     * @param string $subject
     *
     * @return Jwt
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
     * Set publicKey
     *
     * @param string $publicKey
     *
     * @return Jwt
     */
    public function setPublicKey($publicKey)
    {
        $this->publicKey = $publicKey;

        return $this;
    }

    /**
     * Get publicKey
     *
     * @return string
     */
    public function getPublicKey()
    {
        return $this->publicKey;
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
     * @return Jwt
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
}

