<?php

use Symfony\Component\Security\Core\Security;

class UserService
{
    private $security;

    public function __construct(Security $security)
    {
        $this->security = $security;
    }

    public function loadSecurityUser()
    {
        return $this->security->getUser();
    }
}