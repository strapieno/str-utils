<?php
namespace Strapieno\Utils\Listener;

use Zend\EventManager\EventManagerInterface;
use Zend\EventManager\ListenerAggregateInterface;
use Zend\EventManager\ListenerAggregateTrait;
use Zend\Mvc\MvcEvent;

/**
 * Class InjectRouteParamsInRequest
 */
class InjectRouteParamsInRequest implements ListenerAggregateInterface
{
    use ListenerAggregateTrait;

    const INJECT_ROUTE_PARAMS = 'inject-route-params';

    public function attach(EventManagerInterface $events)
    {
        $this->listeners[] = $events->attach(MvcEvent::EVENT_ROUTE, [$this, 'injectRouteParams'], -649);
    }

    /**
     * @param MvcEvent $e
     */
    public function injectRouteParams(MvcEvent $e)
    {
        $config = $e->getApplication()->getServiceManager()->get('Config');
        if (isset($config[self::INJECT_ROUTE_PARAMS]) && is_array($config[self::INJECT_ROUTE_PARAMS])) {
            $injectRouteParamsConfig = $config[self::INJECT_ROUTE_PARAMS];
            /** @var $dataContainer \ZF\ContentNegotiation\ParameterDataContainer */
            $dataContainer = $e->getParam('ZFContentNegotiationParameterData', false);
            $controller = $dataContainer->getRouteParam('controller');

            if (isset($injectRouteParamsConfig[$controller]) && is_array($injectRouteParamsConfig[$controller])) {
                foreach ($injectRouteParamsConfig[$controller] as $value) {
                    if ($dataContainer->hasRouteParam($value)) {
                        $dataContainer->setBodyParam($value, $dataContainer->getRouteParam($value));
                    }
                }
            }
        }
    }
}