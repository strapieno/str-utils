<?php
namespace Strapieno\Utils\Model\Object;

/**
 * Interface CollectionAwareInterface
 */
interface CollectionAwareInterface
{
    /**
     * @return CollectionInterface|null $collection
     */
    public function getCollection();

    /**
     * @param CollectionInterface $collection
     * @return $this
     */
    public function setCollection(CollectionInterface $collection);
}