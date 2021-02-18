<?php

namespace App\Manager\Traits;

use App\Manager\UserManager;

/**
 * Trait UserManagerAwareTrait
 */
trait UserManagerAwareTrait
{
    /**
     * @var UserManager
     */
    protected $userManager;

    /**
     * @required
     * @param UserManager $userManager
     */
    public function setUserManager(UserManager $userManager): void
    {
        $this->userManager = $userManager;
    }
}
