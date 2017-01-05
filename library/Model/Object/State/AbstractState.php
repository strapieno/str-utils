<?php
namespace Strapieno\Utils\Model\Object\State;

use BadMethodCallException;
use Strapieno\Utils\Model\Entity\StateInterface as BaseStateInterface;

/**
 * Class AbstractState
 */
abstract class AbstractState implements StateInterface, BaseStateInterface
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