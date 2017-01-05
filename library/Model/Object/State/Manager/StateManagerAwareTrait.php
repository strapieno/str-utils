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
     * @var StateManager|null
     */
    protected $stateManager;

    /**
     * @return StateManager|null
     */
    public function getStateManager()
    {
        return $this->stateManager;
    }

    /**
     * @param StateManager $StateManager
     * @return $this
     */
    public function setStateManager(StateManager $stateManager)
    {
        $this->stateManager = $stateManager;
        return $this;
    }
}