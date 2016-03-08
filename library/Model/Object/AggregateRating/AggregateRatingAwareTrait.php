<?php
namespace Strapieno\Utils\Model\Object\AggregateRating;

/**
 * Class AggregateRatingAwareTrait
 */
trait AggregateRatingAwareTrait
{
    /**
     * @var null|AggregateRatingInterface
     */
    protected $aggregateRating;

    /**
     * @return null|AggregateRatingInterface
     */
    public function getAggregateRating()
    {
        return $this->aggregateRating;
    }

    /**
     * @param null|AggregateRatingInterface $aggregateRating
     * @return $this
     */
    public function setAggregateRating(AggregateRatingInterface $aggregateRating)
    {
        $this->aggregateRating = $aggregateRating;
        return $this;
    }
}