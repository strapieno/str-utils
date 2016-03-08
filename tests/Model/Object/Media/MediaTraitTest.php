<?php
namespace Strapieno\UtilsTest\Model\Object\Media;

use Strapieno\Utils\Model\Object\Media\MediaInterface;
use Strapieno\Utils\Model\Object\Media\MediaObject;
use Strapieno\Utils\Model\Object\PostalAddress\PostalAddressObject;

/**
 * Class MediaObjectTest
 */
class MediaTraitTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var MediaInterface
     */
    protected $mockTrait;

    public function setUp()
    {
        $this->mockTrait = $this->getMockForTrait('Strapieno\Utils\Model\Object\Media\MediaTrait');
    }

    public function testGetSetEmbedUrl()
    {
        $input = 'test';
        $this->mockTrait->setEmbedUrl($input);
        $this->assertSame($input, $this->mockTrait->getEmbedUrl());
    }

    public function testGetSetAddressLocality()
    {
        $input = 'test';
        $this->mockTrait->setEncodingFormat($input);
        $this->assertSame($input, $this->mockTrait->getEncodingFormat());
    }
}