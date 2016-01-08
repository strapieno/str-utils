<?php

namespace Strapieno\Utils\Model\Entity;

use Zend\Crypt\Password\Bcrypt;

trait PasswordAwareTrait
{
    /**
     * @var string
     */
    protected $password;

    /**
     * @var string
     */
    protected $passwordCrypt;

    /**
     * @param $password
     * @return $this
     */
    public function setPassword($password)
    {
        if (!empty($password)) {
            // TODO config the cost with add getter and setter (setPasswordCryptCost - getPasswordCryptCost)
            $bCrypt = (new Bcrypt)->setCost(PasswordAwareInterface::PASSWORD_BCRYPT_COST);
            $this->setPasswordCrypt($bCrypt->create($password));
            $this->password = $password;
        }
        return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param $passwordCrypt
     * @return $this
     */
    public function setPasswordCrypt($passwordCrypt)
    {
        $this->passwordCrypt = $passwordCrypt;
        return $this;
    }

    /**
     * @return string
     */
    public function getPasswordCrypt()
    {
        return $this->passwordCrypt;
    }
}