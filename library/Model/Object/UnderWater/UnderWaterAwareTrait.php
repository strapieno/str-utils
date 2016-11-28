<?php
namespace Strapieno\Utils\Model\Object\Rating;

/**
 * Interface UnderWaterAwareTrait
 */
trait UnderWaterAwareTrait
{
    /**
     * @var null|UnderWaterInterface
     */
    protected $underWater;

    /**
     * @return null|UnderWaterInterface
     */
    public function getUnderWater()
    {
        return $this->underWater;
    }

    /**
     * @param UnderWaterInterface $underWater
     * @return $this
     */
    public function setUnderWater(UnderWaterInterface $underWater)
    {
        $this->underWater = $underWater;
        return $this;
    }
}