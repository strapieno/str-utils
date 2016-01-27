<?php
namespace Strapieno\UtilsTest\Model\Object\GeoCoordinate;

use Strapieno\Utils\Model\Object\GeoCoordinate\GeoCoordinateObject;

/**
 * Class GeoCoordinateObjectTest
 */
class GeoCoordinateObjectTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var GeoCoordinateObject
     */
    protected $geoCoordinateObject;

    public function setUp()
    {
        $this->geoCoordinateObject = new GeoCoordinateObject();
    }

    public function testGetSetElevation()
    {
        $this->geoCoordinateObject->setElevation(2);
        $this->assertSame(2, $this->geoCoordinateObject->getElevation());
    }

    public function testGetSetLatitude()
    {
        $this->geoCoordinateObject->setLatitude(2);
        $this->assertSame(2, $this->geoCoordinateObject->getLatitude());
    }

    public function testGetSetLongitude()
    {
        $this->geoCoordinateObject->setLongitude(2);
        $this->assertSame(2, $this->geoCoordinateObject->getLongitude());
    }
}