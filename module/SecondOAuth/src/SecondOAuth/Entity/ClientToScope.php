<?php

namespace SecondOAuth\Entity;

/**
 * ClientToScope
 */
class ClientToScope
{
    /**
     * @var integer
     */
    private $client_id;

    /**
     * @var integer
     */
    private $scope_id;


    /**
     * Set clientId
     *
     * @param integer $clientId
     *
     * @return ClientToScope
     */
    public function setClientId($clientId)
    {
        $this->client_id = $clientId;

        return $this;
    }

    /**
     * Get clientId
     *
     * @return integer
     */
    public function getClientId()
    {
        return $this->client_id;
    }

    /**
     * Set scopeId
     *
     * @param integer $scopeId
     *
     * @return ClientToScope
     */
    public function setScopeId($scopeId)
    {
        $this->scope_id = $scopeId;

        return $this;
    }

    /**
     * Get scopeId
     *
     * @return integer
     */
    public function getScopeId()
    {
        return $this->scope_id;
    }
}

