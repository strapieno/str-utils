<?php
namespace Strapieno\Utils\Model\Object\Rating;

/**
 * Interface UnderWaterAwareInterface
 */
interface UnderWaterAwareInterface
{
    /**
     * @return null|UnderWaterInterface
     */
    public function getUnderWater();

    /**
     * @param UnderWaterInterface $underWater
     * @return $this
     */
    public function setUnderWater($underWater);
}