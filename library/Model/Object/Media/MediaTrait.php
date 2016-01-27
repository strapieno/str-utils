<?php
namespace Strapieno\Utils\Model\Object\Media;

/**
 * Class MediaTrait
 */
trait MediaTrait
{
    /**
     * @var string
     */
    protected $embedUrl;

    /**
     * @var string
     */
    protected $encodingFormat;

    /**
     * @return string
     */
    public function getEmbedUrl()
    {
        return $this->embedUrl;
    }

    /**
     * @param string $embedUrl
     * @return $this
     */
    public function setEmbedUrl($embedUrl)
    {
        $this->embedUrl = $embedUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getEncodingFormat()
    {
        return $this->encodingFormat;
    }

    /**
     * @param string $encodingFormat
     * @return $this
     */
    public function setEncodingFormat($encodingFormat)
    {
        $this->encodingFormat = $encodingFormat;
        return $this;
    }
}