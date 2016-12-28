<?php

namespace Strapieno\Utils\Delegator;

use Strapieno\Utils\Listener\ListenerManager;
use Zend\EventManager\EventManagerAwareInterface;
use Zend\ServiceManager\AbstractPluginManager;
use Zend\ServiceManager\DelegatorFactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

/**
 * Class AttachBeforeValidationListenerDelegator
 */
class AttachBeforeValidationListenerDelegator implements DelegatorFactoryInterface
{
    const NODE_CONFIG = 'attach-prevalidation-listeners';

    /**
     * {@inheritdoc}
     */
    public function createDelegatorWithName(ServiceLocatorInterface $serviceLocator, $name, $requestedName, $callback)
    {
        $instance = call_user_func($callback);

        if ($serviceLocator instanceof AbstractPluginManager) {
            $serviceLocator = $serviceLocator->getServiceLocator();
        }

        if (!$serviceLocator->has('ZF\ContentValidation\ContentValidationListener')) {
            throw new ServiceNotFoundException('ZF\ContentValidation\ContentValidationListener service not found');
        }
        $config = $serviceLocator->get('Config');

        if ($serviceLocator->has('listenerManager')
            && isset($config[self::NODE_CONFIG])
            && isset($config[self::NODE_CONFIG][$requestedName])
            && is_array($config[self::NODE_CONFIG][$requestedName])
        ) {
            /** @var $listenerManager ListenerManager */
            $listenerManager = $serviceLocator->get('listenerManager');
            /** @var $validationService EventManagerAwareInterface */
            $validationService = $serviceLocator->get('ZF\ContentValidation\ContentValidationListener');
            $eventManager = $validationService->getEventManager();
            foreach ($config[self::NODE_CONFIG][$requestedName] as $listener) {
                if ($listenerManager->has($listener)) {
                    $eventManager->attach($listenerManager->get($listener));
                }
            }
        }
        return $instance;
    }
}