<?php
namespace Strapieno\UtilsTest\Model\Object\PostalAddress;

use Strapieno\Utils\Model\Object\PostalAddress\PostalAddressObject;

/**
 * Class PostalAddressObjectTest
 */
class PostalAddressObjectTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var PostalAddressObject
     */
    protected $postalAddress;

    public function setUp()
    {
        $this->postalAddress = new PostalAddressObject();
    }

    public function testGetSetAddressCountry()
    {
        $test = 'test';
        $this->postalAddress->setAddressCountry($test);
        $this->assertSame($test, $this->postalAddress->getAddressCountry());
    }

    public function testGetSetAddressLocality()
    {
        $test = 'test';
        $this->postalAddress->setAddressLocality($test);
        $this->assertSame($test, $this->postalAddress->getAddressLocality());
    }

    public function testGetSetAddressRegion()
    {
        $test = 'test';
        $this->postalAddress->setAddressRegion($test);
        $this->assertSame($test, $this->postalAddress->getAddressRegion());
    }

    public function testGetSetPostalCode()
    {
        $test = 'test';
        $this->postalAddress->setPostalCode($test);
        $this->assertSame($test, $this->postalAddress->getPostalCode());
    }

    public function testGetSetStreetAddress()
    {
        $test = 'test';
        $this->postalAddress->setStreetAddress($test);
        $this->assertSame($test, $this->postalAddress->getStreetAddress());
    }
}