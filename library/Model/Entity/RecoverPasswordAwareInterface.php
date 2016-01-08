<?php

namespace Strapieno\Utils\Model\Entity;

/**
 * Interface RercoverPasswordAwareInterface
 */
interface RercoverPasswordAwareInterface
{
    const RECOVER_PASSWORD_TOKEN_LENGTH = 32;

    /**
     * @return string
     */
    public function getRecoverPasswordToken();

    /**
     * @return $this
     */
    public function generateRecoverPasswordToken();

    /**
     * @param string $recoverPasswordToken
     * @return $this
     */
    public function setRecoverPasswordToken($recoverPasswordToken);
}