<?php
namespace Strapieno\UtilsTest\Model\Object\Review;

use Strapieno\Utils\Model\Object\GeoCoordinate\GeoCoordinateObject;
use Strapieno\Utils\Model\Object\Review\ReviewInterface;

/**
 * Class ReviewTraitTest
 */
class ReviewTraitTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var ReviewInterface
     */
    protected $mockTrait;

    public function setUp()
    {
        $this->mockTrait = $this->getMockForTrait('Strapieno\Utils\Model\Object\Review\ReviewTrait');
    }

    public function testGetSetRating()
    {
        $input = $this->getMock('Strapieno\Utils\Model\Object\Rating\RatingInterface');
        $this->mockTrait->setRating($input);
        $this->assertSame($input, $this->mockTrait->getRating());
    }

    public function testGetSetReviewBody()
    {
        $input = 'test';
        $this->mockTrait->setReviewBody($input);
        $this->assertSame($input, $this->mockTrait->getReviewBody());
    }
}