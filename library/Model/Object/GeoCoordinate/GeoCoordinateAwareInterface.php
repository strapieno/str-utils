<?php
namespace Strapieno\Utils\Model\Object\GeoCoordinate;

/**
 * Interface GeoCoordinateAwareInterface
 */
interface GeoCoordinateAwareInterface
{
    /**
     * @return GeoCoordinateInterface|null
     */
    public function getGeoCoordinate();

    /**
     * @param GeoCoordinateInterface $geoCoordinate
     * @return $this
     */
    public function setGeoCoordinate(GeoCoordinateInterface $geoCoordinate);
}