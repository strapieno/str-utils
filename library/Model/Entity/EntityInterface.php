<?php

namespace Strapieno\Utils\Model\Entity;

use Matryoshka\Model\ModelAwareInterface;
use Matryoshka\Model\Object\ActiveRecord\ActiveRecordInterface;
use Matryoshka\Model\Object\IdentityAwareInterface;

/**
 * Interface EntityInterface
 */
interface EntityInterface extends
    IdentityAwareInterface,
    ActiveRecordInterface,
    ModelAwareInterface
{

}