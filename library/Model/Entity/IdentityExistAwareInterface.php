<?php

namespace Strapieno\Utils\Model\Entity;

/**
 * Interface IdentityExistAwareInterface
 */
interface IdentityExistAwareInterface
{
    const IDENTITY_EXIST_TOKEN_LENGTH = 32;

    /**
     * @return string
     */
    public function getIdentityExistToken();

    /**
     * @return $this
     */
    public function generateIdentityExistToken();

    /**
     * @return $this
     */
    public function setIdentityExistToken($identityExistToken);
}