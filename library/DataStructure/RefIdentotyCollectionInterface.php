<?php
namespace Strapieno\Utils\DataStructure;

use ArrayAccess;
use Countable;
use IteratorAggregate;

/**
 * Interface RefIdentotyCollectionInterface
 */
interface RefIdentotyCollectionInterface extends Countable, IteratorAggregate, ArrayAccess
{
    /**
     * @param RefIdentityInteface $refIdentity
     * @return $this
     */
    public function append(RefIdentityInteface $refIdentity);

    /**
     * @param RefIdentityInteface $refIdentity
     * @return $this
     */
    public function remove(RefIdentityInteface $refIdentity);

    /**
     * @param RefIdentityInteface $refIdentity
     * @return boolean
     */
    public function has(RefIdentityInteface $refIdentity);
}