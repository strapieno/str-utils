<?php
namespace Strapieno\Utils\InputFilter;

use Strapieno\Utils\Validator\IsArray;
use Zend\InputFilter\ArrayInput as BaseArrayInput;
use Zend\InputFilter\Exception;
use Zend\InputFilter\Input;
use Zend\Stdlib\ArrayUtils;

/**
 * Class ArrayInput
 */
class ArrayInput extends BaseArrayInput
{

    protected $messages;

    /**
     * @param  array $value
     * @throws Exception\InvalidArgumentException
     * @return Input
     */
    public function setValue($value)
    {
        $this->value = $value;
        $this->hasValue = true;

        return $this;
    }

    /**
     * @param  mixed $context Extra "context" to provide the validator
     * @return bool
     */
    public function isValid($context = null)
    {
        $validateArray = new IsArray();
        if (!$validateArray->isValid($this->getRawValue())) {
            $this->setMessages($validateArray->getMessages());
            return false;
        }


        $validator = $this->getValidatorChain();
        $values = $this->getValue();
        $result = true;
        $messages = [];

        foreach ($values as $key => $value) {

            $result = $validator->isValid($value, $context);

            if (!$result) {
                $messages[$key] = $validator->getMessages();
            }
        }

        if (!empty($messages)) {
            $this->messages = $messages;
        }

        return $result;
    }

    /**
     * @param $messages
     */
    protected function setMessages($messages)
    {
        $this->messages = $messages;
    }

    /**
     * @return array
     */
    public function getMessages()
    {
        if ($this->messages) {
            return $this->messages;
        }

        return parent::getMessages();
    }
}