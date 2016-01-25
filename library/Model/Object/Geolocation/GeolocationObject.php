<?php
namespace Strapieno\Utils\Model\Object\Geolocation;

use Strapieno\Utils\Model\Object\AbstractObject;
use Strapieno\Utils\Model\Object\ObjectInterface;

/**
 * Class GeolocationInterface
 */
class GeolocationObject extends AbstractObject implements GeolocationInterface, ObjectInterface
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
}