<?php
namespace App\DataFixtures;

use App\Repository\UserRepository;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Categorie;
use App\Entity\Plateforme;
use Faker;

class FackerFixtures extends Fixture
{
    private $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function load(ObjectManager $manager)
    {
        // On configure dans quelles langues nous voulons nos données
        $faker = Faker\Factory::create('fr_FR');

        // on créé 10 personnes
        for ($i = 0; $i < 8; $i++) {
            $categorie = new Categorie();
            $categorie->setNom($faker->sentence);
            $categorie->setDescription($faker->paragraph);
            $categorie->setVisible(true);
            $categorie->setIcone($faker->mimeType);
            $manager->persist($categorie);

            $plateform = new Plateforme();
            $plateform->setCategorie($categorie);
            $plateform->setVisible(true);
            $plateform->setNom($faker->sentence);
            $plateform->setDescription($faker->paragraph);
            $plateform->setUrl($faker->url);
            $plateform->setUrlLogo($faker->imageUrl());
            $plateform->setUser($this->userRepository->find(1));
            $manager->persist($plateform);

        }

        $manager->flush();
    }
}