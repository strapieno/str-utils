<?php

namespace Strapieno\Utils\Listener;

use Zend\EventManager\ListenerAggregateInterface;
use Zend\ServiceManager\AbstractPluginManager;
use Zend\ServiceManager\Config;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

/**
 * Class ListenerManagerFactory
 */
class ListenerManagerFactory implements FactoryInterface
{
    /**
     * @var string
     */
        protected $nodeConfig = 'service-listeners';

    /**
     * {@inheritdoc}
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        if ($serviceLocator instanceof AbstractPluginManager) {
            $serviceLocator = $serviceLocator->getServiceLocator();
        }

        $config = $serviceLocator->get('Config');
        $listenerManagerConfig = [];
        if (isset($config[$this->nodeConfig]) && is_array($config[$this->nodeConfig])) {
            $listenerManagerConfig = $config[$this->nodeConfig];
        }
        return new ListenerManager(new Config($listenerManagerConfig));
    }
}