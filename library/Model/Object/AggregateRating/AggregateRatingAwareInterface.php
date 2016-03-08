<?php
namespace Strapieno\Utils\Model\Object\AggregateRating;

/**
 * Interface AggregateRatingAwareInterface
 */
interface AggregateRatingAwareInterface
{
    /**
     * @return null|AggregateRatingInterface
     */
    public function getAggregateRating();

    /**
     * @param AggregateRatingInterface $aggregateRating
     * @return $this
     */
    public function setAggregateRating(AggregateRatingInterface $aggregateRating);

}