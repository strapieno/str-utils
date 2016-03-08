<?php
namespace Strapieno\UtilsTest\Model\Object\PostalAddress;

use Strapieno\Utils\Model\Object\PostalAddress\PostalAddressInterface;

/**
 * Class PostalAddressTraitTest
 */
class PostalAddressTraitTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var PostalAddressInterface
     */
    protected $mockTrait;

    public function setUp()
    {
        $this->mockTrait = $this->getMockForTrait('Strapieno\Utils\Model\Object\PostalAddress\PostalAddressTrait');
    }

    public function testGetSetAddressCountry()
    {
        $test = 'test';
        $this->mockTrait->setAddressCountry($test);
        $this->assertSame($test, $this->mockTrait->getAddressCountry());
    }

    public function testGetSetAddressLocality()
    {
        $test = 'test';
        $this->mockTrait->setAddressLocality($test);
        $this->assertSame($test, $this->mockTrait->getAddressLocality());
    }

    public function testGetSetAddressRegion()
    {
        $test = 'test';
        $this->mockTrait->setAddressRegion($test);
        $this->assertSame($test, $this->mockTrait->getAddressRegion());
    }

    public function testGetSetPostalCode()
    {
        $test = 'test';
        $this->mockTrait->setPostalCode($test);
        $this->assertSame($test, $this->mockTrait->getPostalCode());
    }

    public function testGetSetStreetAddress()
    {
        $test = 'test';
        $this->mockTrait->setStreetAddress($test);
        $this->assertSame($test, $this->mockTrait->getStreetAddress());
    }
}