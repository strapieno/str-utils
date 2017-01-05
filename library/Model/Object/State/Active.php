<?php
namespace Strapieno\Utils\Model\Object\State;

/**
 * Class Active
 */
class Active extends AbstractState
{
    /**
     * @var string
     */
    protected $name = 'active';

    public function stuck()
    {
        return new Stuck();
    }
}