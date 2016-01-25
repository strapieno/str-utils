<?php
/**
 * Created by PhpStorm.
 * User: visa
 * Date: 22/01/16
 * Time: 19.18
 */

namespace Strapieno\Utils\Model\Object\MediaRef;

use Strapieno\Utils\DataStructure\RefIdentotyCollectionInterface;

/**
 * Class MediaRefCollection
 */
interface MediaRefCollection extends RefIdentotyCollectionInterface
{
    /**
     * @param RefIdentityInteface $refIdentity
     * @return $this
     */
    public function append(MediaRefInterface $refIdentity);

    /**
     * @param RefIdentityInteface $refIdentity
     * @return $this
     */
    public function remove(MediaRefInterface $refIdentity);

    /**
     * @param RefIdentityInteface $refIdentityOld
     * @param RefIdentityInteface $refIdentityNew
     * @return $this
     */
    public function update(MediaRefInterface $refIdentityOld, MediaRefInterface $refIdentityNew);

    /**
     * @param RefIdentityInteface $refIdentity
     * @return boolean
     */
    public function has(MediaRefInterface $refIdentity);

}