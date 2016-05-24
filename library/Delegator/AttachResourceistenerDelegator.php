<?php

namespace Strapieno\Utils\Delegator;

use Strapieno\Utils\Listener\ListenerManager;
use Zend\EventManager\EventManagerAwareInterface;
use Zend\ServiceManager\AbstractPluginManager;
use Zend\ServiceManager\DelegatorFactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use ZF\Rest\RestController;

/**
 * Class AttachListenerDelegator
 */
class AttachResourceListenerDelegator implements DelegatorFactoryInterface
{
    /**
     * @var string
     */
    protected $nodeConfig = 'attach-resource-listeners';

    /**
     * {@inheritdoc}
     */
    public function createDelegatorWithName(ServiceLocatorInterface $serviceLocator, $name, $requestedName, $callback)
    {
        $instance = call_user_func($callback);
        if ($instance instanceof RestController) {
            $resource = $instance->getResource();
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
                $eventManager = $resource->getEventManager();
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