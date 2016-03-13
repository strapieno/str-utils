<?php
namespace Strapieno\Utils\Model\Object\AggregateRating;

/**
 * Interface AggregateRatingTrait
 */
trait AggregateRatingTrait
{
    /**
     * @var int
     */
    protected $ratingCount;

    /**
     * @var float
     */
    protected $reviewCount;

    /**
     * @var array
     */
    protected $partial;

    /**
     * @return array
     */
    public function getPartial()
    {
        return $this->partial;
    }

    /**
     * @param array $partial
     * @return $this
     */
    public function setPartial($partial =  [])
    {
        $this->partial = $partial;
        return $this;
    }

    /**
     * @return int
     */
    public function getRatingCount()
    {
        return $this->ratingCount;
    }

    /**
     * @param int $ratingCount
     * @return $this
     */
    public function setRatingCount($ratingCount)
    {
        $this->ratingCount = $ratingCount;
        return $this;
    }

    /**
     * @return float
     */
    public function getReviewCount()
    {
        return $this->reviewCount;
    }

    /**
     * @param float $reviewCount
     * @return $this
     */
    public function setReviewCount($reviewCount)
    {
        $this->reviewCount = $reviewCount;
        return $this;
    }
}