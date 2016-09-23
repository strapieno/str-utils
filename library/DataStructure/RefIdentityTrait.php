<?php
namespace Strapieno\Utils\DataStructure;

/**
 * Interface RefIdentityInteface
 */
trait RefIdentityTrait
{
    /**
     * @var string
     */
    protected $refId;
    /**
     * @return string
     */
    public function getRefIdentity()
    {
        return $this->refId;
    }

    /**
     * @param $refId
     * @return string
     */
    public function setRefIdentity($refId)
    {
        $this->refId = $refId;
        return $this;
    }
}