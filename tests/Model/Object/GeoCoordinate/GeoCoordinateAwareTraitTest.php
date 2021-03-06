<?php
namespace Strapieno\UtilsTest\Model\Object\GeoCoordinate;

use Strapieno\Utils\Model\Object\GeoCoordinate\GeoCoordinateAwareInterface;

/**
 * Class GeoCoordinateObjectTest
 */
class GeoCoordinateAwareTraitTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var GeoCoordinateAwareInterface
     */
    protected $mockTrait;

    public function setUp()
    {
        $this->mockTrait = $this->getMockForTrait('Strapieno\Utils\Model\Object\GeoCoordinate\GeoCoordinateAwareTrait');
    }

    public function testGetSetGeoCoordinate()
    {
        $instance = $this->getMock('Strapieno\Utils\Model\Object\GeoCoordinate\GeoCoordinateInterface');

        $this->mockTrait->setGeoCoordinate($instance);
        $this->assertInstanceOf(
            'Strapieno\Utils\Model\Object\GeoCoordinate\GeoCoordinateInterface',
            $this->mockTrait->getGeoCoordinate()
        );
    }
}