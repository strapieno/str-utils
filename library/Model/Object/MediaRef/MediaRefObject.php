<?php
namespace Strapieno\Utils\Model\Object\MediaRef;

/**
 * Class MultimediaRefObject
 */
class MediaRefObject implements MediaRefInterface
{
    /**
     * @var string
     */
    protected $source;

    /**
     * @var string
     */
    protected $type;

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return string
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * @param string $source
     * @return $this
     */
    public function setSource($source)
    {
        $this->source = $source;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRefIdentity()
    {
        $this->source = $source;
    }
}