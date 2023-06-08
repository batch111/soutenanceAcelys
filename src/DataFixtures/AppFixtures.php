<?php

// src/DataFixtures/AppFixtures.php
namespace App\DataFixtures;

use Faker\Generator;
use Faker\Factory;
use App\Entity\Article;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    private Generator $faker;

    public function __construct()
    {
        $this->faker = Factory::create('fr FR');
    }
    public function load(ObjectManager $manager)
    {
        for ($i = 0; $i < 20; $i++) {
            $article = new Article();
            $article->setTitle($this->faker->word());
            $article->setContent($this->faker->word());
            $manager->persist($article);
        }
        $manager->flush();
    }
}
