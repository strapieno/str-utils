<?php
namespace Strapieno\Utils\Model\Object\Review;
use Strapieno\Utils\Model\Object\Rating\RatingAwareInterface;

/**
 * Interface RatingInterface
 *
 * @see https://schema.org/Review
 */
interface ReviewInterface extends RatingAwareInterface
{
    /**
     * @return string
     */
    public function getReviewBody();

    /**
     * @param string $reviewBody
     * @return $this
     */
    public function setReviewBody($reviewBody);
}