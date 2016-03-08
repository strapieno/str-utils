<?php
namespace Strapieno\UtilsTest\Model\Object\GeoCoordinate;

use Strapieno\Utils\Model\Object\GeoCoordinate\GeoCoordinateObject;

/**
 * Class GeoCoordinateObjectTest
 */
class AggregateRatingTraitTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var GeoCoordinateObject
     */
    protected $mockTrait;

    public function setUp()
    {
        $this->mockTrait = $this->getMockForTrait('Strapieno\Utils\Model\Object\AggregateRating\AggregateRatingTrait');
    }

    public function testGetSetPartial()
    {
        $input = ['test'];
        $this->mockTrait->setPartial($input);
        $this->assertSame($input, $this->mockTrait->getPartial());
    }

    public function testGetSetRatingCoun()
    {
        $input = 'test';
        $this->mockTrait->setRatingCount($input);
        $this->assertSame($input, $this->mockTrait->getRatingCount());
    }

    public function testGetSetReviewCount()
    {
        $input = 'test';
        $this->mockTrait->setReviewCount($input);
        $this->assertSame($input, $this->mockTrait->getReviewCount());
    }
}