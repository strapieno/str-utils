<?php
namespace Strapieno\UtilsTest\Model\Object\GeoCoordinate;

use Strapieno\Utils\Model\Object\PostalAddress\PostalAddressAwareInterface;

/**
 * Class PostalAddressAwareTraitTest
 */
class PostalAddressAwareTraitTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var PostalAddressAwareInterface
     */
    protected $mockTrait;

    public function setUp()
    {
        $this->mockTrait = $this->getMockForTrait('Strapieno\Utils\Model\Object\PostalAddress\PostalAddressAwareTrait');
    }

    public function testGetSetGeoCoordinate()
    {
        $instance = $this->getMock('Strapieno\Utils\Model\Object\PostalAddress\PostalAddressInterface');

        $this->mockTrait->setPostalAddress($instance);
        $this->assertInstanceOf(
            'Strapieno\Utils\Model\Object\PostalAddress\PostalAddressInterface',
            $this->mockTrait->getPostalAddress()
        );
    }
}