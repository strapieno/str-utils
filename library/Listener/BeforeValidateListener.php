<?php
namespace Strapieno\Utils\Listener;

use Zend\EventManager\EventManagerAwareInterface;
use Zend\EventManager\EventManagerInterface;
use Zend\EventManager\ListenerAggregateInterface;
use Zend\EventManager\ListenerAggregateTrait;
use Zend\Mvc\MvcEvent;

/**
 * Class BeforeValidateListener
 */
class BeforeValidateListener implements ListenerAggregateInterface
{
    const NODE_CONFIG = 'attach-prevalidation-listeners';

    use  ListenerAggregateTrait;

    /**
     * @see   ListenerAggregateInterface
     * @param EventManagerInterface $events
     * @param int $priority
     */
    public function attach(EventManagerInterface $events)
    {
        $this->listeners[] = $events->attach(MvcEvent::EVENT_ROUTE, [$this, 'onRoute'], -649);
    }

    public function onRoute(MvcEvent $e)
    {
        $serviceLocator = $e->getApplication()->getServiceManager();

        $config = $serviceLocator->get('Config');
        $controllerName = $e->getRouteMatch()->getParam('controller');

        if (isset($config[self::NODE_CONFIG])
            && isset($config[self::NODE_CONFIG][$controllerName])
            && is_array($config[self::NODE_CONFIG][$controllerName])
        ) {
            $listenerManager = $serviceLocator->get('listenerManager');
            /** @var $validationService EventManagerAwareInterface */
            $validationService = $serviceLocator->get('ZF\ContentValidation\ContentValidationListener');
            $eventManager = $validationService->getEventManager();
            foreach ($config[self::NODE_CONFIG][$controllerName] as $listener) {
                if ($listenerManager->has($listener)) {
                    $eventManager->attach($listenerManager->get($listener));
                }
            }
        }
    }
}