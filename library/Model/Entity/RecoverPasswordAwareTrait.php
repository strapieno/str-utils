<?php

namespace Strapieno\Utils\Model\Entity;

use Zend\Math\Rand;

/**
 * Class PercoverPasswordAwareTrait
 */
trait RercoverPasswordAwareTrait
{
    /**
     * @var string
     */
    protected $recoverPasswordToken;

    /**
     * @return string
     */
    public function getRecoverPasswordToken()
    {
        return $this->recoverPasswordToken;
    }

    /**
     * @return $this
     */
    public function generateRecoverPasswordToken()
    {
        // TODO config the cost with add getter and setter (setTokenLength - getTokenLength)
        $this->recoverPasswordToken = Rand::getString(
            RercoverPasswordAwareInterface::RECOVER_PASSWORD_TOKEN_LENGTH
        );
        return $this;
    }

    /**
     * @param string $recoverPasswordToken
     * @return $this
     */
    public function setRecoverPasswordToken($recoverPasswordToken)
    {
        $this->recoverPasswordToken = $recoverPasswordToken;
        return $this;
    }
}