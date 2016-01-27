<?php
namespace Strapieno\Utils\Model\Object\PostalAddress;

/**
 * Interface PostalAddressAwareInterface
 */
trait PostalAddressAwareTrait
{
    /**
     * @var null|PostalAddressInterface
     */
    protected $postalAddress;

    /**
     * @return null|PostalAddressInterface
     */
    public function getPostalAddress()
    {
        return $this->postalAddress;
    }

    /**
     * @param null|PostalAddressInterface $postalAddress
     * @return $this
     */
    public function setPostalAddress(PostalAddressInterface $postalAddress)
    {
        $this->postalAddress = $postalAddress;
        return $this;
    }
}