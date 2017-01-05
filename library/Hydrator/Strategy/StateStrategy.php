<?php

namespace Strapieno\Utils\Hydrator\Strategy;

use Strapieno\Utils\Model\Entity\StateInterface;
use Strapieno\Utils\Model\Object\State\Manager\StateManager;
use Strapieno\Utils\Model\Object\State\Manager\StateManagerAwareInterface;
use Strapieno\Utils\Model\Object\State\Manager\StateManagerAwareTrait;
use Zend\ServiceManager\AbstractPluginManager;
use Zend\Stdlib\Hydrator\Strategy\StrategyInterface;

/**
 * Class StateStrategy
 */
class StateStrategy implements StrategyInterface, StateManagerAwareInterface
{
    use StateManagerAwareTrait;

    /**
     * @var StateInterface|null
     */
    protected $firstStateName;

    /**
     * StateStrategy constructor.
     * @param null|StateInterface $firstStateName
     */
    public function __construct()
    {
        if (!$this->stateManager) {
            $this->setStateManager(new StateManager());
        }
    }

    /**
     * @param null|StateInterface $firstState
     * @return $this
     */
    public function setFirstStateName($firstStateName)
    {
        if (!is_string($firstStateName)) {
            throw new \InvalidArgumentException('Param $firstStateName must be a string');
        }
        $this->firstStateName = $firstStateName;
        return $this;
    }

    /**
     * Converts the given value so that it can be extracted by the hydrator.
     *
     * @param mixed $value The original value.
     * @param object $object (optional) The original object for context.
     * @return mixed Returns the value that should be extracted.
     */
    public function extract($value)
    {
        if ($value instanceof StateInterface) {
            return $value->getName();
        }

        if (empty($value) && $this->checkPlugin() && $this->getStateManager()->has($this->firstStateName)) {
            return $this->firstStateName;
        }
        // FIXME is correct? or exception
        return $value;
    }

    /**
     * Converts the given value so that it can be hydrated by the hydrator.
     *
     * @param mixed $value The original value.
     * @param array $data (optional) The original data for context.
     * @return mixed Returns the value that should be hydrated.
     */
    public function hydrate($value)
    {
        if ($value instanceof StateInterface) {
            return $value;
        }

        if (is_string($value)) {

            if ($this->checkPlugin() && $this->getStateManager()->has($value)) {
                return $this->getStateManager()->get($value);
            }

            throw new \RuntimeException(sprintf(
                    'No service registered in %s with name %s',
                    is_object($this->plugins) ? get_class($this->plugins) : gettype($this->plugins),
                    $value
                )
            );
        }

        if (empty($value) && $this->checkPlugin() && $this->getStateManager()->has($this->firstStateName)) {
            return $this->getStateManager()->has($this->firstStateName);
        }

        // FIXME is correct? or exception
        return $value;
    }

    /**
     * @return bool
     */
    protected function checkPlugin()
    {
        if (!$this->plugins && !$this->plugins instanceof AbstractPluginManager) {
            throw new \RuntimeException(sprintf(
                    'plugins must be an instance of %s given %s',
                    AbstractPluginManager::class,
                    is_object($this->plugins) ? get_class($this->plugins) : gettype($this->plugins)
                )
            );
        }
        return true;
    }
}