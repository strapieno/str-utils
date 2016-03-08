<?php
namespace Strapieno\Utils\Model\Object\Rating;

/**
 * Interface RatingAwareInterface
 */
interface RatingAwareInterface
{
    /**
     * @return null|RatingInterface
     */
    public function getRating();

    /**
     * @param RatingInterface $rating
     * @return $this
     */
    public function setRating(RatingInterface $rating);
}