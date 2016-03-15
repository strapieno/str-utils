<?php
namespace Strapieno\Utils\Validator\Model;

use MongoId as MongoIdExt;
use Zend\Validator\AbstractValidator;

/**
 * Class MongoId
 */
class MongoId extends AbstractValidator
{
    const NOT_MONGO_ID = 'identifierFormatNotValid';

    private $regex = '/^[0-9a-z]{24}$/';

    protected $messageTemplates = [
        self::NOT_MONGO_ID  => 'Identifier format not valid'
    ];

    /**
     * {@inheritdoc}
     */
    public function isValid($value)
    {
        if (method_exists('MongoIdExt', 'isValid')) {
            if (!MongoIdExt::isValid($value)) {
                $this->error(self::NOT_MONGO_ID);
                return false;
            }
        } elseif (!preg_match($this->regex, $value)) {
            $this->error(self::NOT_MONGO_ID);
            return false;
        }

        return true;
    }
}
