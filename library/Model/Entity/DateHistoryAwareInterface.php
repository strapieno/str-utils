<?php

namespace Strapieno\Utils\Model\Entity;

use DateTime;

/**
 * Interface DateHistoryAwareInterface
 */
interface DateHistoryAwareInterface
{
    /**
     * @param DateTime $dateCreated
     * @return $this
     */
    public function setDateCreated(DateTime $dateCreated = null);

    /**
     * @return DateTime
     */
    public function getDateCreated();

    /**
     * @param DateTime $dateModified
     * @return mixed
     */
    public function setDateModified(DateTime $dateModified = null);

    /**
     * @return DateTime
     */
    public function getDateModified();
}