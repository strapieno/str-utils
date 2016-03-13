<?php
namespace Strapieno\Utils\Model\Object\EntityReference;

/**
 * Interface Reference
 */
interface EntityReferenceInterface
{
    /**
     * @return null|null|String
     */
    public function getId();

    /**
     * @param String $id
     * @return $this
     */
    public function setId($id);

    /**
     * @return String
     */
    public function getServiceName();

    /**
     * @param null|String $serviceName
     * @return $this
     */
    public function setServiceName($serviceName);
}