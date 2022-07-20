<?php

namespace App\DataFixtures;

use App\Entity\Movie;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\DataFixtures\ActorFixtures;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;


class MovieFixtures extends Fixture implements DependentFixtureInterface
{

    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);
        $movie1 = new Movie();
        $movie1->setTitle("Pirate of the caribean");
        $movie1->setDescription("Best movie ever");
        $movie1->setReleaseYear(2012);
        $movie1->setImagePath('https://m.media-amazon.com/images/M/MV5BNGYyZGM5MGMtYTY2Ni00M2Y1LWIzNjQtYWUzM2VlNGVhMDNhXkEyXkFqcGdeQXVyMTMxODk2OTU@._V1_FMjpg_UX1000_.jpg');
        $movie1->addActor($this->getReference('actor_1'));
        $movie1->addActor($this->getReference('actor_2'));
        $manager->persist($movie1);

        $movie2 = new Movie();
        $movie2->setTitle("Spider man");
        $movie2->setDescription("Best marvel movie");
        $movie2->setReleaseYear(2016);
        $movie2->setImagePath('https://gamek.mediacdn.vn/133514250583805952/2021/11/17/photo-1-1637118381839432740223.jpg');
        $movie2->addActor($this->getReference('actor_2'));
        $movie2->addActor($this->getReference('actor_3'));
        $manager->persist($movie2);

        $movie3 = new Movie();
        $movie3->setTitle("Up!");
        $movie3->setDescription("Best pixal movie");
        $movie3->setReleaseYear(2014);
        $movie3->setImagePath('https://upload.wikimedia.org/wikipedia/vi/f/f2/VutBay-poster.jpg');
        $movie3->addActor($this->getReference('actor_3'));
        $movie3->addActor($this->getReference('actor_1'));
        $manager->persist($movie3);

        $manager->flush();
    }

    public function getDependencies()
    {
        return [
            ActorFixtures::class,
        ];
    }
}