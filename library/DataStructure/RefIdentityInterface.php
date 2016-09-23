<?php
namespace Strapieno\Utils\DataStructure;

/**
 * Interface RefIdentityInterface
 */
interface RefIdentityInterface
{
    /**
     * @return string
     */
    public function getRefIdentity();

    /**
     * @param $refId
     * @return string
     */
    public function setRefIdentity($refId);
}