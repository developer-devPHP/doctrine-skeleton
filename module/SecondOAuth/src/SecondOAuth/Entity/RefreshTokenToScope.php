<?php

namespace SecondOAuth\Entity;

/**
 * RefreshTokenToScope
 */
class RefreshTokenToScope
{
    /**
     * @var integer
     */
    private $refresh_token_id;

    /**
     * @var integer
     */
    private $scope_id;


    /**
     * Set refreshTokenId
     *
     * @param integer $refreshTokenId
     *
     * @return RefreshTokenToScope
     */
    public function setRefreshTokenId($refreshTokenId)
    {
        $this->refresh_token_id = $refreshTokenId;

        return $this;
    }

    /**
     * Get refreshTokenId
     *
     * @return integer
     */
    public function getRefreshTokenId()
    {
        return $this->refresh_token_id;
    }

    /**
     * Set scopeId
     *
     * @param integer $scopeId
     *
     * @return RefreshTokenToScope
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

