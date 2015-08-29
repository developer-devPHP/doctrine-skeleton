<?php

namespace SecondOAuth\Entity;

/**
 * AuthorizationCodeToScope
 */
class AuthorizationCodeToScope
{
    /**
     * @var integer
     */
    private $authorization_code_id;

    /**
     * @var integer
     */
    private $scope_id;


    /**
     * Set authorizationCodeId
     *
     * @param integer $authorizationCodeId
     *
     * @return AuthorizationCodeToScope
     */
    public function setAuthorizationCodeId($authorizationCodeId)
    {
        $this->authorization_code_id = $authorizationCodeId;

        return $this;
    }

    /**
     * Get authorizationCodeId
     *
     * @return integer
     */
    public function getAuthorizationCodeId()
    {
        return $this->authorization_code_id;
    }

    /**
     * Set scopeId
     *
     * @param integer $scopeId
     *
     * @return AuthorizationCodeToScope
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

