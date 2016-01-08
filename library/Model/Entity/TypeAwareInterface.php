<?php

namespace Strapieno\Utils\Model\Entity;

/**
 * Interface TypeAwareInterface
 */
interface TypeAwareInterface
{
    /**
     * @return string
     */
    public function getType();

    /**
     * @param $type
     * @return string
     */
    public function setType($type);
}