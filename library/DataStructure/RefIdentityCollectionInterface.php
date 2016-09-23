<?php
namespace Strapieno\Utils\DataStructure;

use ArrayAccess;
use Countable;
use IteratorAggregate;

/**
 * Interface RefIdentityCollectionInterface
 */
interface RefIdentityCollectionInterface extends Countable, IteratorAggregate, ArrayAccess
{
    /**
     * @param RefIdentityInterface $refIdentity
     * @return $this
     */
    public function append(RefIdentityInterface $refIdentity);

    /**
     * @param RefIdentityInterface $refIdentity
     * @return $this
     */
    public function remove(RefIdentityInterface $refIdentity);

    /**
     * @param RefIdentityInterface $refIdentity
     * @return boolean
     */
    public function has(RefIdentityInterface $refIdentity);
}