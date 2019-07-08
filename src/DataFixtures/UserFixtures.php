<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\User;

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
        $user->setPassword('$2y$12$1EaSJqzKEP.YjpT7dhJAB.ZxA/LeK9FxajwLmT8zUW17hkCPoQSDS');

        $manager->persist($user);
        $manager->flush();
    }
}
