<?php
namespace Strapieno\Utils\Model\Object;

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
}