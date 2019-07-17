<?php

namespace App\DataFixtures;

use App\Entity\Categorie;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class Category extends Fixture
{
    public function load(ObjectManager $manager)
    {
         $categorie = new Categorie();
        // $manager->persist($product);

        $manager->flush();
    }
}
