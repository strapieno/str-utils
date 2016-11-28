<?php
namespace Strapieno\Utils\Model\Object\Rating;

/**
 * Class UnderWaterTrait
 */
trait UnderWaterTrait
{
    /**
     * @var int
     */
    protected $visibility;

    /**
     * @var int
     */
    protected $current;

    /**
     * @var string
     */
    protected $typeDepth;

    /**
     * Celsius
     *
     * @var int
     */
    protected $temperature;

    /**
     * Meter
     *
     * @var int
     */
    protected $maxDepth;

    /**
     * Meter
     *
     * @var int
     */
    protected $minDepth;

    /**
     * @return int
     */
    public function getVisibility()
    {
        return $this->visibility;
    }

    /**
     * @param int $visibility
     * @return $this
     */
    public function setVisibility($visibility)
    {
        $this->visibility = $visibility;
        return $this;
    }

    /**
     * @return int
     */
    public function getCurrent()
    {
        return $this->current;
    }

    /**
     * @param int $current
     * @return $this
     */
    public function setCurrent($current)
    {
        $this->current = $current;
        return $this;
    }

    /**
     * @return string
     */
    public function getTypeDepth()
    {
        return $this->typeDepth;
    }

    /**
     * @param string $typeDepth
     * @return $this
     */
    public function setTypeDepth($typeDepth)
    {
        $this->typeDepth = $typeDepth;
        return $this;
    }

    /**
     * @return int
     */
    public function getTemperature()
    {
        return $this->temperature;
    }

    /**
     * @param int $temperature
     * @return $this
     */
    public function setTemperature($temperature)
    {
        $this->temperature = $temperature;
        return $this;
    }

    /**
     * @return int
     */
    public function getMaxDepth()
    {
        return $this->maxDepth;
    }

    /**
     * @param int $maxDepth
     * @return $this
     */
    public function setMaxDepth($maxDepth)
    {
        $this->maxDepth = $maxDepth;
        return $this;
    }

    /**
     * @return int
     */
    public function getMinDepth()
    {
        return $this->minDepth;
    }

    /**
     * @param int $minDepth
     * @return $this
     */
    public function setMinDepth($minDepth)
    {
        $this->minDepth = $minDepth;
        return $this;
    }
}