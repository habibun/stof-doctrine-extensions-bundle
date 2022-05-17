<?php

namespace App\DataFixtures;

use App\Entity\Product;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        for ($i = 1; $i <= 10; ++$i) {
            $product = (new Product())
                 ->setName(sprintf('Product-%d', $i))
                 ->setPrice(rand(1, 1000))
            ;
            $manager->persist($product);
        }

        $manager->flush();
    }
}
