<?php

namespace SecondOAuth\Entity;

/**
 * Client
 */
class Client
{
    /**
     * @var string
     */
    private $clientId;

    /**
     * @var string
     */
    private $secret;

    /**
     * @var string
     */
    private $redirectUri;

    /**
     * @var array
     */
    private $grantType;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \SecondOAuth\Entity\PublicKey
     */
    private $publicKey;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $accessToken;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $refreshToken;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $authorizationCode;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $jwt;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $jti;

    /**
     * @var \Db\Entity\SecondUser
     */
    private $user;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->accessToken = new \Doctrine\Common\Collections\ArrayCollection();
        $this->refreshToken = new \Doctrine\Common\Collections\ArrayCollection();
        $this->authorizationCode = new \Doctrine\Common\Collections\ArrayCollection();
        $this->jwt = new \Doctrine\Common\Collections\ArrayCollection();
        $this->jti = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set clientId
     *
     * @param string $clientId
     *
     * @return Client
     */
    public function setClientId($clientId)
    {
        $this->clientId = $clientId;

        return $this;
    }

    /**
     * Get clientId
     *
     * @return string
     */
    public function getClientId()
    {
        return $this->clientId;
    }

    /**
     * Set secret
     *
     * @param string $secret
     *
     * @return Client
     */
    public function setSecret($secret)
    {
        $this->secret = $secret;

        return $this;
    }

    /**
     * Get secret
     *
     * @return string
     */
    public function getSecret()
    {
        return $this->secret;
    }

    /**
     * Set redirectUri
     *
     * @param string $redirectUri
     *
     * @return Client
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
     * Set grantType
     *
     * @param array $grantType
     *
     * @return Client
     */
    public function setGrantType($grantType)
    {
        $this->grantType = $grantType;

        return $this;
    }

    /**
     * Get grantType
     *
     * @return array
     */
    public function getGrantType()
    {
        return $this->grantType;
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
     * Set publicKey
     *
     * @param \SecondOAuth\Entity\PublicKey $publicKey
     *
     * @return Client
     */
    public function setPublicKey(\SecondOAuth\Entity\PublicKey $publicKey = null)
    {
        $this->publicKey = $publicKey;

        return $this;
    }

    /**
     * Get publicKey
     *
     * @return \SecondOAuth\Entity\PublicKey
     */
    public function getPublicKey()
    {
        return $this->publicKey;
    }

    /**
     * Add accessToken
     *
     * @param \SecondOAuth\Entity\AccessToken $accessToken
     *
     * @return Client
     */
    public function addAccessToken(\SecondOAuth\Entity\AccessToken $accessToken)
    {
        $this->accessToken[] = $accessToken;

        return $this;
    }

    /**
     * Remove accessToken
     *
     * @param \SecondOAuth\Entity\AccessToken $accessToken
     */
    public function removeAccessToken(\SecondOAuth\Entity\AccessToken $accessToken)
    {
        $this->accessToken->removeElement($accessToken);
    }

    /**
     * Get accessToken
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAccessToken()
    {
        return $this->accessToken;
    }

    /**
     * Add refreshToken
     *
     * @param \SecondOAuth\Entity\RefreshToken $refreshToken
     *
     * @return Client
     */
    public function addRefreshToken(\SecondOAuth\Entity\RefreshToken $refreshToken)
    {
        $this->refreshToken[] = $refreshToken;

        return $this;
    }

    /**
     * Remove refreshToken
     *
     * @param \SecondOAuth\Entity\RefreshToken $refreshToken
     */
    public function removeRefreshToken(\SecondOAuth\Entity\RefreshToken $refreshToken)
    {
        $this->refreshToken->removeElement($refreshToken);
    }

    /**
     * Get refreshToken
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRefreshToken()
    {
        return $this->refreshToken;
    }

    /**
     * Add authorizationCode
     *
     * @param \SecondOAuth\Entity\AuthorizationCode $authorizationCode
     *
     * @return Client
     */
    public function addAuthorizationCode(\SecondOAuth\Entity\AuthorizationCode $authorizationCode)
    {
        $this->authorizationCode[] = $authorizationCode;

        return $this;
    }

    /**
     * Remove authorizationCode
     *
     * @param \SecondOAuth\Entity\AuthorizationCode $authorizationCode
     */
    public function removeAuthorizationCode(\SecondOAuth\Entity\AuthorizationCode $authorizationCode)
    {
        $this->authorizationCode->removeElement($authorizationCode);
    }

    /**
     * Get authorizationCode
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAuthorizationCode()
    {
        return $this->authorizationCode;
    }

    /**
     * Add jwt
     *
     * @param \SecondOAuth\Entity\Jwt $jwt
     *
     * @return Client
     */
    public function addJwt(\SecondOAuth\Entity\Jwt $jwt)
    {
        $this->jwt[] = $jwt;

        return $this;
    }

    /**
     * Remove jwt
     *
     * @param \SecondOAuth\Entity\Jwt $jwt
     */
    public function removeJwt(\SecondOAuth\Entity\Jwt $jwt)
    {
        $this->jwt->removeElement($jwt);
    }

    /**
     * Get jwt
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getJwt()
    {
        return $this->jwt;
    }

    /**
     * Add jti
     *
     * @param \SecondOAuth\Entity\Jti $jti
     *
     * @return Client
     */
    public function addJti(\SecondOAuth\Entity\Jti $jti)
    {
        $this->jti[] = $jti;

        return $this;
    }

    /**
     * Remove jti
     *
     * @param \SecondOAuth\Entity\Jti $jti
     */
    public function removeJti(\SecondOAuth\Entity\Jti $jti)
    {
        $this->jti->removeElement($jti);
    }

    /**
     * Get jti
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getJti()
    {
        return $this->jti;
    }

    /**
     * Set user
     *
     * @param \Db\Entity\SecondUser $user
     *
     * @return Client
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

