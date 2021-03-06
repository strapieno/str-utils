<?php
namespace Strapieno\Utils\Model\Object;

/**
 * Class Collection
 */
class Collection implements CollectionInterface
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
        return new \ArrayIterator($this->storage);
    }

    /**
     * @param RefIdentityInterface $refIdentity
     * @return $this
     */
    public function append(RefIdentityInterface $refIdentity)
    {
        $this->validateRefIdentity($refIdentity);
        /** @var $value RefIdentityInterface */
        foreach ($this->storage as $key => $value) {
            if ($value->getRefIdentity() == $refIdentity->getRefIdentity()) {
                throw new \InvalidArgumentException(
                    sprintf('Ref identity object "%s" already present into the storage',
                        $refIdentity->getRefIdentity())
                );
            }
        }
        $this->storage[] = $refIdentity;
        return $this;
    }

    /**
     * @param RefIdentityInterface $refIdentity
     * @return bool
     */
    public function remove(RefIdentityInterface $refIdentity)
    {
        $this->validateRefIdentity($refIdentity);
        /** @var $value RefIdentityInterface */
        foreach ($this->storage as $key => $value) {
            if ($value->getRefIdentity() == $refIdentity->getRefIdentity()) {
                unset($this->storage[$key]);
                return true;
            }
        }
        return false;
    }

    /**
     * @param RefIdentityInterface $refIdentity
     * @return boolean
     */
    public function has(RefIdentityInterface $refIdentity)
    {
        $this->validateRefIdentity($refIdentity);
        /** @var $value RefIdentityInterface */
        foreach ($this->storage as $value) {
            if ($value->getRefIdentity() == $refIdentity->getRefIdentity()) {
                return true;
            }
        }
        return false;
    }

    /**
     * Returns whether the requested key exists
     *
     * @param  mixed $key
     * @return bool
     */
    public function offsetExists($key)
    {
        return isset($this->storage[$key]);
    }

    /**
     * Unsets the value at the specified key
     *
     * @param  mixed $key
     * @return void
     */
    public function offsetUnset($key)
    {
        if ($this->offsetExists($key)) {
            unset($this->storage[$key]);
        }
    }

    /**
     * Returns the value at the specified key
     *
     * @param  mixed $key
     * @return mixed
     */
    public function &offsetGet($key)
    {
        $ret = null;
        if (!$this->offsetExists($key)) {
            return $ret;
        }
        $ret =& $this->storage[$key];

        return $ret;
    }

    /**
     * Sets the value at the specified key to value
     *
     * @param  mixed $key
     * @param  mixed $value
     * @return void
     */
    public function offsetSet($key, $value)
    {
        $this->storage[$key] = $value;
    }

    /**
     * @param RefIdentityInterface $refIdentity
     */
    protected function validateRefIdentity(RefIdentityInterface $refIdentity)
    {
        $refIdentityValue = $refIdentity->getRefIdentity();
        if (!is_string($refIdentityValue)) {
            throw new \InvalidArgumentException(
                sprintf('Ref identity object must be a string given %s',
                    is_object($refIdentityValue) ? get_class($refIdentity) : gettype($refIdentityValue))
            );
        }
    }
}