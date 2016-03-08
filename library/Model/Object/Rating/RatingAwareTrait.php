<?php
namespace Strapieno\Utils\Model\Object\Rating;

/**
 * Class RatingAwareTrait
 */
trait RatingAwareTrait
{
    /**
     * @var null|RatingInterface
     */
    protected $rating;

    /**
     * @return null|RatingInterface
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * @param RatingInterface $rating
     * @return $this
     */
    public function setRating(RatingInterface $rating)
    {
        $this->rating = $rating;
        return $this;
    }
}