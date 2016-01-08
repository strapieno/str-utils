<?php

namespace Strapieno\Utils\Model\Entity;

/**
 * Class TypeAwareTrait
 */
trait TypeAwareTrait
{
    /**
     * @var
     */
    protected $type;

    /**
     * @return string
     */
    public static function extractTypeFromClass()
    {
        $derivedTypeName = static::class;

        if (strpos($derivedTypeName, '\\') !== false) {
            $derivedTypeName = explode('\\', $derivedTypeName);
            $derivedTypeName = array_pop($derivedTypeName);
        }

        if (substr($derivedTypeName, -6, 6) == 'Entity') {
            $derivedTypeName = substr($derivedTypeName, 0, -6);
        }

        return $derivedTypeName;
    }

    /**
     * Returns the object type
     *
     * @return string
     */
    public function getType()
    {
        if (!$this->type) {
            $this->type = static::extractTypeFromClass();
        }

        return $this->type;
    }

    /**
     * Set the transaction type
     *
     * @param string $type
     * @return $this
     */
    public function setType($type)
    {
        if ($this->getType() != $type) {
            throw new Exception\InvalidArgumentException(sprintf(
                'The only allowed type for "%s" class is "%s", "%s" given',
                get_class($this),
                $this->getType(),
                $type
            ));
        }
        return $this;
    }
}