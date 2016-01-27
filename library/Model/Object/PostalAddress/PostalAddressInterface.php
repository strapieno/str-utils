<?php
namespace Strapieno\Utils\Model\Object\PostalAddress;

/**
 * Interface PostalAddressInterface
 *
 * @see https://schema.org/PostalAddress
 */
interface PostalAddressInterface
{
    /**
     * @return string
     */
    public function getAddressLocality();

    /**
     * @param string $addressLocality
     * @return $this
     */
    public function setAddressLocality($addressLocality);

    /**
     * @return string
     */
    public function getAddressRegion();

    /**
     * @param string $addressRegion
     * @return $this
     */
    public function setAddressRegion($addressRegion);

    /**
     * @return string
     */
    public function getPostalCode();

    /**
     * @param string $postalCode
     * @return $this
     */
    public function setPostalCode($postalCode);

    /**
     * @return string
     */
    public function getStreetAddress();

    /**
     * @param string $streetAddress
     * @return $this
     */
    public function setStreetAddress($streetAddress);

    /**
     * @return string
     */
    public function getAddressCountry();

    /**
     * @param string $addressCountry
     * @return $this
     */
    public function setAddressCountry($addressCountry);
}