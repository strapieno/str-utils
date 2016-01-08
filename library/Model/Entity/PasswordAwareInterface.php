<?php

namespace Strapieno\Utils\Model\Entity;


interface PasswordAwareInterface
{
    const PASSWORD_BCRYPT_COST = 10;

    /**
     * @param $password
     * @return $this
     */
    public function setPassword($password);

    /**
     * @return string
     */
    public function getPassword();

    /**
     * @param $passwordCrypt
     * @return $this
     */
    public function setPasswordCrypt($passwordCrypt);

    /**
     * @return string
     */
    public function getPasswordCrypt();
}