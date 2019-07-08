<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class UserFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);
        $user = new User();


        $user->setFirstname('Ryan');
        $user->setLastname('Reynolds');
        $user->setEmail('ryan.reynolds@email.com');
        $user->setPassword('hash');

        $manager->persist($user);
        $manager->flush();
    }
}
