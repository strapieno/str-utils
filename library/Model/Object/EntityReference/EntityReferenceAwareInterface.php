<?php
namespace Strapieno\Utils\Model\Object\EntityReference;

/**
 * Interface EntityReferenceAwareInterface
 */
interface EntityReferenceAwareInterface
{
    /**
     * @return null|EntityReferenceInterface
     */
    public function getEntityReference();

    /**
     * @param EntityReferenceInterface $entityReference
     * @return $this
     */
    public function setEntityReference(EntityReferenceInterface $entityReference);

}