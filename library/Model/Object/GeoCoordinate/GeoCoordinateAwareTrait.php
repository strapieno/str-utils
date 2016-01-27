<?php
namespace Strapieno\Utils\Model\Object\GeoCoordinate;

/**
 * Class GeoCoordinateAwareTrait
 */
trait GeoCoordinateAwareTrait
{
    /**
     * @var GeoCoordinateInterface|null
     */
    protected $geoCoordinate;

    /**
     * @return GeoCoordinatesInterface|null
     */
    public function getGeoCoordinate()
    {
        return $this->geoCoordinate;
    }

    /**
     * @param $latitude GeoCoordinateInterface
     * @return $this
     */
    public function setGeoCoordinate(GeoCoordinateInterface $geoCoordinate  )
    {
        $this->geoCoordinate = $geoCoordinate;
        return $this;
    }
}