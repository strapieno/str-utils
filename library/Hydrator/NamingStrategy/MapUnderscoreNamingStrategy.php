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
        $key = array_search($name, $this->hydrateMap);
        return parent::hydrate($key ? $key : $name);
    }

    public function extract($name)
    {
        $name = parent::extract($name);
        if (isset($this->hydrateMap[$name])) {
            return $this->hydrateMap[$name];
        }
        return $name;
    }
}