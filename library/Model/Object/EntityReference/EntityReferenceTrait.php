<?php
namespace Strapieno\Utils\Model\Object\EntityReference;

/**
 * Class ReferenceTrait
 */
trait EntityReferenceTrait
{
    /**
     * @var String
     */
    protected $serviceName;

    /**
     * @var String
     */
    protected $id;

    /**
     * @return null|String
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param String $id
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return null|String
     */
    public function getServiceName()
    {
        return $this->serviceName;
    }

    /**
     * @param String $serviceName
     * @return $this
     */
    public function setServiceName($serviceName)
    {
        $this->serviceName = $serviceName;
        return $this;
    }
}