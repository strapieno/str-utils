<?php
namespace Strapieno\Utils\Validator;

use Zend\Validator\AbstractValidator;

class IsArray extends AbstractValidator
{
    const NOT_ARRAY = 'notArray';

    protected $messageTemplates = [
        self::NOT_ARRAY  => 'Value must be an array'
    ];

    /**
     * {@inheritdoc}
     */
    public function isValid($value)
    {
        if (is_array($value)) {
            $this->error(self::NOT_ARRAY);
            return false;
        }
        return true;
    }
}