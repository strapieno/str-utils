<?php
namespace Strapieno\Utils\Model\Object\Girl;

/**
 * Class GirlInterface
 */
interface GirlInterface
{
    /**
     * @return string
     */
    public function getGiveName();

    /**
     * @param string $giveName
     * @return $this
     */
    public function setGiveName($giveName);

    /**
     * @return string
     */
    public function getNationality();

    /**
     * @param string $nationality
     * @return $this
     */
    public function setNationality($nationality);


    /**
     * @return int
     */
    public function getHeight();

    /**
     * @param int $height
     * @return $this
     */
    public function setHeight($height);

    /**
     * @return int
     */
    public function getHips();

    /**
     * @param int $hips
     * @return $this
     */
    public function setHips($hips);

    /**
     * @return int
     */
    public function getWaist();

    /**
     * @param int $waist
     * @return $this
     */
    public function setWaist($waist);

    /**
     * @return int
     */
    public function getBreast();

    /**
     * @param int $breast
     * @return $this
     */
    public function setBreast($breast);
}