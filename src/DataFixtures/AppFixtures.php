<?php

namespace App\DataFixtures;

use App\Entity\Projet;
use App\Entity\Centre;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

//fixture est une classe php qui sert à creer des objets et les conserver dans la db
class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
//ici on cree deux objets projet et centre

        $projet = new Projet();
        $projet->setNom('ProjetSymfony');
        $projet->setTechnologieUtilisee('Symfony4');
        $projet->setDescription('une site de presentation de moi meme');
        $projet->setLien('https://github.com/MD-dotcom/MaPresentation.git');
        $manager->persist($projet); //dire a doctrine q'on souhaite enregistrer cet objet (projet)

        $projet = new Projet();
        $projet->setNom('ProjetAngular');
        $projet->setTechnologieUtilisee('Architecture MEAN');
        $projet->setDescription('une application e-commerce avec MEAN architecture');
        $projet->setLien('https://github.com/MD-dotcom/ProjetAngular.git');
        $manager->persist($projet);

        $projet = new Projet();
        $projet->setNom('ProjetSpring');
        $projet->setTechnologieUtilisee('Spring boot');
        $projet->setDescription('une site de description des monuments');
        $projet->setLien('https://github.com/MD-dotcom/TestjaveEE.git');
        $manager->persist($projet);

        $centre = new Centre();
        $centre->setVoyage('Rome, Bacelone, Tunisie');
        $centre->setBenevolat('Parainnage international des étudiants à la COMUE');
        $centre->setSport('Fitness');
        $centre->setCuisine('spécialité orientale');
        $centre->setDanse('Salsa, Kabyle');
        $manager->persist($centre);

        $manager->flush(); //ici doctrine execute reelement la requette insert into dans la db qu'on a specifier dans le
        //fichier .env
        //avec la commande php bin/console doctrine:fixtures:load

       }
}