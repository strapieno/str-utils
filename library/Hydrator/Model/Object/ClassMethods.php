<?php
namespace Strapieno\Utils\Hydrator\Model\Object;

use Zend\Hydrator\Filter\FilterComposite;
use Zend\Stdlib\Hydrator\ClassMethods as ZendClassMethods;
use Zend\Stdlib\Hydrator\Filter\MethodMatchFilter;

/**
 * Class ClassMethods
 */
class ClassMethods extends ZendClassMethods
{
    /**
     * {@inheritdoc}
     */
    public function __construct($underscoreSeparatedKeys = true)
    {
        parent::__construct($underscoreSeparatedKeys);
        $this->filterComposite->addFilter(
            'hydrator',
            new MethodMatchFilter(
                'getHydrator',
                true
            ),
            FilterComposite::CONDITION_AND
        );
    }
}