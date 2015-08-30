<?php

namespace Db\Entity;

use ZF\OAuth2\Doctrine\Entity\UserInterface as OAuth2UserInterface;
use Zend\Stdlib\ArraySerializableInterface;
use ZfcUser\Entity\UserInterface as ZfcUserInterface;
use Doctrine\Common\Collections\ArrayCollection;
use Exception;
use Datetime;

/**
 * SecondUser
 */
class SecondUser implements
    OAuth2UserInterface,
    ArraySerializableInterface,
    ZfcUserInterface
{
    public function exchangeArray(array $data)
    {
        foreach ($data as $key => $value) {
            switch ($key) {
                case 'username':
                    $this->setUsername($value);
                    break;
                case 'email':
                    $this->setEmail($value);
                    break;
                case 'displayName':
                    $this->setDisplayName($value);
                    break;
                case 'password':
                    $this->setPassword($value);
                    break;
                case 'state':
                    $this->getState($value);
                    break;
                default:
                    break;
            }
        }

        return $this;
    }

    public function getArrayCopy()
    {
        return array(
            'id' => $this->getId(),
            'username' => $this->getUsername(),
            'email' => $this->getEmail(),
            'displayName' => $this->getDisplayName(),
            'password' => $this->getPassword(),
            'state' => $this->getState(),
        );
    }

    /**
     * @var string
     */
    private $username;

    /**
     * @var string
     */
    private $password;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $displayName;

    /**
     * @var string
     */
    private $state;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $client;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $accessToken;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $authorizationCode;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $refreshToken;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->client = new \Doctrine\Common\Collections\ArrayCollection();
        $this->accessToken = new \Doctrine\Common\Collections\ArrayCollection();
        $this->authorizationCode = new \Doctrine\Common\Collections\ArrayCollection();
        $this->refreshToken = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function setId($value)
    {
        return Exception("User.setId is not implemented");
    }


    /**
     * Set username
     *
     * @param string $username
     *
     * @return SecondUser
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return SecondUser
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return SecondUser
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set displayName
     *
     * @param string $displayName
     *
     * @return SecondUser
     */
    public function setDisplayName($displayName)
    {
        $this->displayName = $displayName;

        return $this;
    }

    /**
     * Get displayName
     *
     * @return string
     */
    public function getDisplayName()
    {
        return $this->displayName;
    }

    /**
     * Set state
     *
     * @param string $state
     *
     * @return SecondUser
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state
     *
     * @return string
     */
    public function getState()
    {
        return $this->state;
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
     * Add client
     *
     * @param \SecondOAuth\Entity\Client $client
     *
     * @return SecondUser
     */
    public function addClient(\SecondOAuth\Entity\Client $client)
    {
        $this->client[] = $client;

        return $this;
    }

    /**
     * Remove client
     *
     * @param \SecondOAuth\Entity\Client $client
     */
    public function removeClient(\SecondOAuth\Entity\Client $client)
    {
        $this->client->removeElement($client);
    }

    /**
     * Get client
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Add accessToken
     *
     * @param \SecondOAuth\Entity\AccessToken $accessToken
     *
     * @return SecondUser
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
     * Add authorizationCode
     *
     * @param \SecondOAuth\Entity\AuthorizationCode $authorizationCode
     *
     * @return SecondUser
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
     * Add refreshToken
     *
     * @param \SecondOAuth\Entity\RefreshToken $refreshToken
     *
     * @return SecondUser
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
}
