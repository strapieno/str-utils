<?php
namespace Strapieno\Utils\Model\Object\MediaReference;

use Strapieno\Utils\Model\Object\AbstractObject;
use Strapieno\Utils\Model\Object\EntityReference\EntityReferenceAwareInterface;
use Strapieno\Utils\Model\Object\EntityReference\EntityReferenceAwareTrait;
use Strapieno\Utils\Model\Object\Media\MediaInterface;
use Strapieno\Utils\Model\Object\Media\MediaTrait;
use Strapieno\Utils\Model\Object\RefIdentityInterface;

/**
 * Class MediaReference
 */
class MediaReference extends AbstractObject implements RefIdentityInterface, MediaInterface, EntityReferenceAwareInterface
{
    use EntityReferenceAwareTrait;
    use MediaTrait;

    public function getRefIdentity()
    {
        if (!$this->entityReference) {
            throw new \RuntimeException('entityReference must be set');
        }

        $this->getEntityReference()->getId();
    }
}