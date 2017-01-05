<?php
namespace Strapieno\Utils\Model\Object\State;

/**
 * Interface StateAwareInterface
 */
interface StateAwareInterface
{
    /**
     * @return null|StateInterface
     */
    public function getState();

    /**
     * @param StateInterface $state
     * @return $this
     */
    public function setState(StateInterface $state);
}