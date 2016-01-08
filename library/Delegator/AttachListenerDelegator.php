<?php

namespace Strapieno\Utils\Delegator;

use Strapieno\Utils\Listener\ListenerManager;
use Zend\EventManager\EventManagerAwareInterface;
use Zend\ServiceManager\AbstractPluginManager;
use Zend\ServiceManager\DelegatorFactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

/**
 * Class AttachListenerDelegator
 */
class AttachListenerDelegator implements DelegatorFactoryInterface
{
    /**
     * @var string
     */
    protected $nodeConfig = 'attach-listeners';

    /**
     * {@inheritdoc}
     */
    public function createDelegatorWithName(ServiceLocatorInterface $serviceLocator, $name, $requestedName, $callback)
    {
        $instance = call_user_func($callback);
        if ($instance instanceof EventManagerAwareInterface) {

            if ($serviceLocator instanceof AbstractPluginManager) {
                $serviceLocator = $serviceLocator->getServiceLocator();
            }

            $config = $serviceLocator->get('Config');

            if ($serviceLocator->has('listenerManager')
                && isset($config[$this->nodeConfig])
                && isset($config[$this->nodeConfig][$requestedName])
                && is_array($config[$this->nodeConfig][$requestedName])
            ) {
                /** @var $listenerManager ListenerManager */
                $listenerManager = $serviceLocator->get('listenerManager');
                $eventManager = $instance->getEventManager();
                foreach ($config[$this->nodeConfig][$requestedName] as $listener) {
                    if ($listenerManager->has($listener)) {
                        $eventManager->attachAggregate($listenerManager->get($listener));
                    }
                }
            }
        }

        return $instance;
    }
}