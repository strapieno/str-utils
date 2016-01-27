<?php
namespace Strapieno\Utils\Model\Object\GeoCoordinate;

use Strapieno\Utils\Model\Object\AbstractObject;
use Strapieno\Utils\Model\Object\ObjectInterface;

/**
 * Class GeoCoordinatesObject
 */
class GeoCoordinateObject extends AbstractObject implements GeoCoordinateInterface, ObjectInterface
{
    /**
     * @var string
     */
    protected $latitude;

    /**
     * @var string
     */
    protected $longitude;

    /**
     * @var string
     */
    protected $elevation;

    /**
     * {@inheritdoc}
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * {@inheritdoc}
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * {@inheritdoc}
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getElevation()
    {
        return $this->elevation;
    }

    /**
     * {@inheritdoc}
     */
    public function setElevation($elevation)
    {
        $this->elevation = $elevation;
        return $this;
    }
}