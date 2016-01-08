<?php

namespace Strapieno\Utils\Model\Entity;

use DateTime;

/**
 * Trait DateHistoryAwareTrait
 */
trait DateHistoryAwareTrait
{
    /**
     * @var DateTime
     */
    protected $dateCreated;

    /**
     * @var DateTime
     */
    protected $dateModified;

    /**
     * @param DateTime $dateCreated
     * @return $this
     */
    public function setDateCreated(DateTime $dateCreated = null)
    {
        $this->dateCreated = $dateCreated;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getDateCreated()
    {
        return $this->dateCreated;
    }

    /**
     * @param DateTime $dateModified
     * @return $this
     */
    public function setDateModified(DateTime $dateModified = null)
    {
        $this->dateModified = $dateModified;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDateModified()
    {
        return $this->dateModified;
    }
}