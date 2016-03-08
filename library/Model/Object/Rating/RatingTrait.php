<?php
namespace Strapieno\Utils\Model\Object\Rating;

/**
 * Interface AggregateRatingTrait
 *
 */
trait RatingTrait
{
    /**
     * @var int
     */
    protected $bestRating;

    /**
     * @var int
     */
    protected $ratingValue;

    /**
     * @var int
     */
    protected $worstRating;

    /**
     * @return int
     */
    public function getBestRating()
    {
        return $this->bestRating;
    }

    /**
     * @param int $bestRating
     * @return $this
     */
    public function setBestRating($bestRating)
    {
        $this->bestRating = $bestRating;
        return $this;
    }

    /**
     * @return int
     */
    public function getRatingValue()
    {
        return $this->ratingValue;
    }

    /**
     * @param int $ratingValue
     * @return $this
     */
    public function setRatingValue($ratingValue)
    {
        $this->ratingValue = $ratingValue;
        return $this;
    }

    /**
     * @return int
     */
    public function getWorstRating()
    {
        return $this->worstRating;
    }

    /**
     * @param int $worstRating
     * @return $this
     */
    public function setWorstRating($worstRating)
    {
        $this->worstRating = $worstRating;
        return $this;
    }
}