<?php
namespace Strapieno\Utils\Model\Object\UnderWater;

/**
 * Interface UnderWaterInterface
 */
interface UnderWaterInterface
{
    /**
     * @return int
     */
    public function getVisibility();

    /**
     * @param int $visibility
     * @return $this
     */
    public function setVisibility($visibility);

    /**
     * @return int
     */
    public function getCurrent();

    /**
     * @param int $current
     * @return $this
     */
    public function setCurrent($current);

    /**
     * @return string
     */
    public function getTypeDepth();

    /**
     * @param string $typeDepth
     * @return $this
     */
    public function setTypeDepth($typeDepth);

    /**
     * @return int
     */
    public function getTemperature();

    /**
     * @param int $temperature
     * @return $this
     */
    public function setTemperature($temperature);

    /**
     * @return int
     */
    public function getDepth();

    /**
     * @param int $maxDepth
     * @return $this
     */
    public function setDepth($depth);
}