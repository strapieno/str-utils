<?php
namespace Strapieno\Utils\Model\Object\Rating;

/**
 * Interface RatingInterface
 *
 * @see https://schema.org/Rating
 */
interface RatingInterface
{
    /**
     * @return int
     */
    public function getBestRating();

    /**
     * @param int $bestRating
     * @return $this
     */
    public function setBestRating($bestRating);

    /**
     * @return int
     */
    public function getRatingValue();

    /**
     * @param int $ratingValue
     * @return $this
     */
    public function setRatingValue($ratingValue);

    /**
     * @return int
     */
    public function getWorstRating();

    /**
     * @param int $worstRating
     * @return $this
     */
    public function setWorstRating($worstRating);
}