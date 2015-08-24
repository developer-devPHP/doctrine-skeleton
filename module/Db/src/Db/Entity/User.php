<?php

namespace Db\Entity;

use ZF\OAuth2\Doctrine\Entity\UserInterface as OAuth2UserInterface;
use Zend\Stdlib\ArraySerializableInterface;
use ZfcUser\Entity\UserInterface as ZfcUserInterface;
use Doctrine\Common\Collections\ArrayCollection;
use Exception;
use Datetime;

class User implements OAuth2UserInterface, ArraySerializableInterface, ZfcUserInterface
{
    // oauth2 fields
    protected $client;
    protected $accessToken;
    protected $authorizationCode;
    protected $refreshToken;

    // zfc-user fields
    protected $id;
    protected $username;
    protected $email;
    protected $displayName;
    protected $password;
    protected $state;

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
     * Constructor
     */
    public function __construct()
    {
        $this->role = new ArrayCollection();
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($value)
    {
        return Exception("User.setId is not implemented");
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function setUsername($value)
    {
        $this->username = $value;

        return $this;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($value)
    {
        $this->email = $value;

        return $this;
    }

    public function getDisplayName()
    {
        return $this->email;
    }

    public function setDisplayName($value)
    {
        $this->displayName = $value;

        return $this;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($value)
    {
        $this->password = $value;

        return $this;
    }

    public function getState()
    {
        return $this->state;
    }

    public function setState($value)
    {
        $this->state = $value;

        return $this;
    }

    public function getClient()
    {
        return $this->client;
    }

    public function getAccessToken()
    {
        return $this->accessToken;
    }

    public function getAuthorizationCode()
    {
        return $this->authorizationCode;
    }

    public function getRefreshToken()
    {
        return $this->refreshToken;
    }
}
