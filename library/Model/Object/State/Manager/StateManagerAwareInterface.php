<?php
/**
 * Created by PhpStorm.
 * User: visa
 * Date: 05/01/17
 * Time: 1.45
 */

namespace Strapieno\Utils\Model\Object\State\Manager;

/**
 * Interface StateManagerAwareInterface
 */
interface StateManagerAwareInterface
{

    /**
     * @return StateManager|null
     */
    public function getStateManager();

    /**
     * @param StateManager $StateManager
     * @return $this
     */
    public function setStateManager(StateManager $StateManager);
}