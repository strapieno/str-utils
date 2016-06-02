<?php

namespace Strapieno\Utils\Initializer;

use Matryoshka\Model\ModelManager;
use Zend\ServiceManager\InitializerInterface;
use Zend\ServiceManager\ServiceLocatorAwareInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

/**
 * Class AbstractModelServiceInitializer
 */
abstract class AbstractModelServiceInitializer implements InitializerInterface
{
    const SERVICE_NAME = null;
    const INSTANCE_CLASS = null;
    const SETTER_METHOD = null;

    /**
     * @param ServiceLocatorInterface $serviceLocator
     * @return ModelManager
     */
    protected function getModelManager(ServiceLocatorInterface $serviceLocator)
    {
        // If the current service locator is a dedicated service locator
        if ($serviceLocator instanceof ServiceLocatorAwareInterface) {
            // Get the service manager
            $serviceLocator = $serviceLocator->getServiceLocator();
        }
        // Get model manager
        $modelManager = $serviceLocator->get('Matryoshka\Model\ModelManager');
        return $modelManager;
    }

    /**
     * {@inheritdoc}
     */
    public function initialize($instance, ServiceLocatorInterface $serviceLocator)
    {
        $classNameOrInterface = static::INSTANCE_CLASS;
        if ($instance instanceof $classNameOrInterface) {
            $serviceLocator = $this->getModelManager($serviceLocator);
            if ($serviceLocator->has(static::SERVICE_NAME)) {
                $instance->{static::SETTER_METHOD}($serviceLocator->get(static::SERVICE_NAME));
            }
        }
    }
}