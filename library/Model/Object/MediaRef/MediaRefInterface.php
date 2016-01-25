<?php
namespace Strapieno\Utils\Model\Object\MediaRef;

use Strapieno\Utils\DataStructure\RefIdentityInteface;

/**
 * Interface MultimendiaRefInterface
 */
interface MediaRefInterface extends RefIdentityInteface
{
    /**
     * @return string
     */
    public function getType();

    /**
     * @param string $type
     * @return $this
     */
    public function setType($type);

    /**
     * @return string
     */
    public function getSource();

    /**
     * @param string $source
     * @return $this
     */
    public function setSource($source);
}