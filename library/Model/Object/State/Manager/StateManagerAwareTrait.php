<?php
namespace Strapieno\Utils\Model\Object\State\Manager;

use Zend\ServiceManager\AbstractPluginManager;

/**
 * Class StateManagerAwareTrait
 */
trait StateManagerAwareTrait
{
    /**
     * @var AbstractPluginManager|null
     */
    protected $stateManager;

    /**
     * @return AbstractPluginManager|null
     */
    public function getStateManager()
    {
        return $this->stateManager;
    }

    /**
     * @param AbstractPluginManager $StateManager
     * @return $this
     */
    public function setStateManager(AbstractPluginManager $stateManager)
    {
        $this->stateManager = $stateManager;
        return $this;
    }
}