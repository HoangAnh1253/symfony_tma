<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\DataFixtures\RoleFixtures;

class UserFixrues extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);

        $user0 = new User();
        $user0->setEmail('admin@admin');
        $user0->setPassword('$2y$13$bnokJAyQdNFLQqW7rFpfQOdbXA9QZTLORGvOAgbBaVHu30oH5Cdyu');
        $user0->setName('admin');
        $user0->setGender(false);
        $user0->setBirthdate(new \DateTime('2000-05-26'));
        $user0->setPhoneNumber('0377746546');
        $user0->addRole($this->getReference('role1'));
        $user0->addRole($this->getReference('role2'));
        $manager->persist($user0);

        $user1 = new User();
        $user1->setEmail('user1@example');
        $user1->setPassword('$2y$13$bnokJAyQdNFLQqW7rFpfQOdbXA9QZTLORGvOAgbBaVHu30oH5Cdyu');
        $user1->setName('Hoang Anh');
        $user1->setGender(true);
        $user1->setBirthdate(new \DateTime('2000-05-26'));
        $user1->setPhoneNumber('0377746546');
        $user1->addRole($this->getReference('role1'));
        $manager->persist($user1);

        $user2 = new User();
        $user2->setEmail('user2@example');
        $user2->setPassword('$2y$13$bnokJAyQdNFLQqW7rFpfQOdbXA9QZTLORGvOAgbBaVHu30oH5Cdyu');
        $user2->setName('Hoang Em');
        $user2->setGender(true);
        $user2->setBirthdate(new \DateTime('2001-04-27'));
        $user2->setPhoneNumber('03777544646');
        $user2->addRole($this->getReference('role2'));
        $manager->persist($user2);
        
        $manager->flush();
    }

    public function getDependencies()
    {
        return [
            RoleFixtures::class,
        ];
    }
}