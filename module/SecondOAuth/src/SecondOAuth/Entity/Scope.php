<?php

namespace SecondOAuth\Entity;

/**
 * Scope
 */
class Scope
{
    /**
     * @var string
     */
    private $scope;

    /**
     * @var boolean
     */
    private $isDefault;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set scope
     *
     * @param string $scope
     *
     * @return Scope
     */
    public function setScope($scope)
    {
        $this->scope = $scope;

        return $this;
    }

    /**
     * Get scope
     *
     * @return string
     */
    public function getScope()
    {
        return $this->scope;
    }

    /**
     * Set isDefault
     *
     * @param boolean $isDefault
     *
     * @return Scope
     */
    public function setIsDefault($isDefault)
    {
        $this->isDefault = $isDefault;

        return $this;
    }

    /**
     * Get isDefault
     *
     * @return boolean
     */
    public function getIsDefault()
    {
        return $this->isDefault;
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
}

