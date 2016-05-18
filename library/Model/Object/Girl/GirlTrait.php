<?php
namespace Strapieno\Utils\Model\Object\Girl;

/**
 * Class GirlTrait
 */
trait GirlTrait
{
    /**
     * @var string
     */
    protected $giveName;

    /**
     * Country code ISO alpha-3
     *
     * @var string
     */
    protected $nationality;

    /**
     * @var int
     */
    protected $height;

    /**
     * @var int
     */
    protected $breast;

    /**
     * @var int
     */
    protected $waist;

    /**
     * @var int
     */
    protected $hips;

    /**
     * @return string
     */
    public function getGiveName()
    {
        return $this->giveName;
    }

    /**
     * @param string $giveName
     * @return $this
     */
    public function setGiveName($giveName)
    {
        $this->giveName = $giveName;
        return $this;
    }

    /**
     * @return string
     */
    public function getNationality()
    {
        return $this->nationality;
    }

    /**
     * @param string $nationality
     * @return $this
     */
    public function setNationality($nationality)
    {
        $this->nationality = $nationality;
        return $this;
    }


    /**
     * @return int
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param int $height
     * @return $this
     */
    public function setHeight($height)
    {
        $this->height = $height;
        return $this;
    }

    /**
     * @return int
     */
    public function getHips()
    {
        return $this->hips;
    }

    /**
     * @param int $hips
     * @return $this
     */
    public function setHips($hips)
    {
        $this->hips = $hips;
        return $this;
    }

    /**
     * @return int
     */
    public function getWaist()
    {
        return $this->waist;
    }

    /**
     * @param int $waist
     * @return $this
     */
    public function setWaist($waist)
    {
        $this->waist = $waist;
        return $this;
    }

    /**
     * @return int
     */
    public function getBreast()
    {
        return $this->breast;
    }

    /**
     * @param int $breast
     * @return $this
     */
    public function setBreast($breast)
    {
        $this->breast = $breast;
        return $this;
    }
}