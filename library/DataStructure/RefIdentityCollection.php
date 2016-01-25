<?php
namespace Strapieno\Utils\DataStructure;

use Countable;
use IteratorAggregate;
use Strapieno\Utils\DataStructure\Exception\InvalidArgumentException;
use Traversable;
use ArrayIterator;

/**
 * Class RefIdentityCollection
 */
class RefIdentityCollection implements RefIdentotyCollectionInterface
{
    /**
     * @var array
     */
    protected $storage = [];

    /**
     * Get the number of public properties in the AsbtractRefIdentotyCollection
     *
     * @link http://php.net/manual/en/countable.count.php
     * @return int
     */
    public function count()
    {
        return count($this->storage);
    }

    /**
     * Create a new iterator from an AsbtractRefIdentotyCollection instance
     *
     * @link http://php.net/manual/en/iteratoraggregate.getiterator.php
     * @return \Iterator
     */
    public function getIterator()
    {
        return new ArrayIterator($this->storage);
    }

    /**
     * @param RefIdentityInteface $refIdentity
     * @return $this
     */
    public function append(RefIdentityInteface $refIdentity)
    {
        foreach ($this->storage as $key => $value) {
            if ($value->getRefIdentity() == $refIdentity->getRefIdentity()) {
                throw new InvalidArgumentException(
                    sprintf('Ref identity object "%s" already present into the storage',
                    $refIdentity->getRefIdentity())
                );
            }
        }
        $this->storage[] = $refIdentity;
        return $this;
    }

    /**
     * @param RefIdentityInteface $refIdentity
     * @return bool
     */
    public function remove(RefIdentityInteface $refIdentity)
    {
        foreach ($this->storage as $key => $value) {
            if ($value->getRefIdentity() == $value->getRefIdentity()) {
                unset($this->storage[$key]);
                return true;
            }
        }
        return false;
    }

    /**
     * @param RefIdentityInteface $refIdentity
     * @return boolean
     */
    public function has(RefIdentityInteface $refIdentity)
    {
        /** @var $value RefIdentityInteface */
        foreach ($this->storage as $value) {
            if ($value->getRefIdentity() == $value->getRefIdentity()) {
                return true;
            }
        }
        return false;
    }
}