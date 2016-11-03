<?php
namespace Strapieno\Utils\Model\Object\EntityReference;

/**
 * Class EntityReferenceAwareTrait
 */
trait EntityReferenceAwareTrait
{
    /**
     * @var
     */
    protected $entityReference;

    /**
     * @return null|EntityReferenceInterface
     */
    public function getEntityReference()
    {
        return $this->entityReference;
    }

    /**
     * @param EntityReferenceInterface $entityReference
     * @return $this
     */
    public function setEntityReference(EntityReferenceInterface $entityReference)
    {
        $this->entityReference = $entityReference;
        return $this;
    }

}