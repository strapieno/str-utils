<?php
namespace Strapieno\Utils\Model\Object\State\Manager;

use Strapieno\Utils\Model\Object\State\Exception\InvalidPluginException;
use Strapieno\Utils\Model\Object\State\StateInterface;
use Zend\ServiceManager\AbstractPluginManager;

/**
 * Class StateManager
 */
class StateManager extends AbstractPluginManager
{
    protected $invokableClasses = [
        'active' => 'Strapieno\Utils\Model\Object\State\Active',
        'stuck' => 'Strapieno\Utils\Model\Object\State\Stuck',
        'validating' => 'Strapieno\Utils\Model\Object\State\Validating'
    ];

    /**
     * Validate the plugin
     *
     * Checks that the filter loaded is either a valid callback or an instance
     * of FilterInterface.
     *
     * @param  mixed $plugin
     * @return void
     * @throws Exception\RuntimeException if invalid
     */
    public function validatePlugin($plugin)
    {
        if (!$plugin instanceof StateInterface) {
            throw new InvalidPluginException(sprintf(
                'State object %s is invalid; must implement "%s"',
                (is_object($plugin) ? get_class($plugin) : gettype($plugin)),
                StateInterface::class
            ));
        }
    }

}