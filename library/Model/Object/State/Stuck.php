<?php
namespace Strapieno\Utils\Model\Object\State;

/**
 * Class Stuck
 */
class Stuck extends AbstractState
{
    /**
     * @var string
     */
    protected $name = 'stuck';

    public function active()
    {
        return new Active();
    }

    public function validating()
    {
        return new Validating();
    }
}