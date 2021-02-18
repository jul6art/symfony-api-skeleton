<?php

namespace App\Manager;

use App\Repository\Traits\UserRepositoryAwareTrait;
use Jul6Art\CoreBundle\Manager\AbstractManager;

/**
 * Class AbstractManager
 */
class UserManager extends AbstractManager
{
    use UserRepositoryAwareTrait;
}
