<?php
namespace Strapieno\Utils\Model\Object\Place;

use Strapieno\Utils\Model\Object\GeoCoordinate\GeoCoordinateAwareInterface;
use Strapieno\Utils\Model\Object\PostalAddress\PostalAddressAwareInterface;

/**
 * Interface PlaceInterface
 */
interface PlaceInterface extends GeoCoordinateAwareInterface, PostalAddressAwareInterface
{
    /**
     * @return string
     */
    public function getFaxNumber();

    /**
     * @param string $faxNumber
     * @return $this
     */
    public function setFaxNumber($faxNumber);

    /**
     * @return string
     */
    public function getTelephone();

    /**
     * @param string $telephone
     * @return $this
     */
    public function setTelephone($telephone);


    /**
     * @return string
     */
    public function getName();

    /**
     * @param string $name
     * @return $this
     */

    public function setName($name);

    /**
     * @return string
     */
    public function getDescription();

    /**
     * @param string $name
     * @return $this
     */

    public function setDescription($name);
}