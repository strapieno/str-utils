<?php
namespace Strapieno\Utils\Model\Object\Place;

use Strapieno\Utils\Model\Object\AbstractObject;
use Strapieno\Utils\Model\Object\GeoCoordinate\GeoCoordinateAwareTrait;
use Strapieno\Utils\Model\Object\PostalAddress\PostalAddressAwareTrait;

/**
 * Class PlaceObject
 */
class PlaceObject extends AbstractObject implements PlaceInterface
{
    use GeoCoordinateAwareTrait;
    use PostalAddressAwareTrait;

    /**
     * @var string
     */
    protected $faxNumber;

    /**
     * @var string
     */
    protected $telephone;

    /**
     * @var string
     */
    protected $name;

    /**
     * {@inheritdoc}
     */
    public function getFaxNumber()
    {
        return $this->faxNumber;
    }

    /**
     * {@inheritdoc}
     */
    public function setFaxNumber($faxNumber)
    {
        $this->faxNumber = $faxNumber;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * {@inheritdoc}
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
}