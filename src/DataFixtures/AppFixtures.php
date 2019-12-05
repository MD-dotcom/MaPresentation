<?php

namespace App\DataFixtures;

use App\Entity\Projet;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Validator\Constraints\DateTime;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $projet = new Projet();
        $projet->setNom('ProjetSymfony');
        $projet->setTechnologieUtilisee('Symfony4');
        $projet->setDescription('une site de presentation de moi meme');
        $manager->persist($projet);

        $projet = new Projet();
        $projet->setNom('ProjetAngular');
        $projet->setTechnologieUtilisee('Architecture MEAN');
        $projet->setDescription('une application e-commerce avec MEAN architecture');
        $manager->persist($projet);

        $projet = new Projet();
        $projet->setNom('ProjetSpring');
        $projet->setTechnologieUtilisee('Spring boot');
        $projet->setDescription('une site de description des monuments');
        $manager->persist($projet);

        $manager->flush();

       }
}