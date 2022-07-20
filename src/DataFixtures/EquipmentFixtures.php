<?php

namespace App\DataFixtures;

use App\Entity\Equipment;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class EquipmentFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);

        $equipment1 = new Equipment();
        $equipment1->setName('Lap top Dell');
        $equipment1->setDescription('best Dell laptop');
        $equipment1->setCategory($this->getReference('cate2'));
        $manager->persist($equipment1);

        $equipment2 = new Equipment();
        $equipment2->setName('Lap top Asus');
        $equipment2->setDescription('best Asus laptop');
        $equipment2->setCategory($this->getReference('cate2'));
        $manager->persist($equipment2);

        $equipment3 = new Equipment();
        $equipment3->setName('PC Asus');
        $equipment3->setDescription('best Asus pc');
        $equipment3->setCategory($this->getReference('cate1'));
        $manager->persist($equipment3);

        $equipment4 = new Equipment();
        $equipment4->setName('PC Dell');
        $equipment4->setDescription('best Dell pc');
        $equipment4->setCategory($this->getReference('cate1'));
        $manager->persist($equipment4);

        $manager->flush();
    }

    public function getDependencies()
    {
        return [
            CategoryFixtures::class,
        ];
    }
}