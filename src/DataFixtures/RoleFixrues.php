<?php

namespace App\DataFixtures;

use App\Entity\Role;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class RoleFixrues extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);

        $role1 = new Role();
        $role1->setName('ROLE_ADMIN');
        $this->addReference('role1', $role1);
        $manager->persist($role1);

        $role2 = new Role();
        $role2->setName('ROLE_EMPLOYEE');
        $this->addReference('role2', $role2);
        $manager->persist($role2);

        $manager->flush();
    }
}