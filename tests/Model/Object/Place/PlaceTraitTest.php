<?php
namespace Strapieno\UtilsTest\Model\Object\Place;

use Strapieno\Utils\Model\Object\Place\PlaceInterface;
use Strapieno\Utils\Model\Object\Place\PlaceObject;
use Strapieno\Utils\Model\Object\PostalAddress\PostalAddressObject;

/**
 * Class PostalAddressObjectTest
 */
class PlaceTraitTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var PlaceInterface
     */
    protected $mockTrait;

    public function setUp()
    {
        $this->mockTrait = $this->getMockForTrait('Strapieno\Utils\Model\Object\Place\PlaceTrait');
    }

    public function testGetSetFaxNumber()
    {
        $input = 'test';
        $this->mockTrait->setFaxNumber($input);
        $this->assertSame($input, $this->mockTrait->getFaxNumber());
    }

    public function testGetSetName()
    {
        $input = 'test';
        $this->mockTrait->setName($input);
        $this->assertSame($input, $this->mockTrait->getName());
    }


    public function testGetSetTelephone()
    {
        $input = 'test';
        $this->mockTrait->setTelephone($input);
        $this->assertSame($input, $this->mockTrait->getTelephone());
    }

    public function testGetSetPostalAddress()
    {
        $input = $this->getMock('Strapieno\Utils\Model\Object\PostalAddress\PostalAddressInterface');

        $this->mockTrait->setPostalAddress($input);
        $this->assertSame($input, $this->mockTrait->getPostalAddress());
    }

    public function testGetSetGeocoordinate()
    {
        $input = $this->getMock('Strapieno\Utils\Model\Object\GeoCoordinate\GeoCoordinateInterface');

        $this->mockTrait->setGeoCoordinate($input);
        $this->assertSame($input, $this->mockTrait->getGeoCoordinate());
    }
}