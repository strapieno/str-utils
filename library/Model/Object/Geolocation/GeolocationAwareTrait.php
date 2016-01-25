<?php
namespace Strapieno\Utils\Model\Object\Geolocation;

/**
 * Class GeolocationAwareInterface
 */
trait GeolocationAwareTrait
{
    /**
     * @var GeolocationInterface|null
     */
    protected $geolocation;

    /**
     * @return GeolocationInterface|null
     */
    public function getGeolocation()
    {
        return $this->geolocation;
    }

    /**
     * @param $latitude GeolocationInterface
     * @return $this
     */
    public function setGeolocation(GeolocationInterface $geolocation)
    {
        $this->geolocation = $geolocation;
        return $this;
    }
}