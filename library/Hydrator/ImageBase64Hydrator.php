<?php

namespace Strapieno\Utils\Hydrator;

use ImgMan\Apigility\Hydrator\Strategy\Base64Strategy;
use Matryoshka\Model\Hydrator\ClassMethods;
use Matryoshka\Model\Hydrator\Strategy\DateTimeStrategy;

/**
 * Class ImageBase64Hydrator
 */
class ImageBase64Hydrator extends ClassMethods
{
    /**
     * {@inheritdoc}
     */
    public function __construct($underscoreSeparatedKeys = true)
    {
        parent::__construct($underscoreSeparatedKeys);
        $this->addStrategy('blob', new Base64Strategy());
    }
}