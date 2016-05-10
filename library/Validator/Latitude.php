<?php
namespace Strapieno\Utils\Validator;

use Zend\Validator\AbstractValidator;

/**
 * Class Latitude
 */
class Latitude extends AbstractValidator
{
    const INVALID_LATIDUDE = 'invalidLatitude';

    private $regex = "/^-?([1-8]?[1-9]|[1-9]0)\.{1}\d{1,6}$/";

    protected $messageTemplates = [
        self::INVALID_LATIDUDE  => 'Latitude format not valid'
    ];

    /**
     * {@inheritdoc}
     */
    public function isValid($value)
    {
        if (!preg_match($this->regex, $value)) {
            $this->error(self::INVALID_LATIDUDE);
            return false;
        }

        return true;
    }
}