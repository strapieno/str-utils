<?php
namespace Strapieno\Utils\Model\Object\State;

use BadMethodCallException;

/**
 * Class AbstractState
 */
abstract class AbstractState implements StateInterface
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @inheritdoc
     */
    public function active()
    {
        throw new Exception\IllegalStateTransitionException;
    }

    /**
     * @inheritdoc
     */
    public function validating()
    {
        throw new Exception\IllegalStateTransitionException;
    }

    /**
     * @inheritdoc
     */
    public function stuck()
    {
        throw new Exception\IllegalStateTransitionException;
    }

    /**
     * @return string
     */
    public function getName()
    {
        if (!$this->name) {
            throw new BadMethodCallException();
        }
        return $this->name;
    }
}