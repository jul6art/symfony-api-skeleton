<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Jul6Art\AuthBundle\Entity\User as BaseUser;

/**
 *
 * Class User
 *
 * @ORM\Entity()
 * @ORM\InheritanceType(value="SINGLE_TABLE")
 *
 * @ApiResource(
 *     mercure=true,
 *     attributes={"pagination_client_items_per_page"=true},
 *     itemOperations={
 *         "get"={"security"="is_granted('ROLE_ADMIN')"},
 *         "put"={"security"="is_granted('ROLE_ADMIN')"},
 *         "patch"={"security"="is_granted('ROLE_ADMIN')"},
 *         "delete"={"security"="is_granted('ROLE_ADMIN')"},
 *     })
 */
class User extends BaseUser
{
}
