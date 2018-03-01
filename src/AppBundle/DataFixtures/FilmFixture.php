<?php
/**
 * Created by PhpStorm.
 * User: florian
 * Date: 23/02/18
 * Time: 14:06
 */

namespace AppBundle\DataFixtures;

use AppBundle\Entity\Film;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class FilmFixture extends Fixture implements DependentFixtureInterface
{
    /**
     * @param ObjectManager $manager
     * @throws
     */
    public function load(ObjectManager $manager)
    {
        $films = [
            [
                'title' => 'Wild Legend', 'date' => '2006-07-11', 'description' => 'John cache pourtant un terrible 
                secret, puisque qu\'il a été témoin d\'un meurtre et que sa fiancée a été assassiné par un vilain très 
                méchant.', 'category' => 'category-1', 'affiche' => '8370ecf72ae726258ec40634d778e091.jpeg',
                'studio' => 'studio_3', 'cast' => ['cast_2', 'cast_1', 'cast_7'],
                'user' => ['user_2', 'user_3', 'user_1'],'time' => '01h24', 'Age' => '10'
            ], [
                'title' => 'The Seventh Visions', 'date' => '2010-06-30', 'description' => 'man in his late twenties, 
                who is very forceful.A woman in her late thirties, who can be quite reckless.', 'category' => 'category-3',
                'affiche' => '8370ecf72ae726258ec40634d778e091.jpeg', 'studio' => 'studio_2', 'cast' => ['cast_2', 'cast_3', 'cast_4']
                ,'user' => ['user_2', 'user_3', 'user_1'],'time' => '01h44', 'Age' => 'Tout public'
            ], [
                'title' => 'Lords of Person', 'date' => '2016-04-25', 'description' => 'ils vecurent heureux', 'category' => 'category-4',
                'affiche' => '8370ecf72ae726258ec40634d778e091.jpeg', 'studio' => 'studio_1', 'cast' => ['cast_2', 'cast_6', 'cast_1']
                ,'user' => ['user_2', 'user_3', 'user_1'],'time' => '02h00', 'Age' => '12'
            ], [
                'title' => 'The Prince\'s Name', 'date' => '2018-07-02', 'description' => 'The story begins in a cemetery.
                Someone mistakenly believes s/he has killed someone', 'category' => 'category-5',
                'affiche' => '8370ecf72ae726258ec40634d778e091.jpeg', 'studio' => 'studio_7',
                'cast' => ['cast_2', 'cast_5', 'cast_6'],'user' => ['user_2', 'user_3', 'user_1'],'time' => '01h24', 'Age' => '10'
            ], [
                'title' => 'The Way of the Fire', 'date' => '2005-10-18', 'description' => 'The story begins in an 
                aeroplane.A handbag is snatched.', 'category' => 'category-5',
                'affiche' => '8370ecf72ae726258ec40634d778e091.jpeg', 'studio' => 'studio_6', 'cast' => ['cast_2', 'cast_3', 'cast_7']
                ,'user' => ['user_2', 'user_3', 'user_1'],'time' => '02h06', 'Age' => 'Tout public'
            ], [
                'title' => 'Way in the Flower', 'date' => '1998-02-25', 'description' => 'Your character needs a 
                good plan in order to survive', 'category' => 'category-4',
                'affiche' => '8370ecf72ae726258ec40634d778e091.jpeg', 'studio' => 'studio_5', 'cast' => ['cast_2', 'cast_1', 'cast_3'],'film' => ['film_2', 'film_3', 'film_1']
                ,'user' => ['user_2', 'user_3', 'user_1'],'time' => '02h14', 'Age' => '18'
            ], [
                'title' => 'Weeping Lover', 'date' => '1995-03-16', 'description' => 'A failed conman has 24 hours 
                to track down a terrorist intent on mass destructio.', 'category' => 'category-3',
                'affiche' => '8370ecf72ae726258ec40634d778e091.jpeg', 'studio' => 'studio_4', 'cast' => ['cast_2', 'cast_4', 'cast_5'],
                'user' => ['user_2', 'user_3', 'user_1'],'time' => '01h24', 'Age' => '16'
            ], [
                'title' => 'The Frozen Window', 'date' => '2018-01-05', 'description' => 'Paula est une adolescente 
                dont les parents sont arrivés en retard à leur mariage. Grâce à un pilote d\'avion manchot, elle va 
                découvrir son don : l\'art d \'écrire avec les pieds', 'category' => 'category-2',
                'affiche' => '8370ecf72ae726258ec40634d778e091.jpeg', 'studio' => 'studio_3', 'cast' => ['cast_2', 'cast_7', 'cast_5'],
                'user' => ['user_2', 'user_3', 'user_1'],'time' => '01h30', 'Age' => '12'
            ], [
                'title' => 'Word of Eyes', 'date' => '1985-04-12', 'description' => 'After a distracted son borrows a 
                giant egg they are pursued by a troupe of burlesque dancers. Events are encumbered by a meeting.',
                'category' => 'category-1', 'affiche' => '8370ecf72ae726258ec40634d778e091.jpeg',
                'studio' => 'studio_2', 'cast' => ['cast_2', 'cast_3', 'cast_4'],'user' => ['user_2', 'user_3', 'user_1'],'time' => '01h30', 'Age' => '12'
            ], [
                'time' => '02h30', 'Age' => '10','title' => 'The Tales of the Tale', 'date' => '1971-09-08', 'description' => 'After a doddery junkie 
                creates the worst restaurant ever they are pursued by a party of dinosaur hunters. The plot is worsened
                 by an investigation.', 'category' => 'category-2', 'affiche' => '8370ecf72ae726258ec40634d778e091.jpeg',
                'studio' => 'studio_1', 'cast' => ['cast_2', 'cast_6', 'cast_1'],'user' => ['user_2', 'user_3', 'user_1']
            ]
        ];
        $i = 1;
        foreach ($films as $value) {
            $film = new Film();
            $film
                ->setTitle($value{'title'})
                ->setYear(new \DateTime($value{'date'}))
                ->setDescription($value{'description'})
                ->setTime($value{'time'})
                ->setAge($value{'Age'})
                ->setCategory($this->getReference($value{'category'}))
                ->setAffiche($value{'affiche'})
                ->setStudio($this->getReference($value{'studio'}));
                foreach ($value{'cast'} as $val) {
                  $film->addCast($this->getReference($val));
                }
                foreach ($value{'user'} as $val) {
                  $film->addUser($this->getReference($val));
                }
            $manager->persist($film);

            $this->addReference('film_' . $i, $film);
            $i++;
        }
        $manager->flush();
    }

    /**
     * This method must return an array of fixtures classes
     * on which the implementing class depends on
     * @return array
     */
    function getDependencies()
    {
        return array(
            CategoryFixture::class,
            StudioFixture::class,
            CastFixture::class,
            UserFixture::class,
        );
    }
}