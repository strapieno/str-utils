<?php
namespace Strapieno\Utils\InputFilter;

use Zend\Filter\FilterPluginManager;
use Zend\InputFilter\InputFilterInterface;
use Zend\InputFilter\InputFilterPluginManager;
use Zend\ServiceManager\AbstractFactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use Zend\Validator\ValidatorPluginManager;

class InputFilterAbstractServiceFactory implements AbstractFactoryInterface
{
    /**
     * @var Factory
     */
    protected $factory;

    /**
     * @param ServiceLocatorInterface $inputFilters
     * @param string                  $cName
     * @param string                  $rName
     * @return bool
     */
    public function canCreateServiceWithName(ServiceLocatorInterface $inputFilters, $cName, $rName)
    {
        $services = $inputFilters->getServiceLocator();
        if (! $services instanceof ServiceLocatorInterface
            || ! $services->has('Config')
        ) {
            return false;
        }

        $config = $services->get('Config');
        if (!isset($config['strapieno_input_filter_specs'][$rName])
            || !is_array($config['strapieno_input_filter_specs'][$rName])
        ) {
            return false;
        }

        return true;
    }

    /**
     * @param ServiceLocatorInterface $inputFilters
     * @param string                  $cName
     * @param string                  $rName
     * @return InputFilterInterface
     */
    public function createServiceWithName(ServiceLocatorInterface $inputFilters, $cName, $rName)
    {
        $services  = $inputFilters->getServiceLocator();
        $allConfig = $services->get('Config');
        $config    = $allConfig['strapieno_input_filter_specs'][$rName];

        $factory   = $this->getInputFilterFactory($services, $inputFilters);

        return $factory->createInputFilter($config);
    }

    /**
     * @param ServiceLocatorInterface $services
     * @param InputFilterPluginManager $inputFilters
     * @return Factory
     */
    protected function getInputFilterFactory(ServiceLocatorInterface $services, InputFilterPluginManager $inputFilters)
    {
        if ($this->factory instanceof Factory) {
            return $this->factory;
        }

        $this->factory = new Factory($inputFilters);
        $this->factory
            ->getDefaultFilterChain()
            ->setPluginManager($this->getFilterPluginManager($services));
        $this->factory
            ->getDefaultValidatorChain()
            ->setPluginManager($this->getValidatorPluginManager($services));

        return $this->factory;
    }

    /**
     * @param ServiceLocatorInterface $services
     * @return FilterPluginManager
     */
    protected function getFilterPluginManager(ServiceLocatorInterface $services)
    {
        if ($services->has('FilterManager')) {
            return $services->get('FilterManager');
        }

        return new FilterPluginManager();
    }

    /**
     * @param ServiceLocatorInterface $services
     * @return ValidatorPluginManager
     */
    protected function getValidatorPluginManager(ServiceLocatorInterface $services)
    {
        if ($services->has('ValidatorManager')) {
            return $services->get('ValidatorManager');
        }

        return new ValidatorPluginManager();
    }
}
