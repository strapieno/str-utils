<?php
namespace Strapieno\UtilsTest\Model\Object\Media;

use Strapieno\Utils\Model\Object\Media\MediaObject;
use Strapieno\Utils\Model\Object\PostalAddress\PostalAddressObject;

/**
 * Class MediaObjectTest
 */
class MediaObjectTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var MediaObject
     */
    protected $media;

    public function setUp()
    {
        $this->media = new MediaObject();
    }

    public function testGetSetEmbedUrl()
    {
        $test = 'test';
        $this->media->setEmbedUrl($test);
        $this->assertSame($test, $this->media->getEmbedUrl());
    }

    public function testGetSetAddressLocality()
    {
        $test = 'test';
        $this->media->setEncodingFormat($test);
        $this->assertSame($test, $this->media->getEncodingFormat());
    }
}