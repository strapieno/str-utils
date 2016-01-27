<?php
namespace Strapieno\Utils\Model\Object\PostalAddress;

/**
 * Class PostalAddressObject
 */
class PostalAddressObject implements PostalAddressInterface
{
    /**
     * Alpha-3 code
     *
     * @var string
     * @see https://en.wikipedia.org/wiki/ISO_3166-1
     */
    protected $addressCountry;

    /**
     * City
     *
     * @var string
     */
    protected $addressLocality;

    /**
     * Region
     *
     * @var string
     */
    protected $addressRegion;

    /**
     *
     *
     * @var string
     */
    protected $postalCode;

    /**
     * Street
     *
     * @var string
     */
    protected $streetAddress;

    /**
     * {@inheritdoc}
     */
    public function getAddressLocality()
    {
        return $this->addressLocality;
    }

    /**
     * {@inheritdoc}
     */
    public function setAddressLocality($addressLocality)
    {
        $this->addressLocality = $addressLocality;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getAddressRegion()
    {
        return $this->addressRegion;
    }

    /**
     * {@inheritdoc}
     */
    public function setAddressRegion($addressRegion)
    {
        $this->addressRegion = $addressRegion;
        return $this;
    }

    /**
     * @return string
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * {@inheritdoc}
     */
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getStreetAddress()
    {
        return $this->streetAddress;
    }

    /**
     * {@inheritdoc}
     */
    public function setStreetAddress($streetAddress)
    {
        $this->streetAddress = $streetAddress;
        return $this;
    }

    /**
     * @return string
     */
    public function getAddressCountry()
    {
        return $this->addressCountry;
    }

    /**
     * {@inheritdoc}
     */
    public function setAddressCountry($addressCountry)
    {
        $this->addressCountry = $addressCountry;
        return $this;
    }
}