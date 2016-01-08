<?php

namespace Strapieno\Utils\Validator;

use Zend\ServiceManager\AbstractFactoryInterface;
use Zend\ServiceManager\AbstractPluginManager;
use Zend\ServiceManager\ServiceLocatorInterface;
use Zend\Validator\InArray;

/**
 * Class AbstractArrayValidator
 */
class AbstractArrayValidator implements AbstractFactoryInterface
{
    /**
     * Config Key
     * @var string
     */
    protected $configKey = 'strapieno-array-validators';

    /**
     * Config
     * @var array
     */
    protected $config;

    /**
     * {@inheritdoc}
     */
    public function canCreateServiceWithName(ServiceLocatorInterface $serviceLocator, $name, $requestedName)
    {
        if ($serviceLocator instanceof AbstractPluginManager) {
            $serviceLocator = $serviceLocator->getServiceLocator();
        }

        $globalConfig = ($serviceLocator->has('Config')) ? $serviceLocator->get('Config') : [];
        $contextconfig = $this->getContextConfig($serviceLocator);

        if (empty($contextconfig)) {
            return false;
        }

        return (
            isset($contextconfig[$requestedName])
            && is_array($contextconfig[$requestedName])
            && !empty($contextconfig[$requestedName])
            && isset($contextconfig[$requestedName]['name_key_array_config'])
            && is_string($contextconfig[$requestedName]['name_key_array_config'])
            && isset($globalConfig[$contextconfig[$requestedName]['name_key_array_config']])
            && is_array($globalConfig[$contextconfig[$requestedName]['name_key_array_config']])
        );
    }

    /**
     * {@inheritdoc}
     */
    public function createServiceWithName(ServiceLocatorInterface $serviceLocator, $name, $requestedName)
    {
        if ($serviceLocator instanceof AbstractPluginManager) {
            $serviceLocator = $serviceLocator->getServiceLocator();
        }

        $globalConfig = ($serviceLocator->has('Config')) ? $serviceLocator->get('Config') : [];
        $contextconfig = $this->getContextConfig($serviceLocator);

        $validator = new InArray();
        $validator->setHaystack($globalConfig[$contextconfig[$requestedName]['name_key_array_config']]);
        // TODO add personal message error
        return $validator;
    }

    /**
     * Get strapieno array configuration
     *
     * @param  ServiceLocatorInterface $serviceLocator
     * @return array
     */
    protected function getContextConfig(ServiceLocatorInterface $serviceLocator)
    {
        if ($this->config !== null) {
            return $this->config;
        }

        if (!$serviceLocator->has('Config')) {
            $this->config = [];
            return $this->config;
        }

        $config = $serviceLocator->get('Config');
        if (!isset($config[$this->configKey]) || !is_array($config[$this->configKey])) {
            $this->config = [];
            return $this->config;
        }

        $this->config = $config[$this->configKey];
        return $this->config;
    }

}