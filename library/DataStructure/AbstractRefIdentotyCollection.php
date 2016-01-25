<?php
namespace Strapieno\Utils\DataStructure;

use Countable;
use IteratorAggregate;
use Traversable;
use ArrayIterator;

/**
 * Class AsbtractRefIdentotyCollection
 */
abstract class AbstractRefIdentotyCollection implements RefIdentotyCollectionInterface
{
    /**
     * @var array
     */
    protected $storageId = [];

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
        return count($this->storageId);
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
        if (isset($this->storageId[$refIdentity->getRefIdentity()])) {
            // Exception
        }
        $this->storage[] = $refIdentity;
        $this->storageId[[$refIdentity->getRefIdentity()] = true;
        return $this;
    }

    /**
     * @param RefIdentityInteface $refIdentity
     * @return bool
     */
    public function remove(RefIdentityInteface $refIdentity)
    {
        if ($this->has($refIdentity)) {
            /** @var  $value RefIdentityInteface */
            foreach ($this->storage as $key => $value) {
                if ($value->getRefIdentity() == $refIdentity->getRefIdentity()) {
                    unset($this->storage[$key]);
                    unset($this->storageId[$refIdentity->getRefIdentity()]);
                    return true;
                }
            }
        }

        return false;
    }

    /**
     * @param RefIdentityInteface $refIdentityOld
     * @param RefIdentityInteface $refIdentityNew
     * @return bool
     */
    public function update(RefIdentityInteface $refIdentityOld, RefIdentityInteface $refIdentityNew)
    {
        if ($this->has($refIdentityOld)) {
            foreach ($this->storage as $key => $value) {
                if ($value->getRefIdentity() == $refIdentity->getRefIdentity()) {
                    $this->storage[$key] = $refIdentityNew;
                    return $true;
                }
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
        return isset($this->storageId[$refIdentity->getRefIdentity()]);
    }
}