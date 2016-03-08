<?php
namespace Strapieno\Utils\Model\Object\AggregateRating;

/**
 * Interface AggregateRatingInterface
 *
 * @see https://schema.org/AggregateRating
 */
interface AggregateRatingInterface
{
    /**
     * @return array
     */
    public function getPartial();

    /**
     * @param array $partial
     * @return $this
     */
    public function setPartial(array $partial =  []);

    /**
     * @return int
     */
    public function getRatingCount();

    /**
     * @param int $ratingCount
     * @return $this
     */
    public function setRatingCount($ratingCount);

    /**
     * @return float
     */
    public function getReviewCount();

    /**
     * @param float $reviewCount
     * @return $this
     */
    public function setReviewCount($reviewCount);
}