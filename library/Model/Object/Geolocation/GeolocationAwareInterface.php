<?php
namespace Strapieno\Utils\Model\Object\Geolocation;

/**
 * Interface GeolocationAwareInterface
 */
interface GeolocationAwareInterface
{
    /**
     * @return GeolocationInterface|null
     */
    public function getGeolocation();

    /**
     * @param GeolocationInterface $geolocation
     * @return $this
     */
    public function setGeolocation(GeolocationInterface $geolocation);
}