<?php
namespace Strapieno\Utils\Model\Object\State;

/**
 * Interface Validating
 */
class Validating extends AbstractState
{
    /**
     * @var string
     */
    protected $name = 'validating';

    public function active()
    {
        return new Active();
    }

    public function stuck()
    {
        return new Stuck();
    }
}