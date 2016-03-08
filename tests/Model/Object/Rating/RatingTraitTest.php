<?php
namespace Strapieno\UtilsTest\Model\Object\Rating;

use Strapieno\Utils\Model\Object\GeoCoordinate\GeoCoordinateObject;
use Strapieno\Utils\Model\Object\Rating\RatingInterface;

/**
 * Class RatingTraitTest
 */
class RatingTraitTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var RatingInterface
     */
    protected $mockTrait;

    public function setUp()
    {
        $this->mockTrait = $this->getMockForTrait('Strapieno\Utils\Model\Object\Rating\RatingTrait');
    }

    public function testGetSetBestRating()
    {
        $input = 'test';
        $this->mockTrait->setBestRating($input);
        $this->assertSame($input, $this->mockTrait->getBestRating());
    }

    public function testGetSetWorstRating()
    {
        $input = 'test';
        $this->mockTrait->setWorstRating($input);
        $this->assertSame($input, $this->mockTrait->getWorstRating());
    }

    public function testGetSetRatingValue()
    {
        $input = 'test';
        $this->mockTrait->setRatingValue($input);
        $this->assertSame($input, $this->mockTrait->getRatingValue());
    }
}