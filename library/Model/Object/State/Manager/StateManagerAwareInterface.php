<?php
/**
 * Created by PhpStorm.
 * User: visa
 * Date: 05/01/17
 * Time: 1.45
 */

namespace Strapieno\Utils\Model\Object\State\Manager;
use Zend\ServiceManager\AbstractPluginManager;

/**
 * Interface StateManagerAwareInterface
 */
interface StateManagerAwareInterface
{

    /**
     * @return AbstractPluginManager|null
     */
    public function getStateManager();

    /**
     * @param AbstractPluginManager $StateManager
     * @return $this
     */
    public function setStateManager(AbstractPluginManager $StateManager);
}