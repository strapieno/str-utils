<?php
namespace Strapieno\Utils\Hydrator\Strategy;

use Matryoshka\Model\Hydrator\Strategy\NullableStrategyInterface;
use Matryoshka\Model\Hydrator\Strategy\NullableStrategyTrait;
use Strapieno\Utils\Exception\InvalidArgumentException;
use Strapieno\Utils\Model\Object\EntityReference\EntityReferenceInterface;
use Zend\Stdlib\Hydrator\Strategy\StrategyInterface;

/**
 * Class ReferenceEntityCompressStrategy
 */
class ReferenceEntityCompressStrategy implements StrategyInterface, NullableStrategyInterface
{

    use NullableStrategyTrait;
    /**
     * @var  EntityReferenceInterface
     */
    protected $objectPrototype;

    public function __construct(EntityReferenceInterface $objectPrototype, $nullable = true)
    {
        $this->objectPrototype = $objectPrototype;
        $this->setNullable($nullable);
    }

    public function hydrate($name)
    {
        if (is_string($name)) {
            $object = $this->getObjectPrototype();
            return $object->setId($name);
        }

        throw new InvalidArgumentException(
            sprintf('name must be a %s given %s', 'String', is_object($name) ? get_class($name) : gettype($name)
            )
        );
    }

    public function extract($name)
    {
        if (is_object($name) && $name instanceof  EntityReferenceInterface) {
            return $name->getId();
        }

        throw new InvalidArgumentException(
            sprintf(
                'name must be a %s given %s',
                'Strapieno\Utils\Model\Object\EntityReference\EntityReferenceInterface',
                is_object($name) ? get_class($name) : gettype($name)
            )
        );
    }

    /**
     * @return EntityReferenceInterface
     */
    public function getObjectPrototype()
    {
        return clone $this->objectPrototype;
    }
}