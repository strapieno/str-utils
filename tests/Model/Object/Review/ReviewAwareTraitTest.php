<?php
namespace Strapieno\UtilsTest\Model\Object\Review;

use Strapieno\Utils\Model\Object\Review\ReviewAwareInterface;

/**
 * Class ReviewAwareTraitTest
 */
class ReviewAwareTraitTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var ReviewAwareInterface
     */
    protected $mockTrait;

    public function setUp()
    {
        $this->mockTrait = $this->getMockForTrait('Strapieno\Utils\Model\Object\Review\ReviewAwareTrait');
    }

    public function testGetSetGeoCoordinate()
    {
        $instance = $this->getMock('Strapieno\Utils\Model\Object\Review\ReviewInterface');

        $this->mockTrait->setReview($instance);
        $this->assertInstanceOf(
            'Strapieno\Utils\Model\Object\Review\ReviewInterface',
            $this->mockTrait->getReview()
        );
    }
}