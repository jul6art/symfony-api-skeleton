<?php

namespace App\DataFixtures;

use App\Factory\UserFactory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Jul6Art\CoreBundle\Service\Traits\FakerAwareTrait;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Core\User\UserInterface;

class UserFixtures extends Fixture
{
    use FakerAwareTrait;

    /**
     * @var int
     */
    private $batchSize = 20;

    /**
     * @var int
     */
    private $limit = 200;

    /**
     * @var UserPasswordEncoderInterface
     */
    private $passwordEncoder;

    /**
     * @required
     * @param UserPasswordEncoderInterface $passwordEncoder
     */
    public function setPasswordEncoder(UserPasswordEncoderInterface $passwordEncoder): void
    {
        $this->passwordEncoder = $passwordEncoder;
    }

    /**
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $user = $this->createUser('user@devinthehood.com');

        $manager->persist($user);

        $user = $this->createUser('admin@devinthehood.com', null, ['ROLE_ADMIN']);

        $manager->persist($user);

        $user = $this->createUser('super_admin@devinthehood.com', null, ['ROLE_ADMIN', 'ROLE_SUPER_ADMIN']);

        $manager->persist($user);

        for ($i = 0; $i < $this->limit; ++$i) {
            $user = $this->createUser();

            $manager->persist($user);

            if (($i % $this->batchSize) === 0) {
                $manager->flush();
            }
        }

        $manager->flush();
    }

    /**
     * @param string|null $email
     * @param string|null $password
     * @param iterable $roles
     * @return UserInterface
     */
    public function createUser(string $email = null, string $password = null, iterable $roles = []): UserInterface
    {
        $user = UserFactory::create();

        $user->setEmail($email ?? $this->faker->safeEmail);
        $user->setPassword($this->passwordEncoder->encodePassword($user, $password ?? 'kitten'));
        $user->setRoles(array_merge($roles, ['ROLE_USER']));

        return $user;
    }
}
