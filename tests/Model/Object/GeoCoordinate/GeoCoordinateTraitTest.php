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
    protected $mockTrait;

    public function setUp()
    {
        $this->mockTrait = $this->getMockForTrait('Strapieno\Utils\Model\Object\GeoCoordinate\GeoCoordinateTrait');
    }

    public function testGetSetElevation()
    {
        $input = 'test';
        $this->mockTrait->setElevation($input);
        $this->assertSame($input, $this->mockTrait->getElevation());
    }

    public function testGetSetLatitude()
    {
        $input = 'test';
        $this->mockTrait->setLatitude($input);
        $this->assertSame($input, $this->mockTrait->getLatitude());
    }

    public function testGetSetLongitude()
    {
        $input = 'test';
        $this->mockTrait->setLongitude($input);
        $this->assertSame($input, $this->mockTrait->getLongitude());
    }
}