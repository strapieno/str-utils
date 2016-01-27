<?php
namespace Strapieno\Utils\Model\Object\PostalAddress;

/**
 * Interface PostalAddressAwareInterface
 */
interface PostalAddressAwareInterface
{
    /**
     * @return null|PostalAddressInterface
     */
    public function getPostalAddress();

    /**
     * @param PostalAddressInterface $postalAddress
     * @return $this
     */
    public function setPostalAddress(PostalAddressInterface $postalAddress);
}