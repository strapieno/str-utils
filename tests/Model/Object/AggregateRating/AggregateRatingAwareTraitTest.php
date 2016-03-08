<?php
namespace Strapieno\UtilsTest\Model\Object\GeoCoordinate;

/**
 * Class GeoCoordinateObjectTest
 */
class AggregateRatingAwareTraitTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var GeoCoordinateObject
     */
    protected $mockTrait;

    public function setUp()
    {
        $this->mockTrait = $this->getMockForTrait('Strapieno\Utils\Model\Object\AggregateRating\AggregateRatingAwareTrait');
    }

    public function testGetSetGeoCoordinate()
    {
        $instance = $this->getMock('Strapieno\Utils\Model\Object\AggregateRating\AggregateRatingInterface');

        $this->mockTrait->setAggregateRating($instance);
        $this->assertInstanceOf(
            'Strapieno\Utils\Model\Object\AggregateRating\AggregateRatingInterface',
            $this->mockTrait->getAggregateRating()
        );
    }
}