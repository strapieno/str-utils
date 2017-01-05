<?php
/**
 * Created by PhpStorm.
 * User: visa
 * Date: 05/01/17
 * Time: 1.45
 */

namespace Strapieno\Utils\Model\Object\State\Manager;

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