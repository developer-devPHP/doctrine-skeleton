<?php

namespace SecondOAuth\Entity;

/**
 * AuthorizationCode
 */
class AuthorizationCode
{
    /**
     * @var string
     */
    private $authorizationCode;

    /**
     * @var string
     */
    private $redirectUri;

    /**
     * @var \DateTime
     */
    private $expires;

    /**
     * @var string
     */
    private $idToken;

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
     * Set authorizationCode
     *
     * @param string $authorizationCode
     *
     * @return AuthorizationCode
     */
    public function setAuthorizationCode($authorizationCode)
    {
        $this->authorizationCode = $authorizationCode;

        return $this;
    }

    /**
     * Get authorizationCode
     *
     * @return string
     */
    public function getAuthorizationCode()
    {
        return $this->authorizationCode;
    }

    /**
     * Set redirectUri
     *
     * @param string $redirectUri
     *
     * @return AuthorizationCode
     */
    public function setRedirectUri($redirectUri)
    {
        $this->redirectUri = $redirectUri;

        return $this;
    }

    /**
     * Get redirectUri
     *
     * @return string
     */
    public function getRedirectUri()
    {
        return $this->redirectUri;
    }

    /**
     * Set expires
     *
     * @param \DateTime $expires
     *
     * @return AuthorizationCode
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
     * Set idToken
     *
     * @param string $idToken
     *
     * @return AuthorizationCode
     */
    public function setIdToken($idToken)
    {
        $this->idToken = $idToken;

        return $this;
    }

    /**
     * Get idToken
     *
     * @return string
     */
    public function getIdToken()
    {
        return $this->idToken;
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
     * @return AuthorizationCode
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
     * @return AuthorizationCode
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

