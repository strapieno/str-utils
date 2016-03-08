<?php
namespace Strapieno\Utils\Model\Object\Review;

use Strapieno\Utils\Model\Object\Rating\RatingAwareInterface;

/**
 * Interface ReviewAwareInterface
 */
interface ReviewAwareInterface extends RatingAwareInterface
{
    /**
     * @return null|ReviewInterface
     */
    public function getReview();

    /**
     * @param ReviewInterface $reviewBody
     * @return $this
     */
    public function setReview(ReviewInterface $reviewBody);
}