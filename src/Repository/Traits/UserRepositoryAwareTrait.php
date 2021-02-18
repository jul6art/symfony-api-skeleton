<?php

namespace App\Repository\Traits;

use App\Repository\UserRepository;

/**
 * Trait UserRepositoryAwareTrait
 */
trait UserRepositoryAwareTrait
{
    /**
     * @var UserRepository
     */
    protected $userRepository;

    /**
     * @required
     * @param UserRepository $userRepository
     */
    public function setUserRepository(UserRepository $userRepository): void
    {
        $this->userRepository = $userRepository;
    }
}
