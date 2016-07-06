<?php
namespace Strapieno\Utils\Validator;

use Zend\Validator\AbstractValidator;

/**
 * Class Longitude
 */
class Longitude extends AbstractValidator
{
    const INVALID_LONGITUDE  = 'invalidLongitude';

    private $regex = "/^-?([1]?[1-7][1-9]|[1]?[1-8][0]|[1-9]?[0-9])\.{1}\d{1,14}$/";

    protected $messageTemplates = [
        self::INVALID_LONGITUDE  => 'Longitude format not valid'
    ];

    /**
     * {@inheritdoc}
     */
    public function isValid($value)
    {
        if (!preg_match($this->regex, $value)) {
            $this->error(self::INVALID_LONGITUDE);
            return false;
        }

        return true;
    }
}