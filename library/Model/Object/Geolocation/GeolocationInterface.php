<?php
namespace Strapieno\Utils\Model\Object\Geolocation;

/**
 * Interface GeolocationInterface
 */
interface GeolocationInterface
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
}