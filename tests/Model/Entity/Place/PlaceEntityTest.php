<?php
namespace Strapieno\UtilsTest\Model\Entity\Place;

use Strapieno\Utils\Model\Entity\Place\PlaceEntity;

/**
 * Class GeoCoordinateObjectTest
 */
class PlaceEntityTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var GeoCoordinateObject
     */
    protected $entity;

    public function setUp()
    {
        $this->entity = new PlaceEntity();
    }

    public function testClass()
    {
        $this->assertInstanceOf(
            'Strapieno\Utils\Model\Object\Place\PlaceInterface',
            $this->entity
        );
    }
}