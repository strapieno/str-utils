<?php
namespace Strapieno\Utils\Model\Object\Media;

use Strapieno\Utils\DataStructure\RefIdentityInteface;

/**
 * Interface MediaInterface
 *
 * @see https://schema.org/MediaObject
 */
interface MediaInterface
{
    /**
     * @return string
     */
    public function getEmbedUrl();

    /**
     * @param string $embedUrl
     * @return $this
     */
    public function setEmbedUrl($embedUrl);

    /**
     * @return string
     */
    public function getEncodingFormat();

    /**
     * @param string $encodingFormat
     * @return $this
     */
    public function setEncodingFormat($encodingFormat);
}