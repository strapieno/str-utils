<?php

namespace Strapieno\Utils\Model\Entity;

use Zend\Math\Rand;

/**
 * Class IdentityExistAwareTrait
 */
trait IdentityExistAwareTrait
{
    /**
     * @var string
     */
    protected $identityExistToken;

    /**
     * @return string
     */
    public function getIdentityExistToken()
    {
        return $this->identityExistToken;
    }

    /**
     * @return $this
     */
    public function generateIdentityExistToken()
    {
        // TODO config the cost with add getter and setter (setTokenLength - getTokenLength)
        $this->identityExistToken = Rand::getString(
            IdentityExistAwareInterface::IDENTITY_EXIST_TOKEN_LENGTH
        );
        return $this;
    }

    /**
     * @param $identityExistToken
     * @return $this
     */
    public function setIdentityExistToken($identityExistToken)
    {
        $this->identityExistToken = $identityExistToken;
        return $this;
    }
}