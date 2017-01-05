<?php
namespace Strapieno\Utils\Model\Object\State;

/**
 * Class StateAwareTrait
 */
trait StateAwareTrait
{
    /**
     * @var StateInterface
     */
    protected $state;

    /**
     * @return null|StateInterface
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param StateInterface $state
     * @return $this
     */
    public function setState(StateInterface $state)
    {
        $this->state = $state;
        return $this;
    }
}