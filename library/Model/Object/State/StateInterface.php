<?php
namespace Strapieno\Utils\Model\Object\State;

/**
 * Interface StateInterface
 */
interface StateInterface
{
    /**
     * @return StateInterface
     */
    public function active();

    /**
     * @return StateInterface
     */
    public function validating();

    /**
     * @return StateInterface
     */
    public function stuck();
}