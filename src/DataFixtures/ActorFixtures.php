<?php

namespace App\DataFixtures;

use App\Entity\Actor;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ActorFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);

        $actor1 = new Actor();
        $actor1->setName("Johny Depp");
        $actor1->setGender(true);
        $actor1->setAge(29);

        $manager->persist($actor1);
        $this->addReference('actor_1', $actor1);

        $actor2 = new Actor();
        $actor2->setName("Tom Holland");
        $actor2->setGender(true);
        $actor2->setAge(22);
        $manager->persist($actor2);
        $this->addReference('actor_2', $actor2);

        $actor3 = new Actor();
        $actor3->setName("Robert Downey");
        $actor3->setGender(true);
        $actor3->setAge(35);
        $manager->persist($actor3);
        $this->addReference('actor_3', $actor3);

        $manager->flush();

    }
}