<?php

namespace Strapieno\Utils\Listener;

use Strapieno\Utils\Exception;
use Zend\EventManager\ListenerAggregateInterface;
use Zend\ServiceManager\AbstractPluginManager;

/**
 * Class ListenerManager
 */
class ListenerManager extends AbstractPluginManager
{
    /**
     * @var bool
     */
    protected $shareByDefault = false;

    /**
     * {@inheritdoc}
     */
    public function validatePlugin($plugin)
    {
        if (!$plugin instanceof ListenerAggregateInterface) {
            throw new Exception\InvalidPluginException(sprintf(
                'Listener of type "%s" is invalid; must implement "%s"',
                is_object($plugin) ? get_class($plugin) : gettype($plugin),
                ListenerAggregateInterface::class
            ));
        }
    }
}