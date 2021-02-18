<?php

namespace App\Factory;

use App\Entity\User;
use Jul6Art\CoreBundle\Factory\Interfaces\FactoryInterface;

/**
 * Class UserFactory
 */
final class UserFactory implements FactoryInterface
{
    /**
     * @inheritDoc
     */
    public static function create(...$args): object
    {
        if (\count($args)) {
            throw new \InvalidArgumentException('You don\'t need arguments to create a User');
        }

        return new User();
    }
}
