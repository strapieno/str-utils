<?php
namespace Strapieno\Utils\Model\Object\Place;

use Strapieno\Utils\Model\Object\AbstractObject;
use Strapieno\Utils\Model\Object\GeoCoordinate\GeoCoordinateAwareTrait;
use Strapieno\Utils\Model\Object\PostalAddress\PostalAddressAwareTrait;

/**
 * Class PlaceTrait
 */
trait PlaceTrait
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
     * @return string
     */
    public function getFaxNumber()
    {
        return $this->faxNumber;
    }

    /**
     * @param $faxNumber
     * @return $this
     */
    public function setFaxNumber($faxNumber)
    {
        $this->faxNumber = $faxNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * @param $telephone
     * @return $this
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