<?php
namespace Strapieno\Utils\Validator;

use Zend\Validator\AbstractValidator;
use Zend\Validator\ValidatorInterface;

/**
 * Class Password
 */
class Password extends AbstractValidator implements ValidatorInterface
{
    const NO_UPPER_CASE = 'noUpperCase';
    const NOT_DIGIT = 'noDigit';
    const NOT_SPECIAL = 'noSpecial';

    protected $specialCharacter = '[-_{}|<>?!~]';

    protected $messageTemplates = [
        self::NO_UPPER_CASE => "The input must contain at least one uppercase character",
        self::NOT_DIGIT => "The input must contain at least one digit",
        self::NOT_SPECIAL => "The input must contain at least one special character %specialCharacter%"
    ];

    /**
     * @var array
     */
    protected $messageVariables = [
        'specialCharacter' => 'specialCharacter'
    ];

    public function isValid($value)
    {
        if (preg_match('/[A-Z]/',$value) == 0) {
            $this->error(self::NO_UPPER_CASE);
            return false;
        }

        if (preg_match('/\d/',$value) === 0) {
            $this->error(self::NOT_DIGIT);
            return false;
        }

        if (preg_match($this->getSpecialCharacter(), $value) === 0) {
            $this->error(self::NOT_SPECIAL);
            return false;
        }

        return true;
    }

    /**
     * @return string
     */
    public function getSpecialCharacter()
    {
        return $this->specialCharacter;
    }

    /**
     * @param string $specialCharacter
     * @return $this
     */
    public function setSpecialCharacter($specialCharacter)
    {
        $this->specialCharacter = $specialCharacter;
        return $this;
    }
}