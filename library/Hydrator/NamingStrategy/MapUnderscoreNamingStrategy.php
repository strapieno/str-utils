<?php
namespace Strapieno\Utils\Hydrator\Strategy\NamingStrategy;

use Zend\Stdlib\Hydrator\NamingStrategy\NamingStrategyInterface;
use Zend\Stdlib\Hydrator\NamingStrategy\UnderscoreNamingStrategy;

/**
 * Class MapUnderscoreNamingStrategy
 */
class MapUnderscoreNamingStrategy extends UnderscoreNamingStrategy implements NamingStrategyInterface
{
    /**
     * @var array
     */
    private $hydrateMap;

    public function __construct(array $hydrateMap = [])
    {
        $this->hydrateMap = $hydrateMap;
    }

    /**
     * @inheritdoc
     */
    public function hydrate($name)
    {

        if (array_key_exists($name, $this->hydrateMap)) {
            return parent::hydrate($this->hydrateMap[$name]);
        }

        return parent::hydrate($name);
    }

    public function extract($name)
    {
        foreach ($this->hydrateMap as $key => $value) {
            if ($value === $name) {
                return $key;
            }
        }
        return parent::extract($name);
    }
}