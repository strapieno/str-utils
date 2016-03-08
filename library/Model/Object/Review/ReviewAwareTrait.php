<?php
namespace Strapieno\Utils\Model\Object\Review;

/**
 * Class ReviewAwareTrait
 */
trait ReviewAwareTrait
{
    /**
     * @var null|ReviewInterface
     */
    protected $review;

    /**
     * @return null|ReviewInterface
     */
    public function getReview()
    {
        return $this->review;
    }

    /**
     * @param ReviewInterface $review
     * @return $this
     */
    public function setReview(ReviewInterface $review)
    {
        $this->review = $review;
        return $this;
    }
}