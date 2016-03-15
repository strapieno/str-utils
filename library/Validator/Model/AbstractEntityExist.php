<?php
namespace Strapieno\Utils\Validator\Model;

use Matryoshka\Model\ModelInterface;
use Matryoshka\Model\Wrapper\Mongo\Criteria\ActiveRecord\ActiveRecordCriteria;
use Strapieno\Utils\Exception\InvalidArgumentException;
use Zend\Validator\ValidatorInterface;

/**
 * Note that implements class must be set error messages:
 *
 *     protected $messageTemplates = [
 *         self::ID_NOT_EXISTS => 'The id does not exist',
 *         self::NOT_MONGO_ID  => 'Identifier format not valid'
 *     ];
 *
 * Class AbstractEntityExist
 */
abstract class AbstractEntityExist extends MongoId implements ValidatorInterface
{
    const ID_NOT_EXISTS = 'idNotExists';

    /**
     * @var
     */
    protected $entity;

    /**
     * @return string
     */
    abstract protected function getModelServiceMethod();

    /**
     * {@inheritdoc}
     */
    public function isValid($value)
    {
        if (!parent::isValid($value)) {
            return false;
        }

        if (!method_exists($this, $this->getModelServiceMethod())) {
            throw new InvalidArgumentException(
                sprintf('%s must be implement %s', get_class($this), $this->getModelServiceMethod())
            );
        }

        $model = $this->{$this->getModelServiceMethod()};

        if (!($model instanceof ModelInterface)) {
            throw new InvalidArgumentException(
                sprintf(
                    'model must be implement %s given %s',
                    'Matryoshka\Model\ModelInterface',
                    is_object($model) ? get_class($this) : gettype($model)
                )
            );
        }

        $entity = $model->find(
            (new ActiveRecordCriteria())->setId($value)
        )->current();

        $this->entity = $entity;

        if (!$entity) {
            $this->error(self::ID_NOT_EXISTS);
            return false;
        }

        return true;
    }
}