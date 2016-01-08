<?php

namespace Strapieno\Utils\Model\Entity;

use Matryoshka\Model\Criteria\ActiveRecord\AbstractCriteria;
use Matryoshka\Model\ModelAwareTrait;

/**
 * Class AbstractEntity
 */
abstract class AbstractEntity implements EntityInterface
{
    use ModelAwareTrait;

    /**
     * @var mixed
     */
    protected $id;

    /**
     * @var AbstractCriteria
     */
    protected $activeRecordCriteriaPrototype;

    /**
     * Set Id
     *
     * @param mixed $id
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Get Id
     *
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }


    /**
     * Set Active Record Criteria Prototype
     *
     * @param AbstractCriteria $criteria
     * @return $this
     */
    public function setActiveRecordCriteriaPrototype(AbstractCriteria $criteria)
    {
        $this->activeRecordCriteriaPrototype = clone $criteria;
        return $this;
    }

    /**
     * Save
     *
     * @return null|int
     * @throws Exception\RuntimeException
     */
    public function save()
    {
        if (!$this->activeRecordCriteriaPrototype) {
            throw new Exception\RuntimeException(sprintf(
                'An Active Record Criteria Prototype must be set prior to calling ',
                __FUNCTION__
            ));
        }

        if (!$this->getModel()) {
            throw new Exception\RuntimeException(sprintf('A Model must be set prior to calling %s', __FUNCTION__));
        }

        $criteria = $this->activeRecordCriteriaPrototype;
        $criteria->setId($this->getId());
        $result = $this->getModel()->save($criteria, $this);
        return $result;
    }

    /**
     * Delete
     *
     * @return null|int
     * @throws Exception\RuntimeException
     */
    public function delete()
    {
        if (!$this->getId()) {
            throw new Exception\RuntimeException(sprintf('An ID must be set prior to calling %s', __FUNCTION__));
        }

        if (!$this->activeRecordCriteriaPrototype) {
            throw new Exception\RuntimeException(sprintf(
                'An Active Record Criteria Prototype must be set prior to calling %s',
                __FUNCTION__
            ));
        }

        if (!$this->getModel()) {
            throw new Exception\RuntimeException(sprintf('A Model must be set prior to calling %s', __FUNCTION__));
        }

        $criteria = $this->activeRecordCriteriaPrototype;
        $criteria->setId($this->getId());
        $result = $this->getModel()->delete($criteria);
        return $result;
    }
}