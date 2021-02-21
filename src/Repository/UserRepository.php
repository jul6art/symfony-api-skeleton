<?php

namespace App\Repository;

use App\Entity\User;
use Doctrine\Persistence\ManagerRegistry;
use Jul6Art\AuthBundle\Repository\UserRepository as BaseUserRepository;

/**
 * Class UserRepository
 */
class UserRepository extends BaseUserRepository
{
    /**
     * UserRepository constructor.
     * @param ManagerRegistry $registry
     */
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, User::class);
    }
}
