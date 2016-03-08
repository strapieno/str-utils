<?php
namespace Strapieno\Utils\Model\Object\Review;
use Strapieno\Utils\Model\Object\Rating\RatingAwareTrait;

/**
 * Class ReviewTrait
 */
trait ReviewTrait
{
    use RatingAwareTrait;

    /**
     * @var string
     */
    protected $reviewBody;

    /**
     * @return string
     */
    public function getReviewBody()
    {
        return $this->reviewBody;
    }

    /**
     * @param string $reviewBody
     * @return $this
     */
    public function setReviewBody($reviewBody)
    {
        $this->reviewBody = $reviewBody;
        return $this;
    }
}