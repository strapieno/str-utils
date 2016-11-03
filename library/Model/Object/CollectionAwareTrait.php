<?php
namespace Strapieno\Utils\Model\Object;

/**
 * Class CollectionAwareTrait
 */
trait CollectionAwareTrait
{
    /**
     * @var CollectionInterface
     */
    protected $collection;

    /**
     * @return CollectionInterface|null $collection
     */
    public function getCollection()
    {
        return $this->collection;
    }

    /**
     * @param CollectionInterface $collection
     * @return $this
     */
    public function setCollection(CollectionInterface $collection)
    {
        $this->collection = $collection;
        return $this;
    }
}