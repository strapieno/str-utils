<?php
/**
 * Created by PhpStorm.
 * User: visa
 * Date: 23/01/16
 * Time: 17.58
 */

namespace Strapieno\Utils\DataStructure;

use Countable;
use IteratorAggregate;

/**
 * Interface RefIdentotyCollectionInterface
 */
interface RefIdentotyCollectionInterface extends Countable, IteratorAggregate
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
     * @param RefIdentityInteface $refIdentityOld
     * @param RefIdentityInteface $refIdentityNew
     * @return $this
     */
    public function update(RefIdentityInteface $refIdentityOld, RefIdentityInteface $refIdentityNew);

    /**
     * @param RefIdentityInteface $refIdentity
     * @return boolean
     */
    public function has(RefIdentityInteface $refIdentity);
}