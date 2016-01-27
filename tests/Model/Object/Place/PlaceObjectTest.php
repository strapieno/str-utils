<?php
namespace Strapieno\UtilsTest\Model\Object\Place;

use Strapieno\Utils\Model\Object\Place\PlaceObject;
use Strapieno\Utils\Model\Object\PostalAddress\PostalAddressObject;

/**
 * Class PostalAddressObjectTest
 */
class PlaceObjectTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var PlaceObject
     */
    protected $place;

    public function setUp()
    {
        $this->place = new PlaceObject();
    }

    public function testGetSetFaxNumber()
    {
        $test = 'test';
        $this->place->setFaxNumber($test);
        $this->assertSame($test, $this->place->getFaxNumber());
    }

    public function testGetSetName()
    {
        $test = 'test';
        $this->place->setName($test);
        $this->assertSame($test, $this->place->getName());
    }


    public function testGetSetTelephone()
    {
        $test = 'test';
        $this->place->setTelephone($test);
        $this->assertSame($test, $this->place->getTelephone());
    }

    public function testGetSetPostalAddress()
    {
        $instance = $this->getMock('Strapieno\Utils\Model\Object\PostalAddress\PostalAddressInterface');

        $this->place->setPostalAddress($instance);
        $this->assertSame($instance, $this->place->getPostalAddress());
    }

    public function testGetSetGeocoordinate()
    {
        $instance = $this->getMock('Strapieno\Utils\Model\Object\GeoCoordinate\GeoCoordinateInterface');

        $this->place->setGeoCoordinate($instance);
        $this->assertSame($instance, $this->place->getGeoCoordinate());
    }
}