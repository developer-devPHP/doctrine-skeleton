<?php

namespace SecondOAuth\Entity;

/**
 * AccessTokenToScope
 */
class AccessTokenToScope
{
    /**
     * @var integer
     */
    private $access_token_id;

    /**
     * @var integer
     */
    private $scope_id;


    /**
     * Set accessTokenId
     *
     * @param integer $accessTokenId
     *
     * @return AccessTokenToScope
     */
    public function setAccessTokenId($accessTokenId)
    {
        $this->access_token_id = $accessTokenId;

        return $this;
    }

    /**
     * Get accessTokenId
     *
     * @return integer
     */
    public function getAccessTokenId()
    {
        return $this->access_token_id;
    }

    /**
     * Set scopeId
     *
     * @param integer $scopeId
     *
     * @return AccessTokenToScope
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

