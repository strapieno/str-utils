<?php
namespace Strapieno\Utils\Model\Entity;

/**
 * Class RoleAwareTrait
 */
trait RoleAwareTrait
{
    /**
     * @var string
     */
    protected $roleId;

    /**
     * @return string
     */
    public function getRoleId()
    {
        return $this->roleId;
    }

    /**
     * @param string $roleId
     * @return $this
     */
    public function setRoleId($roleId)
    {
        $this->roleId = $roleId;
        return $this;
    }
}