<?php
namespace Strapieno\UtilsTest\Model\Object\Rating;

use Strapieno\Utils\Model\Object\Rating\RatingAwareInterface;

/**
 * Class RatingAwareTraitTest
 */
class RatingAwareTraitTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var RatingAwareInterface
     */
    protected $mockTrait;

    public function setUp()
    {
        $this->mockTrait = $this->getMockForTrait('Strapieno\Utils\Model\Object\Rating\RatingAwareTrait');
    }

    public function testGetSetGeoCoordinate()
    {
        $instance = $this->getMock('Strapieno\Utils\Model\Object\Rating\RatingInterface');

        $this->mockTrait->setRating($instance);
        $this->assertInstanceOf(
            'Strapieno\Utils\Model\Object\Rating\RatingInterface',
            $this->mockTrait->getRating()
        );
    }
}