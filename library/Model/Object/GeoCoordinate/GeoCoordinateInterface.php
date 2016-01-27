<?php
namespace Strapieno\Utils\Model\Object\GeoCoordinate;

/**
 * Interface GeoCoordinateInterface
 *
 * @see https://schema.org/GeoCoordinates
 */
interface GeoCoordinateInterface
{
    /**
     * @return string
     */
    public function getLatitude();

    /**
     * @param $latitude string
     * @return $this
     */
    public function setLatitude($latitude);

    /**
     * @return string
     */
    public function getLongitude();

    /**
     * @param $longitude string
     * @return $this
     */
    public function setLongitude($longitude);

    /**
     * @return string
     */
    public function getElevation();

    /**
     * @param string $elevation
     * @return $this
     */
    public function setElevation($elevation);
}